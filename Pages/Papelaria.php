<style>
    .banner span{
        color: #000;
        background-image: linear-gradient(#fff, #fff), var(--gray-gradient);
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

    @media all and (max-width: 620px){
        header #ornament {
            height: 100px;
        }
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

<title>Papelaria, Escritório e Escolar</title>

<div class="box">
    <div class="banner">
        <span>Papelaria, Escritório e Escolar</span>
        <img  src="../RJutilidades/Assets/IMG/banners/papelaria.png">
    </div>
            
    <div class="box2">
        <nav class="categories">
            <a href="Artigos-Festa">Artigos de Festa e Brinquedos</a>
            <a href="Utensilios-Cozinha">Utensílios de Cozinha</a>
            <a href="Miudezas">Miudezas</a>
        </nav>

        <div class="products-header">
            <div class="filter">
                <p>Ordenar por: &nbsp; <span class="option">Menor Preço</span> </p>
                <ul id="filters" >
                    <li>Menor Preço</li> 
                    <li>Maior Preço</li>
                    <li>Populares</li>
                    <li>Recentes</li>
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