<?php
$_SESSION['active'] = "obras";
?>
<!DOCTYPE html>
<?php include 'layout/head.php' ?>
<body class="obras">
<?php include 'layout/header.php' ?>
<div class="main wrapper">
    <section class="content">
        <div class="col col-left clearfix">
            <article class="clearfix">
                <h4>OBRAS</h4>

                <p>
                    "La mayoría de mis obras representan mujeres porque creo en la belleza innata del género femenino.
                    Pero también pinto personajes masculinos, aggiornados con un glamour exaltado, bien pop. Me gusta
                    encontrar belleza en la fealdad, en la deformidad, porque creo que todos somos un poco freaks y
                    diferentes en el fondo"
                </p>
            </article>
            <div class="gallery-menu clearfix">
                <ul class="gallery-type">
                    <li><span class="active">+ PINTURAS</span>
                        <ul>
                            <li class="active">
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
                    <li><a data-slide-index="0"><img src="images/gallery-sample.jpg" width="74" height="74"/></a></li>
                    <li><a data-slide-index="1"><img src="images/gallery-sample.jpg" width="74" height="74"/></a></li>
                    <li><a data-slide-index="2"><img src="images/gallery-sample.jpg" width="74" height="74"/></a></li>
                    <li><a data-slide-index="3"><img src="images/gallery-sample.jpg" width="74" height="74"/></a></li>
                    <li><a data-slide-index="4"><img src="images/gallery-sample.jpg" width="74" height="74"/></a></li>
                    <li><a data-slide-index="5"><img src="images/gallery-sample.jpg" width="74" height="74"/></a></li>
                    <li><a data-slide-index="6"><img src="images/gallery-sample.jpg" width="74" height="74"/></a></li>
                    <li><a data-slide-index="7"><img src="images/gallery-sample.jpg" width="74" height="74"/></a></li>

            </div>
        </div>
        <div class="col col-right">
            <ul class="slider">
                <li><img src="images/gallery-sample.jpg" title="Hola mundo" /></li>
                <li><img src="images/gallery-sample.jpg" title="Hola mundo" /></li>
                <li><img src="images/gallery-sample.jpg" title="Hola mundo" /></li>
                <li><img src="images/gallery-sample.jpg" title="Hola mundo"/></li>
                <li><img src="images/gallery-sample.jpg" title="Hola mundo"/></li>
                <li><img src="images/gallery-sample.jpg" title="Hola mundo"/></li>
                <li><img src="images/gallery-sample.jpg" title="Hola mundo"/></li>
                <li><img src="images/gallery-sample.jpg" title="Hola mundo"/></li>
            </ul>
        </div>
    </section>
</div>
<script src="js/libs/jquery-2.1.3.min.js"></script>
<script src="js/libs/jquery.bxslider.min.js"></script>
<script src="js/init.js"></script>
</body>
</hmtl>