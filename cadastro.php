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
        <!--<script src="jquery.js" type="text/javascript"></script>
        <script src="jquery.validate.js" type="text/javascript"></script>-->

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
        include 'filesystem/conexao.php';
        //Cabeçalho do Site
        include 'includes/header.php'; 
        ?>
      
        <!-- Conteudo do Site  -->
        <div id="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-5 col-md-offset-4 " id="textcadastro">
                                Cadastro de Usuário
                    </div>
                </div>
                
                <!-- Formulario de cadastro do usuario  -->
                <div class="row">
                     <div id="formcadastro_usuario" class="col-md-6 col-md-offset-3">
                         <form role="form" method="POST" action="filesystem/cadastrar.php" >
                                <div class="form-group">
                                    Nome
                                    <input type="text" class="form-control" id="nome_usu" name="txt_nome" placeholder="Nome" required
                                       Maxlength="60" onkeyup="soLetra( this )"  >
                                </div>
                                <div class="form-group">
                                    E-mail
                                    <input type="email" class="form-control" id="email_usu" name="txt_email"  placeholder="E-mail" required
                                      Maxlength="50"     >
                                </div>
                                <div class="form-group">
                                    Endereço
                                    <input type="text" class="form-control" id="end_usu" name="txt_end"  placeholder="Endereço" required 
                                           Maxlength="50">
                                </div>
                                
                                <div class="form-group">
                                    Cidade
                                    <input type="text" class="form-control" id="cidade_use" name="txt_cidade" placeholder="Cidade" required 
                                           Maxlength="30">
                                </div>
                                <div class="form-group">
                                    Estado
                                    <input type="text" class="form-control" id="estado_usu" name="txt_estado" placeholder="Estado" 
                                           required         Maxlength="30"    >
                                </div>
                                <div class="form-group">
                                    País
                                    <input type="text" class="form-control" id="spais_usu" name="txt_pais" placeholder="País" required 
                                       Maxlength="30"    >
                                </div>
                                <div class="form-group">
                                    Senha
                                    <input type="password" class="form-control" id="senha_usu" name="txt_senha" placeholder="Senha" required 
                                      Maxlength="20">
                                </div>
                                  
                               <button type="submit" class="btn btn-success" id="btn_finalizarcadastro">Finalizar Cadastro</button>
                               <div id="btn_limpeza">
                               <button type="reset" class="btn btn-default">Limpar Dados</button>
                               </div>
                            </form>
                       </div>    
                </div>
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