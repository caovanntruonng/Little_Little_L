@extends('templates.default')
@section('paymentpage')
<main>
    <div class="background">
        <div class="paymentpage pt-5">
            <img src="/assets/images/paymentpage/Trini_Arnold_Votay1 2.png" alt="" class="img">
            <div class="title text-center mt-3">
                <h1>Thanh toán</h1>
            </div>
            <div class="paymentpage-form-container">
                <form action="{{ route('payment.success') }}" method="POST">
                    @csrf
                    <div class="booking-information">
                        <div class="title d-flex align-items-center justify-content-center">
                            <h1>VÉ CỔNG - VÉ GIA ĐÌNH</h1>
                        </div>
                        <div class="book-form">
                            <div class="d-flex justify-content-between">
                                <div class="payment-amount">
                                    <span>Số tiền thanh toán</span>
                                    <input type="text" name="" id=""
                                        value="{{ number_format(session('data.total'), 0, ',', '.') . ' vnđ' }}"
                                        readonly>
                                </div>
                                <div class="number-of-tickets">
                                    <span>Số lượng vé</span>
                                    <div class="d-flex">
                                        <input type="text" name="" id="" value="{{ session('data.ticketnumber') }}"
                                            readonly>&ensp;<span>vé</span>
                                    </div>
                                </div>
                                <div class="date">
                                    <span>Ngày sử dụng</span>
                                    <input type="text" name="" id="" value="{{ session('data.date') }}" readonly>
                                </div>
                            </div>
                            <div class="contact-info">
                                <span>Thông tin liên hệ</span>
                                <input type="text" name="" id="" value="{{ session('data.name') }}" readonly>
                            </div>
                            <div class="phone">
                                <span>Điện thoại</span>
                                <input type="text" name="" id="" value="{{ session('data.phonenumber') }}" readonly>
                            </div>
                            <div class="email">
                                <span>Email</span>
                                <input type="text" name="" id="" value="{{ session('data.email') }}" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="billing-information">
                        <div class="title d-flex align-items-center justify-content-center">
                            <h1>THÔNG TIN THANH TOÁN</h1>
                        </div>
                        <div class="bill-form">
                            <div>
                                <span>Số thẻ</span>
                                <input type="text" name="cardnumber" id="" maxlength="19"
                                    placeholder="**** **** **** ****" oninput="formatCardNumber(this)">

                            </div>
                            <div>
                                <span>Họ tên chủ thẻ</span>
                                <input type="text" name="Nameofcardholder" id="" placeholder="NGUYEN VAN A"
                                    oninput="convertToUppercase(this)">
                            </div>
                            <div class="expiration-date">
                                <span>Ngày hết hạn</span>
                                <div class="d-flex justify-content-between">
                                    <input type="text" name="expirationdate" id="expiration-date" placeholder="MM/YY"
                                        maxlength="5">
                                    <button type="button" class="button-3d" id="">
                                        <img src="/assets/images/icon/Vector.png" alt="">
                                    </button>
                                </div>
                            </div>
                            <div class="cvv-cvc">
                                <span>CVV/CVC</span>
                                <input type="text" name="cvv" id="" maxlength="4" placeholder="XXXX"
                                    oninput="formatCVV(this)">
                            </div>
                            <div class="text-center mt-3">
                                <div class="d-none">
                                    <input type="text" name="paymentamount" value="{{ session('data.total') }}">
                                    <input type="text" name="numberoftickets"
                                        value="{{ session('data.ticketnumber') }}">
                                    <input type="text" name="usebydate" value="{{ session('data.date') }}">
                                    <input type="text" name="name" value="{{ session('data.name') }}">
                                    <input type="text" name="phonenumber" value="{{ session('data.phonenumber') }}">
                                    <input type="text" name="email" value="{{ session('data.email') }}">
                                </div>
                                <button class="button-submit" type="submit">Thanh toán</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

<!-- Hiển thị thông báo khi gửi thất bại -->
@if ($errors->any())
@include('notification.paymentfailed')
<script>
    document.addEventListener("DOMContentLoaded", function () {
        notifyFail();
    });
</script>
@endif

@endsection