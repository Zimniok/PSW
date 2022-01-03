const table = document.getElementById("tbody");
const row = table.querySelector("tr");
const button = document.getElementById("teaButton");
const hideButton = document.getElementById("teaButtonHide");
const span = document.getElementById("randomContent");
const randomButton = document.getElementById("randomButton");
const aside = document.querySelector('aside');
const teas = ['Czarna', 'Zielona', 'Biała', 'Żółta', 'Pu-erh', 'Ulong']

button.addEventListener("click", addRow);
randomButton.addEventListener("click", generateRecipe);
hideButton.addEventListener('click', removeRow);

function addRow() {
    var newRow = document.createElement('tr');
    var th = newRow.appendChild(document.createElement('th'));
    th.appendChild(document.createTextNode('Roibos'));
    newRow.appendChild(document.createElement('td')).innerText = "95℃ - 100℃";
    newRow.appendChild(document.createElement('td')).innerText = "203℉ - 212℉";
    var time = newRow.appendChild(document.createElement('td'));
    time.innerText = "4 - 8 minut";
    th.parentNode.insertBefore(document.createElement('td').appendChild(document.createElement('meter')), time);
    newRow.querySelector('meter').value = "93";
    table.appendChild(newRow);
    button.removeEventListener('click', addRow)
}

function generateRecipe() {
    var integer = Math.floor(Math.random() * 10) % 6;
    span.innerHTML = teas[integer];
}

function removeRow() {
    var rows = table.querySelectorAll('tr')
    if (rows.length == 7) {
        table.removeChild(rows[6])
        button.addEventListener('click', addRow)
    }

}