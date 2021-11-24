const check = document.getElementById("validate");
const form = document.getElementById("form");
const surnameField = document.getElementById("surname");
const textFields = document.querySelectorAll('input[type="text"]')
form.addEventListener("submit", showMessage);
// window.alert('Na tej stronie jest: ' + document.forms.length + ' formularz')

textFields.forEach(element => {
    element.addEventListener('mouseover', function() {
        element.style.background = "purple"
    })
    element.addEventListener('blur', function() {
        element.style.background = "white"
    })
    element.addEventListener('focus', function() {
        element.style.background = "yellow"
    })
})

function showMessage() {
    if (surnameField.value) {
        document.writeln("Formularz został przesłany pomyślnie");
    } else {
        window.alert("Uzupełnij wymagane pola!");
    }
    window.addEventListener("mousedown", refresh);
    event.preventDefault()
}

function refresh() {
    window.location.reload();
}
