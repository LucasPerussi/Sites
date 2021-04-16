<?php
require "db_functions.php";
require "authenticate.php";


$error = false;
$success = false;
$name = $email = "";

$nome = $email = $lastname = $password = $confirm_password = "";
$erro = $success = false;


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST["nome"]) && isset($_POST["lastname"]) && isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["confirm_password"])) {

    $connl = connect_db();

    $nome = mysqli_real_escape_string($connl,$_POST["nome"]);
    $lastname = mysqli_real_escape_string($connl,$_POST["lastname"]);
    $email = mysqli_real_escape_string($connl,$_POST["email"]);
    $password = mysqli_real_escape_string($connl,$_POST["password"]);
    $confirm_password = mysqli_real_escape_string($connl,$_POST["confirm_password"]);

    if ($password == $confirm_password) {
      $password = md5($password);

      $sql = "INSERT INTO $table_users
              (name, lastname, email, password) VALUES
              ('$nome','$lastname', '$email', '$password');";

      if(mysqli_query($connl, $sql)){
        $success = true;
      }
      else {
        $error_msg = mysqli_error($connl);
        $error = true;
      }
    }
    else {
      $error_msg = "Senha não confere com a confirmação.";
      $error = true;
    }
  }
  else {
    $error_msg = "Por favor, preencha todos os dados.";
    $error = true;
  }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<title>Site de Jogos - Cadastro</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/estilo.css">
	<script src="js/jquery-3.5.1.js"></script>
</head>
<body>

        <div id="interface">

            <header>
            <?php include 'header.php'; ?>
            </header>

    
    <form id="cadastro" action="cadastro.php" method="post">

    
    <?php if ($success): ?>
      <script>
          alert("Usuário criado com sucesso!");
      </script>
      <h3 style="color:lightgreen;">Usuário criado com sucesso!</h3>
      <p>
        Seguir para <a href="login.php">login</a>.
      </p>
    <?php endif; ?>
    <?php if ($error): ?>
      <script>
          alert("<?php echo $error_msg; ?>");
      </script>
      <h3 style="color:red;"><?php echo $error_msg; ?></h3>
    <?php endif; ?>

        <h1 id="loginH1">Cadastro</h1><br>

        <input id="txtLogin" type="text" placeholder="Nome" required name="nome" value="<?php echo $nome; ?>"><br><br>
        <input id="txtLogin" type="text" placeholder="Sobrenome" required name="lastname" value="<?php echo $lastname; ?>"><br><br>
        <input id="txtLogin" type="text" placeholder="E-mail" required name="email" value="<?php echo $email; ?>"><br><br>
        
        <input id="txtLogin" type="password" placeholder="Senha" required name="password" value="<?php echo $password; ?>"><br><br>
        <input id="txtLogin" type="password" placeholder="Confirme sua Senha" required name="confirm_password" value="<?php echo $confirm_password; ?>"><br><br>
        <input id="btnLogin" type="submit" value="Criar usuário"><br><br>
        <a id="linkLogin" href="login.php">Fazer Login</a>
    

    </form>
</body>
</html>