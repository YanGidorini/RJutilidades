import {itensLength} from "./unfavorite.js";

let hearts = document.querySelectorAll(".heart");

hearts.forEach((item) =>{
    item.addEventListener('click', favorite);
});

function favorite(e){
    let heart = e.currentTarget;
    heart.classList.toggle("active-heart");

    let productCard = heart.parentElement.parentElement;
   
    if(heart.classList.contains("active-heart")){
        localStorage.setItem(productCard.dataset.id, productCard.outerHTML);
    } else {
        localStorage.removeItem(productCard.dataset.id, productCard.outerHTML);

        //CUIDADO! PERIGO!
        //não sei como isso resolveu tudo. Tive um insight que já esqueci e não estou entendo o funcionamento disso. FAVOR NÂO MEXER!!!
        let gambiarra = document.querySelectorAll(".product-card");
        gambiarra.forEach((item)=>{
            console.log(item.children[0].children[1])
            item.children[0].children[1].classList.remove("active-heart");
        })
            
    }
    itensLength();
    setTimeout(activeFavorite(), 100);
}

function activeFavorite(){
    let product = document.querySelectorAll(".product-card");

    product.forEach((item) =>{
        Object.keys(localStorage).forEach(key =>{
            if(item.dataset.id == key){
                item.children[0].children[1].classList.add("active-heart");
            }
        });
    });
}

export {hearts, favorite, activeFavorite, itensLength};
