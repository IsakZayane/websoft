var myButton = document.createElement("BUTTON");
myButton.id = "duckButton";
myButton.innerHTML = "Move duck!";
document.body.appendChild(myButton);

var element = document.getElementById("duck");
var moveRight = true;
var duckPos = true;
var speed = 2;
//var rightEdge = body.style.width;
var timesClicked = 0;
var speedLimit = false;
var acceleration = 15;
element.hidden = true;
var cops = false;

myButton.onclick = function() {
    intervalVar = setInterval(moveDuck, 50);
    timesClicked++;
    element.hidden = false;
    myButton.innerHTML = "Make him Speedy Gonzales!";
    element.style.left = speed + "px";

    console.log("Button clikc");
};

function moveDuck() {
    // console.log(element.style.left);
    element.offsetTop = window.innerHeight;

    if (!speedLimit) {
        if (element.offsetLeft > (window.innerWidth - 128)) {
            moveRight = false;
            console.log(window.innerWidth);
            console.log(speed);

        } else if (speed < 14) {
            moveRight = true;
        }

        if (moveRight) {
            element.style.left = speed + "px";
            speed = speed + acceleration;

        } else {
            element.style.left = speed + "px";
            speed = speed - acceleration;
        }

        if (timesClicked > 10) {

            myButton.innerHTML = "SLOW DOWN!!!"
        }
        if (timesClicked > 15) {
            element.style.backgroundImage = "url(../resources/tenor.gif)";
            element.style.height = 64 + "px";

            acceleration = 0;
            timesClicked = 0;
            speedLimit = true;


        }


    } else {
        myButton.innerHTML = "You got pulled over....."

    }






};

element.addEventListener("mouseover", function() {
    if (duckPos) {
        element.style.transform = 'rotate(180deg)';
        element.style.transform = 'transform(.2)';


        duckPos = false;
    } else {
        element.style.transform = 'rotate(0deg)';
        element.style.transform = 'scale(1.4)';
        element.style.transform = 'transform(.2)';

        duckPos = true;
    }
});

element.addEventListener("click", function() {
    element.remove();

});