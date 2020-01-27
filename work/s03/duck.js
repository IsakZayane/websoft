"use scrict";



(function() {

    var element = document.getElementById("duck");

    element.addEventListener("click", function() {
        element.innerHTML = "<p>" + this.offsetLeft + "</p>"


        console.log("Duck clicked");

    });


    element.addEventListener("mouseover", function() {
        element.style.left = element.offsetLeft + Math.random() * 100 + "px";
        element.style.top = element.offsetTop + Math.random() * 100 + "px";

        console.log(element.offsetLeft);
        console.log(Math.random() * 100);

    });


    console.log("Duck ready");
    console.log(element);

})();














//MDN - JS - Event