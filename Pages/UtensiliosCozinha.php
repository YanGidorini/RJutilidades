<style>
    nav.categories{
        transform: translateY(-150px);
    }
    .banner{
        margin: 0 15px;
        transform: translateY(-130px);
        z-index: -1;
        border-radius: 30px;
    }
    .products-header{
        transform: translateY(-110px);
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
</style>

<title>Cozinha</title>


<img class="banner" src="../RJutilidades/Assets/IMG/banners/cozinha.png">

<nav class="categories">
    <a href="Papelaria">Papelaria, Escritório e Escolar</a>
    <a href="Artigos-Festa">Artigos de Festa e Brinquedos</a>
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
    </div>