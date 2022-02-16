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

	<link rel="stylesheet" type="text/css" href="../RJutilidades/Assets/CSS/reset.css">
	<link rel="stylesheet" type="text/css" href="../RJutilidades/Assets/CSS/style.css">
</head>

<body>

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

<ul class="social-media">
	<li>
		<img src="Assets/IMG/red-logo-white-bg.png" alt="logo da R&J Utilidades">
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
			<div></div>
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

</body>

<script src="Assets/JS/script.js"></script>
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
</script>
<script src="Assets/JS/script.js"></script>

</html>