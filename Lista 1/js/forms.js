const check = document.getElementById("validate");
const submit = document.getElementById("guzik");
const surnameField = document.getElementById("surname");
submit.addEventListener("click", showMessage);

function showMessage() {
    if (surnameField.value) {
        document.writeln("Formularz został przesłany pomyślnie");
        window.addEventListener("mousedown", refresh);
    } else {
        window.alert("Uzupełnij wymagane pola!");
    }
}

function refresh() {
    window.location.reload();
}