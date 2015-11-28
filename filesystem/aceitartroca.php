<?php
    session_start();
    $email=$_SESSION['usuario'];
    include('conexao.php');
    $idtroca=$_GET['id_troca'];
    $emailsolicitante=$_GET['emailsolicitante'];
    $lt1=$_GET['lt1'];
    $lt2=$_GET['lt2'];
    $usu1=$_GET['u1'];
    $usu2=$_GET['u2'];
    $l1=$_GET['l1'];
    $l2=$_GET['l2'];
    
    /*$assunto ='Confirmação de troca'; 
    $mensagem = 'O email do usuário para combinar detalhes da troca é' . $email ;
    $mensagem2 = 'O email do usuário para combinar detalhes da troca é' . $emailsolicitante ;
    
    $headers = "MIME-Version: 1.0";
    $headers .= "Content-type: text/html;charset=iso-8859-1";
    $headers .= "From: Xuxé <xuxe@criarweb.com>";
    $headers .= "Return-Path: localhost\r\n";
    
    
   $envio= mail("gtaynah@gmail.com", $assunto, $mensagem, $headers, "-f$email"); //função que faz o envio do email.
    mail($email, $assunto, $mensagem2, $headers);
    
    if($envio){
    echo "Mensagem enviada com sucesso";}
else{
echo "A mensagem não pode ser enviada";}*/


    
    $SQL="UPDATE troca SET status=true WHERE id_troca='$idtroca'";
    $result= mysql_query($SQL);
    
    $SQL1="UPDATE livrotenho SET id_usuario='$usu1' WHERE id='$lt2'";
    $result1= mysql_query($SQL1);
    
    $SQL2="UPDATE livrotenho SET id_usuario='$usu2' WHERE id='$lt1'";
    $result2= mysql_query($SQL2);
    
    $SQL3="DELETE FROM livroquero WHERE id_usuario='$usu1' AND id_livro='$l2'";
    $result3= mysql_query($SQL3);
    
    $SQL4="DELETE FROM livroquero WHERE id_usuario='$usu2' AND id_livro='$l1'";
    $result4= mysql_query($SQL4);
    
 
       //<script type="text/javascript">
	//	alert("TROCA EFETUADA COM SUCESSO ");
            //    window.location.href = "../principal.php";
       //</script>
?>

<script type="text/javascript">
		alert("TROCA EFETUADA COM SUCESSO ");
                window.location.href = "../principal.php";
       </script>