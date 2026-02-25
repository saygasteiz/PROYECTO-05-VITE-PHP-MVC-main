<ul>
    <li><a href="<?=$_ENV['RUTA']?><?=$menu_inicio_href?>" title="<?=$menu_inicio_title?>"><?=$menu_inicio_label?></a></li>

    <li><a href="<?=$_ENV['RUTA']?><?=$menu_nosotros_href?>" title="<?=$menu_nosotros_title?>"><?=$menu_nosotros_label?></a></li>

    <li>
        <a href="<?=$_ENV['RUTA']?><?=$menu_productos_href?>" title="<?=$menu_productos_title?>"><?=$menu_productos_label?></a>
        <ul class="sublista">
            <li><a href="<?=$_ENV['RUTA']?><?=$menu_panaderia_href?>" title="<?=$menu_panaderia_title?>"><?=$menu_panaderia_label?></a></li>
            <li><a href="<?=$_ENV['RUTA']?><?=$menu_pasteleria_href?>" title="<?=$menu_pasteleria_title?>"><?=$menu_pasteleria_label?></a></li>
            <li><a href="<?=$_ENV['RUTA']?><?=$menu_torrijas_href?>" title="<?=$menu_torrijas_title?>"><?=$menu_torrijas_label?></a></li>
        </ul>
    </li>

    <li><a href="<?=$_ENV['RUTA']?><?=$menu_contacto_href?>" title="<?=$menu_contacto_title?>"><?=$menu_contacto_label?></a></li>

    <?php
    if(isset($_SESSION['LOGIN']) && $_SESSION['LOGIN']=="1"){
        // MOSTRARÉ EL CONTENIDO PRIVADO
    ?>
    <li><a href="<?=$_ENV['RUTA']?><?=$menu_admin_href?>" title="<?=$menu_admin_title?>"><?=$menu_admin_label?></a></li>
    <li><a href="<?=$_ENV['RUTA']?><?=$menu_logout_href?>" title="<?=$menu_logout_title?>"><?=$menu_logout_label?></a></li>
    <?php
    }else{
    ?>
    <li><a href="<?=$_ENV['RUTA']?><?=$menu_admin_href?>" title="<?=$menu_admin_title?>"><?=$menu_login_label?></a></li>
    <?php
    }
    ?>
</ul>
