<?php
    include "conexao.php";
    
    if(isset($_POST['login'])){
       $login = trim($_POST['login']);
       $senha = trim($_POST['senha']); 

       $sql = "select * from usuarios where login = '$login' and senha = '$senha'";
       $testeLogin = mysqli_query($conexao,$sql);
       $existe = mysqli_num_rows($testeLogin);

       $msg = "";
       if($existe){
           $dados = mysqli_fetch_array($testeLogin);
           $nome = $dados['nome'];
           $login =$dados['login'];
           $senha =$dados['senha'];
           $nivel = $dados['nivel'];
          
          
       if (!isset($_SESSION)){
       session_start();
    }
        $_SESSION['login'] = $login;
        $_SESSION['nome'] = $nome;
        $_SESSION['nivel'] = $nivel;
        $_SESSION['senha'] = $senha;

    if ($nivel == 'adm'){
        header('location: adm.php');
        }        
    else{
        header('location: adm.php');
    }
}
    else{
            echo "Usuario e senha inválidos."; 
        }
     }
?>