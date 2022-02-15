<style>
    /* header home*/
    header {
        display: grid;
        grid-template-areas:
            "logo nav"
            "phrase nav";
        grid-template-columns: 1fr 1fr;
    }

    header #logo-container {
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

    header #logo-container img {
        margin-left: 30px;
        width: 120px;
        height: 65px;
    }

    header #logo-container p {
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

    header h1 {
        grid-area: phrase;
        justify-self: center;
        margin: 0px 10px 80px 30px;
        font-family: 'Red Hat Display', sans-serif;
        font-weight: 700;
        line-height: 60px;
        letter-spacing: 2px;
        text-align: left;
        font-size: 45px;
        max-width: 500px;
        background: #fff;
    }

    header #ornament {
        -webkit-box-sizing: border-box;
        /* Safari/Chrome, other WebKit */
        -moz-box-sizing: border-box;
        /* Firefox, other Gecko */
        box-sizing: border-box;
        grid-area: nav;
        height: 550px;
        background-color: #ff0000;
        background-image: url(../RJutilidades/Assets/IMG/ornament.png);
        background-clip: border-box;
        background-repeat: no-repeat;
        background-size: cover;
        box-shadow: -10px 10px 50px rgba(0, 0, 0, 0.1);
        border-radius: 30px;
        transform: translateX(-15px);
    }

    header #ornament nav {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100px;
        width: 100%;
        transform: translateY(15px);
    }

    header nav svg {
        width: 38px;
        height: 38px;
        stroke: none;
        stroke-width: 1;
        stroke-linecap: square;
        stroke-linejoin: miter;
        fill: #FFF;
    }

    header #ornament nav ul.menu>li:last-child a span {
        display: none;
        font-family: 'Red Hat Display', sans-serif;
        font-weight: 900;
        font-size: 20px;
        text-decoration: none;
        line-height: 26px;
        letter-spacing: 0.05em;
    }


    header #ornament #btn-mobile {
        display: none;
        font-family: 'Red Hat Display', sans-serif;
        font-weight: 900;
        font-size: 20px;
        text-decoration: none;
        line-height: 26px;
        letter-spacing: 0.05em;
        color: #fff;
        background: none;
        gap: 10px;
        cursor: pointer;
    }

    header #ornament nav #btn-mobile span {
        width: 20px;
        border-top: 4px solid;
        color: #fff;
        border-radius: 4px;

    }

    header #ornament nav #btn-mobile span::after,
    header #ornament nav #btn-mobile span::before {
        content: "";
        width: 20px;
        height: 4px;
        margin-top: 5px;
        background: currentColor;
        display: block;
        transition: .3s;
        position: relative;
        border-radius: 0px 0px 4px 4px;
    }

    header #ornament nav #btn-mobile span::before {
        border-radius: 4px;
    }



    header #ornament nav ul.menu {
        display: flex;
        align-items: center;
        column-gap: 70px;
    }

    header #ornament nav ul.menu li,
    header #ornament nav ul.menu li a {
        font-family: 'Red Hat Display', sans-serif;
        font-weight: 900;
        font-size: 20px;
        text-decoration: none;
        line-height: 26px;
        letter-spacing: 0.05em;
        color: #fff;
    }

    header #ornament nav a[href="favoritos"] {
        font-size: 35px;
    }

    header #ornament nav ul.menu>li:nth-child(2) {
        position: relative;
        padding: 15px;
        border-radius: 15px 15px 0px 0px;
        transition: background-color .4s ease-in-out;
    }

    header #ornament nav ul.menu>li:nth-child(2):hover {
        background-color: rgba(255, 255, 255, 0.33);
        box-shadow: 0px 15px 80px 20px rgba(0, 0, 0, 0.26);
    }

    header #ornament nav ul.menu>li:nth-child(2):hover .submenu {
        opacity: 1;
        pointer-events: auto;
    }

    header #ornament nav ul.submenu {
        transition: opacity .2s ease-in-out;
        opacity: 0;
        pointer-events: none;
        position: absolute;
        background-color: #fff;
        width: max-content;
        padding: 10px 25px;
        left: 0px;
        top: 80%;
        border-radius: 15px;
        box-shadow: 0px 15px 80px 20px rgba(0, 0, 0, 0.26);
    }

    header #ornament nav ul.submenu li {
        border-bottom: solid 1px #dfdfdf;
    }

    header #ornament nav ul.submenu li:hover a {
        font-size: 20px;
    }

    header #ornament nav ul.submenu li:hover {
        background-color: rgba(0, 0, 0, 0.02);
        cursor: pointer;
    }

    header #ornament nav ul.submenu li:last-child {
        border: none;
    }

    header #ornament nav ul.submenu li a {
        display: inline-block;
        font-family: 'Red Hat Text';
        font-style: normal;
        font-weight: normal;
        font-size: 18px;
        line-height: 24px;
        color: #000;
        padding: 10px 0px 10px 0px;
    }

    @media all and (min-width: 1920px) {
        header {
            max-width: 1920px;
            margin: 0 auto;
        }

        header #logo-container {
            border-radius: 30px;
        }
    }

    @media all and (max-width: 1440px) {
        header #ornament nav ul.menu {
            column-gap: 50px;
        }
    }

    @media all and (max-width: 1280px) {
        header #logo-container {
            width: 100%;
        }

        header #ornament nav ul.menu {
            column-gap: 40px;
        }
    }

    @media all and (max-width: 1080px) {


        header #ornament nav {
            justify-content: flex-end;
        }

        header nav svg {
            fill: #000;
        }

        header #ornament nav ul.menu {
            display: none;
        }

        header #ornament nav ul.menu li {
            width: 100%;
        }

        header #ornament nav ul.menu li a {
            box-sizing: border-box;
            display: block;
            width: 100%;
            color: #000;
            padding: 10px;
        }

        header #ornament nav ul.menu li:nth-child(2) {
            /* cor do PRODUTOS */
            color: #000;
        }

        header #ornament nav ul.menu>li:first-child a:hover {
            background-color: #dfdfdf;
            border-radius: 15px 15px 0px 0px;
        }

        header #ornament nav ul.menu>li:nth-child(3) a:hover {
            background-color: #dfdfdf;
        }

        header #ornament nav ul.menu>li:last-child a:hover {
            background-color: #dfdfdf;
            border-radius: 0px 0px 15px 15px;
        }

        header #ornament nav ul.menu>li:last-child a span {
            display: inline-block;
            color: #000;
        }

        header #ornament nav ul.menu>li:last-child a {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .fa-heart::before {
            font-size: 25px;
        }

        header #ornament nav.active-menu ul.menu {
            position: absolute;
            top: calc(100% - 30px);
            right: 10px;
            display: flex;
            flex-direction: column;
            background-color: rgba(256, 256, 256, 1);
            border-radius: 15px;
            box-shadow: 0px 15px 80px 20px rgba(0, 0, 0, 0.26);
        }

        header #ornament nav #btn-mobile {
            display: flex;
            align-items: center;
            margin-right: 40px;
        }

        header #ornament nav.active-menu #btn-mobile span {
            border-top-color: transparent;
        }

        header #ornament nav.active-menu #btn-mobile span::after {
            transform: rotate(135deg);
            top: -9px;
            border-radius: 4px;
        }

        header #ornament nav.active-menu #btn-mobile span::before {
            transform: rotate(-135deg);
        }

        header #ornament nav ul.menu>li:nth-child(2) {
            padding: 5px 0px 0px 10px;
            box-sizing: border-box;
            border-radius: 5px;
            transition: none;
        }

        header #ornament nav ul.submenu {
            transition: none;
            opacity: 1;
            pointer-events: none;
            position: relative;
            background: none;
            padding: 10px;
            padding-left: 0px;
            left: 0px;
            top: 0px;
            border-radius: 0px;
            box-shadow: none;
        }

        header #ornament nav ul.menu li:nth-child(2):hover {
            box-shadow: none;
        }

        header #ornament nav ul.submenu li:hover {
            background-color: #dfdfdf;
        }

        header #ornament nav ul.submenu li:hover a {
            font-size: 18px;
        }
    }

    @media all and (max-width: 812px) {
        header {
            grid-template-areas:
                "logo nav"
                "phrase phrase";
        }

        header #ornament {
            height: 130px;
        }

        header h1 {
            margin-top: 40px;
            margin-bottom: 40px;
            justify-self: left;
            margin-left: 80px;
            font-size: 40px;
            line-height: 50px;
        }
    }

    @media all and (max-width: 752px) {
        header #logo-container p {
            font-size: 18px;
            line-height: 21px;
        }
    }

    @media all and (max-width: 620px) {
        header {
            grid-template-areas:
                "logo nav"
                "phrase phrase";
            margin-top: 10px;
        }

        header h1 {
            margin: 40px 10px 40px 30px;
            font-size: 36px;
            line-height: 45px;
        }

        header #ornament {
            height: 100px;
            box-shadow: 0px 10px 40px rgba(0, 0, 0, 0.2);
            border-radius: 0px 20px 20px 0px;
            margin-right: 15px;
            transform: translateX(0px);
        }

        header #logo-container {
            justify-content: center;
            width: 100%;
            transform: translateY(0px);
            box-shadow: 0px 10px 40px rgba(0, 0, 0, 0.1);
            z-index: 0;
            border-radius: 20px 0px 0px 20px;
            margin-left: 15px;
        }

        header #logo-container a {
            margin-right: 15px;
        }

        header #logo-container img {
            width: 109px;
            height: 59px;
            margin: 0px;
        }

        header #logo-container p {
            display: none;
        }

        header #ornament nav {
            transform: translateY(0px);

        }
    }
