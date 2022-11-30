<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


</head>
<body>
<h1>Cadastrar Aluno</h1>

<section action="verificarCadastro.php" method="post">
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
            <input type="number" placeholder="CPF" name="txCpf"/>
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
            <input type="number" placeholder="Data de Nascimento" name="txDataNasc"/>
        </div>
        
    </form>
</section>


<section>
    <form>
        <div>
            <input type="text" placeholder="Endereço - Nº" name="txEndereco"/>
        </div>

        <div>
            <input type="text" placeholder="CEP" name="txCep"/>
        </div>

        <div>
            <input type="submit" value="Cadastrar" />
        </div>
    </form>
</section>
</body>

</html>