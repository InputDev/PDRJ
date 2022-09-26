<?php

    include "conexao.php";

    if(isset($_POST['nome'])){
        //entrada
      
        $nome = trim($_POST['nome']);
        $cordapele = trim($_POST['cordapele']);
        $desaparecimento = trim($_POST['desaparecimento']);
        $vestimenta = trim($_POST['vestimenta']);
        $foto ='fotos/semfoto.png';
      

        //processamento - incluir no banco de dados 
        $sql = "insert into desaparecidos (nome,cordapele,desaparecimento,vestimenta,foto) values ('$nome','$cordapele','$desaparecimento','$vestimenta','$foto')";
        $incluir = mysqli_query($conexao,$sql);

        //saida - feedback ao usuario
        if($incluir){
            echo" 
                <script>
                    alert('Desaparecido cadastrado com sucesso!');
                    window.location = 'listarDesaparecido.php';
                </script>
        ";
        }
        else{
            echo"
                <p> Sistema temporariamente fora do ar. Tente novamente mais tarde. </p>
                <p> Entre em contato com o administrador do Sistema. </p>
            ";
            echo mysqli_error($conexao);
        }
    }
    else{
        echo "
        <p> Esta é uma página de tratamento de dados. </p>
        <p> Clique <a href='formularioDesaparecido.php'>aqui</a> para incluir um Desaparecido.
        </p>
        ";
    }

?>