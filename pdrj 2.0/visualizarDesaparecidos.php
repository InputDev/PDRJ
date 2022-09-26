<?php
include "../pdrj/conexao.php";
include "../pdrj/controle.php";
$erro = 0;


if (isset($_GET['Id'])) {
    $Id = $_GET['Id'];

    $sql = "select * from desaparecidos where Id = '$Id'";
    $seleciona = mysqli_query($conexao, $sql);
    $exibe = mysqli_fetch_array($seleciona);

    $foto = $exibe['foto'];
    $nome = $exibe['nome'];
    $Id = $exibe['Id'];
    $cordapele = $exibe['cordapele'];
    $desaparecimento = $exibe['desaparecimento'];
    $vestimenta = $exibe['vestimenta'];
} else {
    $erro++;
}
?>

<div class="container bg-secondary pag fw-bold ">
    <h2>Visualizar Desaparecidos</h2>
    <hr>
    <div class="container text-start bg-gradient p-3">
        <div class="row">
            <div class="col-2 text-center">
                <img src="<?php echo $foto ?>">
            </div>
            <div class="col-10 ">
                <?php
                if (!$erro) {
                    echo "
                       
                        <p> ID: $Id</p>
                        <p> NOME: $nome </p>
                        <p> FOTOTIPO: $cordapele </p>
                        <p> DESAPARECIMENTO: $desaparecimento </p>
                        <p> ROUPA: $vestimenta</p>
                        
                        
                    ";
                } else {
                    echo "
                     <p> Nenhum Desaparecido foi selecionado. </p>
                     <p> Clique em Listar Desaparecido para selecionar. </p>
                    ";
                }

                ?>
            </div>

            <div class="row">
                <div class="col text-start">
                    <a href="index.php"><button type="button" class="btn btn-info btn-sn fw-bold"> Voltar</button></a>
                </div>
            </div>
        </div>

        <?php
        include "footer.php"
        ?>
    </div>   
</div>