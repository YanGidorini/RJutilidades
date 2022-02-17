<style>
    .banner span{
        color: #000;
        background-image: linear-gradient(rgba(255, 255, 255, 0.45) 0%, rgba(255, 255, 255, 0.45) 100%), linear-gradient(135deg, rgba(255,252,245,1) 0%, rgba(232,220,190,1) 100%);
    }
    .products-header{
       margin-top: 50px;
    }
    nav.categories{
        transform: translateY(0px);
    }
    header h1{
        display: none;
    }
    header #ornament{
        height: 130px;
        background-image: url(../RJutilidades/Assets/IMG/ornament-form.png);
    }

    @media all and (max-width: 960px){
        .banner span{
            width: 480px;
        }
    }

    @media all and (max-width: 620px){
        .banner span{
            font-size: 26px;
            width: 430px;
        }
        header #ornament {
            height: 100px;
        }
        nav.categories a[href="Papelaria"]::before{
            left: auto;
            right: -40px;
            transform: scaleX(-1);
        }
    }

    @media all and (max-width: 480px){
        .banner span{
            font-size: 19px;
            width: 330px;
        }
    }

    @media all and (max-width: 370px){
        .banner span{
            font-size: 16px;
            width: 280px;
        }
    }
</style>

<title>Artigos de Festa e Brinquedos</title>

<div class="box">
    <div class="banner">
        <span>Artigos de Festa e Brinquedos</span>
        <img  src="../RJutilidades/Assets/IMG/banners/festa.png">
    </div>
            
    <div class="box2">
        <nav class="categories">
            <a href="Papelaria">Papelaria, Escritório e Escolar</a>
            <a href="Utensilios-Cozinha">Utensílios de Cozinha</a>
            <a href="Miudezas">Miudezas</a>
        </nav>

        <div class="products-header">
            <div class="filter">
                <p>Ordenar por: &nbsp; <span class="option">Menor Preço</span> </p>
                <ul id="filters" >
                    <li>Menor Preço</li> 
                    <li>Maior Preço</li>
                </ul>
            </div>
            
            <div class="src-bar">
                <svg role="img" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" aria-labelledby="searchIconTitle">
                    <title id="searchIconTitle">Search</title>
                    <path d="M14.4121122,14.4121122 L20,20"></path>
                    <circle cx="10" cy="10" r="6"></circle>
                </svg>
                <input type="text" name="search" id="search-bar" placeholder="Buscar" onkeydown="searchProduct()">
            </div>

            <!-- aqui vão os produtos -->
        </div>
    </div>
</div>