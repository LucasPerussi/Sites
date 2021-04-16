<?php
  require("checar_form.php");
  require("authenticate.php");
?>
<!DOCTYPE html>
<html>

<head>
  <title>Ingressos - Compra</title>
  <meta charset="UTF-8">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/estilo.css">
	<script src="js/jquery-3.5.1.js"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="checar_form.js"></script>


</head>

<body>

<?php include 'header.php'; ?>

      
      <!--
      <form action="http://web1-app.tadsufpr.net.br/test/form" method="post">
        <h1>Compre aqui o seu ingresso!</h1><br>
        Nome:<br><br>
        <input id="texto" type="text" name="firstname"><br><br>
        Sobrenome:<br><br>
        <input id="texto" type="text" name="lastname"><br><br>

        <input type="radio" name="category" value="gameplay" checked> Gameplay<br>
        <input type="radio" name="category" value="campeonatos"> Campeonatos<br>
        <input type="radio" name="category" value="outros"> Outros<br><br>

        Preço:
        <select name="price">
          <option value="10">10</option>
          <option value="15">15</option>
          <option value="20">20</option>
          <option value="30">30</option>
        </select><br><br>

        Observações:<br><br>
        <textarea name="message" rows="10" cols="30">
        </textarea><br><br>

        <input id="botao" type="submit" value="Comprar">
      </form>
      <p><a href="index.php">Voltar</a></p>
      -->

      <form id="tickets" enctype="multipart/form-data" id="form-test" class="form-horizontal" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
          <h1>Compre seu Ingresso!</h1><br/>
          <!-- NOME -->
        <div class="form-group <?php if(!empty($erro_nome)){echo "has-error";}?>">
          <label for="inputNome" class="col-sm-2 control-label">Nome</label>
          <div class="col-sm-10">
            <input id="txtIng" required type="text" class="form-control" name="nome" placeholder="Nome" value="<?php echo $nome; ?>">
            <div id="erro-nome">

            </div>
            <?php if (!empty($erro_nome)): ?>
              <span class="help-block"><?php echo $erro_nome ?></span>
            <?php endIf; ?>
          </div>
        </div>

              <!-- EMAIL -->
        <div class="form-group <?php if(!empty($erro_email)){echo "has-error";}?>">
          <label for="inputEmail" class="col-sm-2 control-label">Email</label>
          <div class="col-sm-10">
            <input id="txtIng" required type="text" class="form-control" name="email" placeholder="Email" value="<?php echo $email; ?>">
            <div id="erro-email">

            </div>
            <?php if (!empty($erro_email)): ?>
              <span class="help-block"><?php echo $erro_email ?></span>
            <?php endIf; ?>
          </div>
        </div>

              <!-- DATA -->
        <div class="form-group <?php if(!empty($erro_data)){echo "has-error";}?>">
          <label for="inputData" class="col-sm-2 control-label">Data</label>
          <div class="col-sm-10">
            
            <div class="row">
              
            <div class="col-2">
            <br/><br/>
                <p>Ano:
                  <input id="txtIng2" required type="number" class="" name="ano" placeholder="2018" min ="1" value="<?php echo $ano; ?>">
                </p>
              </div>
              <div class="col-2">
                <p>Dia :
                  <input id="txtIng2" required type="number" class="" name="dia" placeholder="12" min ="1" value="<?php echo $dia; ?>">
                </p>
              </div>

              <div class="col-2">
                <p>Mês:
                  <input id="txtIng2" required type="number" class="" name="mes" placeholder="05" min ="1" value="<?php echo $mes; ?>">
                </p>
              </div>

           

              <div id="erro-data">
              </div>

            </div>

            <?php if (!empty($erro_data)): ?>
              <span class="help-block"><?php echo $erro_data ?></span>
            <?php endIf; ?>

          </div>
        </div>

              <!-- TELEFONE -->
        <div class="form-group <?php if(!empty($erro_telefone)){echo "has-error";}?>">
          <label for="inputTelefone" class="col-sm-2 control-label">Telefone</label>
          <div class="col-sm-10">
            <input id="txtIng" required type="number" class="form-control" name="telefone" placeholder="(41)91234-5678" value="<?php echo $telefone; ?>">
            <div id="erro-senha">

            </div>
            <?php if (!empty($erro_telefone)): ?>
              <span class="help-block"><?php echo $erro_telefone ?></span>
            <?php endIf; ?>
          </div>
        </div>

              <!-- PREÇO -->
        <div class="form-group <?php if(!empty($erro_preco)){echo "has-error";}?>">
          <label for="inputPreco" class="col-sm-2 control-label">Preço</label>
          <div class="col-sm-10">
            <input id="txtIng" required type="number" placeholder="R$ 100,00" class="form-control" name="preco" min = "10" max = "50" value="<?php echo $preco; ?>">
            <div id="erro-preco">

            </div>
            <?php if (!empty($erro_preco)): ?>
              <span class="help-block"><?php echo $erro_preco ?></span>
            <?php endIf; ?>
          </div>
        </div>

        <br/>


        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button id="btnLogin2" type="submit" class="btn btn-default">Enviar</button>
          </div>
        </div>

      </form>

      <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <?php if (!$erro): ?>
          <div class="alert alert-success">
            Dados recebidos com sucesso:
            <ul>
              <li><strong>Nome</strong>: <?php echo $nome ?>;</li>
              <li><strong>Email</strong>: <?php echo $email ?>;</li>
              <li><strong>Data de nascimento</strong>: <?php echo $dia ?>/<?php echo $mes ?>/<?php echo $ano ?>;</li>
              <li><strong>Telefone</strong>: <?php echo $senha ?>;</li>

              <li><strong>Senha repetida</strong>: <?php echo $rsenha ?>;</li>
              <li><strong>Arquivo</strong>: Enviado com sucesso;</li>
              <?php // limpa o formulário.
                $nome = "";
                $email = "";
                $data = "";
                $dia = "";
                $mes = "";
                $ano = "";
                $Telefone = "";
                $rsenha = "";
                /*$arquivo = "";*/
              ?>
            </ul>
          </div>
        <?php else: ?>
          <div class="alert alert-danger">
            Erros no formulário.
          </div>
        <?php endif; ?>
      <?php endif; ?>


</body>

</html>
