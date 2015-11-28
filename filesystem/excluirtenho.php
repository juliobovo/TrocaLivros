<?php
        session_start();
        include('conexao.php');
        $id_livro = $_GET['id'];
        $email=$_SESSION['usuario'];
        $result=mysql_query("DELETE FROM livrotenho WHERE id_usuario = (SELECT id_usuario FROM usuario WHERE email='$email') and id_livro = $id_livro");

 ?>    
                     <script type="text/javascript">
                                 window.location.href = "../principal.php";
		     </script>
                    
         <?php
                     
	   
	 //fechando a conexao com bando de dados
	 mysql_close($conexao);
?>