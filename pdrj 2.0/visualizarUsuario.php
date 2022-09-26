<?php
include "conexao.php";
include "controle.php";
$erro = 0;

if (isset($_GET['login'])) {
    $login = $_GET['login'];

    $sql = "select * from usuarios where login = '$login'";
    $seleciona = mysqli_query($conexao, $sql);
    $exibe = mysqli_fetch_array($seleciona);

    $nome = $exibe['nome'];
    $login = $exibe['login'];
    $senha = $exibe['senha'];
   
} else {
    $erro++;
}
?>
<div class="container bg-secondary pag">
    <div class="text-end">
        <a href="listarUsuarios.php"><button type="button" class="btn btn-success btn-sn"> LISTAR USUARIOS </button></a>
    </div>

    <h2>Visualizar usuarios</h2>
    <hr>
    <div class="container text-start bg-gradient p-3">
        <div class="row">
           
            <div class="col-10">
                <?php
                if (!$erro) {
                    echo "
                        <p> login: $login </p>
                        <p> Nome: $nome </p>
                        <p> Senha: $senha </p>
                        
                        
                        
                    ";
                } else {
                    echo "
                     <p> Nenhum Usuario foi selecionado. </p>
                     <p> Clique em Listar Usuarios para selecionar o Usuario. </p>
                    ";
                }

                ?>
            </div>

            <div class="row">
                <div class="col text-start">
                    <a href="listarUsuario.php"><button type="button" class="btn btn-warning btn-sn"> Voltar</button></a>
                </div>
            
                <div class="col text-center">
                    <a href="editarSenha.php?login=<?php echo $login; ?>"><button type="button" class="btn btn-warning btn-sn">Alterar senha</button></a>
                </div>
                <div class="col text-end">
                    <a href="editarUsuario.php?login=<?php echo $login ?>"><button type="button" class="btn btn-warning btn-sn">EDITAR DADOS</button></a>
                </div>
            </div>
        </div>

        <?php
        include "footer.php"
        ?>