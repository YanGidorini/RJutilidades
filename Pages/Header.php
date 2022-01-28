<style>
/* header*/
header .container{
    display: grid;
    grid-template-areas: 
    "logo nav"
    "frase nav";
    grid-template-columns: 1fr 1fr;
}

header #container-logo{
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

header #container-logo  img{
    margin-left: 30px;
    width: 120px;
    height: 65px;
}

header #container-logo p{
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

header #fraseTitulo{
    grid-area: frase;
    justify-self: center;
    margin-bottom: 80px;
}

header #fraseTitulo h1{
    font-family: 'Red Hat Display', sans-serif;
    font-weight: 700;
    line-height: 60px;
    letter-spacing: 2px;
    text-align: left;
    font-size: 45px;
    max-width: 500px;;
    background: #fff;
}

header #enfeite{
    -webkit-box-sizing: border-box; /* Safari/Chrome, other WebKit */
    -moz-box-sizing: border-box;    /* Firefox, other Gecko */
    box-sizing: border-box;

    grid-area: nav;
    display: flex;
    height: 130px;  
    background-image: linear-gradient(149.81deg, #FF0000 8.11%, rgba(133, 0, 0, 0.92) 69.3%);
    box-shadow: -10px 10px 50px rgba(0, 0, 0, 0.1);
    border-radius: 30px;
    transform: translateX(-15px);
}
header #enfeite nav{
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    height: 100px;
    mix-blend-mode: normal;
    z-index: 1;
    transform: translateY(15px);
    column-gap: 80px;
}

header #enfeite nav a{
    font-family: 'Red Hat Display', sans-serif;
    font-weight: 900;
    font-size: 24px;
    text-decoration: none;
    color: #fff;
}

header #enfeite nav:first-child::before{
    content: "";
    width: 15px;
    height: 5px;
    border-radius: 5px;
    background-color: #fff;
}
</style>

<header>
	<div class="container">
		<div id="container-logo">
			<picture>
				<source type="" media="" srcset="">
				<img src="Assets/IMG/Logo Vermelho - Fundo Branco 1.png" alt="logo da R&J Utilidades">
			</picture>
			<p>Papelaria, escritório, utilidades, miudezas...</p>
		</div>

		<div id="enfeite">
			<nav>
				<a href="home">Início</a>
				<a href="produtos">Produtos</a>
				<a href="contato">Contato</a>
				<a href="favoritos">&#10084;</a>
			</nav>
		</div>

	</div>
</header>