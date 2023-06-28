<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function sendContact(Request $request)
    {
        $messages = [];

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'phonenumber' => 'required',
            'address' => 'required',
            'message' => 'required',
        ], $messages);

        $validator->validate();

        if ($validator->fails()) {
            return redirect('/contactpage')
                ->withErrors($validator)
                ->withInput();
        } else {
            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'phonenumber' => $request->phonenumber,
                'address' => $request->address,
                'message' => $request->message,
            ];

            Mail::to('vantruong18082003@gmail.com')->send(new ContactFormMail($data));

            return view('contactpage', ['sendSuccess' => 'Gửi liên hệ thành công.
            Vui lòng kiên nhẫn đợi phản hồi từ
            chúng tôi, bạn nhé!']);
        }
    }
}
