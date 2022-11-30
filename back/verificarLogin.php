<?php

    $usu = $_POST['txUsuario'];
    $sen = $_POST['txSenha'];

    //echo "$usu $sen";

    
    include("conexao.php");

    $stmt = $pdo->prepare("select * from cadastroAluno
        where aluno='$usu' and senha='$sen';        
    ");	
    $stmt ->execute();
    
    $count = $stmt->rowCount();

    if($count == 1){
        session_start();
        $_SESSION["usrname"] = $usu;
        header("Location:palavra-letra.php");
    }
    else if($usu == "" || $sen == ""){
        header("Location:login.php?erro=2");
    }
    else if($count < 1) {
        header("Location:login.php?erro=1");
    }
?>