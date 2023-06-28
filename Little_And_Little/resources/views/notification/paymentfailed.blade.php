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
                @if ($errors->has('cardnumber'))
                <div class="text-danger">Vui lòng cung cấp số thẻ.</div>
                @endif

                {{-- lỗi số điện thoại --}}
                @if ($errors->has('Nameofcardholder'))
                <div class="text-danger">Vui lòng cung cấp họ tên chủ thẻ.</div>
                @endif

                {{-- lỗi địa chỉ --}}
                @if ($errors->has('expirationdate'))
                <div class="text-danger">Vui lòng cung cấp ngày hết hạn.</div>
                @endif

                {{-- lỗi lời nhắn --}}
                @if ($errors->has('cvv'))
                <div class="text-danger">Vui lòng cung cấp cvv.</div>
                @endif

            </div>

        </div>
    </div>
</div>