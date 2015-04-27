<?

$nombre = $_GET['nombre'];
$email = $_GET['email'];
$subject = $_GET['asunto'];
$opcion = $_GET['opcion'];
$mensaje = $_GET['mensaje'];

$destinatario = "flor@swapdg.com";
$asunto = "Mensaje desde web OKEY.com.ar: [$subject]";
$cuerpo = "
<html>
    <head>
       <title>$asunto</title>
    </head>
    <body>
    <h1>Mensaje enviado desde el formulario web:</h1>
    <p>
    <b>Nombre:</b> $nombre<br/>
    <b>Email:</b> $email <br/>
    <b>Asunto:</b> $subject <br/>
    <b>Opción:</b> $opcion <br/>
    <b>Mensaje:</b> $mensaje
    </p>
    </body>
</html>
";

//para el envío en formato HTML
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";

//dirección del remitente
$headers .= "From: $nombre <$email>\r\n";

mail($destinatario,$asunto,$cuerpo,$headers)
?>
