<?php
        session_start();
        include('conexao.php');
        $id_livro = $_GET['id'];
        $email=$_SESSION['usuario'];
        $result=mysql_query("INSERT INTO  livroquero(`status`, `id_usuario`, `id_livro`)  VALUES ('true',(SELECT id_usuario FROM usuario WHERE email='$email'), '$id_livro')");

 ?>    
                     <script type="text/javascript">
                                 window.location.href = "../principal.php";
		     </script>
                    
         <?php
                     
	   
	 //fechando a conexao com bando de dados
	 mysql_close($conexao);
