<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    function phpMailer($email, $Usuarios){
        require_once('vendor/PHPMailer-master/src/Exception.php');
        require_once('vendor/PHPMailer-master/src/PHPMailer.php');
        require_once('vendor/PHPMailer-master/src/SMTP.php');

        $mail=new PHPMailer(true);
        try{
            $mail->SMTPDebug = 2;
            $mail->isSMTP();
            $mail->Host = 'in-v3.mailjet.com';
            $mail->SMTPAuth= true;
            $mail->Username= '';
            $mail->Password= '';
            $mail->SMTPSecure= 'tls';
            $mail->Port= 587;

            $mail->setFrom('agarcia@codecyt.gob.ve', 'intranet.com');
            $mail->addAddress($email, $Usuarios);

            $mail->isHTML(true);
            $mail->Subject ='Bienvenido a la intranet';
            $mail->Body= "Gracias por registrarte";
            $mail->AltBody= "Gracias por registrarte";
            $mail->send();

    }catch(Exception $e){
        echo "Error al enviar el correo".$mail->ErrorInfo;
    }}
?>