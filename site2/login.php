<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Inicio</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="icon" href="imagens/iconecapoeira.jpg" type="image/png" sizes="16x16">

<!--           ATENÇÃO ARRUMAR OS CAMINHOS DOS  EASYSHARE      -->

	<!--Jquery-->



	<!--Plugin Redes Sociais-->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>


	<!-- JavaScript do Plugin da Pagina-->
	<script type="text/javascript" src="jquery/bxslider/jquery.bxslider.min.js"></script>

	<!-- CSS do bxslider-->
	<link rel="stylesheet" type="text/css" href="jquery/bxslider/jquery.bxslider.css">

	
	<!-- -->
	<script src="jquery/redessociais/jquery.kyco.easyshare.min.js">
	</script>


	<!-- CSS do Redesociais-->
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="jquery/redessociais/jquery.kyco.easyshare.css">





</head>
<body>
	<div id="cabecalho_fundo">
		<header id="cabecalho">
			<div id="banner">
				<a href="index.html">
					<img src="imagens/iconecapoeira.jpg">
				</a>
			</div>
			<nav id="menu">
				<ul>
					<li>
						<a href="index.html">Inicio</a>
					</li>
					<li>
						<a href="">Diversos</a>
						<div class="submenu">
							<ul>
								<li>
									<a href="videos.php">Videos</a>
								</li>
								<li>
									<a href="contos.html">Contos</a>
								</li>
								<li>
									<a href="noticia.html">Noticias</a>
								</li>
								<li>
									<a href="contato.html">Contato</a>
								</li>
								<li>
									<a href="login.php">Login</a>
								</li>
								<li>
									<a href="cadastro.php">Cadastro</a>
								</li>
							</ul>
						</div>
					<li>
						<a href="instrumentacao.html">Instrumentação</a>
					</li>
					<li>
						<a href="sobre.html">Sobre</a>
					</li>
				</ul>
			
		</header>
	</div>
	<section id="destaque">
		<div>
			<h1>Faça seu login a baixo</h1>
			<button>Login</button>
		</div>
	</section>
<main id="corpo">
	</br>
	<form id="formulariologin" method="POST" action="recebe_login.php">
		<label>Login</label>
		</br>
		<input type="text" name="login">
		</br>
		<label>Senha</label>
		</br>
		<input type="password" name="senha">
		</br>
		<button type="submit">Logar</button>
	</form>
	</br>
	</br>
	<h3 >Não é cadastrado ? Se cadastre e use todos os recursos do nosso site...</h3>
	<a href="cadastro.php">Cadastre-se</a>
	</br>
	</br>
	</main>
	<footer id="rodape">
		<div id="social">
			<a href="" title="">
				<img src="imagens/face.ico" alt="">
			</a>
			<a href="" title="">
				<img src="imagens/linke.ico" alt="">
			</a>
			<a href="" title="">
				<img src="imagens/twitter.png" alt="">
			</a>
			<a href="" title="">
				<img src="imagens/youtube.png" alt="">
			</a>
		</div>
		<div id="copyright">
			<p>© 2016 Senac-RS - Todos os direitos Reservados.</p>
		</div>
		</br>
		</br>
	</footer>
	</br>
	</br>

</body>
</html>