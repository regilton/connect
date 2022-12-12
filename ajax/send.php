<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../lib/vendor/autoload.php';

$sistema = $_POST['sistema'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['whatsapp'];
$cnpj = $_POST['cnpj'];
$empresa = $_POST['empresa'];
$msg = $_POST['msg'];

$mailClient = new PHPMailer();
$mailAdmin = new PHPMailer();

$robotsmtp = 'financeiro@labsolutions.dev';
$emailrecebe1 = $email;

$emailadmin = 'regilton@gmail.com';
$admin = 'Regilton Bezerra';

try {

  // email para o cliente
  $mailClient->isSMTP();
  $mailAdmin->isSMTP();
  $mailClient->Host       = 'smtp.umbler.com';
  $mailAdmin->Host       = 'smtp.umbler.com';
  $mailClient->SMTPAuth   = true;
  $mailAdmin->SMTPAuth   = true;
  $mailClient->Port       = 587;
  $mailAdmin->Port       = 587;
  $mailClient->Username   = $robotsmtp;
  $mailAdmin->Username   = $robotsmtp;
  $mailClient->Password   = 'WWE.!JjJP4JF';
  $mailAdmin->Password   = 'WWE.!JjJP4JF';
  $mailClient->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
  $mailAdmin->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

  //Recipients
  $mailClient->setFrom($robotsmtp, 'CONNECT SISTEMAS');
  $mailClient->addAddress($emailrecebe1, $nome);

  $mailAdmin->setFrom($robotsmtp, ':: EMAIL DE CLIENTE DO SITE ::');
  $mailAdmin->addAddress($emailadmin, $admin);

  //Content
  $mailClient->isHTML(true);
  $mailAdmin->isHTML(true);
  $mailClient->Subject = ":: CONNECT SISTEMAS - SOLICITAÇÃO DE ORÇAMENTO ::";
  $mailAdmin->Subject = ':: PEDIDO DE ORÇAMENTO CLIENTE ::';

  // msg cliente
  $mailClient->Body    = "<style>
.social{float:left;}
.avatar{float:left;}
.assinatura{padding: 10px 0 0 10px;float: left;}
</style>
<img src=\"https://labsolutions.dev/connect/img_logo/logo-color.png\">
<h4>Ol&aacute; " . utf8_decode($nome) . "</h4>
<p>Ficamos felizes com o seu interesse em adquirir um de nossos sistemas.<br>
Iremos providenciar o or&ccedil;amento que voc&ecirc; solicitou.<br><br>  
Al&eacute;m do sistema que voc&ecirc; deseja adquirir (" . utf8_decode($sistema) . ") nossa equipe tamb&eacute;m esta pronta para falar sobre outros segmentos como:</p>
<ul>
<li>SUPERMERCADOS</li>
<li>MERCADINHOS</li>
<li>PADARIA</li>
<li>LOJAS</li>
<li>FOOD SERVICE</li>
</ul>

<p>Caso n&atilde;o possa esperar pela confirma&ccedil;&atilde;o e ache necess&aacute;rio deixe uma mensagem em nosso whatsapp: <a href=\"https://api.whatsapp.com/send?phone=5585997115400&text=Ol%C3%A1%2C%20eu%20acabei%20de%20receber%20um%20email%20de%20com%20o%20orcamento\">85 9 9711 5400</a></p>
<p>-----------------------------------------------------</p>
<p>Se desejar saber um pouco mais sobre a nossa empresa acesse nossas redes sociais:</p>
<p><img class=\"social\" src=\"https://labsolutions.dev/clientes/mycredit/assets/img/icon/instagram24.png\">&nbsp;<a href=\"https://instagram.com/connectsistemas.com.br?igshid=1nnowg24c4sqt\" target=\"_blank\">@connectsistemas</a></p>

<p><img class=\"social\" src=\"https://labsolutions.dev/clientes/mycredit/assets/img/icon/facebook24.png\">&nbsp;<a href=\"https://www.facebook.com/ConnectSistemasTecnologia/\" target=\"_blank\">VS-financiamento</a></p>

<p><img class=\"social\" src=\"https://labsolutions.dev/clientes/mycredit/assets/img/icon/whatsapp24.png\">&nbsp;<a href=\"https://api.whatsapp.com/send?phone=5585997115400&text=Ol%C3%A1%2C%20eu%20acabei%20de%20receber%20um%20email%20de%20confirma%C3%A7%C3%A3o%20de%20agendamento\">85 9 9711 5400</a></p>
<p>-----------------------------------------------------</p>
Fique a vontade para visitar o nosso site:<br>
<p><a href=\"https://www.connectsistemas.com.br/\">connectsistemas.com.br/</a></p>
<br><br><p><img class=\"avatar\" src=\"https://labsolutions.dev/clientes/mycredit/assets/img/sample/avatar/vgncirclemail.png\">
<span class=\"assinatura\">Paulo Henrique<br>
<small> Diretor Comercial</small></span>
<br><br><br><small>Esta &eacute; uma mensagem autom&aacute;tica portanto n&atilde;o &eacute; necess&aacute;rio que voc&ecirc; responda este email.</small> 
</p>
<br>
";

  // msg admin
  $mailAdmin->Body    = "
<img src=\"https://labsolutions.dev/connect/img_logo/logo-color.png\">
<h4>Ol&aacute; " . utf8_decode($admin) . "</h4>
<p>Fique atento, o(a) cliente: " . utf8_decode($nome) . ",  deseja um or&ccedil;amento para adquirir o sistema: (<strong>" . utf8_decode($sistema) . "</strong>).</p>
<p>----------- <strong>DADOS DO CLIENTE</strong> -----------</p>
<p>Nome: " . utf8_decode($nome) . "</p>
<p>Telefone: " . $telefone . "</p>
<p>Email: " . $email . "</p>
<p>Empresa: " . utf8_decode($empresa) . "</p>
<p>CNPJ: " . utf8_decode($cnpj) . "</p>
<p>--------------- <strong>OBSERVA&Ccedil;&Otilde;ES</strong> ---------------</p>
<p>Mensagem: " . utf8_decode($msg) . "</p>  
--------------------------------------------------------------------<br>
Fique a vontade para enviar mensagem para o cliente:<br>
<p><a href=\"https://vsfinanciamento.com.br/\">" . $telefone . "</a></p>
<br><br>

<small>Esta &eacute; uma mensagem autom&aacute;tica portanto n&atilde;o &eacute; necess&aacute;rio que voc&ecirc; responda este email.</small> 
";
  $mailClient->AltBody = '';
  $mailClient->send();
  $mailAdmin->send();

  //caso altere essa mensagem tem q alterar na mensagem de success do ajax;
  echo "Orçamento enviado com Sucesso ";
} catch (\Throwable $e) {
  echo "Mensagem não foi enviada: {$mailClient->ErrorInfo}";
}
