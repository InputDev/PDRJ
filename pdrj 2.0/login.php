<?php
    include "controle.php";
?>
<link rel="stylesheet" href="css/style.css">
<div class="container mt-5 text-center">
    <h1 class="title fw-bold">Area de Login</h1>
    <hr>
    <div class="row bg-dark pag">
        <form name="form" method="post" action="#">
            <div class="mb-3">
                <label for="login" class="form-label text-info fw-bold fs-3" name="login" required> Login </label>
                <input type="login" class="form-control" id="login" name="login" required>  
            </div>
            <div class="mb-3">
                <label for="senha" class="form-label text-info fw-bold fs-3" name="senha" required> Senha </label>
                <input type="password" class="form-control" id="senha" name="senha" required>
            </div>
            <button type="submit" class="btn btn-info text-white fw-bold fs-3 text-end"> Entrar </button>
            

           
            </p>
        </form>
        <div class="text center text-danger">
            <?php include "valida.php" ?>
        </div>
    </div>
</div>

<?php
    include "footer.php";

?>

