<?php
    include "conexao.php";
    include "controle.php";
    $erro =0;

    if(isset($_GET['Id'])){
        $Id = $_GET['Id'];

        $sql = "select * from desaparecidos where Id = '$Id'";
        $seleciona = mysqli_query($conexao,$sql);
        $exibe = mysqli_fetch_array($seleciona);

       
        $nome = $exibe['nome'];
        $cordapele = $exibe['cordapele'];
        $desaparecimento = $exibe['desaparecimento'];
        $vestimenta = $exibe['vestimenta'];
        
       
        
        
    }
    else{
        $erro ++;
    }
?>

     <div class="container bg-secondary pag fw-bold">
            <h1>Edicao do Desaparecido</h1>
            <hr>
            <?php
                if($erro){
                    echo "
                    <p class='p-5'>
                        Nenhum desaparecido foi selecionado, clique no botão voltar
                        para selecionar o que deseja editar.</p>
                
                    ";
                    }
                    else{
                

            ?>
        <form name="nome" method="post" action="updateDesaparecido.php">
        <input type="hidden" name="Id"  value="<?php echo $Id?> ">   
        <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" 
                value="<?php echo $nome?> "  required>
            </div>
            <div>
                <label for="cordapele" class="form-label">Cor Da Pele</label>
                <input type="text" class="form-control" id="cordapele" name="cordapele" 
                value="<?php echo $cordapele?> " required>
            </div>
            <div class="mb-3">
                <label for="desaparecimento" class="form-label">Desaparecimento</label>
                <input type="text" class="form-control" id="desaparecimento"  name="desaparecimento" 
                value="<?php echo $desaparecimento?> " required>
            </div>
            <div class="mb-3">
                <label for="vestimenta" class="form-label">Vestimenta</label>
                <input type="text" class="form-control" id="vestimenta"  name="vestimenta"
                value="<?php echo $vestimenta?> " required>
            </div>
            
            <?php
            }
        ?>

            <div class="row">
                <div class="col text-start">
                <a href="listarDesaparecido.php?"><button type="button" class="btn btn-warning btn-sm">Voltar</button></a>
                </div>
            </div>
                <div class="col text-end">
               <button type="submit" class="btn btn-warning btn-sm">Alterar Dados</button></a>
                </div>
            </div>
            
        </form>
       

     </div>
<?php
include "footer.php";
?>

    