

kaboom(
    {   width: 360, 
        height: 740, 
        canvas: document.getElementById("game_canvas"),
        background: [ 0, 0, 0, ],
    });


// SPRITE LOAD
loadSprite("player", "index_files/assets/ship_L.png")
loadSprite("booster", "index_files/assets/effect_yellow.png")
loadSprite("arrow", "index_files/assets/ship_F.png")


// WALLS
const wallLeft = add([
    pos(0, 0),
    rect(1, height()),
    area(),
    solid(),
])
const wallRight = add([
    pos(360, 0),
    rect(1, height()),
    area(),
    solid(),
])



// PLAYER
const PLAYERSPEED = 200;

const player = add([
    sprite("player"),
    pos(148, 520),
    area(),
    solid(),


])




// BUTTONS  
const buttonLeft = add([
    sprite("arrow"),
    pos(30, 700),
    rotate(-90),
    opacity(0.5),
    fixed(),

])
const buttonRight = add([
    sprite("arrow"),
    pos(330, 640),
    rotate(90),
    opacity(0.5),
    fixed(),

])



// MOVEMENT
let keyDown = {
    buttonLeft: false,
    buttonRight: false,
}

const moveLeft = () => {
    player.move(-PLAYERSPEED, 0)
}
const moveRight = () => {
    player.move(PLAYERSPEED, 0)
}

onTouchStart((pos) => {
    if (buttonLeft.hasPoint(pos)) {
        keyDown.buttonLeft = true
        buttonLeft.opacity = 1
    } else if (buttonRight.hasPoint(pos)) {
        keyDown.buttonRight = true
        buttonRight.opacity = 1
    }
})
onTouchEnd((pos) => {
    if (!buttonLeft.hasPoint(pos)) {
        keyDown.buttonLeft = false
        buttonLeft.opacity = 0.5
    } 
    if (!buttonRight.hasPoint(pos)) {
        keyDown.buttonRight = false
        buttonRight.opacity = 0.5
    } 
})



onUpdate(() => {
    if (keyDown.buttonLeft) {
        moveLeft()
    } else if (keyDown.buttonRight) {
        moveRight()
    }
})