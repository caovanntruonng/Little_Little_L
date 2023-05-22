@extends('templates.default')
@section('homepage')
<main>
    <div class="background">
        <div class="homepage">
            <div class="imgs">
                <img src="assets/images/homepage/18451 [Converted]-02 1.png" alt="" class="img-1">
                <img src="assets/images/homepage/18451 [Converted]-03 1.png" alt="" class="img-2">
                <img src="assets/images/homepage/18451 [Converted]-03 2.png" alt="" class="img-3">
                <img src="assets/images/homepage/18451 [Converted]-04 1.png" alt="" class="img-4">
                <img src="assets/images/homepage/18451 [Converted]-05 1.png" alt="" class="img-5">
                <img src="assets/images/homepage/18451 [Converted]-06 1.png" alt="" class="img-6">
                <img src="assets/images/homepage/Lisa_Arnold_Lay_Do_F2 3.png" alt="" class="img-7">
                <img src="assets/images/homepage/render fix hair 1.png" alt="" class="img-8">
            </div>
            <div class="content d-flex align-items-center">
                <img src="assets/images/homepage/image 2.png" alt="">
                <span>ĐẦM SEN <br> PARK</span>
            </div>
            <div class="book">
                <div class="title d-flex align-items-center justify-content-center">
                    <span>VÉ CỦA BẠN</span>
                </div>
                <div class="news">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod voluptatem excepturi, sunt
                        aliquid dolorem</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod voluptatem excepturi, sunt
                        aliquid dolorem</p>
                    <div class="starts ms-4">
                        <p><img src="assets/images/homepage/Start.png" alt=""> Lorem ipsum dolor sit amet
                            consectetur adipisicing elit.</p>
                        <p><img src="assets/images/homepage/Start.png" alt=""> Lorem ipsum dolor sit amet
                            consectetur adipisicing elit.</p>
                        <p><img src="assets/images/homepage/Start.png" alt=""> Lorem ipsum dolor sit amet
                            consectetur adipisicing elit.</p>
                        <p><img src="assets/images/homepage/Start.png" alt=""> Lorem ipsum dolor sit amet
                            consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="form px-3">
                    <form action="" class="text-center">
                        <div class="package d-flex">
                            <select name="package" id="">
                                <option value="family">Gói gia đình</option>
                                <option value="individual">Gói cá nhân</option>
                            </select>
                            <button type="button" class="button-3d">
                                <img src="assets/images/icon/Arrow - Down 2.png" alt="">
                            </button>
                        </div>
                        <div class="tickets d-flex justify-content-between">
                            <input type="number" name="ticket" id="" placeholder="Số lượng vé"
                                class="ticket no-spinners">
                            <input type="text" name="date" id="" placeholder="Ngày sử dụng" class="date">
                            <button type="button" class="button-3d">
                                <img src="assets/images/icon/Vector.png" alt="">
                            </button>
                        </div>
                        <div class="name">
                            <input type="text" name="name" id="" placeholder="Họ và tên">
                        </div>
                        <div class="phonenumber">
                            <input type="number" name="phonenumber" id="" placeholder="Số điện thoại"
                                class="no-spinners">
                        </div>
                        <div class="email">
                            <input type="email" name="email" id="" placeholder="Địa chỉ email">
                        </div>
                        <button class="button-submit" type="submit">Đặt vé</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection