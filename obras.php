<?php
$_SESSION['active'] = "obras";
?>
<!DOCTYPE html>
<?php include 'layout/head.php' ?>
<body class="obras">
<?php include 'layout/header.php' ?>
<div class="main wrapper">
    <section class="content">
        <article class="clearfix">
            <h4>OBRAS</h4>
            <p>
                "La mayoría de mis obras representan mujeres porque creo en la belleza innata del género femenino. Pero también pinto personajes masculinos, aggiornados con un glamour exaltado, bien pop. Me gusta encontrar belleza en la fealdad, en la deformidad, porque creo que todos somos un poco freaks y diferentes en el fondo"
            </p>
        </article>
        <div class="gallery-menu clearfix" >
            <ul class="gallery-type">
                <li><span class="active">+ PINTURAS</span>
                    <ul>
                        <li>
                            2012
                        </li>
                        <li>
                            2013
                        </li>
                        <li>
                            2014
                        </li>
                        <li>
                            2015
                        </li>
                    </ul>
                </li>
                <li><span>+ DIBUJOS</span>
                    <ul class="years">
                        <li>
                            2014
                        </li>
                        <li>
                            2015
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="thumb-container clearfix">
            <ul class="thumb">
                <li><img src="images/gallery-sample.jpg" width="74" height="74" /></li>
                <li><img src="images/gallery-sample.jpg" width="74" height="74" /></li>
                <li><img src="images/gallery-sample.jpg" width="74" height="74" /></li>
                <li><img src="images/gallery-sample.jpg" width="74" height="74" /></li>
                <li><img src="images/gallery-sample.jpg" width="74" height="74" /></li>
                <li><img src="images/gallery-sample.jpg" width="74" height="74" /></li>
                <li><img src="images/gallery-sample.jpg" width="74" height="74" /></li>
                <li><img src="images/gallery-sample.jpg" width="74" height="74" /></li>
            </ul>
        </div>
    </section>
</div>
<script src="js/libs/jquery-2.1.3.min.js"></script>
<script src="js/init.js"></script>
</body>
</hmtl>