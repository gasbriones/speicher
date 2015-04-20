<?php
$_SESSION['active'] = "contacto";
?>
<!DOCTYPE html>
<?php include 'layout/head.php' ?>
<body class="contacto">
<?php include 'layout/header.php' ?>
<div class="main wrapper">
    <section class="content clearfix">
        <article>
            <div class="contact-main">
                <h4>CONTACTO</h4>
                <div>
                    E-mail:<br/> franciscospeicher@hotmail.com
                </div>
                <ul class="social-micro">
                    <li>
                        <a href="#" class="fb"></a>
                    </li>
                    <li>
                        <a href="#" class="tw"></a>
                    </li>
                    <li>
                        <a href="#" class="ins"></a>
                    </li>
                </ul>

                <form class="contact-form">
                    <h4>FORMULARIO</h4>
                    <label>Nombre:</label>
                    <input type="text" />
                    <label>Apellido:</label>
                    <input type="text" />
                    <label>E-mail:</label>
                    <input type="text" />
                    <input type="submit" value="ENVIAR" />
                </form>
            </div>

        </article>
    </section>
</div>
<script src="js/libs/jquery-2.1.3.min.js"></script>
<script src="js/init.js"></script>
</body>
</hmtl>