</style>


<title>Home</title>
<header>
    <div id="logo-container">
        <a href="home"><img src="Assets/IMG/red-logo-white-bg.png" alt="logo da R&J Utilidades"></a>
        <p>Papelaria, escritório, utilidades, miudezas...</p>
    </div>


    <h1>Tudo o que precisa, encontra aqui!</h1>


    <div id="ornament">
        <nav>
            <button id="btn-mobile">MENU<span></span></button>
            <ul class="menu">
                <li><a href="home">INÍCIO</a></li>
                <li>PRODUTOS
                    <ul class="submenu">
                        <li><a href="Papelaria">Papelaria, Escritório e Escolar</a></li>
                        <li><a href="Artigos-Festa">Artigos de Festa e Brinquedos</a></li>
                        <li><a href="Utensilios-Cozinha">Utensílios de Cozinha</a></li>
                        <li><a href="Miudezas">Miudezas</a></li>
                    </ul>
                </li>
                <li><a href="contato" id="contact-button">CONTATO</a></li>
                <li>
                    <a href="favoritos">
                        <span>FAVORITOS</span>
                        <svg role="img" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" aria-labelledby="favouriteIconTitle">
                            <title id="favouriteIconTitle">Favourite</title>
                            <path d="M12,21 L10.55,19.7051771 C5.4,15.1242507 2,12.1029973 2,8.39509537 C2,5.37384196 4.42,3 7.5,3 C9.24,3 10.91,3.79455041 12,5.05013624 C13.09,3.79455041 14.76,3 16.5,3 C19.58,3 22,5.37384196 22,8.39509537 C22,12.1029973 18.6,15.1242507 13.45,19.7149864 L12,21 Z"></path>
                        </svg>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</header>