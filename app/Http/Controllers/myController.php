<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderFormMail;
use Dompdf\Dompdf;
use Dompdf\Options;

class myController extends Controller
{
    // Trang chủ
    public function showIndex()
    {
        // Lấy loại vé
        $tickets = DB::table('tickets')->select('type')->distinct()->get();

        return view('homepage', compact('tickets'));
    }


    // Trang sự kiện
    public function showEvent()
    {
        // Lấy thông tin vé
        $events = DB::table('tickets')->get();

        return view('eventpage', compact('events'));
    }

    // Trang chi tiết sự kiện
    public function showEventDetails($id)
    {
        // Lấy thông tin vé theo id
        $event = DB::table('tickets')->where('id', $id)->first();

        return view('eventdetailspage', compact('event'));
    }

    // Trang liên hệ
    public function showContact()
    {
        return view('contactpage');
    }

    // Trang thanh toán    
    public function showPaymentIndex(Request $request)
    {
        return view('paymentpage');
    }

    // Trang thanh toán
    public function showPayment(Request $request)
    {
        $messages = [];

        $validator = Validator::make($request->all(), [
            'type' => 'required',
            'ticketnumber' => 'required',
            'date' => 'required',
            'name' => 'required',
            'phonenumber' => 'required',
            'email' => 'required|email',
        ], $messages);

        if ($validator->fails()) {
            return redirect('/')
                ->withErrors($validator)
                ->withInput();
        } else {
            $type = $request->type;
            $date = $request->date;

            // Chuyển đổi ngày nhập vào thành định dạng Y-m-d để so sánh với ngày trong database
            $inputDate = \DateTime::createFromFormat('d/m/Y', $date)->format('Y-m-d');

            // Lấy giá vé dựa trên type và ngày trong database
            $ticket = DB::table('tickets')
                ->where('type', $type)
                ->whereDate('start_date', '<=', $inputDate)
                ->whereDate('end_date', '>=', $inputDate)
                ->first();

            // Kiểm tra vé có tồn tại hay không
            if ($ticket) {
                $quantity = $request->ticketnumber; // Số lượng người dùng nhập vào
                $price = $ticket->price; // Giá vé từ cơ sở dữ liệu
                $total = $quantity * $price; // Tính tổng giá trị

                // Kiểm tra số lượng vé còn lại trong cơ sở dữ liệu
                $remainingTickets = $ticket->quantity;
                if ($quantity > $remainingTickets) {
                    // Xử lý thông báo lỗi nếu số lượng vé người mua nhiều hơn số vé còn lại
                    $errorMessage = "Số lượng vé không đủ. Chỉ còn lại $remainingTickets vé.";
                    return redirect('/')->withErrors(['error' => $errorMessage]);
                }

                // Tạo mảng để truyền dữ liệu
                $data = [
                    'type' => $request->type,
                    'ticketnumber' => $request->ticketnumber,
                    'date' => $request->date,
                    'name' => $request->name,
                    'phonenumber' => $request->phonenumber,
                    'email' => $request->email,
                    'total' => $total,
                ];

                session()->put('data', $data);

                return view('paymentpage');
            } else {
                // Nếu không tìm thấy vé phù hợp, thông báo lỗi
                return redirect('/')->withErrors(['error' => 'Không tìm thấy vé phù hợp']);
            }
        }
    }

    // Trang thanh toán thành công
    public function showPaymentSuccessIndex()
    {
        return view('successfulpaymentpage');
    }

    // Trang thanh toán thành công
    public function showPaymentSuccess(Request $request)
    {

        $messages = [];

        $validator = Validator::make($request->all(), [
            'cardnumber' => 'required|size:19',
            'Nameofcardholder' => 'required',
            'expirationdate' => 'required',
            'cvv' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return redirect('/paymentpage')
                ->withErrors($validator)
                ->withInput();
        } else {
            // Mảng mã vé
            $ticketCodes = [];

            $ticketCodesDB = DB::table('payments')->pluck('ticket_code')->toArray();

            $ticketCodesArray = [];
            foreach ($ticketCodesDB as $code) {
                $codes = explode(',', $code);
                foreach ($codes as $c) {
                    $ticketCodesArray[] = trim($c);
                }
            }

            for ($i = 0; $i < $request->numberoftickets; $i++) {
                $ticketCode = '';
                $ticketExists = true;

                // Lặp cho đến khi tìm được mã vé không trùng
                while ($ticketExists) {
                    $ticketCode = $this->generateTicketCode();

                    if (!in_array($ticketCode, $ticketCodesArray)) {
                        $ticketExists = false;
                    }
                }

                $ticketCodes[] = $ticketCode;
            }

            $amount = floatval(str_replace([',', ' vnđ'], '', $request->paymentamount));
            $ticketCodesString = implode(",", $ticketCodes);
            $usageDate = \DateTime::createFromFormat('d/m/Y', $request->usebydate)->format('Y-m-d');

            $data = [
                'contact_info' => $request->name,
                'quantity' => $request->numberoftickets,
                'amount' => $amount,
                'ticket_code' => $ticketCodesString,
                'usage_date' => $usageDate,
                'phone' => $request->phonenumber,
                'email' => $request->email,
            ];

            $order = [
                'contact_info' => $request->name,
                'quantity' => $request->numberoftickets,
                'amount' => $request->paymentamount,
                'ticket_code' => $ticketCodesString,
                'usage_date' => $request->usebydate,
                'phone' => $request->phonenumber,
                'email' => $request->email,
            ];

            session()->put('order', $order);
            session()->put('ticketCodes', $ticketCodes);

            $quantity = $request->numberoftickets;
            $type = session()->get('data')['type'];
            $date = session()->get('data')['date'];

            // Chuyển đổi ngày nhập vào thành định dạng Y-m-d để so sánh với ngày trong database
            $inputDate = \DateTime::createFromFormat('d/m/Y', $date)->format('Y-m-d');

            // Giảm số lượng vé trong cơ sở dữ liệu
            DB::table('tickets')
                ->where('type', $type)
                ->whereDate('start_date', '<=', $inputDate)
                ->whereDate('end_date', '>=', $inputDate)
                ->decrement('quantity', $quantity);

            DB::table('payments')->insert($data);
            return view('successfulpaymentpage');
        }
    }

    // Hàm tạo mã vé ngẫu nhiên
    function generateTicketCode()
    {
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $length = 8;
        $ticketCode = '';

        for ($i = 0; $i < $length; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $ticketCode .= $characters[$index];
        }

        return $ticketCode;
    }

    // Gửi đơn đặt vé
    public function sendOrder()
    {
        $order = session()->get('order');
        $email = $order['email'];
        Mail::to($email)->send(new OrderFormMail($order));

        return view('successfulpaymentpage', ['sendSuccess' => 'Gửi đơn đặt vé thành công. 
        Vui lòng kiểm tra email 
        của bạn để nhận thông tin chi tiết.']);
    }

    // hàm tải vé
    public function generatePDF()
    {
        $dompdf = new Dompdf();

        $order = session()->get('order');
        $view = view('pdf.ticket', compact('order'))->render();
        $dompdf->loadHtml($view);

        $dompdf->setPaper('A4', 'portrait');

        $dompdf->render();

        $fileName = 'ticket_' . date('YmdHis') . '.pdf';

        $dompdf->stream($fileName);
    }
}
