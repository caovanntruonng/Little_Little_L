function formatCardNumber(input) {
    // Xóa tất cả các ký tự không phải số trong số thẻ
    let cardNumber = input.value.replace(/\D/g, "");

    // Thêm dấu cách vào mỗi khoảng cách 4 số
    cardNumber = cardNumber.replace(/(\d{4})(?=\d)/g, "$1 ");

    // Gán giá trị đã định dạng vào trường input
    input.value = cardNumber;
}
