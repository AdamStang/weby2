
/* GULIČKA NA TYČI */
var canvas;
let angle = 0;
function setup() {

    canvas = createCanvas(600, 600);
    //canvas = createCanvas(windowWidth, windowHeight);
    angleMode(DEGREES);
}
function draw() {
    background(220);

    translate(50,50);
    rotate(angle);
    stroke(0); //okraje
    rect(250,100,15,140, 10);
    circle(259,295,120);
    //angle = angle + 1;
}
