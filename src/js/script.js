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
        name.style.backgroundColor = 'pink';
        return false;
    }
    if(comment.value = ''){
        comment.style.border = 'red 2px solid';
        comment.style.borderRadius = '5px';
        comment.style.backgroundColor = 'pink';
        return false;
    }
}

function formValidate() {
    let fav = document.getElementById('fav');
    let food =document.getElementById('food');
    let myRange =document.getElementById('myRange');
    let ta =document.getElementById('ta');
    let name =document.getElementById('name');
    let email =document.getElementById('email');
    let date =document.getElementById('date');

    if(name.value = ''){
        name.style.border = 'red 2px solid';
        name.style.borderRadius = '5px';
        name.style.backgroundColor = 'pink';
        return false;
    }
    if(fav.value = ''){
        fav.style.border = 'red 2px solid';
        fav.style.borderRadius = '5px';
        fav.style.backgroundColor = 'pink';
        return false;
    }
    if(food.value = ''){
        food.style.border = 'red 2px solid';
        food.style.borderRadius = '5px';
        food.style.backgroundColor = 'pink';
        return false;
    }
    if(myRange.value = ''){
        myRange.style.border = 'red 2px solid';
        myRange.style.borderRadius = '5px';
        myRange.style.backgroundColor = 'pink';
        return false;
    }
    if(ta.value = ''){
        ta.style.border = 'red 2px solid';
        ta.style.borderRadius = '5px';
        ta.style.backgroundColor = 'pink';
        return false;
    }
    if(email.value = ''){
        email.style.border = 'red 2px solid';
        email.style.borderRadius = '5px';
        email.style.backgroundColor = 'pink'
        return false;
    }
    if(date.value = ''){
        date.style.border = 'red 2px solid';
        date.style.borderRadius = '5px';
        date.style.backgroundColor = 'pink'
        return false;
    }
}