var clicked = null;
var theFlag = null;

function displayFlag(flagId) {
    var element = document.getElementById(flagId);

    if (window.getComputedStyle(element).visibility === "hidden") {
        element.style.visibility = "visible";
    } else {
        element.style.visibility = "hidden";
    }


}

function hideFlag(actualFlag) {

    var element = document.getElementById(actualFlag);

    element.style.transition = "2s"
    element.style.opacity = "0";


}