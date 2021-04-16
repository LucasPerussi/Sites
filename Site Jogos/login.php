<?php
require "db_functions.php";
require "authenticate.php";

$error = false;
$password = $email = "";

if (!$login && $_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST["email"]) && isset($_POST["password"])) {

    $conn = connect_db();

    $email = mysqli_real_escape_string($conn,$_POST["email"]);
    $password = mysqli_real_escape_string($conn,$_POST["password"]);
    $password = md5($password);

    $sql = "SELECT id,name,email,password FROM $table_users
            WHERE email = '$email';";

    $result = mysqli_query($conn, $sql);
    if($result){
      if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);

        if ($user["password"] == $password) {
          $_SESSION["user_id"] = $user["id"];
          $_SESSION["user_name"] = $user["name"];
          $_SESSION["user_email"] = $user["email"];
          
          header("Location: " . dirname($_SERVER['SCRIPT_NAME']) . "/logged.php");
          exit();
        }
        else {
          $error_msg = "Senha incorreta!";
          $error = true;
        }
      }
      else{
        $error_msg = "Usuário não encontrado!";
        $error = true;
      }
    }
    else {
      $error_msg = mysqli_error($conn);
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
	  <title>Site de Jogos - Login</title>
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

        <?php if ($login): ?>
              <br><br><h3>Você já está logado!</h3>
              <?php echo $user["id"]; ?>
              <?php echo $login; ?>
            </body>
            </html>
            <?php exit(); ?>
          <?php endif; ?>

          <?php if ($error): ?>
            <h3 style="color:red;"><?php echo $error_msg; ?></h3>
          <?php endif; ?>


      <form id="login" action="login.php" method="post">
        <h1 id="loginH1">Login</h1><br>

        <input id="txtLogin" type="text" placeholder="E-mail" required name="email"><br><br>
       
        <input id="txtLogin" type="password" placeholder="Senha" required name="password"><br><br>
        <input id="btnLogin" type="submit" value="Entrar"><br><br>
        <a id="linkLogin" href="cadastro.php">Crie sua conta!</a>


      </form>

     

    
</body>
</html>