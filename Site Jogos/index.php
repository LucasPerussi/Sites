<?php require 'authenticate.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Site de Jogos</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/estilo.css">
	<script src="js/jquery-3.5.1.js"></script>

</head>

<body>

		<div id="interface">

		<?php include 'header.php'; ?>

	<h1 id="titulo1">Site de Jogos</h1>

	<h2>
		<p>Este site reune tudo sobre jogos da atualidade e dos antigos.</p>
		<p>Todos os dias temos conteúdos novos:</p></h2>
	<section id="st3">
		<Section id="conteudo">
		<ul><br>


			<br><br><br><br>
			<table style="width: 80%" border="0px">
				<tr>
				  <!--primeira linha-->
				  <th><img id="noticia" src="imagens/noticias.png" width="300px" /></th>
				  <th>Nas segundas temos notícias sobre os lançamentos e gameplays. Confira a nossa análise e discussão antes
					de comprar um jogo que está em dúvida. Visita a seção <a id="links" href="noticias.php">"Notícias e Análises</th>

				</tr>
				<tr>
				  <!--segunda linha-->
				  <th><img id="noticia" src="imagens/nostalgia.png" width="300px" /></th>
				  <th>Nas terças temos um momento de nostalgia, voltamos ao tempo e relembramos de jogos que marcaram época.
					Quem não se empolga ao ouvir a música do top gear do super nintendo. Nesse dia apresentaremos gameplays
					de jogos antigos, video de detonado, nossa análise, etc, sempre com muita diversão. Visite a seção  <a id="links"
					href="nostalgia.php">Nostalgia</a>.</th>

				</tr>
				<tr>
				  <!--terceira linha-->
				   <th><img id="noticia" src="imagens/campeonato.png" width="300px" /></th>
				   <th>Nas quartas publicamos sobre os campeonatos que estão ocorrendo, CS, Dota 2, lol, overwatch, entre
					outros. Aqui falaremos sobre os times, os campeonatos em andamentos, os que vão acontecer, tudo em
					primeira mão. Fique por dentro de tudo sobre os campeonatos na seção <a id="links"
						href="campeonato.php">Campeonatos</a>.</th>

				</tr>
				<tr>
				  <!--quarta linha-->
				   <th><img id="noticia" src="imagens/campeonatocasa.png" width="300px" /></th>
				   <th>Nas quintas o campeonato agora é outro, é o da nossa casa. Nesse dia discutiremos os campeonatos que
					organizamos, o andamento, datas, como participar, entre outras informações. Acesse a seção <a id="links"
						href="campeonatocasa.php"> Clube da Luta</a></th>

				</tr>
				<tr>
				  <!--5 linha-->
				  <th><img id="noticia" src="imagens/aovivo.png" width="300px" /></th>
				  <th>Nas sextas o momento é de descontrair, venha ver nossas gameplays ao vivo, de sujestões de jogos,
					comente, se divirta em ver nossos erros e noobagens. Visite a seção <a id="links" href="jogosaovivo.php">Jogos ao
						Vivo</a></th>

				</tr>
			  </table>
			  <img id="gifHome" src="css/banner.gif"/>
			</Section>
		</section>
		<section id="st5">
			<fieldset>
			  <br>
			  <legend>Últimas notícias</legend>
			  <h2 id="baixo">Análise jogo Cyberpunk 2077</h2>
			  <p><br>
				&#10132; Após muito tempo de espera finalmente o jogo Cyberpunk 2077
				foi lançado. Um excelente jogo de RPG, mas com alguns bugs.
			  </p>
			  <p>
				Cyberpunk 2077 é uma história de ação e aventura de mundo aberto
				ambientada em Night City, uma megalópole obcecada por poder, glamour e
				biomodificações. Você joga como V, um mercenário fora da lei atrás de
				um implante único que carrega a chave da imortalidade. Você pode
				personalizar aparatos cibernéticos, conjunto de habilidades e estilo
				de jogo do personagem e explorar uma vasta cidade onde as decisões
				tomadas definem a história e o mundo ao seu redor.
			  </p>
			  <h3>Notas -</h3>
			  <table class="tabela">
				<tr>
				  <td>Categoria</td>
				  <td>Nota (0 - 10)</td>
				</tr>
				<tr>
				  <td>Visual, ambientação e gráficos</td>
				  <td>8,5</td>
				</tr>
				<tr>
				  <td>Jogabilidade</td>
				  <td>6,5</td>
				</tr>
				<tr>
				  <td>Diversão</td>
				  <td>8,5</td>
				</tr>
				<tr>
				  <td>Áudio e trilha-sonora</td>
				  <td>8,5</td>
				</tr>
				<tr>
				  <td>Desempenho e bugs</td>
				  <td>4,5</td>
				</tr>
			  </table>

			  <h3>Notas - tecnoblog</h3>
			  <table class="tabela">
				<tr>
				  <td>Categoria</td>
				  <td>Nota (0 - 10)</td>
				</tr>
				<tr>
				  <td>Diversão</td>
				  <td>10</td>
				</tr>
				<tr>
				  <td>Jogabilidade</td>
				  <td>8</td>
				</tr>
				<tr>
				  <td>Visual</td>
				  <td>10</td>
				</tr>
				<tr>
				  <td>Desafio</td>
				  <td>8</td>
				</tr>
				<tr>
				  <td>Replay</td>
				  <td>10</td>
				</tr>
				<tr>
				  <td>Áudio</td>
				  <td>10</td>
				</tr>
				<tr>
				  <td>Inovação</td>
				  <td>8</td>
				</tr>
				<tr>
				  <td>Qualidade técnica</td>
				  <td>7</td>
				</tr>
			  </table>
			</fieldset>
		  </section>

	<h2 id="compra"><a id="compra" href="<?php if(!$login){echo "login.php";} else {echo "ingressos-compra.php";}?>"> Compre aqui seu ingresso </a></h2>
	<?php include 'footer.php' ?>


	  <script src="js/js.js"></script>

</body>

</html>
