<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require_once '../js/vendor/autoload.php';

// Si el formulario ha sido enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Crea una nueva instancia de PHPMailer
    $mail = new PHPMailer(true);

    // Configura el servidor SMTP y las credenciales de autenticación
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'osfecasusama@gmail.com';
    $mail->Password = 'kaguya1105';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    // Configura los detalles del correo electrónico
    $mail->setFrom('osfecasusama@gmail.com', 'Oscar Felipe Cáceres');
    $mail->addAddress($_POST['email']);
    $mail->addReplyTo('osfecasusama@gmail.com', 'Oscar Felipe Cáceres');
    $mail->Subject = 'Prueba';
    $mail->Body = 'Esta es una prueba del correo electronico';
    $mail->AltBody = 'Cuerpo del correo electrónico en texto plano';

    // Envía el correo electrónico
    if (!$mail->send()) {
        echo 'Error al enviar el correo electrónico: ' . $mail->ErrorInfo;
    } else {
        echo 'El correo electrónico ha sido enviado';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Enviar correo electrónico con PHPMailer</title>
</head>
<body>
    <h1>Enviar correo electrónico con PHPMailer</h1>
    <form method="post">
        <label for="email">Correo electrónico:</label>
        <input type="email" name="email" required>
        <br>
        <button type="submit">Enviar correo electrónico</button>
    </form>
</body>
</html>