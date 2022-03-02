const filters = document.querySelector("#filters");
let chosen = document.querySelector(".option");

filters.addEventListener('click', completeOrder);
chosen.addEventListener('click', dropdown);

function completeOrder(e) {
    let decreasing = false;

    switch (e.target.textContent){
        case 'Recentes':
            chosen.textContent = e.target.textContent;
            recent();
            dropdown();

            filters.children[0].style.backgroundColor = "rgba(223, 223, 223, .8)";
            filters.children[1].style.backgroundColor = "#fff";
            filters.children[2].style.backgroundColor = "#fff";
        break;

        case 'Menor Preço':
            chosen.textContent = e.target.textContent;
            orderByPrice(decreasing);
            dropdown();
            
            filters.children[0].style.backgroundColor = "#fff";
            filters.children[1].style.backgroundColor = "rgba(223, 223, 223, .8)";
            filters.children[2].style.backgroundColor = "#fff";
        break;

        case 'Maior Preço':
            chosen.textContent = e.target.textContent;
            decreasing = true;
            orderByPrice(decreasing);
            dropdown();

            filters.children[0].style.backgroundColor = "#fff";
            filters.children[1].style.backgroundColor = "#fff";
            filters.children[2].style.backgroundColor = "rgba(223, 223, 223, .8)";
        break;
    }
}

function orderByPrice(decreasing){
    let contentCard = document.querySelector(".products-container").querySelectorAll(".content-card");    
    let precos = [];
    contentCard.forEach((item) => {
        precos.push(item.children[4].textContent.replace("R$ ", "").replace(",", "."));
    })

    precos.sort((a,b) => a - b); //ordenar crescente
    if(decreasing){
        precos.reverse();
    }
    
    let precosText = precos.map((item) =>{
        item = "R$ ".concat(item); 
        return item.replace(".", ",");
    })

    let spans = [];
    contentCard.forEach((item) =>{
        spans.push(item.children[4]);
    })
                
    for(let i = 0; i < spans.length; i++){
        precosText.forEach((item, index) =>{
            if(spans[i].textContent.includes(item)){
                spans[i].parentElement.parentElement.style.order = index;
            } 
        })
    }
}

function recent(){
    let productCard = document.querySelector(".products-container").querySelectorAll(".product-card");
    let dates = [];

    productCard.forEach((item, index) =>{
        dates[index] = new Date(item.dataset.date);
    })

    dates.sort((a,b) => a - b); //ordenar crescente

    dates.forEach((item, index) =>{
        dates[index] = item.toLocaleDateString('ko-KR').replace(".", ",").replace(".", ",").replace(/.$/, '');

        productCard.forEach((item)=>{
            if(item.dataset.date == dates[index]){
                item.style.order = index;
            }
        })
    })
}

function dropdown(){
    filters.classList.toggle("visible");   
}

export {filters, chosen, dropdown, completeOrder, recent};