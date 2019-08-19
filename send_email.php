<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" name="viewport"
    content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta author="Jonathan Franco">
  <title>Email Enviado!</title>
  <link rel="icon" href="img/icon.png" type="image/png" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/mdb.css">
  <script type="text/javascript" src="js/mdb.js"></script>
  <script type="text/javascript" src="js/side-menu.js"></script>
  <script type="text/javascript" src="js/loading.js"></script>
  <script type="text/javascript" src="js/velocity.min.js"></script>
  <script type="text/javascript" src="js/popper.min.js"></script>
</head>
<body style="overflow: hidden;background-image: linear-gradient(to bottom right, #00C851, #66bb6a);">

  <div class="justify-content-center d-flex align-items-center container my-5 col-md-7">

     <!-- Card -->
<div class="card-image">
  <!-- Content -->
  <div class="text-white text-center d-flex align-items-center  py-5 px-4 h-100">
    <div>
      <p class="h2-responsive text-white font-weight-bold"><i class="fas fa-mail-bulk"></i> Concluído</p>
      <p class="h3-responsive card-title pt-2 font-weight-bold"><strong>Seu Email Foi Enviado Com Sucesso !!!</strong></p>
      <p class="h5-responsive font-weight-bold">Nós retornaremos o contato em breve, sua pergunta será respondida o mais rápido possível.</p>
     <a class="btn btn-white btn-rounded my-5" href="contato.html"><i class="fas fa-arrow-left mr-1"></i> Voltar</a>
    </div>
  </div>

</div>
<!-- Card -->
  </div>

    <script>
    $(window).load(function(){
      <?php
         require_once("phpmailer/PHPMailerAutoload.php");
         $mail = new PHPMailer();
         // DEFINIÇÃO DOS DADOS DE AUTENTICAÇÃO - Você deve alterar conforme o seu domínio!
         $mail->IsSMTP();
         $mail->Host = "smtp.gmail.com"; // Seu endereço de host SMTP
         $mail->SMTPAuth = true;
         $mail->Port = 465;
         $mail->SMTPSecure = 'ssl';
         $mail->SMTPAutoTLS = false;
         $mail->Username = 'aceshac.2019@gmail.com'; // Conta de email existente e ativa em seu domínio
         $mail->Password = ''; // Senha da sua conta de email
         // DADOS DO REMETENTE
         $mail->Sender = "aceshac.2019@gmail.com"; // Conta de email existente e ativa em seu domínio
         $mail->From = "aceshac.2019@gmail.com"; // Sua conta de email que será remetente da mensagem
         $mail->FromName = "Contato ACESHAC"; // Nome da conta de email
         // DADOS DO DESTINATÁRIO
         $mail->AddAddress('aceshac.2019@gmail.com'); // Define qual conta de email receberá a mensagem
         $mail->IsHTML(true);
         $mail->CharSet = 'utf-8';
         // DEFINIÇÃO DA MENSAGEM
         $mail->Subject  = "Email ACESHAC"; // Assunto da mensagem
         // Texto da mensagem
         $mail->Body .= " Nome:".$_POST['nome']."<br />"."";
         // Texto da mensagem
         $mail->Body .= " E-mail: ".$_POST['email']."<br />"."";
         // Texto da mensagem
         $mail->Body .= " Mensagem: ".$_POST['msg']."<br />"."";
         // ENVIO DO EMAIL
         $enviado = $mail->Send();
         // Limpa os destinatários e os anexos
         $mail->ClearAllRecipients();  
      ?>
    }); 
  </script>

</body>
</html>