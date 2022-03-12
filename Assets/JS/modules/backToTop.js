export default function backToTop(){
    let btn = document.querySelector('.arrow')
    let screenHeight = document.body.clientHeight;

    if (window.scrollY > (screenHeight/10)) {
        btn.style.display = "flex"
    } else {
        btn.style.display = "none"
    }
}

window.addEventListener('scroll', backToTop);

