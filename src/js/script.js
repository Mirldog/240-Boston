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

function commentValidate(){
    var name = document.getElementById('name');
    var comment = document.getElementById('comment');
    if(name.value = ''){
        name.style.border = 'red 2px solid';
        name.style.borderRadius = '5px';
        name.style.backgroundColor = 'pink'
        return false;
    }
    if(comment.value = ''){
        comment.style.border = 'red 2px solid';
        comment.style.borderRadius = '5px';
        comment.style.backgroundColor = 'pink'
        return false;
    }
}