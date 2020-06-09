
/* NÁKLON LIETADLA */
var canvas;
let angle = 0;
function setup() {

    canvas = createCanvas(600, 600);
    //canvas = createCanvas(windowWidth, windowHeight);
    angleMode(DEGREES);
}
function draw() {
    background(220);

    push();
    translate(50,50);
    rotate(-5);
    stroke(255);
    square(80,260,300,50,20);

    pop();

}
