<?php 
session_start();
if(!isset($_SESSION['login'])){
	header("Location: login.php");
	exit;
}

 ?>
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
					<li>
						<a href="sair.php">Fechar Sessão</a>
					</li>
				</ul>
			</nav>
			
		</header>
		</div>
	<section id="destaque">
		
	</section>
	
	<main id="corpo" >
		<article class="music">
				<h3>Musica Axé capoeira</h3>
				<iframe width="420" height="315" src="https://www.youtube.com/embed/_NxeBAvH9WY" frameborder="0" allowfullscreen></iframe>
				<p>Mestre Barrão.</p>
		</article>
		<article class="music">
				<h3>Musica Classica Capoeira</h3>
				<iframe width="420" height="315" src="https://www.youtube.com/embed/Uph2L5VATck" frameborder="0" allowfullscreen></iframe>
				<p>Mestre Suassuna</p>
		</article>
		<article class="music">
				<h3>Sabia Cantou</h3>
				<iframe width="420" height="315" src="https://www.youtube.com/embed/XZp3C-BNJZM" frameborder="0" allowfullscreen></iframe>
				<p>Mestre Suassuna - Musica</p>
		</article>
		<article class="music">
				<h3>Mandei Benzer - Musica</h3>
				<iframe width="420" height="315" src="https://www.youtube.com/embed/Pglq7Q3ura8" frameborder="0" allowfullscreen></iframe>
				<p>Mestre Barrão</p>
		</article>
		<article class="music">
				<h3>Mundo enganador - Musica</h3>
				<iframe width="420" height="315" src="https://www.youtube.com/embed/AHb3BLR_MCU" frameborder="0" allowfullscreen></iframe>
				<p>MEstre Barrão</p>
		</article>
		<article class="music">
				<h3>Negro não quer mais sofrer</h3>
				<iframe width="420" height="315" src="https://www.youtube.com/embed/jKagQwavn6I" frameborder="0" allowfullscreen></iframe>
				<p>Grupo Muzenza de Capoeira</p>
		</article>
		<article class="music">
				<h3>Cantigas</h3>
				<iframe width="420" height="315" src="https://www.youtube.com/embed/y4dxqTiL52s" frameborder="0" allowfullscreen></iframe>
				<p>Variadas 1</p>
		</article>
		<article class="music">
				<h3>Cantigas II</h3>
				<iframe width="420" height="315" src="https://www.youtube.com/embed/huhFSxRSR3E" frameborder="0" allowfullscreen></iframe>
				<p>Variadas II</p>
		</article>
		<article class="music">
				<h3>Movimentos Avançados</h3>
				<iframe width="420" height="315" src="https://www.youtube.com/embed/OVb3_cMVipk" frameborder="0" allowfullscreen></iframe>
				<p>TREINO</p>
		</article>
		<article class="music">
				<h3>Movimentos Básicos</h3>
				<iframe width="420" height="315" src="https://www.youtube.com/embed/Pk88iUj_kTs" frameborder="0" allowfullscreen></iframe>
				<p>TREINO</p>
		</article>
		<article class="music">
				<h3>#SEQUENCIA</h3>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/Xa_P4z9xEyI" frameborder="0" allowfullscreen></iframe>
				<p>Sequencia 1 M.Boneco GCB</p>
		</article>
		<article class="music">
				<h3>#SEQUENCIA</h3>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/oPY1ShIZ2eo" frameborder="0" allowfullscreen></iframe>
				<p>Sequencia 2 M.Boneco GCB</p>
		</article>
		<article class="music">
				<h3>#SEQUENCIA</h3>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/KOCBGLNpohY" frameborder="0" allowfullscreen></iframe>
				<p>Sequencia 3 M.Boneco GCB</p>
		</article>
		<article class="music">
				<h3>#SEQUENCIA</h3>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/3bBNivCTNq8" frameborder="0" allowfullscreen></iframe>
				<p>Sequencia 4 M.Boneco GCB</p>
		</article>
	<article class="music">
				<h3>#SEQUENCIA</h3>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/BQ6jV-Zxzn0" frameborder="0" allowfullscreen></iframe>
				<p>Sequencia 5 M.Boneco GCB</p>
		</article>
		<article class="music">
				<h3>#SEQUENCIA</h3>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/ftbBep-1eSg" frameborder="0" allowfullscreen></iframe>
				<p>Sequencia 6 M.Boneco GCB</p>
		</article>
		<article class="music">
				<h3>Batizado</h3>
				<iframe width="420" height="315" src="https://www.youtube.com/embed/g-jFJEuQROA" frameborder="0" allowfullscreen></iframe>
				<p>Batizado, e troca de cordas, GCB</p>
		</article>
		<article class="music">
				<h3>RODA CAPOEIRA</h3>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/48P_Rh-K5JU" frameborder="0" allowfullscreen></iframe>
				<p>Movimento novo 2015</p>
		</article>
		<<article class="music">
				<h3>RODA CAPOEIRA</h3>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/wlO_4XWa3FU" frameborder="0" allowfullscreen></iframe>
				<p>Movimento novo 2015</p>
		</article>
		
	</main>
	</br>
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
	</footer>

</body>
</html>


