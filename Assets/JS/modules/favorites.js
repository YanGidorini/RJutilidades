let hearts = document.querySelectorAll(".heart");

hearts.forEach((item) =>{
    item.addEventListener('click', favorite);
})

function favorite(e){
    let heart = e.currentTarget;
    heart.classList.toggle("active-heart");

    let productCard = heart.parentElement.parentElement;
   
    if(heart.classList.contains("active-heart")){
        localStorage.setItem(productCard.dataset.id, productCard.outerHTML);
    } else {
        localStorage.removeItem(productCard.dataset.id, productCard.outerHTML);
    }
}

function activeFavorite(){
    let product = document.querySelectorAll(".product-card");

    Object.keys(localStorage).forEach(key =>{
        product.forEach((item) =>{
            item.dataset.id == key ? item.children[0].children[1].classList.add("active-heart") : '';
        });
    });
}

export {hearts, favorite, activeFavorite};
