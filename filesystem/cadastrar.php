
<?php

	include("conexao.php");
	
	//if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	
                   $nome=$_POST['txt_nome'];
		   $email= $_POST['txt_email'];
		   $endereco= $_POST['txt_end'];
                   $cidade= $_POST['txt_cidade'];
                   $estado= $_POST['txt_estado'];
                   $pais= $_POST['txt_pais'];
                   $senha= $_POST['txt_senha'];
                   $admin=false;
                   
	   //}
	         // Inserindo Aluno na tabela aluno ,com dados enviados pelo FormulÃ¡rio
                        
			$SQL = "INSERT INTO  usuario(`nome_usuario`, `email`, `endereco`, `cidade`, `estado`, `pais`, `senha`, `admin`)  VALUES ('$nome','$email', '$endereco','$cidade','$estado','$pais','$senha', '$admin')";
                        mysql_query($SQL ,$conexao);
                        
                        
                        session_start();      
                        $_SESSION['usuario'] = $email;
                              
     ?>    
                     <script type="text/javascript">
		                 alert("CADASTRO EFETUADO COM SUCESSO ");
                                 window.location.href = "../principal.php";
                                 
		     </script>
                    
         <?php
                     
	   
	 //fechando a conexao com bando de dados
	 mysql_close($conexao);
?>