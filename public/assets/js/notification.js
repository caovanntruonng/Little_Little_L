// Lấy tham chiếu đến các nút
const successButton = document.getElementById("successButton");
const failButton = document.getElementById("failButton");

// Hàm hiển thị thông báo
function notifySuccess() {
    successButton.click();
    console.log("Thành công!");
}

function notifyFail() {
    failButton.click();
    console.log("Thất bại!");
}
