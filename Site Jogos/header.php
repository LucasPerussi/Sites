<?php
if (!$login){
	echo '<header>

		<div class="container">
			<div class="top-bar-container">
			  <div class="top-bar-fixed">
				<div class="top-bar-content">
					<nav>
					  <a class="menu" href="index.php"><img id="logo" src="imagens/LOGO.png" alt=""></a>
					  <a class="menu" onmouseover="mudaFoto1()" onmouseout="mudaFoto1()" href="noticias.php">Notícias e Análises</a>
					  <a class="menu" onmouseover="mudaFoto2()" onmouseout="mudaFoto2()" href="nostalgia.php">Nostalgia</a>
					  <a class="menu" onmouseover="mudaFoto3()" onmouseout="mudaFoto3()" href="campeonato.php">Forum</a>
					  <a class="menuBtn" href="login.php">Login</a>
					</nav>
			  </div></div>
			  </div> 
			</div>
		  </div>
	</header>';}
	else {
		echo '<header>

		<div class="container">
			<div class="top-bar-container">
			  <div class="top-bar-fixed">
				<div class="top-bar-content">
					<nav>
					  <a class="menu" href="index.php"><img id="logo" src="imagens/LOGO.png" alt=""></a>
					  <a class="menu" onmouseover="mudaFoto1()" onmouseout="mudaFoto1()" href="noticias.php">Notícias e Análises</a>
					  <a class="menu" onmouseover="mudaFoto2()" onmouseout="mudaFoto2()" href="nostalgia.php">Nostalgia</a>
					  <a class="menu" onmouseover="mudaFoto3()" onmouseout="mudaFoto3()" href="campeonato.php">Forum</a>
					  <a class="menuBtn" href="logged.php">Área do Assinante</a> 
					  <a class="menuBtnL" href="logout.php">Logout</a>
					</nav>
			  </div></div>
			  </div> 
			</div>
		  </div>
	</header>';

	}
 ?>