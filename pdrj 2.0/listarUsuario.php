<?php
    include "conexao.php";
    include "controle.php";
    $sql = "select * from usuarios order by nome";
    $seleciona = mysqli_query($conexao,$sql);

?>

        <div class="container bg-secondary pag">
            <div class="text-end">
                <a href="formularioUsuario.php">
                <button type="button" class="btn btn-success btn-sm">CADASTRAR NOVO USUARIO
                </button>
                </a>
        </div>
        <h1>Lista de usuario</h1>
        <div class="container text-center">
            <div class="row bg-dark text-light p-2">
            
                <div class="col-2">
                    LOGIN
                </div>
                <div class="col-3">
                    NOME
                </div>
                <div class="col-2">
                    SENHA
                </div>
                <div class="col-2">
                    NIVEL
                </div>
                <div class="col-3">
                    CONTROLE
                </div>
               
            
        </div>
        <?php
                while ($exibe = mysqli_fetch_array($seleciona)){
                    $login = $exibe['login'];
        ?>
            <div class="row bg-gradient p-2">
                <div class="col-2">
                 <?php echo $exibe['login']; ?>
                </div>
                <div class="col-3">
                <?php echo $exibe['nome']; ?>
                </div>
                <div class="col-2">
                   *******
                </div>
                <div class="col-2">
                <?php echo $exibe['nivel']; ?>
                </div>

                <div class="col-3">
                    <a href="visualizarUsuario.php?login=<?php echo $login; ?>"><button type="button" class="btn btn-success btn-sm">Visualizar </button></a>
                    <a href="editarUsuario.php?login=<?php echo $login; ?>"> <button type="button" class="btn btn-primary btn-sm">Editar</button></a>
                    <a href="excluirUsuario.php?login=<?php echo $login; ?>" onclick="return confirm('Confrima a Exclusão do Usuario?')">
                    <button type="button" class="btn btn-danger btn-sm">Excluir</button></a>
                </div>
        </div>
        <div class="col text-start">
                    <a href="adm.php"><button type="button" class="btn btn-warning btn-sn"> Voltar</button></a>
                </div>
        <?php
         }
        ?>
</div>
        </div>
        <?php
         include "footer.php";
         ?>