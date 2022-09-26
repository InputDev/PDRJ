<?php

    include "conexao.php";

    if(isset($_POST['login'])){
        //entrada
        $login = trim($_POST['login']);
        $senha = trim($_POST['senha']);
        $nome = trim($_POST['nome']);
        $nivel = 'adm';
      
      

        //processamento - incluir no banco de dados 
        $sql = "insert into usuarios (login,nome,senha,nivel) values ('$login','$nome','$senha','$nivel')";
        $incluir = mysqli_query($conexao,$sql);

        //saida - feedback ao usuario
        if($incluir){
            echo" 
                <script>
                    alert('Usuário cadastrado com sucesso!');
                    window.location = 'listarUsuario.php';
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
        <p> Clique <a href='formularioUsuario.php'>aqui</a> para incluir um usuario.
        </p>
        ";
    }

?>