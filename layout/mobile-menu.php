<ul class="menu-mobile">
    <li class="item <?php echo $active = $_SESSION["active"]== 'home' ? 'active' : ''; ?>">
        <a href="home.php">Home</a>
    </li>
    <li class="item <?php echo $active = $_SESSION["active"]== 'resena' ? 'active' : ''; ?>">
        <a href="resena.php">Reseña</a>
    </li>
    <li class="item <?php echo $active = $_SESSION["active"]== 'obras' ? 'active' : ''; ?>">
        <a href="obras.php">Obras</a>
    </li>
    <li class="item <?php echo $active = $_SESSION["active"]== 'prensa' ? 'active' : ''; ?>">
        <a href="prensa.php">Prensa</a>
    </li>
    <li class="item <?php echo $active = $_SESSION["active"]== 'contacto' ? 'active' : ''; ?>">
        <a href="contacto.php">Contacto</a>
    </li>
</ul>