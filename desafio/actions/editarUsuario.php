<?php
  //Variaveis que recebem os dados do usuário para a alteração
  $id = isset($_POST['id'])? $_POST['id']:'';
  $nome = isset($_POST['nome'])? $_POST['nome']:'';
  $idade = isset($_POST['idade'])? $_POST['idade']:'';
  $email = isset($_POST['email'])? $_POST['email']:'';
  //Conexão com o Banco de Dados
  $connect = mysqli_connect("localhost","root","","database_desafio");
  //Inserção do usuario no banco de dados
  $query = mysqli_query($connect, "UPDATE usuario SET nome='$nome', idade='$idade', email='$email' WHERE idusuario=$id") or DIE(mysqli_error($connect));
  //Fechamento da conexão com o banco de dados
  mysqli_close($connect);
  //Redirecionamento
  header("Location:../index.php?pagina=visualizar");
?>
