<?php
session_start();
$email = $_SESSION['usuario'];  
include('filesystem/verificasessao.php');
?>

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
        include('filesystem/verificasessao.php');
        ?>
        
        <!-- Cabeçalho do Site  -->
        <?php
        include 'includes/header.php';
        include 'includes/menu.php'; 
        ?>
                    <div class="col-md-5 col-md-offset-4 " id="textcadastro">
                                Cadastro de Livro
                    </div>

        
            <!-- Formulario de editar os usuarios -->
            <div class="row">
                     <div id="formcadastro_livro" class="col-md-6 col-md-offset-3">
                         <form role="form" method="POST" action="filesystem/cadastrarlivro.php" >
                                <div class="form-group">
                                    Nome Do Livro
                                    <input type="text" class="form-control" id="nome_livro" name="txt_nome_livro" placeholder="Nome" required
                                      Maxlength="100"   >
                                </div>
                                <div class="form-group">
                                    Edicao
                                    <input type="text" class="form-control" id="edicao" name="txt_edicao_livro"  placeholder="Edicao" required
                                     Maxlength="15"      >
                                </div>
                                <div class="form-group">
                                    Autor
                                    <input type="text" class="form-control" id="autor" name="txt_autor_livro"  placeholder="Autor" required Maxlength="50"   >
                                </div>
                                
                                <div class="form-group">
                                     Ano
                                     <input type="number" class="form-control" id="ano" name="txt_ano_livro" placeholder="Ano" required  
                                           >
                                </div>
                                <div class="form-group">
                                    Genero
                                    <input type="text" class="form-control" id="genero" name="txt_genero_livro" placeholder="Genero" required  
                                       Maxlength="15"    >
                                </div>
                                
                                  
                               <button type="submit" class="btn btn-success" id="btn_finalizarcadastro">Finalizar Cadastro</button>
                               <div id="btn_limpeza">
                               <button type="reset" class="btn btn-default">Limpar Dados</button>
                               </div>
                            </form>
                       </div>    
            </div>
              
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.mask.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>

