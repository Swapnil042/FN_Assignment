let xP = 0, yP = 50, x = 10, y = 10;

const boxHeight = 100;
const boxWidth = 100;
const windowHeight = window.innerHeight;
const windowWidth = window.innerWidth;

let blueBox;

const box = () => {
    blueBox = document.getElementById("blueBox");
    setInterval(frame, 1000);
};

const frame = () => {
    xP += x;
    yP += y;

    //if box crosses the left side of the browser
    if(xP <= 0) {
        xP = 0;
        x = -1*x;
    }
    
    // if box crosses the right side of the browser
    if(xP >= windowWidth - boxWidth) {
        xP = windowWidth - boxWidth;
        x = -1*x;
    }

    // if box crosses the upper side of the browser
    if(yP <= 0) {
        yP = 0;
        y = -1*y;
    }

    //if box crosses the bottom side of the browser
    if(yP >= windowHeight - boxHeight) {
        yP = windowHeight - boxHeight;
        y = -1*y;
    }

    blueBox.style.left = xP + "px";
    blueBox.style.top = yP + "px";
}

box();