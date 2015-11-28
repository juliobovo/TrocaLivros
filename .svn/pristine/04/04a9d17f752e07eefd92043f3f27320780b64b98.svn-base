<?php
        session_start();
        include('filesystem/conexao.php');
         $email=$_SESSION['usuario'];
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
            $result=mysql_query("SELECT lv1.nome as livrotenho,lv2.nome as livroquer,t.id_troca, usu2.email,lt1.id_usuario as u1, lt2.id_usuario as u2, lt1.id_livro as l1, lt2.id_livro as l2,lt1.id as lt1, lt2.id as lt2
                                FROM troca t
                                JOIN livrotenho lt1 on (lt1.id = t.livrotenho_solicitado)
                                JOIN livro lv1 on (lv1.id = lt1.id_livro)
                                JOIN livrotenho lt2 on (lt2.id = t.livrotenho_solicitante)
                                JOIN usuario usu2 on (usu2.id_usuario=lt2.id_usuario)
                                JOIN livro lv2 on (lv2.id = lt2.id_livro)
                                WHERE lt1.id_usuario = (SELECT id_usuario FROM usuario WHERE email='$email') AND t.status=false");
                               
            ?>                               
                

                    <!-- Table -->
                    <table id="tabela_livros1" class="table  col-md-offset-1">
                      <thead>
                            <tr>
                              <th>LIVRO OFERECIDO</th>
                              <th>LIVRO SOLICITADO</th>
                              <th>EMAIL SOLICITANTE</th>
                            </tr>
                      </thead>
                      
                    
           
           <?php while($linha = mysql_fetch_array($result)) { ?>
                <tr>
                    <td><?php echo $linha['livroquer'] ?></td>
                    <td><?php echo $linha['livrotenho'] ?></td>
                    <td><?php echo $linha['email'] ?></td>
                    <td><a id="texto_tabela" href=filesystem/aceitartroca.php?id_troca=<?php echo $linha['id_troca'];?>&lt1=<?php echo $linha['lt1'];?>&lt2=<?php echo $linha['lt2'];?>&u1=<?php echo $linha['u1'];?>&u2=<?php echo $linha['u2'];?>&l1=<?php echo $linha['l1'];?>&l2=<?php echo $linha['l2'];?>&emailsolicitante=<?php echo $linha['email'];?>> Aceitar</a></td> <!– passando o valor do id para a página editar1.php –>
                    <td><a id="texto_tabela" href=filesystem/recusartroca.php?id=<?php echo $linha['id_troca'];?>> Recusar</a></td>
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
