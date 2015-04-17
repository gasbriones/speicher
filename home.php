<?php
    $_SESSION['active'] = "home";
?>
<!DOCTYPE html>
<?php include 'layout/head.php' ?>
<body class="home">
<?php include 'layout/header.php' ?>
<div class="main wrapper">
    <section class="content">
        <ul class="slider">
            <li><img src="images/slider-1.jpg" /></li>
            <li><img src="images/slider-2.jpg" /></li>
            <li><img src="images/slider-3.jpg" /></li>
        </ul>
    </section>
</div>
<script src="js/libs/jquery-2.1.3.min.js"></script>
<script src="js/libs/jquery.bxslider.min.js"></script>
<script src="js/init.js"></script>
</body>
</hmtl>