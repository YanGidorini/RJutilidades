function loadFavorite(){
    Object.keys(localStorage).forEach(item =>{

        if(!isNaN(item)){
            document.body.querySelector(".products-container").innerHTML += localStorage.getItem(item);
        }
        
    });

    //tirando a margin e a largura do swiper-slide
    document.querySelectorAll(".product-card").forEach(product =>{
        product.style.width = "auto";
        product.style.margin = "0";
        product.classList.remove("swiper-slide");
    })

    itensLength();
}  

function removeFavorite(){
    document.querySelectorAll(".heart").forEach((item) =>{
        item.addEventListener('click', () =>{
            let productCard = item.parentElement.parentElement;
            localStorage.removeItem(productCard.dataset.id);
            productCard.remove();
            itensLength();
        });
    })
}

function itensLength(){
    let badge = document.querySelector(".badge");
    let mobileBadge = document.querySelector(".mobile-badge");
    let itens = [];
    let qtdItens = document.querySelector(".qtd");

    if(localStorage.length > 0){
        itens = Object.keys(localStorage).filter(Number)

        if (itens.length > 0){
            badge.innerHTML = itens.length;
            badge.classList.add("badge-active");

            mobileBadge.innerHTML = itens.length;
            mobileBadge.classList.add("badge-active");
        } else {
            badge.classList.remove("badge-active");
            mobileBadge.classList.remove("badge-active");
        }
    } else {
        badge.classList.remove("badge-active");
        mobileBadge.classList.remove("badge-active");
    }

    if (qtdItens) {
        qtdItens.textContent = itens.length + " Produtos";
    }

    noFavorites(itens);
}

function noFavorites(itens){
    let noItens = document.querySelector(".no-itens");
    let productsContainer = document.querySelector(".products-container");

    if(itens.length == 0 && !!noItens){
        noItens.style.display = "block";
        productsContainer.style.display = "flex";
        productsContainer.style.height = "300px";
        productsContainer.style.alignItems = "center";
    } else {
        !!noItens ? noItens.style.display = "none" : '';
    }
}
export {loadFavorite, removeFavorite, itensLength};
