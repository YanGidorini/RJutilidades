<style>
    .banner span {
        color: #000;
        background-image: linear-gradient(rgba(255, 255, 255, 0.45) 0%, rgba(255, 255, 255, 0.45) 100%), linear-gradient(135deg, rgba(255, 252, 245, 1) 0%, rgba(232, 220, 190, 1) 100%);
    }

    .products-header {
        margin-top: 50px;
    }

    nav.categories {
        transform: translateY(0px);
    }

    header h1 {
        display: none;
    }

    header #ornament {
        height: 130px;
        background-image: url(./Assets/IMG/ornament-form.png);
        background-image:
            -webkit-image-set(url(./Assets/IMG/ornament-form.webp) type("image/webp"),
                url(./Assets/IMG/ornament-form.png) type("image/png"));
        background-image:
            image-set(url(./Assets/IMG/ornament-form.webp) type("image/webp"),
                url(./Assets/IMG/ornament-form.png) type("image/png"));
    }

    header #ornament nav ul.menu li:nth-child(2)::before {
        content: "";
        position: absolute;
        top: 50%;
        right: 94%;
        transform: translateY(-50%);
        display: block;
        height: 6px;
        width: 20px;
        background-color: #fff;
        border-radius: 50px;
        z-index: -1;
    }

    @media all and (max-width: 960px) {
        .banner span {
            width: 480px;
        }
    }

    @media all and (max-width: 620px) {
        .banner span {
            font-size: 26px;
            width: 430px;
        }

        header #ornament {
            height: 80px;
        }

        nav.categories a[href="Papelaria"]::before {
            left: auto;
            right: -40px;
            transform: scaleX(-1);
        }
    }

    @media all and (max-width: 480px) {
        .banner span {
            font-size: 19px;
            width: 330px;
        }
    }

    @media all and (max-width: 370px) {
        .banner span {
            font-size: 16px;
            width: 280px;
        }
    }
</style>

<title>RJ Utilidades | Artigos para Festa e Brinquedos</title>

