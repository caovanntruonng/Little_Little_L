function formatCVV(input) {
    let cvv = input.value.replace(/\D/g, "");
    input.value = cvv;
}
