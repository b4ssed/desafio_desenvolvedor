<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta author="Matheus Tomazoni Sombrio" content="Index">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/styleCadastro.css">
    <link rel="stylesheet" href="css/styleVisualizar.css">
    <link rel="stylesheet" href="css/styleHome.css">
    <title>Home</title>
  </head>
  <body>
    <div class="container">
      <?php
        $get = isset($_GET['pagina'])? $_GET['pagina']:'';
        switch ($get) {
          case 'cadastro':
            include 'paginas/cadastro.php';
            break;
          case 'visualizar':
            include 'paginas/visualizar.php';
            break;
          default:
            include 'paginas/home.php';
            break;
        }
      ?>
    </div>
  </body>
</html>
