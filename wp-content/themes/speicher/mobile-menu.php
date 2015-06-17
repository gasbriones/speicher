<ul class="menu-mobile">
    <li class="item <?php echo $active = $_SESSION["active"]== 'home' ? 'active' : ''; ?>">
        <a href="?page_id=2"><?php echo MENU_HOME;?></a>
    </li>
    <li class="item <?php echo $active = $_SESSION["active"]== 'resena' ? 'active' : ''; ?>">
        <a href="?page_id=14"><?php echo MENU_RESENA;?></a>
    </li>
    <li class="item <?php echo $active = $_SESSION["active"]== 'obras' ? 'active' : ''; ?>">
        <a href="?page_id=18&cat=3&tag=<?php echo getActiveTag(3)?>"><?php echo MENU_OBRAS;?></a>
    </li>
    <li class="item <?php echo $active = $_SESSION["active"]== 'prensa' ? 'active' : ''; ?>">
        <a href="?page_id=54"><?php echo MENU_PRENSA;?></a>
    </li>
    <li class="item <?php echo $active = $_SESSION["active"]== 'contacto' ? 'active' : ''; ?>">
        <a href="?page_id=74"><?php echo MENU_CONTACTO;?></a>
    </li>
</ul>