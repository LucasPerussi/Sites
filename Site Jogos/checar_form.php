<?php
function verifica_campo($texto){
  $texto = trim($texto);
  $texto = stripslashes($texto);
  $texto = htmlspecialchars($texto);
  return $texto;
}

$nome = "";
$email = "";
$dia = "";
$mes = "";
$ano = "";
$senha = "";
$rsenha = "";
$telefone = "";
$preco = "";
$erro = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  /* requisições NOME */
  if(empty($_POST["nome"])){
    $erro_nome = "Nome é obrigatório.";
    $erro = true;
  }
  else{
    $nome = verifica_campo($_POST["nome"]);
  }

  /* requisições EMAIL */
  if(empty($_POST["email"])){
    $erro_email = "Email é obrigatório.";
    $erro = true;
  }
  else{
    $email = verifica_campo($_POST["email"]);
  }

  if(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) == false){
    $erro_email = "Email inválido.";
    $erro = true;
  }
  else{
    $email = verifica_campo($_POST["email"]);
  }

  /* requisições DATA */
  if(empty($_POST["dia"]) or empty($_POST["mes"]) or empty($_POST["ano"])){
    $erro_data = "Valores data de nascimento faltante";
    $erro = true;
  }
  else{
    $dia= verifica_campo($_POST["dia"]);
    $mes= verifica_campo($_POST["mes"]);
    $ano= verifica_campo($_POST["ano"]);
  }

  if(checkdate($mes, $dia, $ano) == false){
    $erro_data = "Data inválida";
    $erro = true;
  }
  else{
    $dia= verifica_campo($_POST["dia"]);
    $mes= verifica_campo($_POST["mes"]);
    $ano= verifica_campo($_POST["ano"]);
  }

  /* requisições TELEFONE */
  if(empty($_POST["telefone"])){
    $erro_telefone = "Telefone é obrigatório";
    $erro = true;
  }
  else{
    $telefone = verifica_campo($_POST["telefone"]);
  }

  /* requisições PREÇO */
  if(empty($_POST["preco"])){
    $erro_preco = "Preço é obrigatório.";
    $erro = true;
  }
  else{
    $preco = verifica_campo($_POST["preco"]);
  }


}
?>
