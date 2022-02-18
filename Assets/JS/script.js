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
    let titles = document.querySelector(".products-container").querySelectorAll("h2");

    for (let i = 0; i < titles.length; i++) {
        if (!titles[i].innerHTML.normalize("NFD").replace(/[^a-zA-Zs]/g, "").toLowerCase().includes(input)) {
            titles[i].parentElement.parentElement.style.display = "none";
        } else {
            titles[i].parentElement.parentElement.style.display = "block";
        }   
    }
}


function initContact(event){
    event.preventDefault()
    const contactContainer = document.getElementById('contact');
    contactContainer.classList.add('show');
    contactContainer.addEventListener('click', (e) => {
        if (e.target.className == 'exit' || e.target.id == 'contact') {
            contactContainer.classList.remove('show')
        }
    })
}
const contactButton = document.getElementById("contact-button");
contactButton.addEventListener('click', initContact);

 


function dropdown(){
    filters.classList.toggle("visible");    
}

const filters = document.querySelector("#filters");
let chosen = document.querySelector(".option");

chosen.addEventListener('click', dropdown);
filters.addEventListener('click', (e) => {
    console.log(e.target.textContent);
    let contentCard = document.querySelector(".products-container").querySelectorAll(".content-card");

    let precos = [];
    contentCard.forEach((item) => {
        precos.push(item.children[4].textContent.replace("R$ ", "").replace(",", "."));
    })
    
    precos.sort((a,b) => a - b);
    
    switch (e.target.textContent){
        case 'Maior Preço':
            chosen.textContent = e.target.textContent;
            precos.reverse();

            let precosText = precos.map((item) =>{
               item = "R$ ".concat(item); 
               return item.replace(".", ",");
            })

            let spans = [];
            contentCard.forEach((item =>{
                spans.push(item.children[4])
            }))
                      
            for(let i = 0; i <= spans.length; i++){
                precosText.forEach((item, index) =>{
                    if(spans[i].textContent.includes(item)){
                        spans[i].parentElement.parentElement.style.order = index;
                    } 
                })
            }
            dropdown();
        break;

        case 'Menor Preço':
            chosen.textContent = e.target.textContent;

            dropdown();
        break;
    }
})