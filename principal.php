<?php
        session_start();
        include('filesystem/conexao.php');
        include('filesystem/verificasessao.php');
         $email=$_SESSION['usuario'];
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
        
        <!-- Cabeçalho do Site  -->
                    <?php 
                    include '/includes/header.php';
                    include '/includes/menu.php'; ?>

        
       
        
             <?php
            // A variável $result faz uma consulta em nossa tabela selecionando todos os registros de todos os campos
            $result=mysql_query("SELECT id_livro ,nome, autor
                                 FROM livro a, livrotenho b
                                 WHERE a.id = b.id_livro
                                 AND b.id_usuario=(SELECT id_usuario FROM usuario WHERE email='$email')");
            ?> 
        

                    <!-- Table -->
                    <div id="tabela_livros_principal">
                    <table class="table table-bordered">
                        
                      <thead>
                          <div id="titulo_botao">
                          <h2 id="titulo">Livros que Eu Tenho <a href="adicionarlivrotenho.php"><img id="icone_adicionar" src="img/add.png"></a> </h2>
                          </div>
                            <tr>
                              <th>NOME</th>
                              <th style ="border-right-style:none">AUTOR</th>
                              <th style ="border-left-style:none"></th>
                            </tr>
                      </thead>
                      
                    
           
       <?php while($linha = mysql_fetch_array($result)) { ?>
                <tr>
                    <td><?php echo $linha['nome'] ?></td>
                    <td><?php echo $linha['autor'] ?></td>
                    <td><a href=filesystem/excluirtenho.php?id=<?php echo $linha['id_livro'];?> ><img id="icone_deletar" src="img/deleta.png"/></a></td>
                </tr>
                
                <?php } ?>
                </table>
                </div>
        
        
        
             <?php
            // A variável $result faz uma consulta em nossa tabela selecionando todos os registros de todos os campos
            $result2=mysql_query("SELECT b.id_livro, a.nome, a.autor,a.id
                                 FROM livro a, livroquero b
                                 WHERE a.id = b.id_livro
                                 AND b.id_usuario=(SELECT id_usuario FROM usuario WHERE email='$email')");
            ?> 
        

                    <!-- Table -->
                    <div id="tabela_livro">
                    <table class="table table-bordered">
                     <thead>
                         <div id="titulo_botao">
                          <h2 id="titulo2">Livros que Eu Quero <a href="adicionarlivroquero.php"><img id="icone_adicionar" src="img/add.png"></a> </h2>
                          </div>
                            <tr>
                              <th>NOME</th>
                              <th style ="border-right-style:none">AUTOR</th>
                              <th style ="border-left-style:none; border-right-style:none"></th>
                              <th style ="border-left-style:none"></th>
                            </tr>
                      </thead>
                      
                    
           
                    <?php while($linha2 = mysql_fetch_array($result2)) { ?>
                         <tr style="vertical-align: auto">
                             <td><?php echo $linha2['nome'] ?></td>
                             <td><?php echo $linha2['autor'] ?></td>
                             <td ><a href=filesystem/excluirquero.php?id=<?php echo $linha2['id_livro'];?> ><img id="icone_deletar" src="img/deleta.png"/></a></td>
                             <td><a href=pesquisarlivrotenho.php?id=<?php echo $linha2['id'];?>><img id="icone_pesquisar" src="img/pesquisar.png"></a> </td>
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
