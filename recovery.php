<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require './PHPMailer/Exception.php';
require './PHPMailer/PHPMailer.php';
require './PHPMailer/SMTP.php';

include('conexion.php');
$conexion = connect();
$email = $_POST['email'];
$query = "SELECT * FROM users where email = '$email'";
$result = $conexion->query($query);
$row = $result->fetch_assoc();

if($result->num_rows > 0){
  $mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = 'smtp-mail.outlook.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'luispanelas0158@outlook.com';
    $mail->Password   = 'Llilli26';
    $mail->Port       = 587;
    $mail->CharSet = 'UTF-8';

    $mail->setFrom('luispanelas0158@outlook.com', 'Luis Romero');
    $mail->addAddress('luisyluis26@outlook.com', 'Luis Romero');
    $mail->isHTML(true);
    $mail->Subject = 'Recuperación de contraseña';
    $mail->Body    = '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Correo de Recuperación</title>
    </head>
    <body>
        Se ha solicitado la recuperación de contraseña de tu cuenta, por favor sigue el link a continuación: <a href="http://localhost/Recuc/change_pass.php?id='.$row['id'].'">Recuperación de contraseña </a>
    </body>
    </html>';

    $mail->send();
    header("Location: index.php?message=ok");
} catch (Exception $e) {
  header("Location: index.php?message=error");
}

}else{
  header("Location: index.php?message=not_found");
}

?>