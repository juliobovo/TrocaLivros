<?php


        session_start();
        $email=$_SESSION['usuario'];


    include("conexao.php");
    
    $idlivrosolicitado=$_GET['idlivrosolicitado'];
    $idsolicitado=$_GET['idsolicitado'];
    $idlivrosolicitante=$_GET['idlivrosolicitante'];
    
    $SQL1="SELECT id
            FROM livrotenho
            WHERE
            id_usuario='$idsolicitado'
            AND id_livro='$idlivrosolicitado'";
    $result1=mysql_query($SQL1 ,$conexao);
    $linha1 = mysql_fetch_array($result1);
    $idlivrotenhosolicitado=$linha1['id'];
    
    $SQL2="SELECT id
            FROM livrotenho
            WHERE
            id_usuario=(SELECT id_usuario FROM usuario WHERE email='$email')
            AND id_livro='$idlivrosolicitante'";
    $result2=mysql_query($SQL2 ,$conexao);
    $linha2 = mysql_fetch_array($result2);
    $idlivrotenhosolicitante=$linha2['id'];
    
    
    $status=false;
    
    $SQL = "INSERT INTO  troca(`status`, `livrotenho_solicitante`, `livrotenho_solicitado`)  VALUES ('$status','$idlivrotenhosolicitante', '$idlivrotenhosolicitado')";
    mysql_query($SQL ,$conexao);
     ?>  

    <script type="text/javascript">
		                 alert("TROCA SOLICITADA! ");
                                 window.location.href = "../principal.php";
    </script>
                    
         <?php
                     
	   
	 //fechando a conexao com bando de dados
	 mysql_close($conexao);
?>
   