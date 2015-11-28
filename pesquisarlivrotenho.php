<?php
        session_start();
        include('filesystem/conexao.php');
        $email=$_SESSION['usuario'];
        $id_livro=$_GET['id'];
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
    </head>
    <body>
        
         <?php 
                    include '/includes/header.php';
                    include '/includes/menu.php'; ?>
        
        <?php
        
            /*$result=mysql_query("SELECT b.id_livro,a.nome, a.autor, c.nome_usuario, c.id_usuario
                                 FROM livro a, livrotenho b, usuario c
                                 WHERE a.id = b.id_livro
                                 AND b.id_usuario=c.id_usuario
                                 AND b.id_livro='$id_livro'");*/
            
            
            $result=  mysql_query("SELECT b.id_livro as id_livrotenho,a.nome as livrotenho, a.autor,c.id_usuario, c.nome_usuario, c.id_usuario, d.id_livro as id_livroquero, e.nome as livroquero 
                                    FROM livro a, livrotenho b, usuario c, livroquero d, livro e
                                    WHERE a.id = b.id_livro
                                    AND b.id_usuario=c.id_usuario
                                    AND c.id_usuario=d.id_usuario
                                    AND d.id_livro=e.id
                                    AND b.id_livro='$id_livro'
                                    AND c.id_usuario IN (SELECT u.id_usuario from livroquero q, usuario u
                                                        WHERE u.id_usuario = q.id_usuario
                                                        AND q.id_livro IN (select t.id_livro FROM livrotenho t where t.id_usuario = 
                                                        (SELECT id_usuario FROM usuario WHERE email='$email')))");
        ?>
        
               
            <table id="tabela_livros1" class="table table-bordered col-md-9 col-md-offset-1">
                        
                      <thead>
                          <h2 id="titulo">Resultado Pesquisa Livros que Eu Tenho</h2>
                          
                            <tr>
                              <th>ID</th>
                              <th>LIVRO</th>
                              <th>AUTOR</th>
                              <th>ID USUÁRIO QUE POSSUI</th>
                              <th>USUÁRIO QUE POSSUI</th>
                              <th>ID LIVRO QUE O USUÁRIO QUER</th>
                              <th>LIVRO QUE O USUÁRIO QUER</th>
                              
                            </tr>
                      </thead>
                      
                    
           
                        <?php while($linha = mysql_fetch_array($result)) { ?>
                                 <tr>
                                     <td><?php echo $linha['id_livrotenho'] ?></td>
                                     <td><?php echo $linha['livrotenho'] ?></td>
                                     <td><?php echo $linha['autor'] ?></td>
                                     <td><?php echo $linha['id_usuario'] ?></td>
                                     <td><?php echo $linha['nome_usuario'] ?></td> 
                                     <td><?php echo $linha['id_livroquero'] ?></td> 
                                     <td><?php echo $linha['livroquero'] ?></td> 
                                     <td><a href=filesystem/cadastrartroca.php?idlivrosolicitado=<?php echo $linha['id_livrotenho'];?>&idsolicitado=<?php echo $linha['id_usuario'];?>&idlivrosolicitante=<?php echo $linha['id_livroquero'];?> >QUERO ESTE!</a></td>

                                 </tr>

                        <?php } ?>
                </table>
            
        
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>    
        
    </body>
</html>
