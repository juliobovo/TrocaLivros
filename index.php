<?php
    //session_start();
    include('filesystem/conexao.php');
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
        <div id="top">
            <div class="container-fluid">
                <div class="row">
                    <div id="logo" class="col-md-2 col-md-offset-1">Troca Livro</div>
                    <div id="espaco" class="col-md-4 col-md-offset-1"></div>
                    <div class="col-md-3 menu-top">
                        <button type="button" class="btn btn-danger" id="btn-cadastro" onclick="irtelacadastro()">Cadastre-se</button>
                        <button type="button" class="btn btn-default" id="btn-login" onclick="showLogin()">Login</button>
                    </div>
                </div>
            </div>
        </div>
       
        <!-- quadrado que aparece o login do site  -->
        <div id="quadradologin">
            <form role="form" method="Post" action="filesystem/verificarusuario.php">
                <div class="form-group" >
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" name="email_login" id="login" placeholder="Enter">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Senha</label>
                    <input type="password" class="form-control" name="senha_login" id="senha" placeholder="Senha">
                </div>
                <button type="submit" class="btn btn-danger">Entrar</button>
            </form>
        </div>
        
        <!-- conteudo da pagina index  -->
        <div id="content">
            <div class="container-fluid">
                <div class="row">
                    
                   
                </div>
            </div>
        </div>
        
        
        
        <div class="click-off-screen" onclick="hideLogin()"></div>
            
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>
