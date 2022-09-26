<?php
    include "conexao.php";
    include "controle.php";
    $sql = "select * from desaparecidos order by Id";
    $seleciona = mysqli_query($conexao,$sql);

?>

        <div class="container bg-secondary pag">
            <div class="text-end">
                <a href="formularioDesaparecido.php">
                <button type="button" class="btn btn-success btn-sm">CADASTRAR NOVO DESAPARECIDO
                </button>
                </a>
        </div>
        <h1>Lista de Desaparecidos</h1>
        <div class="container-fluid text-center">
            <div class="row bg-dark text-light p-2">
               <div class="col-12">
                    <div class="row">

                        <div class="col-12 col-md-1">
                            FOTO
                        </div>
                        
                        <div class="col-12 col-md-1">
                            ID
                        </div>
                        <div class="col-12 col-md-2">
                            NOME
                        </div>
                        <div class="col-12 col-md-1">
                            PELE
                        </div>
                        <div class="col-12 col-md-2">
                            DESAPARECIMENTO
                        </div>
                        <div class="col-12 col-md-2">
                            VESTIMENTA
                        </div>
                        <div class="col-12 col-md-3">
                            CONTROLE
                        </div>
                    
                    </div>
                </div>
            
        </div>
        <?php
                while ($exibe = mysqli_fetch_array($seleciona)){
                    $Id = $exibe['Id'];
        ?>
            <div class="row bg-gradient p-2">
                <div class="col-12 col-md-1">
                    <img src="<?php echo $exibe['foto'];?>" class="foto">
                </div>
                <div class="col-12 col-md-1">
                 <?php echo $exibe['Id']; ?>
                </div>
                <div class="col-12 col-md-2">
                <?php echo $exibe['nome']; ?>
                </div>
                <div class="col-12 col-md-1">
                <?php echo $exibe['cordapele']; ?>
                </div>
                <div class="col-12 col-md-2">
                <?php echo $exibe['desaparecimento']; ?>
                </div>
                <div class="col-12 col-md-2">
                <?php echo $exibe['vestimenta']; ?>
                </div>

                <div class="col-12 col-md-3">
                    <a href="visualizarDesaparecido.php?Id=<?php echo $Id; ?>"><button type="button" class="btn btn-success btn-sm">Visualizar </button></a>
                    <a href="editarDesaparecido.php?Id=<?php echo $Id; ?>"> <button type="button" class="btn btn-primary btn-sm">Editar</button></a>
                    <a href="excluirDesaparecido.php?Id=<?php echo $Id; ?>" onclick="return confirm('Confirmar a Exclusão do Desaparecido?')">
                    <button type="button" class="btn btn-danger btn-sm">Excluir</button></a>
                </div>
        </div>
      
        <?php
         }
        ?>
</div>
<div class="col text-start">
                    <a href="adm.php"><button type="button" class="btn btn-warning btn-sn"> Voltar</button></a>
                </div>
        </div>
        
        <?php
         include "footer.php";
         ?>