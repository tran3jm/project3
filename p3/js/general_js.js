
var opacity = 0;
var intervalID = 0;
window.onload = fadeIn;


(function() {
    let elements = document.querySelectorAll("img");
    for (let e of elements) {
        document.addEventListener("click", show, false);
    }
})();

function show() {
    var body = document.getElementById("body");
    opacity = Number(window.getComputedStyle(body)
                     .getPropertyValue("opacity"));
    if (opacity < 1) {
        opacity = opacity + 0.1;
        body.style.opacity = opacity
    } else {
        clearInterval(intervalID);
    }
}

function fadeIn() {
    setInterval(show, 300);
}