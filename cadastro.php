<h1>Cadastrar Aluno</h1>
<section action="verificar-aluno.php" method="post">
    <form>
        <div>
            <input type="text" placeholder="Nome do aluno" name="txNome"/>
        </div>

        <div>
            <input type="text" placeholder="Nome do pai" name="txNomePai"/>
        </div>    

        <div>
            <input type="text" placeholder="Nome da mãe" name="txNomeMae"/>
        </div>

        <div>
            <input type="text" placeholder="Sexo" name="txSexo"/>
        </div>

        <div>
            <input type="text" placeholder="CPF" name="txCpf"/>
        </div>

        <div>
            <input type="text" placeholder="RG" name="txRg"/>
        </div>

        <div>
            <input type="text" placeholder="Cidade de Nasc. - UF" name="txCidadeNasc"/>
        </div>

        <div>
            <input type="text" placeholder="País de Nascimento" name="txPaisNasc"/>
        </div>
        
        <div>
            <input type="text" placeholder="Data de Nascimento" name="txDataNasc"/>
        </div>
        
    </form>
</section>


<section>
    <form>
        <div>
            <input type="text" placeholder="Endereço - Nº" name="txEndereco"/>
        </div>

        <div>
            <input type="text" placeholder="Complemento" name="txComplemento"/>
        </div>    

        <div>
            <input type="text" placeholder="Bairro" name="txBairro"/>
        </div>

        <div>
            <input type="text" placeholder="CEP" name="txCep"/>
        </div>

        <div>
            <input type="text" placeholder="Cidade - UF" name="txCidade"/>
        
        </div>
        <div>
            <input type="submit" value="Cadastrar" />
        </div>
    </form>
</section>

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
$bairro = $_POST['txBairro']; 
$cep = $_POST['txCep'];
$cidade = $_POST['txCidade'];      

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
echo "$complemento";
echo "$bairro";
echo "$cep";
echo "$cidade";

include("conexao.php");

try{
    $stmt = $pdo->prepare("insert into aluno values(null, '$nomeAluno', '$nomePai', '$nomeMae', '$sexo', 
    '$cpf', '$rg', '$cidadeNasc', '$paisNasc', '$dataNasc', '$endereco', '$complemento', '$bairro, 
    '$cep', '$cidade')");
    $stmt ->execute();
}

catch(PDOException $e){
    echo "Erro: " . $e->getMessage();
}

?>
