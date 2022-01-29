<style>
/* header*/
header{
    display: grid;
    grid-template-areas: 
    "logo nav"
    "frase nav";
    grid-template-columns: 1fr 1fr;
}

header #container-logo{
    grid-area: logo;
    display: flex;
    align-items: center;
    width: 105%;
    height: 100px;
    background-color: #fff;
    mix-blend-mode: normal;
    box-shadow: 0px 10px 40px rgba(0, 0, 0, 0.1);
    border-radius: 0px 30px 30px 0px;   
    z-index: 1;
    transform: translateY(15px);
}

header #container-logo img{
    margin-left: 30px;
    width: 120px;
    height: 65px;
}

header #container-logo p{
    font-family: 'Red Hat Display', sans-serif;
    font-weight: 500;
    font-size: 20px;
    letter-spacing: 1px;
    color: #747474;
    max-width: 300px;
    line-height: 26px;
    display: inline-block;
    margin-left: 20px;
}

header #fraseTitulo{
    grid-area: frase;
    justify-self: center;
    margin-bottom: 80px;
}

header #fraseTitulo h1{
    font-family: 'Red Hat Display', sans-serif;
    font-weight: 700;
    line-height: 60px;
    letter-spacing: 2px;
    text-align: left;
    font-size: 45px;
    max-width: 500px;;
    background: #fff;
}

header #enfeite{
    -webkit-box-sizing: border-box; /* Safari/Chrome, other WebKit */
    -moz-box-sizing: border-box;    /* Firefox, other Gecko */
    box-sizing: border-box;

    grid-area: nav;
    display: flex;
    height: 130px;  
    background-image: linear-gradient(149.81deg, #FF0000 8.11%, rgba(133, 0, 0, 0.92) 69.3%);
    box-shadow: -10px 10px 50px rgba(0, 0, 0, 0.1);
    border-radius: 30px;
    transform: translateX(-15px);
}
header #enfeite nav{
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    height: 100px;
    mix-blend-mode: normal;
    z-index: 1;
    transform: translateY(15px);
    column-gap: 80px;
}

header #enfeite nav a{
    font-family: 'Red Hat Display', sans-serif;
    font-weight: 900;
    font-size: 20px;
    text-decoration: none;
    color: #fff;
}

</style>

<header>
    <div id="container-logo">
        <a href="home"><img src="Assets/IMG/Logo Vermelho - Fundo Branco 1.png" alt="logo da R&J Utilidades"></a>
        <p>Papelaria, escritório, utilidades, miudezas...</p>
    </div>

    <div id="enfeite">
        <nav>
            <a href="home">INÍCIO</a>
            <a href="produtos">PRODUTOS</a>
            <a href="contato">CONTATO</a>
            <a href="favoritos">
            <svg width="36" height="30" viewBox="0 0 36 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g filter="url(#filter0_i_146_15)">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M33.1504 2.65507C36.95 6.19516 36.95 11.9348 33.1504 15.4749L31.7131 16.8141L31.7443 16.8432L17.985 29.663L2.84966 15.5612C-0.949883 12.0211 -0.949889 6.28148 2.84965 2.74139C6.6492 -0.798702 12.8095 -0.798703 16.609 2.74139L17.9537 3.99427L19.3911 2.65507C23.1906 -0.885023 29.3509 -0.885023 33.1504 2.65507Z" fill="white"/>
                </g>
                <defs>
                <filter id="filter0_i_146_15" x="0" y="0" width="36" height="33.663" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                <feOffset dy="4"/>
                <feGaussianBlur stdDeviation="2.5"/>
                <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"/>
                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.11 0"/>
                <feBlend mode="normal" in2="shape" result="effect1_innerShadow_146_15"/>
                </filter>
                </defs>
            </svg>
            </a>
        </nav>
    </div>
</header>