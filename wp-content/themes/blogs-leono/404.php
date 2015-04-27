<?php
/**
 * Created by PhpStorm.
 * User: gaston briones
 * Date: 1/8/14
 * Time: 3:49 PM
 */
?>

<?php get_header(); ?>
<section id="container" class="clearfix default-theme">
    <?php get_template_part('blog-header'); ?>
   	<div class="main">
   		<article class="content wrapper">
   			<div class="text">
   				<h2><span>Ups!</span> Error 404</h2>
   				<p>Página no encontrada</p>
   			</div>
   		</article>
   	</div>
    <?php get_template_part('blog-sidebar'); ?>

</section>
<?php get_footer(); ?>