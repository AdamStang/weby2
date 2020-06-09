
/* TLMIČ AUTOMOBIL */
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
    rotate(0);
    stroke(255);
    square(100,300,240,60);

    push();
    square(190,150,150,60);
    pop();

}
