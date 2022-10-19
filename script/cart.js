console.log('Connected');

var addToCart = document.querySelector(".add-to-cart");
let popup = document.querySelector(".popup");

addToCart.addEventListener("click", () => {
    popup.classList.remove("hidden");
    setTimeout(fadeOut, 3000);
});

function fadeOut() {
    popup.classList.add("hidden");
}