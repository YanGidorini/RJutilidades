<style>
    .banner span{
        background-image: linear-gradient(rgba(45,146,168,0.8) 0%, rgba(45,146,168,0.8) 100%), linear-gradient(135deg, rgba(224,181,137,0.5) 0%, rgba(176,199,227,1) 100%);
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
        background-image:
            -webkit-image-set(
                url(../RJutilidades/Assets/IMG/ornament-form.webp)  type("image/webp"),
                url(../RJutilidades/Assets/IMG/ornament-form.png) type("image/png")               
            );
        background-image:
            image-set(
                url(../RJutilidades/Assets/IMG/ornament-form.webp)  type("image/webp"),
                url(../RJutilidades/Assets/IMG/ornament-form.png) type("image/png")               
            );
    }

    header #ornament nav ul.menu li:nth-child(2)::before{
		content: "";
		position: absolute;
		top: 50%; right: 94%;
		transform: translateY(-50%);
        display: block;
        height: 6px;
        width: 20px;
        background-color: #fff;
		border-radius: 50px;
        z-index: -1;
	}

    @media all and (max-width: 620px){
        header #ornament {
            height: 80px;
        }
        nav.categories a[href="Miudezas"]::before{
            left: -25px;
            right: auto;
        }
    }
</style>

<title>Cozinha</title>

<div class="box">
    <div class="banner">
        <span>Utensílios de Cozinha</span>
        <img srcset="" src="../RJutilidades/Assets/IMG/banners/cozinha.png">
    </div>
            
    <div class="box2">
        <nav class="categories">
            <a href="Papelaria">Papelaria, Escritório e Escolar</a>
            <a href="Artigos-Festa">Artigos de Festa e Brinquedos</a>
            <a href="Miudezas">Miudezas</a>
        </nav>

        <div class="products-header">
            <div class="filter">
                <p>Ordenar por: &nbsp;&nbsp;<span class="option">Recentes</span></p>
                <ul id="filters">
                    <li>Recentes</li>
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
