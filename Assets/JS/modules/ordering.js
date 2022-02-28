const filters = document.querySelector("#filters");
let chosen = document.querySelector(".option");

filters.addEventListener('click', completeOrder);
chosen.addEventListener('click', dropdown);

function dropdown(){
    filters.classList.toggle("visible");   
}

function switchColor(){
    if(chosen.textContent == filters.children[0].textContent){
        filters.children[0].style.backgroundColor = "rgba(223, 223, 223, .8)";
        filters.children[1].style.backgroundColor = "#fff";
    } else {
        filters.children[0].style.backgroundColor = "#fff";
        filters.children[1].style.backgroundColor = "rgba(223, 223, 223, .8)";
    }
}

function completeOrder(e) {
    let contentCard = document.querySelector(".products-container").querySelectorAll(".content-card");
    let precos = [];
    contentCard.forEach((item) => {
        precos.push(item.children[4].textContent.replace("R$ ", "").replace(",", "."));
    })
    precos.sort((a,b) => a - b); //ordenar crescente

    function order(){
        let precosText = precos.map((item) =>{
            item = "R$ ".concat(item); 
            return item.replace(".", ",");
         })

         let spans = [];
         contentCard.forEach((item =>{
             spans.push(item.children[4])
         }))
                   
        for(let i = 0; i < spans.length; i++){
            precosText.forEach((item, index) =>{
                if(spans[i].textContent.includes(item)){
                    spans[i].parentElement.parentElement.style.order = index;
                } 
            })
        }
    }
    
    switch (e.target.textContent){
        case 'Maior Preço':
            chosen.textContent = e.target.textContent;
            precos.reverse();
            order();
            dropdown();
            switchColor();
        break;

        case 'Menor Preço':
            chosen.textContent = e.target.textContent;
            order();
            dropdown();
            switchColor();
        break;
    }
}

export {filters, chosen, dropdown, switchColor, completeOrder};