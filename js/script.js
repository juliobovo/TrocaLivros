/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// Somente letras maiúsculas e minúsculas e numeros
	$("#nome_usu").keyup(function() {
		var valor = $("#nome_usu").val().replace(/[^a-zA-ZáàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+/g,'');
		$("#nome_usu").val(valor);
	});
        $("#cidade_use").keyup(function() {
		var valor = $("#cidade_use").val().replace(/[^a-zA-ZáàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+/g,'');
		$("#cidade_use").val(valor);
	});
        $("#estado_usu").keyup(function() {
		var valor = $("#estado_usu").val().replace(/[^a-zA-ZáàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+/g,'');
		$("#estado_usu").val(valor);
	});
        $("#spais_usu").keyup(function() {
		var valor = $("#spais_usu").val().replace(/[^a-zA-ZáàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+/g,'');
		$("#spais_usu").val(valor);
	});
        $("#ano").keyup(function() {
		var valor = $("#ano").val().replace(/[^0-9]+/g,'');
		$("#ano").val(valor);
	});
        
  $(document).ready(function(){
    //Tratamento dos Campos do formularios Cadastro do Usuário
    // e editar dados do usuário
    //$("#nome_usu").mask("SSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS");
     //$("#cidade_use").mask("SSSSSSSSSSSSSSSSSSSSSSSSSSSSSS");
     //$("#estado_usu").mask("SSSSSSSSSSSSSSSSSSSSSSSSSSSSSS");
     
     //Tratamento dos Campos do formularios Cadastro de Livro
     $("#autor").keyup(function() {
		var valor = $("#autor").val().replace(/[^a-zA-ZáàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+/g,'');
		$("#autor").val(valor);
	});
        $("#genero").keyup(function() {
		var valor = $("#genero").val().replace(/[^a-zA-ZáàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+/g,'');
		$("#genero").val(valor);
	});
     //$("#autor").mask("SSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS");
     //$("#genero").mask("SSSSSSSSSSSSSSS");
     $("#ano").mask("0000");
     
     
     
     
 });
 
   // mostrando a tela de login
function showLogin() {
    $("#quadradologin").fadeIn(300);
    $(".click-off-screen").fadeIn(300);
    //$("#quadradologin").show();
    //$(".click-off-screen").show();
}

  // escondendo o quadrado de login
function hideLogin() {
    $("#quadradologin").fadeOut(300);
    $(".click-off-screen").fadeOut(300);
    //$("#quadradologin").hide();
    //$(".click-off-screen").hide();
}
 // funçao para o botao voltar para pagina principal
function voltarinicio(){
    window.location.href = "index.php";
}

  // funcçao para redirecionar para tela cadastro.
function irtelacadastro(){
    window.location.href = "cadastro.php";
}

