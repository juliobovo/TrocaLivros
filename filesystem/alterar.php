 <?php
        session_start();
        include('conexao.php');
        $nome=$_POST['txt_nome'];
        $email=$_POST['txt_email'];
        $endereco= $_POST['txt_end'];
        $cidade= $_POST['txt_cidade'];
        $estado= $_POST['txt_estado'];
        $pais= $_POST['txt_pais'];
        $senha= $_POST['txt_senha'];
        $emailse=$_SESSION['usuario'];
        $result=mysql_query("UPDATE usuario SET nome_usuario='$nome', email='$email', endereco='$endereco', cidade='$cidade', estado='$estado', pais='$pais', senha='$senha'"
                . "WHERE email='$emailse'");
        $_SESSION['usuario'] = ($email);
        ?>
       <script type="text/javascript">
		alert("DADOS ALTERADO COM SUCESSO ");
                window.location.href = "../principal.php";
       </script>
        
        

                     
                     