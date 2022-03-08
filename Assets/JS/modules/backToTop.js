export default function backToTop(){
    let btn = document.querySelector('.arrow')
    if (window.scrollY > 600) {
        btn.style.display = "flex"
    } else {
        btn.style.display = "none"
    }
}

window.addEventListener('scroll', backToTop);