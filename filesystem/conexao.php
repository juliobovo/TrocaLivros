<?php
      //conectando com o bando de dados
	$conexao = mysql_connect("localhost","root","");
	
	if (!$conexao)
	{
		die('Nao foi possivel conectar: ' . mysql_error());
	}
	
	mysql_select_db("TrocaLivros");
?>
