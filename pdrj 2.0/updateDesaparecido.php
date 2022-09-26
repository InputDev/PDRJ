<?php

    include "conexao.php";

    if(isset($_POST['Id'])){
        //entrada - coletar os dados do formulário
        $Id = trim($_POST['Id']);
        $nome = trim($_POST['nome']);
        $cordapele = trim($_POST['cordapele']);
        $desaparecimento = trim($_POST['desaparecimento']);
        $vestimenta = trim($_POST['vestimenta']);
        
        

        //processamento - incluir no banco de dados
        $sql = "update desaparecidos set nome = '$nome', cordapele = '$cordapele', desaparecimento = '$desaparecimento', vestimenta ='$vestimenta' where Id = '$Id'";
        $alterar = mysqli_query($conexao,$sql);

        //saida - feedback ao usuário
        if($alterar){
            echo "
                <script>
                    alert('Desaparecido Atualizado com sucesso!');
                    window.location = 'listarDesaparecido.php';
                </script>
            ";
        }
        else{
            echo "
                <p> Sistema temporariamente fora do ar. Tente novamente mais tarde. </p>
                <p> Entre em contato com o administrador do Sistema. </p>
            ";
            echo mysqli_error($conexao);
        }
    }
    else{
        echo "
        <p> Esta é uma página de tratamento de dados. </p>
        <p> Clique <a href='listarDesaparecido.php'>aqui</a> para selecionar um Desaparecido. </p>
    ";  
    }

?>