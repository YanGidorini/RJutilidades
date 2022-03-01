<style>
    .banner span{
        background-image: linear-gradient(rgba(58, 58, 58, 0.8) 0%, rgba(58, 58, 58, 0.73) 100%), linear-gradient(135deg, rgba(224,181,137,1) 0%, rgba(176,199,227,1) 100%);
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
    }

    @media all and (max-width: 960px){
        .banner span{
            width: 480px;
        }
    }

    @media all and (max-width: 620px){
        .banner span{
            font-size: 26px;
            width: 380px;
        }
    }


    @media all and (max-width: 480px){
        .banner span{
            font-size: 19px;
            width: 300px;
        }
    }

    @media all and (max-width: 370px){
        .banner span{
            font-size: 18px;
            width: 280px;
        }
    }
</style>

<title>Miudezas</title>

<div class="box">
    <div class="banner">
        <span>Miudezas</span>
        <img srcset="" src="../RJutilidades/Assets/IMG/banners/miudezas.png">
    </div>
            
    <div class="box2">
        <nav class="categories">
            <a href="Papelaria">Papelaria, Escritório e Escolar</a>
            <a href="Artigos-Festa">Artigos de Festa e Brinquedos</a>
            <a href="Utensilios-Cozinha">Utensílios de Cozinha</a>
        </nav>

        <div class="products-header">
            <div class="filter">
                <p>Ordenar por: &nbsp;<span class="option">Menor Preço</span> </p>
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