document.getElementById("cartIcon").onclick = function() {open()};

function open(){
    document.querySelector(".popup").style.display = "block";
    document.body.classList.add('stop-scrolling')
    document.getElementById("menubody").classList.add('menubodyPaused')
}

document.querySelector("#close").addEventListener("click", function(){
    document.querySelector(".popup").style.display = "none";
    document.body.classList.remove('stop-scrolling')
    document.getElementById("menubody").classList.remove('menubodyPaused')
});

