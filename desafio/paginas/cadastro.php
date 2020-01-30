<?php
    if (isset($_GET["id"])) {
      $id = $_GET["id"];
      //Cria a conexão com o banco de dados
      $connect = mysqli_connect("localhost","root","","database_desafio");
      //Pega os dados do orçamento do banco de dados
      $query = mysqli_query($connect, "SELECT * FROM usuario WHERE idusuario=$id");
      //Armazena os dados do bd em um array associativo
      $arrayUsuario = mysqli_fetch_all($query, MYSQLI_ASSOC);
    }
?>
<script type="text/javascript">
  $(document).ready(function() {
    $("$idade").keyup(function() {
        $("$idade").val(this.value.match(/[0-9]*/));
    });
  });
</script>
<div class="containerCadastro">
  <div class="labelCadastro">
    <label>Cadastro / Edição de Usuário</label>
  </div>
  <div class="cadastro">
    <?php
      if (isset($arrayUsuario[0]["nome"])) {
        echo '<form action="actions/editarUsuario.php" method="post">';
      }else{
        echo '<form action="actions/cadastrarUsuario.php" method="post">';
      }
    ?>
      <div class="form-group">
        <label for="nome">Nome</label>
        <?php
          if (isset($arrayUsuario[0]["nome"])) {
            echo '<input type="text" class="form-control" name="nome" maxlength="60" value="'.$arrayUsuario[0]["nome"].'" required>';
          }else{
            echo '<input type="text" class="form-control" name="nome" maxlength="60" placeholder="João" required>';
          }
        ?>
      </div>
      <div class="form-group">
        <label for="idade">Idade</label>
        <?php
          if (isset($arrayUsuario[0]["idade"])) {
            echo '<input type="text" class="form-control" name="idade" maxlength="2" pattern="([0-9]{2})" value="'.$arrayUsuario[0]["idade"].'" required>';
          }else{
            echo '<input type="text" class="form-control" name="idade" maxlength="2" pattern="([0-9]{2})" placeholder="35" required>';
          }
        ?>
      </div>
      <div class="form-group">
        <label for="email">Endereço de email</label>
        <?php
          if (isset($arrayUsuario[0]["email"])) {
            echo '<input type="email" class="form-control" name="email" maxlength="60" value="'.$arrayUsuario[0]["email"].'" required>';
          }else{
            echo '<input type="email" class="form-control" name="email" maxlength="60" placeholder="joao@joao.com" required>';
          }
        ?>
      </div>
      <?php
        if (isset($_GET["id"])) {
          echo '<input type="hidden" name="id" value="'.$id.'">';
        }
      ?>
      <button type="submit" class="btn btn-primary">Enviar</button>
      <button type="button" class="btn btn-danger" onclick="window.history.go(-1)">Cancelar</button>
    </form>
  </div>
</div>
