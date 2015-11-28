<?php
include('conexao.php');
$id=$_GET['id'];

$SQL="DELETE FROM troca WHERE id_troca='$id'";
$result= mysql_query($SQL);
    
 
?>

<script type="text/javascript">
                window.location.href = "../solicitacoes.php";
</script>
