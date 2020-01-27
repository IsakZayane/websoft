

var length = 0;

if (length==1){
    const myHeading = document.querySelector('h1');
    myHeading.textContent = 'Hello world!';
    
}

//https://medium.com/@bretcameron/create-interactive-visuals-with-javascript-and-html5-canvas-5f466d0b26de

const cvs = document.querySelector('myCanvas');
const c = cvs.getContext('2d');

cvs.width = window.innerWidth;
cvs.height = window.innerHeight;

window.addEventListener('resize', function () {
  cvs.width = window.innerWidth;
  cvs.height = window.innerHeight;
});

let mouse = {
  x: undefined,
  y: undefined
};

window.addEventListener('mousemove', function (e) {
  mouse.x = event.x;
  mouse.y = event.y;
});

class Shape {
  constructor(x, y) {
    this.x = x;
    this.y = y;
    this.initialX = x;
    this.initialY = y;
  };
  
  draw = () => {
    // this is where we control the shape's appearance
  };
  
  update = () => {
    // this is where we control movement and interactivity
    this.draw();
  };
};

function animate() {
  requestAnimationFrame(animate);
  c.clearRect(0, 0, window.innerWidth, window.innerHeight);

  /* this is where we call our animation methods, such as  
  Shape.draw() */
};

animate();