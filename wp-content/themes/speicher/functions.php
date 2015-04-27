<?php

add_action( 'wp_ajax_siteWideMessage', 'wpse_sendmail' );
add_action( 'wp_ajax_nopriv_siteWideMessage', 'wpse_sendmail' );

function wpse_sendmail() {
    $nombre = $_GET['nombre'];
    $apellido = $_GET['apellido'];
    $email = $_GET['email'];

    $destinatario = "briones.gaston@gmail.com";
    $asunto = "Mensaje desde web franciscospeicher.com";
    $cuerpo = "
        <html>
            <head>
               <title>Mensaje</title>
            </head>
            <body>
            <h1>Mensaje enviado desde el formulario web:</h1>
            <p>
            <b>Nombre:</b> $nombre<br/>
            <b>Apellido:</b> $apellido <br/>
            <b>Email:</b> $email <br/>

            </p>
            </body>
        </html>
        ";

//para el envío en formato HTML
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8\r\n";

//dirección del remitente
    $headers .= "From: $nombre <$email>\r\n";

    mail($destinatario, $asunto, $cuerpo, $headers);

    exit;
}
