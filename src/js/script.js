function validateForm() {
    var x = document.forms["OrderForm"]["customerName"].value;
    if (x == null || x == "") {
        document.forms["OrderForm"]["customerName"].style.backgroundColor = 'pink';
        return false;
    }
}

/*
These funcitons change the images on the food page to show the restaurant menus
 */

function changeImageOne() {
    document.getElementById("34").src = "http://localhost:63342/Boston/src/assets/img/34-menu.jpg";

}

function changeImageTwo() {
    document.getElementById("sor").src = "http://localhost:63342/Boston/src/assets/img/sorellina-menu.PNG";

}

function changeImageThree() {
    document.getElementById("reg").src = "http://localhost:63342/Boston/src/assets/img/regina-menu.jpg";
}