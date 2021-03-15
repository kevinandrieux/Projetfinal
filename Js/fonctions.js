let angle = 0;

function navColor() {
    angle = angle + 1;
    document.getElementsById("navcolor").style.backgroundImage = "linear-gradient(" + angle + "deg, rgba(128,8,32,1) 16%, rgba(135,43,118,1) 51%, rgba(34,52,132,1) 84%)";   
    requestAnimationFrame(navColor)
}



