const table = document.getElementById("tbody");
const row = table.querySelector("tr");
const button = document.getElementById("teaButton");
const span = document.getElementById("randomContent");
const randomButton = document.getElementById("randomButton");
const teas = ['Czarna', 'Zielona', 'Biała', 'Żółta', 'Pu-erh', 'Ulong']

button.addEventListener("click", addRow);
randomButton.addEventListener("click", generateRecipe);

function addRow() {
    var newRow = table.insertRow(6);
    newRow.innerHTML = row.innerHTML;
    var href = newRow.querySelector("a");
    href.innerText = "Roibos";
    href.href = "";
    newRow.querySelectorAll("td")[3].innerText = "4 - 8 minut";
    button.removeEventListener("click", addRow);
}

function generateRecipe() {
    var integer = Math.floor(Math.random() * 10) % 6;
    span.innerHTML = teas[integer]
}