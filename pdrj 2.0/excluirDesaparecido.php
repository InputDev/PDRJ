<?php

    include "conexao.php";

        //Tratamento de erro
    if(isset($_GET['Id'])){
        $Id = $_GET['Id'];

        //processamento
        $sql="delete from desaparecidos where Id = '$Id'";
        $excluir = mysqli_query($conexao,$sql);

        //saida
        if($excluir){
            echo "
            <script>
                alert('Desaparecido excluido com Sucesso!');
                window.location = 'listarDesaparecido.php';
                </script>
                ";

    }
    else{
        echo "
        <p> Esta é uma página de tratamento de dados. </
        <p>
        <p> Clique <a href='listarDesaparecido.php'> aqui </a>
        para Excluir um Desaparecido. </p>
        ";
        echo mysqli_error($conexao);
    }
}

?>
