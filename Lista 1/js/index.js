document.addEventListener("DOMContentLoaded", function() {
    // var name = window.prompt("Podaj swoje imię!: ");
    // var span = document.getElementById("greeting");
    // var age = parseInt(window.prompt("Podaj swój wiek: "));
    // var height = parseFloat(window.prompt("Podaj swój wzrost w metrach: "));
    if (name && span && age) {
        span.innerHTML = "Witaj na naszej stronie " + name + " w wieku " + age + " o wzroście " + height + "m";
    }
});