<?php
    include "conexao.php";
    include "controle.php";

    if(isset($_GET['Id'])){
        $Id = $_GET['Id'];
        $sql = "select * from desaparecidos where Id = '$Id'";
        $seleciona = mysqli_query($conexao, $sql);
        $exibe = mysqli_fetch_array($seleciona);
    }
?>

    <div class="container bg-white pag">
        <h1>Alterar Foto</h1>
        <hr>
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <form name="form" method="post" action="updateFoto.php" enctype="multipart/form-data">
                    <input type="hidden" name="Id" value="<?php echo $Id ?>">
                    <div class="form-group mt-5">
                        <input type="file" name="foto" id="foto">
                    </div>

                        <div class="row mt-5">
                            <div class="col text-start mt-5">
                                <button type="button" class="btn btn-warning btn-sm" onclick="window.history.go(-1)">Voltar</button>
                            </div>
                            <div class="col text-end mt-5">
                                <button type="submit" class="btn btn-success btn-sm">Enviar foto</button>
                             </div>
                        </div>

                </form> 
            </div>
            <div class="col-2"></div>
        </div>
    </div>

<?php
    include "footer.php";
?>