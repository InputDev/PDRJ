<?php
    include "conexao.php";

    if(isset($_POST['Id'])){
        $Id = trim($_POST['Id']);
        
        $nome = $_FILES['foto']['name'];
        $temp = $_FILES['foto']['tmp_name'];
        $caminho = 'fotos/semfoto.png';
        $foto = $caminho . $nome;

        $upload = move_uploaded_file($temp,$foto);

        if($upload){
            $sql = "update desaparecidos set foto = '$foto' where Id = '$Id'";
            $alterar = mysqli_query($conexao,$sql);

        }
        if ($alterar){
            echo"
                <script>
                    alert('Foto atualizada com sucesso!');
                    window.location = 'listarDesaparecido.php';
                </script>
            ";
        }
        else{
             echo"
            <p> Sistema Temporariamente fora do ar.
            Tente novamente mais tarde.</p>
            <p> Entre em contato com o administrador do Sistema </p>
             ";

        echo mysqli_error($conexao);
        }
    }
    else{
        echo"
            <p> Esta é uma página de tratamento dados.</p>
            <p> Clique <a href='listarDesaparecido.php'> aqui </a> para selecionar um Usuário </p>
            ";

    }
?>