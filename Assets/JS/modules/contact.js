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

    const submitButton = document.querySelector("#submitButton");
    submitButton.addEventListener('click', sendProduct);
}

const contactButton = document.getElementById("contact-button");
contactButton.addEventListener('click', initContact);

function titleReplace(){
    if(window.matchMedia("(max-width: 912px)").matches){
        document.querySelector(".favorites h2").innerHTML = "<a href='favoritos'>Clique aqui</a> para conferir os produtos curtidos."
    }
}


const phone = document.querySelector("#phone");
phone.addEventListener('keyup', phoneMask);

function phoneMask(){
    let v = phone.value;
    console.log(v);

    let r = v.replace(/\D/g, "");
    r = r.replace(/^0/, "");
  
    if (r.length > 11) {
      r = r.replace(/^(\d\d)(\d{5})(\d{4}).*/, "($1) $2-$3");
    } else if (r.length > 7) {
      r = r.replace(/^(\d\d)(\d{5})(\d{0,4}).*/, "($1) $2-$3");
    } else if (r.length > 2) {
      r = r.replace(/^(\d\d)(\d{0,5})/, "($1) $2");
    } else if (v.trim() !== "") {
      r = r.replace(/^(\d*)/, "($1");
    }
    phone.value = r;
}

function sendProduct(e){
    e.preventDefault();
    let name = document.querySelector("#name").value;
    let phone = document.querySelector("#phone").value;

    document.querySelectorAll(".favorite .product-card .content-card h2");

}

export {initContact, contactButton, titleReplace, phone, phoneMask};