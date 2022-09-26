<?php

    include "conexao.php";

        //Tratamento de erro
    if(isset($_GET['login'])){
        $login = $_GET['login'];

        //processamento
        $sql="delete from usuarios where login = '$login'";
        $excluir = mysqli_query($conexao,$sql);

        //saida
        if($excluir){
            echo "
            <script>
                alert('Usuario excluido com Sucesso!');
                window.location = 'listarUsuario.php';
                </script>
                ";

    }
    else{
        echo "
        <p> Esta é uma página de tratamento de dados. </
        <p>
        <p> Clique <a href='listarUsuario.php'> aqui </a>
        para Excluir um usuario. </p>
        ";
        echo mysqli_error($conexao);
    }
}

?>
