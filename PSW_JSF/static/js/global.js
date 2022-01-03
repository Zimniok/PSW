const fontColor = document.querySelector('input[name="font-color"]')
const fontType = document.querySelector('input[name="font-type"]')
const pageColor = document.querySelector('input[name="page-color"]')

document.body.style.backgroundColor = pageColor.value;
document.body.style.color = fontColor.value;
document.body.style.fontFamily = fontType.value;