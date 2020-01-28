"use scrict";



(function() {

    var element = document.getElementById("duck");

    element.addEventListener("click", function() {
        element.innerHTML = "<p>" + this.offsetLeft + "</p>"


        console.log("Duck clicked");

    });


    element.addEventListener("mouseover", function() {

        if (element.offsetLeft > 50) {
            element.style.left = element.offsetLeft - Math.random() * 100 + "px";
        } else {
            element.style.left = element.offsetLeft + Math.random() * 100 + "px";

        }
    });


    console.log("Duck ready");
    console.log(element);

})();














//MDN - JS - Event