<div class="box">
    <picture class="banner">
        <span>Artigos de Festa e Brinquedos</span>
        <source srcset="./Assets/IMG/banners/festa.webp" type="image/webp">
        <img src="./Assets/IMG/banners/festa.png">
    </picture>

    <div class="box2">
        <nav class="categories">
            <a href="Papelaria">Papelaria, Escritório e Escolar</a>
            <a href="Utensilios-Cozinha">Utensílios de Cozinha</a>
            <a href="Miudezas">Miudezas</a>
        </nav>

        <section class="products">
            <div class="products-header">
                <div class="filter">
                    <p>Ordenar por: &nbsp;&nbsp;<span class="option">Recentes</span></p>
                    <ul id="filters">
                        <li>Menor Preço</li>
                        <li>Maior Preço</li>
                        <li>Recentes</li>
                    </ul>
                </div>

                <div class="src-bar">
                    <svg role="img" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" aria-labelledby="searchIconTitle">
                        <title id="searchIconTitle">Search</title>
                        <path d="M14.4121122,14.4121122 L20,20"></path>
                        <circle cx="10" cy="10" r="6"></circle>
                    </svg>
                    <input type="text" name="search" id="search-bar" placeholder="Buscar">
                </div>
            </div>

            <div class="products-container">
                <h3 class="not-found">Produto não encontrado</h3>
                <div class="product-card" data-id="1" data-date="2022, 3, 2">
                    <div class="content-card">
                        <picture class="product-img">
                            <source srcset="" type="image/webp">
                            <img src="./Assets/IMG/produtos/photo.png" alt="imagem produto">
                        </picture>
                        <svg class="heart" role="img" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M12,21 L10.55,19.7051771 C5.4,15.1242507 2,12.1029973 2,8.39509537 C2,5.37384196 4.42,3 7.5,3 C9.24,3 10.91,3.79455041 12,5.05013624 C13.09,3.79455041 14.76,3 16.5,3 C19.58,3 22,5.37384196 22,8.39509537 C22,12.1029973 18.6,15.1242507 13.45,19.7149864 L12,21 Z"></path>
                        </svg>
                        <h2>Lápis de Escrever Faber-Castell 60 cores</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eu nisi quis dui facilisis faucibus et fermentum urna. Vivamus finibus.</p>
                        <span>R$ 13,80</span>
                    </div>
                </div>

                <div class="product-card" data-id="2" data-date="2021, 6, 15">
                    <div class="content-card">
                        <picture class="product-img">
                            <source srcset="./Assets/IMG/produtos/photo.webp" type="image/webp">
                            <img src="./Assets/IMG/produtos/photo.png" alt="imagem produto">
                        </picture>
                        <svg class="heart" role="img" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M12,21 L10.55,19.7051771 C5.4,15.1242507 2,12.1029973 2,8.39509537 C2,5.37384196 4.42,3 7.5,3 C9.24,3 10.91,3.79455041 12,5.05013624 C13.09,3.79455041 14.76,3 16.5,3 C19.58,3 22,5.37384196 22,8.39509537 C22,12.1029973 18.6,15.1242507 13.45,19.7149864 L12,21 Z"></path>
                        </svg>
                        <h2>Caneta Bic Azul</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eu nisi quis dui facilisis faucibus et fermentum urna. Vivamus finibus.</p>
                        <span>R$ 10,80</span>
                    </div>
                </div>

                <div class="product-card" data-id="3" data-date="2021, 6, 17">
                    <div class="content-card">
                        <picture class="product-img">
                            <img src="./Assets/IMG/produtos/photo.png" alt="imagem produto">
                        </picture>
                        <svg class="heart" role="img" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M12,21 L10.55,19.7051771 C5.4,15.1242507 2,12.1029973 2,8.39509537 C2,5.37384196 4.42,3 7.5,3 C9.24,3 10.91,3.79455041 12,5.05013624 C13.09,3.79455041 14.76,3 16.5,3 C19.58,3 22,5.37384196 22,8.39509537 C22,12.1029973 18.6,15.1242507 13.45,19.7149864 L12,21 Z"></path>
                        </svg>
                        <h2>Borracha Cis</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eu nisi quis dui facilisis faucibus et fermentum urna. Vivamus finibus.</p>
                        <span>R$ 9,80</span>
                    </div>
                </div>

                <div class="product-card" data-id="4" data-date="2022, 1, 20">
                    <div class="content-card">
                        <picture class="product-img">
                            <img src="./Assets/IMG/produtos/photo.png" alt="imagem produto">
                        </picture>
                        <svg class="heart" role="img" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M12,21 L10.55,19.7051771 C5.4,15.1242507 2,12.1029973 2,8.39509537 C2,5.37384196 4.42,3 7.5,3 C9.24,3 10.91,3.79455041 12,5.05013624 C13.09,3.79455041 14.76,3 16.5,3 C19.58,3 22,5.37384196 22,8.39509537 C22,12.1029973 18.6,15.1242507 13.45,19.7149864 L12,21 Z"></path>
                        </svg>
                        <h2>Papel Sulfite</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eu nisi quis dui facilisis faucibus et fermentum urna. Vivamus finibus.</p>
                        <span>R$ 57,80</span>
                    </div>
                </div>

                <div class="product-card" data-id="5" data-date="2022, 2, 15">
                    <div class="content-card">
                        <picture class="product-img">
                            <img src="./Assets/IMG/produtos/photo.png" alt="imagem produto">
                        </picture>
                        <svg class="heart" role="img" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M12,21 L10.55,19.7051771 C5.4,15.1242507 2,12.1029973 2,8.39509537 C2,5.37384196 4.42,3 7.5,3 C9.24,3 10.91,3.79455041 12,5.05013624 C13.09,3.79455041 14.76,3 16.5,3 C19.58,3 22,5.37384196 22,8.39509537 C22,12.1029973 18.6,15.1242507 13.45,19.7149864 L12,21 Z"></path>
                        </svg>
                        <h2>Caderneta 150 folhas</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eu nisi quis dui facilisis faucibus et fermentum urna. Vivamus finibus.</p>
                        <span>R$ 1,80</span>
                    </div>
                </div>

                <div class="product-card" data-id="6" data-date="2022, 3, 1">
                    <div class="content-card">
                        <picture class="product-img">
                            <img src="./Assets/IMG/produtos/photo.png" alt="imagem produto">
                        </picture>
                        <svg class="heart" role="img" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M12,21 L10.55,19.7051771 C5.4,15.1242507 2,12.1029973 2,8.39509537 C2,5.37384196 4.42,3 7.5,3 C9.24,3 10.91,3.79455041 12,5.05013624 C13.09,3.79455041 14.76,3 16.5,3 C19.58,3 22,5.37384196 22,8.39509537 C22,12.1029973 18.6,15.1242507 13.45,19.7149864 L12,21 Z"></path>
                        </svg>
                        <h2>Lapiseira 0,5mm</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eu nisi quis dui facilisis faucibus et fermentum urna. Vivamus finibus.</p>
                        <span>R$ 6,80</span>
                    </div>
                </div>

                <div class="product-card" data-id="7" data-date="2021, 11, 2">
                    <div class="content-card">
                        <picture class="product-img">
                            <img src="./Assets/IMG/produtos/photo.png" alt="imagem produto">
                        </picture>
                        <svg class="heart" role="img" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M12,21 L10.55,19.7051771 C5.4,15.1242507 2,12.1029973 2,8.39509537 C2,5.37384196 4.42,3 7.5,3 C9.24,3 10.91,3.79455041 12,5.05013624 C13.09,3.79455041 14.76,3 16.5,3 C19.58,3 22,5.37384196 22,8.39509537 C22,12.1029973 18.6,15.1242507 13.45,19.7149864 L12,21 Z"></path>
                        </svg>
                        <h2>Caderno 15 matérias 350 folhas</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eu nisi quis dui facilisis faucibus et fermentum urna. Vivamus finibus.</p>
                        <span>R$ 4,80</span>
                    </div>
                </div>
                <!-- aqui vão os produtos -->
            </div>
    </div>
    </section>
</div>
</div>