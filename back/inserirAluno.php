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

echo "$nomeAluno";
echo "$nomePai";
echo "$nomeMae";
echo "$sexo";
echo "$cpf";
echo "$rg";
echo "$cidadeNasc";
echo "$paisNasc";
echo "$dataNasc";

echo "$endereco";
echo "$cep";


include("conexao.php");

try{
    $stmt = $pdo->prepare("insert into aluno values(null, '$nomeAluno', '$nomePai', '$nomeMae', '$sexo', 
    '$cpf', '$rg', '$cidadeNasc', '$paisNasc', '$dataNasc', '$endereco',  
    '$cep')");

    $stmt ->execute();

    $pdo = null;

    header("Location:aluno.php");
}

catch(PDOException $e){
    echo "Erro: " . $e->getMessage();
}

?>