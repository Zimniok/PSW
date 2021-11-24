const board = document.querySelector('#board');

board.addEventListener('mousemove', displayCords);
board.addEventListener('mouseout', displayWindow)

function displayCords() {
    if (event.altKey) {
        board.style.background = "blue"
    }
    if (event.ctrlKey) {
        board.style.background = "red"
    }
    if (event.shiftKey) {
        board.style.background = "yellow"
    }
    console.log(event)
    board.value = "X coords: " + event.screenX + "\nY coords: " + event.screenY
}

function displayWindow() {
    console.log(event)
    board.value = "X window: " + event.clientX + "\nY window: " + event.clientY
}