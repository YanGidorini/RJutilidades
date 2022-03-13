<title>Favoritos</title>
<style>
    header h1 {
        display: none;
    }

    header #ornament {
        height: 130px;
        background-image: url(./Assets/IMG/ornament-form.png);
        background-image:
            image-set(url(./Assets/IMG/ornament-form.webp) type("image/webp"),
                url(./Assets/IMG/ornament-form.png) type("image/png"));
    }

    .fav-title {
        margin: 30px 30px 0px 30px;
    }

    .fav-title::after {
        content: "";
        display: block;
        height: 2px;
        width: 100%;
        background-color: #dfdfdf;
        margin: 30px 0px;
    }

    .fav-title h2 {
        font-family: 'Red Hat Display', sans-serif;
        font-weight: 700;
        line-height: 60px;
        letter-spacing: 2px;
        font-size: 45px;
        width: fit-content;
    }

    .fav-title p {
        font-family: 'Red Hat Text', sans-serif;
        font-weight: 700;
        font-size: 18px;
        color: rgba(0, 0, 0, .3);
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
    }
    .fav-title p span{
        align-self: end;
    }
    .fav-title button{
        font-family: 'Red Hat Display', sans-serif;
        font-size: 16px;
        font-weight: 800;
        line-height: 23px;
        letter-spacing: 2px;
        width: fit-content;
        padding: 5px 20px;
        border-radius: 10px;
        color: #fff;
        background: #75CC67;
        border: 2px solid #66B859;
        cursor: pointer;
    }

    section.products {
        margin-top: 10px;
        margin-bottom: 40px;
    }

    .products .products-container {
        margin: 0 auto;
    }

    .products .products-container .no-itens {
        font-family: 'Red Hat Display', sans-serif;
        font-weight: 700;
        line-height: 60px;
        letter-spacing: 2px;
        font-size: 40px;
        text-align: center;
    }

    .products .products-container .no-itens h1 {
        padding: 0 15px;
    }
    .products .products-container .no-itens a[href="home"]{
        color: rgba(0, 0, 0, 0.5);
        font-size: 20px;
    }
    .products .products-container .no-itens a[href="home"]:hover{
        text-decoration: underline;

    }

    @media all and (max-width: 960px) {
        .banner span {
            width: 480px;
        }
    }

    @media all and (max-width: 812px) {
        .fav-title h2 {
            font-size: 40px;
        }
    }

    @media all and (max-width: 620px) {
        header #ornament {
            height: 80px;
        }

        .banner span {
            font-size: 26px;
            width: 380px;
        }

        .fav-title h2 {
            font-size: 36px;
        }

        .products .products-container .no-itens {
            font-size: 32px;
        }
    }


    @media all and (max-width: 480px) {
        .banner span {
            font-size: 19px;
            width: 300px;
        }

        .fav-title::after {
            margin: 20px 0px;
        }
        .fav-title p{
            flex-direction: column;
        }
        .fav-title p span{
            align-self: flex-start;
        }
        .fav-title p button{
            margin-top: 10px;
        }
    }

    @media all and (max-width: 370px) {
        .banner span {
            font-size: 18px;
            width: 280px;
        }
    }
</style>

<div class="fav-title">
    <h2>Itens salvos</h2>
    <p>
        <span class="qtd"></span>
        <button id="favorite-button">Enviar Produtos</button>
    </p>

</div>

<section class="products">
    <div class="products-container">
        <div class="no-itens">
            <h1>Nenhum produto salvo</h1>
            <a href="home">Ver Produtos</a>
        </div>
    </div>
</section>

<script type="module">
    import {
        loadFavorite,
        removeFavorite
    } from "./Assets/JS/modules/unfavorite.js";
    import * as menu from './Assets/JS/modules/mobileMenu.js';
    import * as contact from './Assets/JS/modules/contact.js';

    loadFavorite();
    removeFavorite();

    contact.titleReplace();
</script>