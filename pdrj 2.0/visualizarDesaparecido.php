<?php
include "./conexao.php";
include "./controle.php";
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
<div class="container bg-secondary pag">
    <div class="text-end">
        <a href="listarDesaparecido.php"><button type="button" class="btn btn-success btn-sn"> LISTAR DESAPARECIDOS </button></a>
    </div>

    <h2>Visualizar Desaparecidos</h2>
    <hr>
    <div class="container text-start bg-gradient p-3 ">
        <div class="row">
            <div class="col-2 text-center">
                <img src="<?php echo $foto ?>">
                <p> <a href="editarFoto.php?Id=<?php echo $Id; ?>"> Editar foto </a></p>
            </div>
            <div class="col-10">
                <?php
                if (!$erro) {
                    echo "
                       
                        <p> Id: $Id </p>
                        <p> Nome: $nome </p>
                        <p> Cor da Pele: $cordapele </p>
                        <p> Desaparecimento: $desaparecimento </p>
                        <p> Vestimenta: $vestimenta</p>
                        
                        
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
                    <a href="listarDesaparecido.php"><button type="button" class="btn btn-warning btn-sn"> Voltar</button></a>
                </div>
            
                <div class="col text-end">
                    <a href="editarDesaparecido.php?Id=<?php echo $Id ?>"><button type="button" class="btn btn-warning btn-sn">EDITAR DADOS</button></a>
                </div>
            </div>
        </div>

        <?php
        include "footer.php"
        ?>