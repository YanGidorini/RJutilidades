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

export {initContact, contactButton};