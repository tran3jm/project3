var cart = [];

if (sessionStorage.getItem("cart") != null) {
  cart = JSON.parse(sessionStorage.getItem("cart"));
  var i = 0;
  for (i = 0; i < cart.length; i++) {
      populateCartHTML(cart[i]["fd"], cart[i]["name"], cart[i]["price"]);
  }
}

document.getElementById("cartIcon").onclick = function() {open()};
//document.getElementById("confirmation").onclick = function() {sendOrder()};

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
    const temp = {name : name, price : price, fd : fd}
    cart.push(temp);
    populateCartHTML(fd, name, price);
    sessionStorage.setItem("cart", JSON.stringify(cart));
}

function populateCartHTML(fd, name, price) {
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

function getCart() {
    return sessionStorage.getItem("cart");
}