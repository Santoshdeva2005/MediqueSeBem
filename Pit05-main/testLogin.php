<?php
session_start();

//verificar se os campos não estão vazios, se estiver vazio então permite acessar
if (isset($_POST['entrar']) && !empty($_POST['email']) && !empty($_POST['senha'])) {

   //Permite acessar

   include_once('PDO/pdo.php');
   $email = $_POST['email'];
   $senha = $_POST['senha'];

   $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";
   $consulta = "SELECT id FROM usuarios WHERE email = '$email' and senha = '$senha'";

   $result = $conexao->query($sql);

   //verificar se o usuario está no banco de dados
   if (mysqli_num_rows($result) < 1) {

      unset($_SESSION['email']);
      unset($_SESSION['senha']);

      header('Location: login.php');
   } else {

      $_SESSION['email'] = $email;
      $_SESSION['senha'] = $senha;
      while ($row = $result->fetch_assoc()) {
         $_SESSION['id'] = $row["id"];
      }

      header('Location: home.php');
   }
} else {

   //Não permite acessar
   header('Location: login.php');
}
