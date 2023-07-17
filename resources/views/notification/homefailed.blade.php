<!-- Button to Open the Modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#fail" id="failButton">
    Thất bại
</button>

<!-- The Modal -->
<div class="modal" id="fail">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header text-center">
                <div class="modal-img">
                    <img src="/assets/images/icon/Disappointed emoji Face.png" alt="">
                </div>
            </div>

            <!-- Modal body -->
            <div class="modal-body">

                {{-- lỗi email --}}
                @if ($errors->has('ticketnumber'))
                <div class="text-danger">Vui lòng điền số lượng vé.</div>
                @endif

                {{-- lỗi số điện thoại --}}
                @if ($errors->has('date'))
                <div class="text-danger">Vui lòng chọn ngày sử dụng.</div>
                @endif

                {{-- lỗi địa chỉ --}}
                @if ($errors->has('name'))
                <div class="text-danger">Vui lòng điền vào tên.</div>
                @endif

                {{-- lỗi lời nhắn --}}
                @if ($errors->has('phonenumber'))
                <div class="text-danger">Vui lòng cung cấp số điện thoại liên hệ.</div>
                @endif

                {{-- lỗi lời nhắn --}}
                @if ($errors->has('email'))
                <div class="text-danger">Vui lòng nhập địa chỉ email hợp lệ và chính xác.</div>
                @endif

                @if($errors->has('error'))
                <div class="text-danger">{{ $errors->first('error') }}</div>
                @endif
            </div>

        </div>
    </div>
</div>