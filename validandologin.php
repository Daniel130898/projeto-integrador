<?php
session_start();//outro comentario
include "conexaoPI.php";

if((isset($_POST['email'])) && (isset($_POSt['senha']))){
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $senha = mysqli_real_escape_string($conn, $_POST['senha']);
   $senha = md5($senha);

if (($email == "admin@hotmail.com") && ($senha == "admin123")) {
  header("Location: abrirchamado.php");
}else {
  $_SESSION['LoginErro'] = "Usuário e senha inválidos";
  header("Location: indexPI.php");
}

}else {
  $_SESSION['LoginErro'] =  "Usuário e senha inválidos";
  header("Location: indexPI.php");
}//comentario



?>
