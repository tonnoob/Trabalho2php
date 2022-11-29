<section>
    <form action="verificar-usuario.php" method="post">
        <div>
            <input type="text" placeholder="Usuário" name="txUsuario" />
        </div>

        <div>
            <input type="password" placeholder="Senha" name="txSenha" />
        </div>      

        <div>
            <input type="submit" value="Login" />
        </div>
    </form>

    <?php 
    include("conexao.php");

    $stmt = $pdo->prepare("select * from tbPalavra");	
    $stmt ->execute();
    
    while($row = $stmt ->fetch(PDO::FETCH_BOTH)){    
        echo "$row[0] ";
        echo ($row[1]);        
        echo ($row[2]);
        echo ($row[3]);
        echo ($row[4]);
        echo "<a href='excluir-usuario.php?id=". $row['idUsuario'] . "'> Excluir </a>";
        echo "<br />";        
    }
    ?>	
</section>