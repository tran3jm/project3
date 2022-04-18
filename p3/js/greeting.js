// get Hours()
// getMintues()
// getSeconds()
var time = new Date();
if(time.getHours() > 4 && time.getHours() < 12){
    document.getElementById("greeting").innerText = "Good Morning!";
}else if(time.getHours() < 19){
    document.getElementById("greeting").innerText = "Good Afternoon!";

}else{
    document.getElementById("greeting").innerText = "Good Evening!";
}

window.addEventListener("load", function(){
    setTimeout(
        function open(event){
            document.querySelector(".popup").style.display = "block";
        },
        1000
    )
});


document.querySelector("#close").addEventListener("click", function(){
    document.querySelector(".popup").style.display = "none";
});