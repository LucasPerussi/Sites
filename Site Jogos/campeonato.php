<?php
  require_once "sanitize.php";
  require_once "connect_db.php";
  require "authenticate.php";

  $form_name = $form_comment = "";
  $msg = "";

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $form_name = $_POST['form_name'];
    $form_comment = $_POST['form_comment'];

    if (empty($form_name) || empty($form_comment)) {
      $error = true;
    }
    else{
      $name = mysqli_real_escape_string($conn, sanitize($form_name));
      $comment = mysqli_real_escape_string($conn, sanitize($form_comment));

      $sql = "INSERT INTO grr20177828_form (name, comment)
      VALUES ('$name', '$comment')";

      if (!mysqli_query($conn, $sql)) {
          die("Error: " . $sql . "<br>" . mysqli_error($conn));
      }
      else {
        $form_name = $form_comment = "";
        $msg = "Comentário salvo com sucesso!";
      }
    }
  }


  $sql = "SELECT id, name, comment FROM grr20177828_form";
  $comments = mysqli_query($conn, $sql);

  if (!$comments) {
    die("Error: " . $sql . "<br>" . mysqli_error($conn));
  }
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<link rel="stylesheet" href="css/estilo.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;700&display=swap" rel="stylesheet">
	<script src="js/jquery-3.5.1.js"></script>
	<meta charset="UTF-8">
	<title>Título Site de Jogos</title>

</head>
<body>
<div id="interface">
        <?php include 'header.php'; ?>
<!--comments-->

    <div class="comments">
    <br><br>
      <h2 class="forum">Fórum</h2>
      <br/>

      <?php if (!empty($msg)): ?>
        <?= $msg ?>
      <?php endif; ?>

      <?php if (mysqli_num_rows($comments) > 0): ?>
        <?php while($comment = mysqli_fetch_assoc($comments)): ?>
          <div class="comment" id="comment_<?= $comment['id'] ?>">
            <h4>De: <?= $comment['name'] ?></h4>
            <p><?= $comment['comment'] ?></p>
          </div>
        <?php endWhile; ?>
      <?php else: ?>
        Nenhum comentário enviado.
      <?php endIF; ?>

      <hr>
      <h3>Novo comentário</h3>
      <form id="forum" action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
        Nome:<br><br>
        <input id="txtForum" type="text" name="form_name" value="<?= $form_name ?>" placeholder="Seu nome"><br><br>
        Comentário:<br><br>
        <textarea id="txtForum" name="form_comment" rows="8" cols="80" placeholder="Seu comentário"><?= $form_comment ?></textarea><br><br>
        <input id="btnForum"  type="submit" name="submit" value="Enviar"><br><br>
      </form>
      <br><br>
    </div>


	<?php include 'footer.php' ?>
</body>

</html>
