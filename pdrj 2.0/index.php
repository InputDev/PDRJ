<?php
include "controle.php";
include "conexao.php";

$sql = "select * from desaparecidos order by nome";
$seleciona = mysqli_query($conexao, $sql);
?>

<link rel="stylesheet" href="css/style.css">



<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PDRJ</title>
  <link rel="stylesheet" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<div class="container">
  <div class="row">
    <?php
    while ($exibe = mysqli_fetch_array($seleciona)) {
      $Id = $exibe['Id'];
    ?>
        <div class="col-12 col-md-3" style="display: inline-block;">
          <div class="card mt-4 ">
            <img src="<?php echo $exibe['foto']; ?>" class="card-img-top" alt="Foto de uma pessoas desaparecida">

            <div class="card-body img-thumbnail">
              <h5 class="card-title">NOME: <?php echo $exibe['nome']; ?></h5>
              <h6>FOTOTIPO: <?php echo $exibe['cordapele']; ?></h6>
              <h6>LOCAL: <?php echo $exibe['desaparecimento']; ?></h6>
              <h6>ROUPA: <?php echo $exibe['vestimenta']; ?></h6>
              <a href="visualizarDesaparecidos.php?Id=<?php echo $Id; ?>" class="btn btn-info fw-bold">Visualizar</a>

            </div>
          </div>
        </div>
    <?php
    }
    ?>

  </div>

</div>
</div>

<body>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>


<?php
include "footer.php"
?>