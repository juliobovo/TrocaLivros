<?php
  session_start();
 include("conexao.php");
 ?>

<meta charset="utf-8">


<?php		
		if ($_SERVER['REQUEST_METHOD'] == 'POST')
		{        
	         //recebendo dados do formulário
                        $login=$_POST['email_login'];
			$senha=$_POST['senha_login'];
			$_SESSION['usuario'] = ($_POST['email_login']);
			
            			
		}	
		   //verificando se existe login e senha no banco de dados
                
                
			$sql ="SELECT * FROM  usuario WHERE email= '$login' AND senha= '$senha' ";
			
			$result = mysql_query($sql);
                        while ($admin = mysql_fetch_array($result)){
                            if($admin['admin']==1){
                                $_SESSION['admin']=1;
                            }else{
                                $_SESSION['admin']=0;
                            }
                        }
			
			if (mysql_num_rows($result)> 0 )
			{
				//header("Location:principal.php");
                                                       ?><script type="text/javascript">
					
					window.location.href = "../principal.php";
					
                            </script><?php
			}
			else
			{
			?>
				<script type="text/javascript">
					alert("Usuario e/ou senha Inválidos.")
					
					window.location.href = "../index.php";
					
				</script>
			
			<?php
			
				
			}
?>