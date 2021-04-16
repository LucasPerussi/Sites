<?php require "authenticate.php";?>

<!DOCTYPE html>
<html lang="pt-br">
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

	<h1 id="titulo1">nostalgia</h1>
			<h2> Nostalgia de hoje - Top gear </h2>
			<iframe id="video" width="100%" height="800px" src="https://www.youtube.com/embed/Hru6NR6a_NM">
			</iframe>

<section id="st72">
			<h2> Nostalgia - Space Invader </h2>

			<p>Mate a saudade de jogar o clássico Space invaders</p>
			<a href="minigame/minigame.php">    Acesse aqui</a>

  </section>

  <h2 id="compra"><a id="compra" href="ingressos-compra.php"> Compre aqui seu ingresso </a></h2>
	<?php include 'footer.php' ?>


	  <script src="js/js.js"></script>




</body>

</html>
