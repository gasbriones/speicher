<header id="header">
    <div class="wrapper">
        <div class="header-logo">
            <span class="mobile-btn"><img src="<?php echo get_template_directory_uri(); ?>/images/menu.png" width="32" height="32"></span>
            <a href="?page_id=2" class="home-btn">
                <span class="name">Francisco</span>
                <span class="last-name">Speicher</span>
            </a>
        </div>
        <ul class="menu">
            <li class="item <?php echo $active = $_SESSION["active"]== 'home' ? 'active' : ''; ?>">
                <a href="?page_id=2">
                    <div class="item-bg">
                        <div class="bg"></div>
                        <span><?php echo MENU_HOME;?></span>
                    </div>
                </a>
            </li>
            <li class="item <?php echo $active = $_SESSION["active"]== 'resena' ? 'active' : ''; ?>">
                <a href="?page_id=14">
                    <div class="item-bg">
                        <div class="bg rs"></div>
                        <span><?php echo MENU_RESENA;?></span>
                    </div>
                </a>
            </li>
            <li class="item <?php echo $active = $_SESSION["active"]== 'obras' ? 'active' : ''; ?>">
                <a href="?page_id=18&cat=3&tag=<?php echo getActiveTag(3)?>">
                    <div class="item-bg">
                        <div class="bg obr"></div>
                        <span><?php echo MENU_OBRAS;?></span>
                    </div>
                </a>
            </li>
            <li class="item <?php echo $active = $_SESSION["active"]== 'prensa' ? 'active' : ''; ?>">
                <a href="?page_id=54">
                    <div class="item-bg">
                        <div class="bg pre"></div>
                        <span><?php echo MENU_PRENSA;?></span>
                    </div>
                </a>
            </li>
            <li class="item <?php echo $active = $_SESSION["active"]== 'contacto' ? 'active' : ''; ?>">
                <a href="?page_id=74">
                    <div class="item-bg">
                        <div class="bg con"></div>
                        <span><?php echo MENU_CONTACTO;?></span>
                    </div>
                </a>
            </li>
        </ul>
        <ul class="social-small">
            <li>
                <a href="https://www.facebook.com/pages/FRANCISCO-SPEICHER-Artista-Plastico/110291662394677" target="_blank" class="fb"></a>
            </li>
            <li>
                <a href="https://twitter.com/franspeicher" class="tw" target="_blank"></a>
            </li>
            <li>
                <a href="https://instagram.com/speicherfrancisco" target="_blank" class="ins"></a>
            </li>
        </ul>
        <ul class="lang">
            <li><a href="?page_id=2&lang=es" class="<?php echo $active = $_SESSION["lang"]== 'es' ? 'active' : ''; ?>">Español</a></li>
            <li><a href="?page_id=2&lang=en" class="<?php echo $active = $_SESSION["lang"]== 'en' ? 'active' : ''; ?>">English</a></li>
        </ul>
    </div>
</header>