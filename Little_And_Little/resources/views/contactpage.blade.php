@extends('templates.default')
@section('contactpage')
<main>
    <div class="background">
        <div class="contactpage pt-5">
            <img src="/assets/images/contactpage/Alex_AR_Lay_Do shadow 1.png" alt="" class="img">
            <div class="title text-center mt-3">
                <h1>Liên hệ</h1>
            </div>
            <div class="contact-form-container d-flex justify-content-center">
                <div class="row w-100">
                    <div class="col-8 d-flex justify-content-center align-items-center">
                        <div class="contact-form">
                            <span>
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam numquam
                                accusantium reiciendis sunt, officiis suscipit modi rem architecto, officia maiores
                                doloremque cum!
                            </span>
                            <form action="{{ route('contact.send') }}" method="POST" class="text-center">
                                @csrf
                                <div class="form-row">
                                    <input type="text" name="name" placeholder="Tên" class="input-small">
                                    <input type="text" name="email" placeholder="Email" class="input-large">
                                </div>
                                <div class="form-row">
                                    <input type="number" name="phonenumber" placeholder="Số điện thoại"
                                        class="input-small ticket no-spinners">
                                    <input type="text" name="address" placeholder="Địa chỉ" class="input-large">
                                </div>
                                <textarea name="message" cols="30" rows="5" placeholder="Lời nhắn"
                                    class="locked-textarea"></textarea>
                                <button class="button-submit" type="submit">Gửi liên hệ</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="contact-info-container">
                            <div class="contact-info">
                                <img src="/assets/images/icon/adress 1.png" alt="adress">
                                <div>
                                    <h1>Địa chỉ:</h1>
                                    <span>86/33 Âu Cơ, Phường 9, Quận Tân Bình, TP. Hồ Chí Minh</span>
                                </div>
                            </div>
                            <div class="contact-info">
                                <img src="/assets/images/icon/mail-inbox-app 1.png" alt="mail">
                                <div>
                                    <h1>Email:</h1>
                                    <span>investigate@your-site.com</span>
                                </div>
                            </div>
                            <div class="contact-info">
                                <img src="/assets/images/icon/telephone 2.png" alt="telephone">
                                <div>
                                    <h1>Điện thoại</h1>
                                    <span>+84 145 689 798</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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

<!-- Hiển thị thông báo khi gửi thất bại -->
@if ($errors->any())
@include('notification.contactsendingfailed')
<script>
    document.addEventListener("DOMContentLoaded", function () {
        notifyFail();
    });
</script>
@endif

@endsection