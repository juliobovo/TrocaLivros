 <?php
        include('conexao.php');
        $id = $_GET['id'];
        $nome=$_POST['txt_nome'];
        $edicao=$_POST['txt_edicao'];
        $autor= $_POST['txt_autor'];
        $ano= $_POST['txt_ano'];
        $genero= $_POST['txt_genero'];
        $status= $_POST['txt_status'];
        $result=mysql_query("UPDATE livro SET nome='$nome', edicao='$edicao', autor='$autor', ano='$ano', genero='$genero', status='$status'"
                . "WHERE id='$id'");
        
        ?>
       <script type="text/javascript">
		alert("LIVRO ALTERADO COM SUCESSO ");
                window.location.href = "../exibelivros.php";
       </script>
        
        

   