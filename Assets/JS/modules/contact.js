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

function titleReplace(){
    if(window.matchMedia("(max-width: 768px)").matches){
        document.querySelector(".favorites h2").innerHTML = "<a href='./Pages/Favoritos.php'>Clique aqui</a> para conferir os produtos curtidos."
    }
}

export {initContact, contactButton, titleReplace};