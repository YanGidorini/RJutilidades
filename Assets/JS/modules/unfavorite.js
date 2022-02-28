function loadFavorite(){
    Object.keys(localStorage).forEach(item =>{
        document.body.querySelector(".products-container").innerHTML += localStorage.getItem(item);
    });

    //tirando a margin e a largura do swiper-slide
    document.querySelectorAll(".product-card").forEach(product =>{
        product.style.width = "auto";
        product.style.margin = "0";
        product.classList.remove("swiper-slide");
    })

    itensLength();
    noFavorites();
}  

function removeFavorite(){
    document.querySelectorAll(".heart").forEach((item) =>{
        item.addEventListener('click', () =>{

            let productCard = item.parentElement.parentElement;
            localStorage.removeItem(productCard.dataset.id);
            productCard.remove();
            itensLength();
            noFavorites();
        });
    })

}

function noFavorites(){
    let noItens = document.querySelector(".no-itens");
    let productsContainer = document.querySelector(".products-container");
    if(localStorage.length == 0){
        noItens.style.display = "block";
        productsContainer.style.display = "flex";
        productsContainer.style.height = "300px";
        productsContainer.style.alignItems = "center";
    } else {
        noItens.style.display = "none";
    }

}

function itensLength(){
    document.querySelector(".length").textContent = localStorage.length;
}
export {loadFavorite, removeFavorite};
