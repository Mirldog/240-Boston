function validateForm() {
    var x = document.forms["OrderForm"]["customerName"].value;
    if (x == null || x == "") {
        document.forms["OrderForm"]["customerName"].style.backgroundColor = 'pink';
        return false;
    }
}

function changeImage(str) {

    if(str ==="34"){
        pic = document.getElementById("34").src;
        console.log(pic);
        if (pic === "http://localhost:63342/Boston/src/assets/img/34.jpg")
        {
            pic = "http://localhost:63342/Boston/src/assets/img/34-menu.jpg";
        }
        else
        {
            document.getElementById("imgClickAndChange").src = "../assets/img/34.jpg";
        }
    }

}