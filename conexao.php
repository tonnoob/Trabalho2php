<?php
	$servidor="localhost";
	$banco="cadastroAluno";
	$usuario="root";
	$senha="";

	$pdo = new PDO("mysql:host=$servidor;dbname=$banco",$usuario,$senha);		
?>