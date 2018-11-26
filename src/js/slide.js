window.onload = function() {
    var image=document.getElementById("slides");
    var index=0;
    var img_array=["assets/img/winterweather.jpg","assets/img/boston1.jpg","assets/img/boston2.jpg","assets/img/boston3.jpg"];

    var interval = 5000;
    function slide() {
        image.src = img_array[index++%img_array.length];
    }

    setInterval(slide, interval);
}