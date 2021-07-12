<? php

if(isset($_POST['email']) && !empty($_POST['email'])){


$nome = addslashes($_POST['name'])
$email =  addslashes($_POST['email'])
$mensagem =  addslashes($_POST['message'])

$to = "ltaseguranca@ltaseguranca.com.br";
$subject = "Contato - LTA";
$body = "Nome: ".$nome. "\r\n"
		"Email: ".$email. "\r\n"
		"Mensagem: ".$message;

$header = "From:tarcio@ltaseguranca.com.br"."\r\n"
		."reply-to: ".$email."\r\n"
		."X=Mailer:PHP/".phpversion();
if (mail($to,$subject,$body,$header)){

		echo("EMAIL ENVIADO COM SUCESSO")

}else{
		echo("ERRO AO ENVIAR O EMAIL (EMAIL NÃO PODE SER ENVIADO)")";"
}

?>
