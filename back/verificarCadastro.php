<?php

    $nomeAluno = $_POST['txNome'];
    $nomePai = $_POST['txNomePai'];
    $nomeMae = $_POST['txNomeMae'];
    $sexo = $_POST['txSexo'];  
    $cpf = $_POST['txCpf'];
    $rg = $_POST['txRg'];
    $cidadeNasc = $_POST['txCidadeNasc'];
    $paisNasc = $_POST['txPaisNasc'];   
    $dataNasc = $_POST['txDataNasc'];

    $endereco = $_POST['txEndereco'];
    $complemento = $_POST['txComplemento'];
    $cep = $_POST['txCep'];    

    //echo "$usu $sen";

    
    include("conexao.php");

    $stmt = $pdo->prepare("select * from ca
        where usuario='$usu' and senha='$sen';
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