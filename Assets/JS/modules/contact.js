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
    
    const swiperWrapper = document.querySelector(".favorites").querySelector(".swiper-wrapper");

    if (localStorage.length != 0) {
        Object.keys(localStorage).forEach((item) =>{
            if(!isNaN(item)){
                swiperWrapper.innerHTML += localStorage.getItem(item);
            }
            
            swiperWrapper.querySelectorAll(".product-card").forEach((product, index, array) =>{
                product.classList.add("swiper-slide");
    
                if(array.length == 1){
                    swiperWrapper.querySelectorAll(".product-card")[0].style.minWidth = "235px"
                    document.querySelector(".contact-block").style.paddingBottom = "50px"
                } else {
                    document.querySelector(".contact-block").style.paddingBottom = "0px"
                }
            }) 
        });
    } else {
        if (!document.querySelector('.nothingSaved')) {
            const h3 = document.createElement('h3')
            h3.textContent = "Nenhum produto salvo"
            h3.classList.add('nothingSaved');
            h3.style.color = "rgba(0,0,0,.5)";
            swiperWrapper.appendChild(h3);
        }
    }

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
    
    if (name != '' && phone != '') {
        phone = phone.replace(/\D/g,'');
        if (phone.length < 13) {
            phone = "55" + phone;
        }

        let text = `Olá, sou o(a) ${name} e gostei dos seguintes produtos:\n`
        document.querySelectorAll(".contact-block .content-card h2").forEach(item => {
            text = `${text}\n- ${item.textContent}`;
        })

        text = window.encodeURIComponent(text);

        let urlApi = "https://web.whatsapp.com/send";

        if(window.matchMedia("(max-width: 720px)").matches){
            urlApi = "https://api.whatsapp.com/send";
        }

        window.open(urlApi + "?phone=" + phone + "&text=" + text, "_blank");
    }

}

export {initContact, contactButton, titleReplace, phone, phoneMask};