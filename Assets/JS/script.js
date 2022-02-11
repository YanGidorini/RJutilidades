const btnMobile = document.querySelector("#btn-mobile");

function toggleMenu(event) {
    if (event.type === 'touchstart') event.preventDefault();
    const nav = document.querySelector("nav");
    nav.classList.toggle("active-menu");
}

btnMobile.addEventListener('click', toggleMenu);
btnMobile.addEventListener('touchstart', toggleMenu);

function searchProduct(){
    let input = document.querySelector("#search-bar").value.toLowerCase().normalize("NFD").replace(/[^a-zA-Zs]/g, "");
    let products = document.querySelector(".products-container").querySelectorAll(".product-card");

    for (let i = 0; i < products.length; i++) {
        if (!products[i].getAttribute("title").normalize("NFD").replace(/[^a-zA-Zs]/g, "").toLowerCase().includes(input)) {
            products[i].style.display = "none";
        } else {
            products[i].style.display = "block";
        }   
    }
}
