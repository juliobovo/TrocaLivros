<?php

	include("conexao.php");
	
                   $nome=$_POST['txt_nome_livro'];
		   $edicao=$_POST['txt_edicao_livro'];
		   $autor=$_POST['txt_autor_livro'];
                   $ano=$_POST['txt_ano_livro'];
                   $genero=$_POST['txt_genero_livro'];
                   $status=FALSE;
		$SQL = "INSERT INTO  livro(`nome`, `edicao`, `autor`, `ano`, `genero`, `status`)  VALUES ('$nome','$edicao', '$autor','$ano','$genero','$status')";
                mysql_query($SQL); ?>
        
                     <script type="text/javascript">
		                 alert("CADASTRO EFETUADO COM SUCESSO ");
                               window.location.href = "../exibelivros.php";
		     </script>
                    
         
                     
<?php	   
	 //fechando a conexao com bando de dados
	 mysql_close($conexao);
?>