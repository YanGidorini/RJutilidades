<style>
    /* header home*/
    header {
        display: grid;
        grid-template-areas:
            "logo nav"
            "frase nav";
        grid-template-columns: 1fr 1fr;
    }

    header #container-logo {
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

    header #container-logo img {
        margin-left: 30px;
        width: 120px;
        height: 65px;
    }

    header #container-logo p {
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

    header #fraseTitulo {
        grid-area: frase;
        justify-self: center;
        margin-bottom: 80px;
    }

    header #fraseTitulo h1 {
        font-family: 'Red Hat Display', sans-serif;
        font-weight: 700;
        line-height: 60px;
        letter-spacing: 2px;
        text-align: left;
        font-size: 45px;
        max-width: 500px;
        ;
        background: #fff;
    }

    header #enfeite {
        -webkit-box-sizing: border-box;
        /* Safari/Chrome, other WebKit */
        -moz-box-sizing: border-box;
        /* Firefox, other Gecko */
        box-sizing: border-box;
        grid-area: nav;
        display: flex;
        height: 550px;
        background-color: #ff0000;
        background-image: url(../RJutilidades/Assets/IMG/enfeite.svg);
        background-clip: border-box;
        background-repeat: no-repeat;
        background-size: cover;
        box-shadow: -10px 10px 50px rgba(0, 0, 0, 0.1);
        border-radius: 30px;
        transform: translateX(-15px);
    }

    header #enfeite #btnMobile {
        display: none;
        font-family: 'Red Hat Display', sans-serif;
        font-weight: 900;
        font-size: 20px;
        text-decoration: none;
        line-height: 26px;
        letter-spacing: 0.05em;
        color: #fff;
        background: none;
    }

    header #enfeite nav {
        display: flex;
        justify-content: flex-end;
        width: 100%;
    }

    header #enfeite nav .menu {
        display: flex;
        align-content: center;
        justify-content: center;
        height: 100px;
        z-index: 1;
        transform: translateY(15px);
        column-gap: 70px;
        row-gap: 2px;
        flex-flow: row wrap
    }

    header #enfeite nav .menu a {
        font-family: 'Red Hat Display', sans-serif;
        font-weight: 900;
        font-size: 20px;
        text-decoration: none;
        line-height: 26px;
        letter-spacing: 0.05em;
        color: #fff;
    }

    header #enfeite nav a[href="favoritos"] {
        font-size: 35px;
    }

    @media all and (min-width: 1920px) {
        header {
            max-width: 1920px;
            margin: 0 auto;
        }

        header #container-logo {
            border-radius: 30px;
        }
    }

    @media all and (max-width: 1440px) {
        header #enfeite nav .menu {
            column-gap: 50px;
        }
    }

    @media all and (max-width: 1280px) {
        header #container-logo {
            width: 100%;
        }
    }

    @media all and (max-width: 1080px) {
        header #enfeite nav .menu {
            /* display: none; */
            display: block;
            width: 50%;
            height: auto;
            position: absolute;
            top: 40px;
            right: 10px;
            background-color: rgba(256, 256, 256, .6);
            border-radius: 5px;
        }

        header #enfeite nav .menu li a {
            display: block;
            padding: 5px 0 5px 10px;
            border-radius: 5px;
        }

        header #enfeite nav .menu li a:hover {
            background-color: rgba(256, 256, 256, .6);
        }

        header #enfeite nav.menuAtivo .menu {
            display: flex;
        }

        header #enfeite nav #btnMobile {
            display: flex;
        }
    }
</style>


<title>Home</title>
<header>
    <div id="container-logo">
        <a href="home"><img src="Assets/IMG/Logo Vermelho - Fundo Branco 1.png" alt="logo da R&J Utilidades"></a>
        <p>Papelaria, escritório, utilidades, miudezas...</p>
    </div>

    <div id="fraseTitulo">
        <h1>Tudo o que precisa, encontra aqui!</h1>
    </div>

    <div id="enfeite">
        <nav>
            <button id="btnMobile">Menu<span></span></button>
            <ul class="menu">
                <li><a href="home">INÍCIO</a></li>
                <li><a href="produtos">PRODUTOS</a></li>
                <li><a href="contato">CONTATO</a></li>
                <li><a href="favoritos">
                        <svg width="36" height="30" viewBox="0 0 36 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g filter="url(#filter0_i_146_15)">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M33.1504 2.65507C36.95 6.19516 36.95 11.9348 33.1504 15.4749L31.7131 16.8141L31.7443 16.8432L17.985 29.663L2.84966 15.5612C-0.949883 12.0211 -0.949889 6.28148 2.84965 2.74139C6.6492 -0.798702 12.8095 -0.798703 16.609 2.74139L17.9537 3.99427L19.3911 2.65507C23.1906 -0.885023 29.3509 -0.885023 33.1504 2.65507Z" fill="white" />
                            </g>
                            <defs>
                                <filter id="filter0_i_146_15" x="0" y="0" width="36" height="33.663" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                    <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                    <feOffset dy="4" />
                                    <feGaussianBlur stdDeviation="2.5" />
                                    <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
                                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.11 0" />
                                    <feBlend mode="normal" in2="shape" result="effect1_innerShadow_146_15" />
                                </filter>
                            </defs>
                        </svg>
                    </a></li>
            </ul>
        </nav>
    </div>
</header>
<script src="Assets/JS/script.js"></script>