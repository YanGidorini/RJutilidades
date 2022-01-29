const btnMobile = document.querySelector("#btnMobile");

function toggleMenu(event) {
    const nav = document.querySelector("nav");
    nav.classList.toggle("menuAtivo")
}

btnMobile.addEventListener('click', toggleMenu);
btnMobile.addEventListener('touchstart', toggleMenu);
