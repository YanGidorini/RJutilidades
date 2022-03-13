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

}

export {inputSearch, focus, searchProduct};
