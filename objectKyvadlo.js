/* INVERZNÉ KYVADLO */

var canvas;
let angle = 0;
function setup() {
    canvas = createCanvas(600, 600);
    angleMode(DEGREES);
    //canvas.position(160,100);
}
function draw() {
    background(220);

    push();
    fill(50, 100, 100); //farba
    translate(300,350)
    rotate(angle);
    stroke(255);
    rect(0,0,210, 25, 10);
    angle = angle + 1
    pop();

    push();
    fill(100, 100, 100); //farba
    stroke(255);
    square(170,350,260,20);
    pop();
}

