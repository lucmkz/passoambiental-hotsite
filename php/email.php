<?php

$nome = addslashes($_POST['inputName']);
$mensagem = addslashes($_POST['inputCompany']);
$empresa = addslashes($_POST['inputMsg']);
$telefone = addslashes($_POST['fone']);
$email = addslashes($_POST['email']);

$to = "valcbomfim@gmail.com";
$subject = "from Passo Ambiental Site";

$body = "Nome: ".$nome. "\r\n".
"Empresa: ".$empresa. "\r\n".
"Telefone: ".$telefone. "\r\n".
"Email: ".$email. "\r\n".
"Menssagem: ".$mensagem. "\r\n";

$header = "From:contato@passoambiental.com"."\r\n".
            "Reply-To".$email."\r\n".
            "X-Mailer:PHP/.".phpversion();

if(mail ($to,$subject,$body,$header)){
    echo "<script>window.location='../index.html';alert('$nome, sua mensagem foi enviada com sucesso! Estaremos retornando em breve');</script>";      
} else 
{
    echo "<script>window.location='../index.html';alert('$nome, Houve um erro no envio de sua mensagem, tente novamente');</script>";      
}
?>