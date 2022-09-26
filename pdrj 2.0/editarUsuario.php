<?php
    include "conexao.php";
    include "controle.php";
    $erro =0;

    if(isset($_GET['login'])){
        $login = $_GET['login'];

        $sql = "select * from usuarios where login = '$login'";
        $seleciona = mysqli_query($conexao,$sql);
        $exibe = mysqli_fetch_array($seleciona);

       
        $nome = $exibe['nome'];
        $login = $exibe['login'];
        $senha = $exibe['senha'];
       
        
        
    }
    else{
        $erro ++;
    }
?>

     <div class="container bg-secondary pag">
            <h1>Edicao de Usuario</h1>
            <hr>
            <?php
                if($erro){
                    echo "
                    <p class='p-5'>
                        Nenhum usuario foi selecionado, clique no botão voltar
                        para selecionar o aluno que deseja editar.</p>
                
                    ";
                    }
                    else{
                

            ?>
        <form name="nome" method="post" action="updateUsuario.php">
        <input type="hidden" name="login"  value="<?php echo $login?> ">   
        <div class="mb-3">
                <label for="login" class="form-label">Login</label>
                <input type="text" class="form-control" id="login" name="login" 
                value="<?php echo $login?> "  required>
            </div>
            <div>
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" 
                value="<?php echo $nome?> " required>
            </div>
            <div class="mb-3">
                <label for="senha" class="form-label">Senha</label>
                <input type="text" class="form-control" id="senha"  name="senha" 
                value="<?php echo $senha?> " required>
            </div>
            
            <?php
            }
        ?>

            <div class="row">
                <div class="col text-start">
                <a href="listarUsuario.php?"><button type="button" class="btn btn-warning btn-sm">Voltar</button></a>
                </div>
            </div>
                <div class="col text-end">
               <button type="submit" class="btn btn-warning btn-sm">Alterar Dados</button></a>
                </div>
                <div class="col text-center">
               <button type="submit" class="btn btn-warning btn-sm">Alterar Senha</button></a>
                </div>
            </div>
            
        </form>
       

     </div>
<?php
include "footer.php";
?>

    