var mygga = document.getElementById("mygga");

var area = document.body,
    areaHeight = window.innerHeight,
    areaWidth = window.innerWidth,
    points = document.getElementById('points'),
    score = 0,
    timer = 1000,
    myggCounter = 0;

window.setInterval(spawnNewMygga, 10000);
mygga.addEventListener("click", function() {

    mygga.remove();

    score++;
    console.log("Mygga clicked");
    points.innerHTML = score;


});

function spawnNewMygga() {

    var newX = Math.floor(Math.random() * (areaWidth - mygga.width));
    var newY = Math.floor(Math.random() * (areaHeight - mygga.height));
    console.log("Spawning ny mygga");
    myggCounter++;
    mygga.style.left = newX + "px";
    mygga.style.top = newY + "px";
    area.appendChild(mygga);
}

function startGame() {

    window.setInterval(spawnNewMygga, 1000);
}

startGame();