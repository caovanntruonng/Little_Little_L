<!-- Button to Open the Modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#success" id="successButton">
    Thành công
</button>

<!-- The Modal -->
<div class="modal" id="success">
    <div class="modal-dialog">
        <div class="modal-content mx-auto">

            <!-- Modal body -->
            <div class="modal-body">
                <button type="button" class="button-close" data-bs-dismiss="modal">
                    &#x2716;
                </button>
                {!! nl2br(e($sendSuccess)) !!}
            </div>

        </div>
    </div>
</div>