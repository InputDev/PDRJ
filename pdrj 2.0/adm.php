<?php
    include "./controle.php";
    include "./segurancaAdm.php";
?>
<style>
img{
    max-width: 256px;
    max-height: 256px;
    
}
.quadro a img{
    opacity: 0,5;
    width: 50%;
    height: 50%;
}
.quadro a:hover img{
    opacity: 1;
}
a{
    text-decoration: none;

}


</style>

    <div class="container mt-5">
        <div class="row text-center">
            <div class="col">
                <a href="listarDesaparecido.php">
                <img src="img/usuario.png" >
                <p>DESAPARECIDOS</p>
                </a>
            </div>
            <div class="col">
                <a href="listarUsuario.php">
                <img src="img/usuario.png" >
                <p>ADMINISTRADORES</p>
                </a>
            </div>
        </div>
    </div>
    <?php
        include "./footer.php";
    ?>
    