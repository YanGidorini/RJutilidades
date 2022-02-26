<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA_Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Tudo o que precisa, encontra aqui! Papelaria, escritório, utilidades, miudezas...">
	<meta name="theme-color" content="#fff">
	<link rel="apple-touch-icon" href="">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,500;0,600;0,700;0,900;1,500;1,600;1,700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Red+Hat+Text:wght@400;700&display=swap" rel="stylesheet">
	<!-- swiper slider -->
	<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
	<!-- slick slider -->
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

	<link rel="stylesheet" type="text/css" href="../RJutilidades/Assets/CSS/reset.css">
	<link rel="stylesheet" type="text/css" href="../RJutilidades/Assets/CSS/style.css">
</head>

<body>


	<header>
		<div id="logo-container">
			<a href="home">
				<picture>
					<source srcset="Assets/IMG/red-logo-white-bg.webp" type="image/webp">
					<img src="Assets/IMG/red-logo-white-bg.png" alt="logo da R&J Utilidades">
				</picture>
			</a>
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
					<li><a id="contact-button">CONTATO</a></li>
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

	<?php
	$url = (isset($_GET['url'])) ? $_GET['url'] : 'Home';
	$url = str_replace('-', '', array_filter(explode('/', $url)));

	$file = 'Pages/' . ucfirst($url[0]) . '.php'; //define o filename

	if (is_file($file)) {
		include $file;
	} else {
		include 'Pages/Home.php';
	}
	?>
	https://api.whatsapp.com/send?phone=5511994105195&text=Nome%3A%20Yan%20%7C%20Tel%3A%20994105195%20%7C%20Interesse%20em%3A%20L%C3%A1pis%2C%20Cis%2C%20Folhas

	<ul class="social-media">
		<li>
			<picture>
				<source srcset="Assets/IMG/red-logo-white-bg.webp" type="image/webp">
				<img src="Assets/IMG/red-logo-white-bg.png" alt="logo da R&J Utilidades">
			</picture>
		</li>
		<li>
			<a rel="noreferrer" href="https://api.whatsapp.com/send?phone=5511952950248&text=Ol%C3%A1,%20vim%20pelo%20site!%20Pode%20me%20ajudar?" target="_blank" title="Whatsapp da loja">
				<div alt="Whatsapp da loja"></div>
			</a>
		</li>
		<li>
			<a rel="noreferrer" href="https://www.instagram.com/rjutilidadess/" target="_blank" title="Instagram da loja">
				<div alt="Instagram da loja"></div>
			</a>
		</li>
		<li>
			<a rel="noreferrer" href="">
				<div alt="Facebook da loja"></div>
			</a>
		</li>
	</ul>

	<footer>
		<ul>
			<li>Empresa: J. da S. N. Santana Limpeza - ME</li>
			<li>CNPJ: 29.588.052/0001-02</li>
			<li>Rua Jair de Godoy, N°56</li>
			<li>Vila Açoreana - Poá / São Paulo</li>
		</ul>
	</footer>

	<div class="contact-container" id="contact">
		<div class="contact-block">
			<button class="exit">X</button>
			<div class="favorites">
				<h2>Aqui estão os produtos que curtiu:</h2>
				<div class="swiper mySwiper2 favorite-items">
					<div class="swiper-wrapper">
						<div class="swiper-slide product-card">
							<div class="content-card">
								<picture class="product-img">
									<img src="../RJutilidades/Assets/IMG/produtos/photo.png" alt="imagem produto">
								</picture>
								<svg class="heart" role="img" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" aria-labelledby="favouriteIconTitle">
									<title id="favouriteIconTitle">Favourite</title>
									<path d="M12,21 L10.55,19.7051771 C5.4,15.1242507 2,12.1029973 2,8.39509537 C2,5.37384196 4.42,3 7.5,3 C9.24,3 10.91,3.79455041 12,5.05013624 C13.09,3.79455041 14.76,3 16.5,3 C19.58,3 22,5.37384196 22,8.39509537 C22,12.1029973 18.6,15.1242507 13.45,19.7149864 L12,21 Z"></path>
								</svg>
								<h2>Caderneta 150 folhas</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eu nisi quis dui facilisis faucibus et fermentum urna. Vivamus finibus.</p>
								<span>R$ 1,80</span>
							</div>
						</div>

						<div class="swiper-slide product-card">
							<div class="content-card">
								<picture class="product-img">
									<img src="../RJutilidades/Assets/IMG/produtos/photo.png" alt="imagem produto">
								</picture>
								<svg class="heart" role="img" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" aria-labelledby="favouriteIconTitle">
									<title id="favouriteIconTitle">Favourite</title>
									<path d="M12,21 L10.55,19.7051771 C5.4,15.1242507 2,12.1029973 2,8.39509537 C2,5.37384196 4.42,3 7.5,3 C9.24,3 10.91,3.79455041 12,5.05013624 C13.09,3.79455041 14.76,3 16.5,3 C19.58,3 22,5.37384196 22,8.39509537 C22,12.1029973 18.6,15.1242507 13.45,19.7149864 L12,21 Z"></path>
								</svg>
								<h2>Lapiseira 0,5mm</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eu nisi quis dui facilisis faucibus et fermentum urna. Vivamus finibus.</p>
								<span>R$ 6,80</span>
							</div>
						</div>

						<div class="swiper-slide product-card">
							<div class="content-card">
								<picture class="product-img">
									<img src="../RJutilidades/Assets/IMG/produtos/photo.png" alt="imagem produto">
								</picture>
								<svg class="heart" role="img" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" aria-labelledby="favouriteIconTitle">
									<title id="favouriteIconTitle">Favourite</title>
									<path d="M12,21 L10.55,19.7051771 C5.4,15.1242507 2,12.1029973 2,8.39509537 C2,5.37384196 4.42,3 7.5,3 C9.24,3 10.91,3.79455041 12,5.05013624 C13.09,3.79455041 14.76,3 16.5,3 C19.58,3 22,5.37384196 22,8.39509537 C22,12.1029973 18.6,15.1242507 13.45,19.7149864 L12,21 Z"></path>
								</svg>
								<h2>Caderno 15 matérias 350 folhas</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eu nisi quis dui facilisis faucibus et fermentum urna. Vivamus finibus.</p>
								<span>R$ 4,80</span>
							</div>
						</div>
						<div class="swiper-slide product-card">
							<div class="content-card">
								<picture class="product-img">
									<img src="../RJutilidades/Assets/IMG/produtos/photo.png" alt="imagem produto">
								</picture>
								<svg class="heart" role="img" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" aria-labelledby="favouriteIconTitle">
									<title id="favouriteIconTitle">Favourite</title>
									<path d="M12,21 L10.55,19.7051771 C5.4,15.1242507 2,12.1029973 2,8.39509537 C2,5.37384196 4.42,3 7.5,3 C9.24,3 10.91,3.79455041 12,5.05013624 C13.09,3.79455041 14.76,3 16.5,3 C19.58,3 22,5.37384196 22,8.39509537 C22,12.1029973 18.6,15.1242507 13.45,19.7149864 L12,21 Z"></path>
								</svg>
								<h2>Caderno 15 matérias 350 folhas</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eu nisi quis dui facilisis faucibus et fermentum urna. Vivamus finibus.</p>
								<span>R$ 4,80</span>
							</div>
						</div>
						<div class="swiper-slide product-card">
							<div class="content-card">
								<picture class="product-img">
									<img src="../RJutilidades/Assets/IMG/produtos/photo.png" alt="imagem produto">
								</picture>
								<svg class="heart" role="img" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" aria-labelledby="favouriteIconTitle">
									<title id="favouriteIconTitle">Favourite</title>
									<path d="M12,21 L10.55,19.7051771 C5.4,15.1242507 2,12.1029973 2,8.39509537 C2,5.37384196 4.42,3 7.5,3 C9.24,3 10.91,3.79455041 12,5.05013624 C13.09,3.79455041 14.76,3 16.5,3 C19.58,3 22,5.37384196 22,8.39509537 C22,12.1029973 18.6,15.1242507 13.45,19.7149864 L12,21 Z"></path>
								</svg>
								<h2>Caderno 15 matérias 350 folhas</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eu nisi quis dui facilisis faucibus et fermentum urna. Vivamus finibus.</p>
								<span>R$ 4,80</span>
							</div>
						</div>
						<div class="swiper-slide product-card">
							<div class="content-card">
								<picture class="product-img">
									<img src="../RJutilidades/Assets/IMG/produtos/photo.png" alt="imagem produto">
								</picture>
								<svg class="heart" role="img" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" aria-labelledby="favouriteIconTitle">
									<title id="favouriteIconTitle">Favourite</title>
									<path d="M12,21 L10.55,19.7051771 C5.4,15.1242507 2,12.1029973 2,8.39509537 C2,5.37384196 4.42,3 7.5,3 C9.24,3 10.91,3.79455041 12,5.05013624 C13.09,3.79455041 14.76,3 16.5,3 C19.58,3 22,5.37384196 22,8.39509537 C22,12.1029973 18.6,15.1242507 13.45,19.7149864 L12,21 Z"></path>
								</svg>
								<h2>Caderno 15 matérias 350 folhas</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eu nisi quis dui facilisis faucibus et fermentum urna. Vivamus finibus.</p>
								<span>R$ 4,80</span>
							</div>
						</div>
						<div class="swiper-slide product-card">
							<div class="content-card">
								<picture class="product-img">
									<img src="../RJutilidades/Assets/IMG/produtos/photo.png" alt="imagem produto">
								</picture>
								<svg class="heart" role="img" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" aria-labelledby="favouriteIconTitle">
									<title id="favouriteIconTitle">Favourite</title>
									<path d="M12,21 L10.55,19.7051771 C5.4,15.1242507 2,12.1029973 2,8.39509537 C2,5.37384196 4.42,3 7.5,3 C9.24,3 10.91,3.79455041 12,5.05013624 C13.09,3.79455041 14.76,3 16.5,3 C19.58,3 22,5.37384196 22,8.39509537 C22,12.1029973 18.6,15.1242507 13.45,19.7149864 L12,21 Z"></path>
								</svg>
								<h2>Caderno 15 matérias 350 folhas</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eu nisi quis dui facilisis faucibus et fermentum urna. Vivamus finibus.</p>
								<span>R$ 4,80</span>
							</div>
						</div>
						<div class="swiper-slide product-card">
							<div class="content-card">
								<picture class="product-img">
									<img src="../RJutilidades/Assets/IMG/produtos/photo.png" alt="imagem produto">
								</picture>
								<svg class="heart" role="img" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" aria-labelledby="favouriteIconTitle">
									<title id="favouriteIconTitle">Favourite</title>
									<path d="M12,21 L10.55,19.7051771 C5.4,15.1242507 2,12.1029973 2,8.39509537 C2,5.37384196 4.42,3 7.5,3 C9.24,3 10.91,3.79455041 12,5.05013624 C13.09,3.79455041 14.76,3 16.5,3 C19.58,3 22,5.37384196 22,8.39509537 C22,12.1029973 18.6,15.1242507 13.45,19.7149864 L12,21 Z"></path>
								</svg>
								<h2>Caderno 15 matérias 350 folhas</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eu nisi quis dui facilisis faucibus et fermentum urna. Vivamus finibus.</p>
								<span>R$ 4,80</span>
							</div>
						</div>
						<div class="swiper-slide product-card">
							<div class="content-card">
								<picture class="product-img">
									<img src="../RJutilidades/Assets/IMG/produtos/photo.png" alt="imagem produto">
								</picture>
								<svg class="heart" role="img" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" aria-labelledby="favouriteIconTitle">
									<title id="favouriteIconTitle">Favourite</title>
									<path d="M12,21 L10.55,19.7051771 C5.4,15.1242507 2,12.1029973 2,8.39509537 C2,5.37384196 4.42,3 7.5,3 C9.24,3 10.91,3.79455041 12,5.05013624 C13.09,3.79455041 14.76,3 16.5,3 C19.58,3 22,5.37384196 22,8.39509537 C22,12.1029973 18.6,15.1242507 13.45,19.7149864 L12,21 Z"></path>
								</svg>
								<h2>Caderno 15 matérias 350 folhas</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eu nisi quis dui facilisis faucibus et fermentum urna. Vivamus finibus.</p>
								<span>R$ 4,80</span>
							</div>
						</div>
						<div class="swiper-slide product-card">
							<div class="content-card">
								<picture class="product-img">
									<img src="../RJutilidades/Assets/IMG/produtos/photo.png" alt="imagem produto">
								</picture>
								<svg class="heart" role="img" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" aria-labelledby="favouriteIconTitle">
									<title id="favouriteIconTitle">Favourite</title>
									<path d="M12,21 L10.55,19.7051771 C5.4,15.1242507 2,12.1029973 2,8.39509537 C2,5.37384196 4.42,3 7.5,3 C9.24,3 10.91,3.79455041 12,5.05013624 C13.09,3.79455041 14.76,3 16.5,3 C19.58,3 22,5.37384196 22,8.39509537 C22,12.1029973 18.6,15.1242507 13.45,19.7149864 L12,21 Z"></path>
								</svg>
								<h2>Caderno 15 matérias 350 folhas</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eu nisi quis dui facilisis faucibus et fermentum urna. Vivamus finibus.</p>
								<span>R$ 4,80</span>
							</div>
						</div>
					</div>
					<div class="swiper-button-next"></div>
					<div class="swiper-button-prev"></div>
				</div>
			</div>
			<div class="form">
				<h3>Informe seus dados e vamos entrar em contato contigo!</h3>
				<form>
					<input type="text" name="name" placeholder="Nome">
					<input type="email" name="email" placeholder="WhatsApp ou E-mail">
					<button type="submit">Pronto!</button>
				</form>
				<p>Seus produtos curtidos são enviados para nós junto com seu nome e contato, assim podemos te atender de forma especial!</p>
			</div>
		</div>
	</div>
</body>

<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
	var swiper = new Swiper(".mySwiper", {
		spaceBetween: 30,
		loop: true,
		loopFillGroupWithBlank: true,
		pagination: {
			el: ".swiper-pagination",
			clickable: true,
		},
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		},
		breakpoints: {
			480: {
				slidesPerView: 1,
				spaceBetween: 30,
			},
			640: {
				slidesPerView: 2,
				spaceBetween: 15,
			},
			900: {
				slidesPerView: 3,
				spaceBetween: 30,
			},
			1280: {
				slidesPerView: 4,
				spaceBetween: 30,
			},
			1366: {
				slidesPerView: 5,
				spaceBetween: 30,
			}
		}
	});

	var swiper2 = new Swiper(".mySwiper2", {
		slidesPerView: 2,
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		},
		breakpoints: {
			0: {
				slidesPerView: 1,

			},
			640: {
				slidesPerView: 2,

			},
			900: {
				slidesPerView: 3,

			},
			1280: {
				slidesPerView: 2,
			},
		}
	});
</script>
<script type="module" src="./Assets/JS/main.js"></script>

</html>