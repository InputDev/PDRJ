<!doctype html>
<html lang="pt-br">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Formulário</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
   <link rel="stylesheet" href="../pdrj/css/style.css">
</head>

<body class="fundo">
<!--  Começo da Acessibilidade  -->
   <div vw class="enabled">
      <div vw-access-button class="active"></div>
      <div vw-plugin-wrapper>
         <div class="vw-plugin-top-wrapper"></div>
      </div>
   </div>
   <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
   <script>
      new window.VLibras.Widget('https://vlibras.gov.br/app');
   </script>
<!--  Final da Acessibilidade  -->

   <div class="container-fluid barra">
      <div class="row ">
         <div class="col-2"><a href="index.php"><img src="fotos/avatar.png"></a> </div>

         <div class="col-7 fs-3 fw-bold text-center p-4">
            DESAPARECIDOS RIO DE JANEIRO
         </div>


         <div class="col-3 text-end link p-4">

            <?php
            if (!isset($_SESSION)) {
               session_start();
            }
            if (isset($_SESSION['login'])) {
               $login = $_SESSION['login'];
               $nome = $_SESSION['nome'];


               echo "Bem vindo, $nome | <a href='adm.php'> Administração </a> | <a href='logout.php'> Logout </a>";
            } else {
               echo  "
                               <a href='login.php'>LOGIN</a>
                
                          ";
            }

            ?>
         </div>
      </div>
      <div class="col-12 text-end button">
         <a href="contato.php"><button type="button" class="btn btn-dark text-info fw-bold">Contato</button></a>
         <a href="sobrenos.php"><button type="button" class="btn btn-dark text-info fw-bold">Sobre Nós</button></a>
      </div>
   </div>
   </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>