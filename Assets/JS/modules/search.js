let inputSearch = document.querySelector("#search-bar");

if (inputSearch) {
    inputSearch.addEventListener('keyup', searchProduct);
}

function focus() {
    inputSearch.addEventListener('focusin', () =>{
        document.querySelector(".src-bar").classList.add("focused");
    });
    inputSearch.addEventListener('focusout', () =>{
        document.querySelector(".src-bar").classList.remove("focused");
    });
}

function searchProduct(e){
    let key = e.key;
    let input = document.querySelector("#search-bar").value.toLowerCase().normalize("NFD").replace(/[^a-zA-Zs]/g, "");
    let titles = document.querySelector(".products-container").querySelectorAll("h2");

    for (let i = 0; i < titles.length; i++) {
        if (!titles[i].innerHTML.normalize("NFD").replace(/[^a-zA-Zs]/g, "").toLowerCase().includes(input)) {
            titles[i].parentElement.parentElement.style.display = "none";
        } else {
            titles[i].parentElement.parentElement.style.display = "block";
        } 
    }

    if(key == "Enter"){
        document.querySelector("#search-bar").blur();
    }

    let productsContainer = document.querySelector(".products-container");
    let products = productsContainer.querySelectorAll(".product-card");
    let teste = [];
    let notFound = productsContainer.querySelector(".not-found");

    products.forEach((product, i) =>{
        if(product.style.display == "block"){
            teste[i] = product;
        }
    })

    if (teste.length == 0){
        productsContainer.style.display = "flex";
        productsContainer.style.height = "200px";
        productsContainer.style.alignItems = "center";
        notFound.style.display = "block"
    } else {
        notFound.style.display = "none"
        productsContainer.style.display = "grid";
        productsContainer.style.height = "auto";
        productsContainer.style.alignItems = "unset";
    }

    console.log(document.querySelector(".products-container"));
}

export {inputSearch, focus, searchProduct};
