<?php
if (!isset($_SESSION)){
    session_start();
}
if(!isset($_SESSION['login'])){
    echo "
        <script>
            alert('Área restrita a usuário logado.Informe seu login e senha');
            window.location ='login.php';
        </script>    
    ";
}
else{
    $nivel = $_SESSION['nivel'];
    $login = $_SESSION['login'];
    if ($nivel != 'adm'){
        echo "
            <script>
                alert('$login, Área Restrita a Administradores.');
                window.location = 'index.php';
            </script>        
        
        ";
    }
}
?>