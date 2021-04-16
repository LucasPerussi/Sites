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
	<link rel="stylesheet" href="css/estiloNoticias.css">
  <link rel="stylesheet" href="css/estilo.css">

	<script src="js/jquery-3.5.1.js"></script>



</head>

<body>

	<div id="interface">

		<?php include 'header.php'; ?>

	    <h1 id="titulo1">Notícias e Análises</h1>
	    <h2>As notícias certas, na hora certa...</p></h2>
      <img id="cyber" src="imagens/cyberBanner.jpg">
      <h3>Análise jogo Cyberpunk 2077</h3>
      <section id="st3">
        <fieldset>
          <p> Após muito tempo de espera finalmente o jogo Cyberpunk 2077 foi lançado. Um excelente jogo de RPG, mas
            com alguns bugs.</p>
          <p>Cyberpunk 2077 é uma história de ação e aventura de mundo aberto ambientada em Night City, uma megalópole
            obcecada por poder, glamour e biomodificações.
            Você joga como V, um mercenário fora da lei atrás de um implante único que carrega a chave da imortalidade. Você
            pode personalizar aparatos cibernéticos,
            conjunto de habilidades e estilo de jogo do personagem e explorar uma vasta cidade onde as decisões tomadas
            definem a história e o mundo ao seu redor.</p>

          <h3> Veja a review sugerida</h3>
          <br>
          <iframe id="video" src="https://www.youtube.com/embed/a3eBa71CH5k">
          </iframe>

          <fieldset>
            <legend>Prós</legend>
            <ul>
              <li>Bom equilíbrio entre narrativa e as escolhas do jogador</li>
              <li>Visual e trilha sonora incríveis</li>
              <li>Vasta personalização de habilidades</li>
              <li>Localização e dublagem para português do Brasil</li>
            </ul>
          </fieldset>

          <fieldset>
            <legend>Contras</legend>
            <ul>
              <li>Alguns problemas de performace e configurações maos altas (PC)</li>
              <li>bugs diversos, armas flutuando, personagens se fundindo uns aos outros e etc</li>
            </ul>
          </fieldset>
    <br>
          <h3>Notas - </h3><br>
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
    <br>
          <h3>Notas - tecnoblog</h3><br>
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

      
	<?php include 'footer.php' ?>
	  <script src="js/js.js"></script>

</body>

</html>
