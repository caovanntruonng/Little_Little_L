// Lắng nghe sự kiện khi người dùng nhập vào trường ngày tháng hết hạn
const expiration_date = document.getElementById("expiration-date");
if (expiration_date) {
    expiration_date.addEventListener("input", function (e) {
        var input = e.target;
        var value = input.value;

        // Xóa các ký tự không phải số để chỉ giữ lại số và ký tự "/"
        var cleanedValue = value.replace(/\D/g, "");

        // Định dạng ngày tháng thành "MM/YY"
        var formattedValue = formatExpirationDate(cleanedValue);

        // Gán giá trị đã định dạng trở lại vào trường input
        input.value = formattedValue;
    });
}

// Hàm định dạng ngày tháng hết hạn thành "MM/YY"
function formatExpirationDate(value) {
    var formattedValue = value;

    // Định dạng "MM/YY" khi có đủ 3 hoặc 4 ký tự
    if (value.length >= 3) {
        var month = value.substr(0, 2);
        var year = value.substr(2, 2);
        formattedValue = month + "/" + year;
    }

    return formattedValue;
}
