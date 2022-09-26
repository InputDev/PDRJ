<?php
    session_start(); //Inicia a sessão
    $_SESSION = array(); //Carrega o array de dados
    session_destroy(); //Destroi todas as sessões iniciadas
    header('location:index.php'); //Redireciona para a area de login
?>