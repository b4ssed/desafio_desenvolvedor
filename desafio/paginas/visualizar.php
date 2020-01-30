
<div class="containerVisualizar">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nome</th>
        <th scope="col">Idade</th>
        <th scope="col">Email</th>
        <th scope="col">Ações</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
        <?php
          //Conexão com o Banco de Dados
          $con = mysqli_connect("localhost","root","","database_desafio");
          //Selecionando os dados dos Usuarios
          $query_usuario = mysqli_query($con, "SELECT * from usuario");
          //Joga os dados dos usuarios em um array
           $arrayUsuario = mysqli_fetch_all($query_usuario, MYSQLI_ASSOC);
          //Exibe as informações de todos os usuarios em uma tabela
          if (isset($arrayUsuario)) {
            foreach ($arrayUsuario as $key => $value) {
              echo "<tr>";
              echo "<td>".$value['idusuario']."</td>";
              echo "<td>".$value['nome']."</td>";
              echo "<td>".$value['idade']."</td>";
              echo "<td>".$value['email']."</td>";
              echo '<td><a href="index.php?pagina=cadastro&id='.$value["idusuario"].'">	<button class="btn btn-dark">Editar</button></a></td>';
              echo '<td><a href="actions/excluirUsuario.php?id='.$value["idusuario"].'">	<button class="btn btn-danger">Excluir</button></a></td>';
              echo "</tr>";
            }
          }
          //Encerra a conexão com o banco de dados
          mysqli_close($con);
        ?>
    </tbody>
  </table>
</div>
<button class="btn btn-danger btnVoltar" type='button' onclick="window.location.href='index.php?pagina='">Voltar</button>
