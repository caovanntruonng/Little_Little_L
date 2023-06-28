@extends('templates.default')
@section('successfulpaymentpage')
<main>
    <div class="background">
        <div class="successfulpaymentpage pt-5">
            <img src="/assets/images/successfulpaymentpage/Alvin_Arnold_Votay1 1.png" alt="" class="img">
            <div class="title text-center mt-3">
                <h1>Thanh toán thành công</h1>
            </div>
            <div class="successfulpaymentpage-form-container">
                <div class="carousel-wrapper d-flex align-items-center">
                    <button type="button" class="prev-btn button-3d ms-4">
                        <img src="/assets/images/icon/Arrow - Down 2.png" alt="">
                    </button>
                    <div class="carousel">
                        @foreach (session('ticketCodes') as $ticketCode)
                        <div class="item">
                            <div class="ticket">
                                <img src="https://api.qrserver.com/v1/create-qr-code/?data={{ $ticketCode }}" alt=""
                                    class="qr">
                                <div class="ticket-code">{{ $ticketCode }}</div>
                                <h1>VÉ CỔNG</h1>
                                <p>---</p>
                                <h4>Ngày sử dụng: {{ session('order.usage_date') }}</h4>
                                <img src="/assets/images/successfulpaymentpage/tick 1.png" alt="" class="tick">
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <button type="button" class="next-btn button-3d me-4">
                        <img src="/assets/images/icon/Arrow - Down 2.png" alt="">
                    </button>
                </div>
                <div class="container d-flex justify-content-between mt-4">
                    <h1 class="ticket-count">Số lượng: {{ session('order.quantity') }} vé</h1>
                    <h1 class="current-page">Trang 1/3</h1>
                </div>
            </div>
            <div class="download-email-buttons">
                <a href="{{ route('generatePDF') }}"><button class="button-submit">Tải vé</button></a>
                <a href="{{ route('email.send') }}"><button class="button-submit">Gửi email</button></a>
            </div>
        </div>
    </div>
</main>

<!-- Hiển thị thông báo khi gửi thành công -->
@if(isset($sendSuccess))
@include('notification.contactsentsuccessfully')
<script>
    document.addEventListener("DOMContentLoaded", function () {
        notifySuccess();
    });
</script>
@endif

@endsection