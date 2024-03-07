

function hangman(hp) {
  var canvas = document.getElementById("canvas");
  var ctx = canvas.getContext("2d");

  gallows(ctx);
  if(hp<=5){head(ctx)};
  if(hp<=4){body(ctx)};
  if(hp<=3){leftArm(ctx)};
  if(hp<=2){rightArm(ctx)};
  if(hp<=1){leftLeg(ctx)};
  if(hp<=0){rightLeg(ctx)};
  stroke(ctx);
}

function gallows(ctx) {
  ctx.beginPath();
  ctx.moveTo(100, 250);
  ctx.lineTo(100, 50); // vertical post
  ctx.lineTo(250, 50); // top horizontal post
  ctx.lineTo(250, 75); // rope
  ctx.moveTo(100, 100); // move to diagonal brace
  ctx.lineTo(150, 50); //diagonal brace
  ctx.moveTo(50, 250);
  ctx.lineTo(300, 250); // horizontal base
}
function head(ctx) {
  ctx.moveTo(275, 100);
  ctx.arc(250, 100, 25, 0, 2 * Math.PI); // (x, y, radius, startAngle, endAngle)
}
function body(ctx) {
  ctx.moveTo(250, 125);
  ctx.lineTo(250, 175);
}
function leftArm(ctx) {
  ctx.moveTo(250, 125);
  ctx.lineTo(220, 150);
}
function rightArm(ctx) {
  ctx.moveTo(250, 125);
  ctx.lineTo(280, 150);
}
function leftLeg(ctx) {
  ctx.moveTo(250, 175);
  ctx.lineTo(220, 200);
}
function rightLeg(ctx) {
  ctx.moveTo(250, 175);
  ctx.lineTo(280, 200);
}
function stroke(ctx) {
  ctx.strokeStyle = "white";
  ctx.lineWidth = 4;
  ctx.stroke();
}
//console.log("wowowo"); 