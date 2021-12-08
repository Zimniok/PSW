const background = document.querySelector('#backgroundColor');
const fontColor = document.querySelector('#fontColor');
const fontFamily = document.querySelector('#fontType');
window.alert('Na tej stronie jest: ' + document.forms.length + ' formularz')


background.addEventListener('change', changeBackground);
fontColor.addEventListener('change', changeFontColor);
fontFamily.addEventListener('change', changeFontFamily);

function changeBackground() {
    document.body.style.backgroundColor = this.value;
}

function changeFontColor() {
    document.body.style.color = this.value;
}

function changeFontFamily() {
    document.body.style.fontFamily = this.value;
}