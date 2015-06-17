<?php
//if "email" variable is filled out, send email
  if (isset($_REQUEST['email']))  {
  
  //Email information
  $admin_email = "agileinfomanutencao@gmail.com";
  $nome = $_REQUEST['name'];
  $email = $_REQUEST['email'];
  $mensagem = $_REQUEST['message'];
  $fone = $_REQUEST['phone'];

  
  //send email
  $date=date_create();
  $date=date_format($date,"d/m/Y H:i:s");
  $texto = "Em ".$date.", ".$nome." enviou uma mensagem pelo formulario de contato do site <br>\n<br>\n"
              ."Dados do contato:<br>\n"
              ."Nome: ".$nome
              ."<br>\nEmail: ".$email
              ."<br>\nTelefone: ".$fone
              ."<br>\nMensagem: ".$mensagem;
  mail($admin_email, $nome." entrou em contato pelo site", $nome, $texto);
  
  //Email response
    
  //echo "<script>alert('Obrigado por nos contatar!')</script>";
  echo "<script>alert('Mensagem enviada com sucesso!')</script>";      
  echo "<script>location.replace('http://www.agileinfomanutencao.com.br/')</script>";
  }
  
  //if "email" variable is not filled out, display the form
  else  {
  
  echo "<script>alert('Erro ao enviar mensagem! Tente mais tarde por favor, ou envie um email diretamente para agileinfomanutencao@gmail.com')</script>"; 
  echo "<script>location.replace('http://www.agileinfomanutencao.com.br/')</script>";
  }
?>