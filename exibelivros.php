<?php
        session_start();
        include('filesystem/conexao.php');
        include('filesystem/verificasessao.php');
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Troca Livros</title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">

        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <?php
        if ($_SESSION['admin']==0){
            echo "<script type='text/javascript'>
					
					window.location.href = './principal.php';
					
                            </script>";
        }
        include('./filesystem/conexao.php');
        ?>
        <!-- Cabeçalho do Site  -->       
        <?php 
            include '/includes/header.php';
            include '/includes/menu.php'; 
        ?>
        
        <div id="tabela_livros">
            <?php
            // A variável $result faz uma consulta em nossa tabela selecionando todos os registros de todos os campos
            $result=mysql_query("select * from livro ORDER BY nome ASC");
            ?>                               
                

                    <!-- Table -->
                    <table id="tabela_livros1" class="table  col-md-offset-1">
                      <thead>
                            <tr>
                              <th>NOME</th>
                              <th>EDIÇÃO</th>
                              <th>AUTOR</th>
                              <th>ANO</th>
                              <th>GENERO</th>
                            </tr>
                      </thead>
                      
                    
           
           <?php while($linha = mysql_fetch_array($result)) { ?>
                <tr>
                    <td><?php echo $linha['nome'] ?></td>
                    <td><?php echo $linha['edicao'] ?></td>
                    <td><?php echo $linha['autor'] ?></td> 
                    <td><?php echo $linha['ano'] ?></td> 
                    <td><?php echo $linha['genero'] ?></td> 
                    <td><a id="texto_tabela" href=editarlivro.php?id=<?php echo $linha['id'];?>> Editar</a></td> <!– passando o valor do id para a página editar1.php –>
                    <td><a id="texto_tabela" href=excluirlivro.php?id=<?php echo $linha['id'];?>> Excluir</a></td>
                </tr>
                
                
                <?php } ?>
                </table>
                </div>
            
                <?php 
                mysql_close($conexao ); // Fechamos a conexão com o banco de dados
                ?>
        
        
                        
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>
