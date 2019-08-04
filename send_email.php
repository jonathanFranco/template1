<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" name="viewport"
    content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta author="Jonathan Franco">
  <title>Enviando Email!</title>
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
<body style="overflow: hidden;" class="bg-success">

  <div class="justify-content-center d-flex align-items-center container my-5 col-md-7">

     <!-- Card -->
<div class=" card-image bg-success">
  <!-- Content -->
  <div class="text-white text-center d-flex align-items-center  py-5 px-4 h-100">
    <div>
      <h3 class="text-light"><i class="fas fa-envelope"></i> Concluído</h3>
      <h3 class="card-title pt-2"><strong>Seu Email Foi Enviado Com Sucesso!!!</strong></h3>
      <h5>Nós retornaremos o contato em breve, sua pergunta será respondida o mais rápido possível.</h5>
     <a class="btn btn-light my-5" href="contato.html"><i class="fas fa-arrow-left"></i> Voltar</a>
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
         $mail->Username = 'email@gmail.com'; // Conta de email existente e ativa em seu domínio
         $mail->Password = 'senha'; // Senha da sua conta de email
         // DADOS DO REMETENTE
         $mail->Sender = "email@gmail.com"; // Conta de email existente e ativa em seu domínio
         $mail->From = "email@gmail.com"; // Sua conta de email que será remetente da mensagem
         $mail->FromName = "Contato ACESHAC"; // Nome da conta de email
         // DADOS DO DESTINATÁRIO
         $mail->AddAddress('email@gmail.com'); // Define qual conta de email receberá a mensagem
         $mail->IsHTML(true);
         $mail->CharSet = 'utf-8';
         // DEFINIÇÃO DA MENSAGEM
         $mail->Subject  = "Email ACESHAC"; // Assunto da mensagem
         // Texto da mensagem
         $mail->Body .= " Nome:".$_POST['nome']."<br />"."";
         // Texto da mensagem
         $mail->Body .= " E-mail: ".$_POST['email']."<br />"."";
         // Texto da mensagem
         $mail->Body .= " Telefone: ".$_POST['tel']."<br />"."";
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