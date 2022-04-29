const cart = [];

document.getElementById("cartIcon").onclick = function() {open()};
document.getElementById("confirmation").onclick = function() {sendOrder()};

function open(){
    document.querySelector(".popup").style.display = "block";
    document.body.classList.add('stop-scrolling');
    document.getElementById("menubody").classList.add('menubodyPaused');
}

document.querySelector("#close").addEventListener("click", function(){
    document.querySelector(".popup").style.display = "none";
    document.body.classList.remove('stop-scrolling');
    document.getElementById("menubody").classList.remove('menubodyPaused');
});

(function() {
    const inventory = document.getElementsByClassName("add");
    inventory.array.forEach(element => {
        element.onclick("click", addToJson, false);
    }); 
})();


function addToJson(fd, name, price) {
    const temp = {name : name, price : price}
    cart.push(temp);
    var li = document.createElement("li");
    if (cart.length % 2 == 0) {
        li.innerHTML = "<li class = \"items even\"><div class=\"infoWrap\"> \
            <div class=\"cartSection\"> \
                <img src=\"../images/"+ fd +"/"+ name +".jpg\" class=\"itemImg\"></img> \
                <div class = \"paymentItem\"> \
                <h3 class = \"itemTitle\">"+ name +"</h3> \
                <div class = \"quantity\"> \
                    <p class = \"price\">$"+ price.toFixed(2) +"</p> \
                </div> \
            </div> \
                <div class=\"prodTotal\"> \
                    <div class=\"removeWrap\"> \
                        <a href=\"#\" class=\"remove\">x</a> \
                    </div> \
                </div> \
            </div> \
        </div> \
        </li>";
    } else {
        li.innerHTML = "<li class = \"items odd\"><div class=\"infoWrap\"> \
                <div class=\"cartSection\"> \
                <img src=\"../images/"+ fd +"/"+ name +".jpg\" class=\"itemImg\"></img> \
                <div class = \"paymentItem\"> \
                <h3 class = \"itemTitle\">"+ name +"</h3> \
                <div class = \"quantity\"> \
                    <p class = \"price\">$"+ price.toFixed(2) +"</p> \
                </div> \
            </div> \
                <div class=\"prodTotal\"> \
                    <div class=\"removeWrap\"> \
                        <a href=\"#\" class=\"remove\">x</a> \
                    </div> \
                </div> \
            </div> \
        </div> \
        </li>";
    }
    document.getElementById("cartList").appendChild(li);
    
}

// let jsonString;

/**
 * Sends an AJAX request to checkout.php.
 */
function sendOrder() {
    jsonString = JSON.stringify(cart);
    console.log(jsonString)

    const xhr = new XMLHttpRequest();

    xhr.open("POST", "http://localhost/project3/p3/php/checkout.php");
    xhr.setRequestHeader("Content-Type", "application/json");
    xhr.send(jsonString);
}

    // let data = new FormData();
    // data.append('game', 'awakening');
    // data.append('characters', JSON.stringify(characters));
// let xmlhttp = new XMLHttpRequest();
//     xmlhttp.onload = () => {
//         let response = xmlhttp.responseText;
//         if (response) {
//             console.log("Success");
//             //window.location.reload();
//             removeAllCharacters();
//             queryCharacters();
//             window.AOS.refresh();
//             bootstrap.Modal.getOrCreateInstance(document.getElementById('statusModal')).hide();
//         } else {
//             console.log("Failure");
//         }
//     }
//     xmlhttp.open("POST", `https://159.223.157.198/php/putCharacters.php`, true);
//     xmlhttp.send(data);

// $.ajax({ 
//     type: "POST", 
//     url: "http://localhost/project3/p3/php/checkout.php", 
//     data: { myArray : jsonString}, 
//     success: function() { 
//            alert("Success"); 
//      } 
// }); 