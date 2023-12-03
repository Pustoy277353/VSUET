function validateForm() {
    var numberInput = document.getElementById('number').value;

    if (numberInput === '' || isNaN(numberInput) || parseInt(numberInput) <= 0) {
        alert('Пожалуйста введите колличество');
        return false;
    }

    return true;
}