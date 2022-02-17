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

 


document.querySelector(".option").addEventListener('click', dropdown);
document.querySelector("#filters").children[0].addEventListener('click', dropdown);

function dropdown(){
    document.querySelector("#filters").classList.toggle("visible");    
}
