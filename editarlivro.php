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
        $id = $_GET['id'];
        include('./filesystem/conexao.php');
        $result=mysql_query("select * from livro where id='$id'");
        $dados=  mysql_fetch_array($result);
        
        ?>
        
        <!-- Cabeçalho do Site  -->
        <?php include'includes/header.php'?>
        
            <!-- Formulario de editar os usuarios -->
          <div id="content">
            
                <div class="row">
                     <div id="formalterarlivro" class="col-md-6 col-md-offset-3">
                         <form role="form" method="POST" action="filesystem/alterarlivro.php?id=<?php echo $id;?>" >
                                <div class="form-group">
                                    Nome
                                    <input type="text" class="form-control" id="nome_livro" name="txt_nome" value="<?php echo $dados['nome']; ?>"  >
                                </div>
                                <div class="form-group">
                                    Edição
                                    <input type="text" class="form-control" id="edicao_livro" name="txt_edicao" value="<?php echo $dados['edicao']; ?>" >
                                </div>
                                <div class="form-group">
                                    Autor
                                    <input type="text" class="form-control" id="autor_livro" name="txt_autor"  value="<?php echo $dados['autor']; ?>">
                                </div>
                                
                                <div class="form-group">
                                    Ano
                                    <input type="text" class="form-control" id="ano_livro" name="txt_ano" value="<?php echo $dados['ano']; ?>">
                                </div>
                                <div class="form-group">
                                    Genero
                                    <input type="text" class="form-control" id="genero_livro" name="txt_genero" value="<?php echo $dados['genero']; ?>">
                                </div>
                                <div class="form-group">
                                    Status
                                    <input type="text" class="form-control" id="status_livro" name="txt_status" value="<?php echo $dados['status']; ?>">
                                </div>
                                                                  
                               <button type="submit" class="btn btn-success" id="btn_alterarlivro">Alterar</button>
                               
                            </form>
        </div>
                </div>
              </div> 
              
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>

