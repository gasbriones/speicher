<header>
    <div class="wrapper">
        <div class="header-logo">
            <span class="name">Francisco</span>
            <span class="last-name">Speicher</span>
        </div>
        <ul class="menu">
            <li class="item <?php echo $active = $_SESSION["active"]== 'home' ? 'active' : ''; ?>">
                <a href="home.php">
                    <div class="item-bg">
                        <div class="bg"></div>
                        <span>Home</span>
                    </div>
                </a>
            </li>
            <li class="item <?php echo $active = $_SESSION["active"]== 'resena' ? 'active' : ''; ?>">
                <a href="resena.php">
                    <div class="item-bg">
                        <div class="bg rs"></div>
                        <span>Reseña</span>
                    </div>
                </a>
            </li>
            <li class="item <?php echo $active = $_SESSION["active"]== 'obras' ? 'active' : ''; ?>">
                <a href="obras.php">
                    <div class="item-bg">
                        <div class="bg obr"></div>
                        <span>Obras</span>
                    </div>
                </a>
            </li>
            <li class="item">
                <a href="#">
                    <div class="item-bg">
                        <div class="bg pre"></div>
                        <span>Prensa</span>
                    </div>
                </a>
            </li>
            <li class="item">
                <a href="#">
                    <div class="item-bg">
                        <div class="bg con"></div>
                        <span>Contacto</span>
                    </div>
                </a>
            </li>
        </ul>
        <ul class="social-small">
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
        <ul class="lang">
            <li><a href="#" class="active">Español</a></li>
            <li><a href="#">English</a></li>
        </ul>
    </div>
</header>