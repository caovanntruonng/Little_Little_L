const customVietnameseLocale = {
    weekdays: {
        shorthand: ["CN", "T2", "T3", "T4", "T5", "T6", "T7"],
        longhand: [
            "Chủ Nhật",
            "Thứ Hai",
            "Thứ Ba",
            "Thứ Tư",
            "Thứ Năm",
            "Thứ Sáu",
            "Thứ Bảy",
        ],
    },
    months: {
        shorthand: [
            "Th1",
            "Th2",
            "Th3",
            "Th4",
            "Th5",
            "Th6",
            "Th7",
            "Th8",
            "Th9",
            "Th10",
            "Th11",
            "Th12",
        ],
        longhand: [
            "Tháng 1",
            "Tháng 2",
            "Tháng 3",
            "Tháng 4",
            "Tháng 5",
            "Tháng 6",
            "Tháng 7",
            "Tháng 8",
            "Tháng 9",
            "Tháng 10",
            "Tháng 11",
            "Tháng 12",
        ],
    },
    firstDayOfWeek: 1,
};

flatpickr("#date", {
    dateFormat: "d/m/Y",
    locale: customVietnameseLocale,
    minDate: "today",
});

flatpickr("#dateButton", {
    dateFormat: "d/m/Y",
    locale: customVietnameseLocale,
    minDate: "today",
});

// Lấy tham chiếu đến các input
const date = document.getElementById("date");
const dateButton = document.getElementById("dateButton");

if (date && dateButton) {
    // Đăng ký sự kiện "change" cho input thứ nhất
    dateButton.addEventListener("change", function () {
        // Lấy giá trị ngày tháng từ input thứ nhất
        const selectedDate = dateButton.value;

        // Cập nhật giá trị ngày tháng cho input thứ hai
        date.value = selectedDate;
    });

    // Đăng ký sự kiện "click" cho button
    dateButton.addEventListener("click", function (event) {
        // Ngăn chặn sự gửi dữ liệu
        event.preventDefault();
    });
}
