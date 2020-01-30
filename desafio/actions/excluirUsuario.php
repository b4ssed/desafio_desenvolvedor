<?php
  if (isset($_GET["id"])) {
      //Cria a conexão com o banco de dados
      $connect = mysqli_connect("localhost","root","","database_desafio");
      //Variavel que recebem o id do usuario a ser excluído
      $id = $_GET["id"];
      //Exclui o registro do banco de dados
      $query = mysqli_query($connect, "DELETE FROM usuario WHERE idusuario=$id");
      //Fechamento da conexão com o banco de dados
      mysqli_close($connect);
      //Redirecionamento
      header("Location:../index.php?pagina=visualizar");
    }
?>
