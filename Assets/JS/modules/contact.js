function initContact(event){
    event.preventDefault()
    const contactContainer = document.getElementById('contact');
    contactContainer.classList.add('show');
    contactContainer.addEventListener('click', (e) => {
        if (e.target.className == 'exit' || e.target.id == 'contact') {
            contactContainer.classList.remove('show');
            document.querySelector(".favorites").querySelector(".swiper-wrapper").innerHTML = "";
        }
    })

    var swiper2 = new Swiper(".mySwiper2", {
		slidesPerView: 2,
		spaceBetween: 10,
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		}
	});
    
    const swiperWapper = document.querySelector(".favorites").querySelector(".swiper-wrapper");

    Object.keys(localStorage).forEach((item) =>{
        if(!isNaN(item)){
            swiperWapper.innerHTML += localStorage.getItem(item);
        }
        
        swiperWapper.querySelectorAll(".product-card").forEach((product, index, array) =>{
            product.classList.add("swiper-slide");

            if(array.length == 1){
                swiperWapper.querySelectorAll(".product-card")[0].style.minWidth = "235px"
                document.querySelector(".contact-block").style.paddingBottom = "50px"
            } else {
                document.querySelector(".contact-block").style.paddingBottom = "0px"
            }
        }) 
    });
}
const contactButton = document.getElementById("contact-button");
contactButton.addEventListener('click', initContact);

function titleReplace(){
    if(window.matchMedia("(max-width: 912px)").matches){
        document.querySelector(".favorites h2").innerHTML = "<a href='favoritos'>Clique aqui</a> para conferir os produtos curtidos."
    }
}

export {initContact, contactButton, titleReplace};