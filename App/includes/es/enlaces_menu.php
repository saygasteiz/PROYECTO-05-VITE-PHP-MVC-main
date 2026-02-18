<ul>
    <li><a href="<?=$_ENV['RUTA']?>/es" title="Página de inicio">Inicio</a></li>

    <li><a href="<?=$_ENV['RUTA']?>/es/sobre-nosotros" title="Tus panaderos y pasteleros en Aginaga">Quiénes somos</a></li>

    <li>
        <a href="<?=$_ENV['RUTA']?>/es/productos" title="Nuestros mejores panes, pasteles y torrijas">Productos</a>
        <ul class="sublista">
            <li><a href="<?=$_ENV['RUTA']?>/es/productos/panaderia" title="Los mejores panes">Panadería</a></li>
            <li><a href="<?=$_ENV['RUTA']?>/es/productos/pasteleria" title="Pastelería artesana">Pastelería</a></li>
            <li><a href="<?=$_ENV['RUTA']?>/es/productos/torrijas" title="Las mejores torrijas de Gipuzkoa">Torrijas</a></li>
        </ul>
    </li>    

    <li><a href="<?=$_ENV['RUTA']?>/es/contacto" title="Contacto con Panadería Aginaga">Contacto</a></li>
    
    
    <?php
    if(isset($_SESSION['LOGIN']) && $_SESSION['LOGIN']=="1"){
        // MOSTRARÉ EL CONTENIDO PRIVADO
    ?>
    <li><a href="<?=$_ENV['RUTA']?>/es/zona-admin" title="Zona privada">Zona Admin</a></li>
    <li><a href="<?=$_ENV['RUTA']?>/es/logout" title="Salir">logout</a></li>
    <?php
    }else{
    ?>
    <li><a href="<?=$_ENV['RUTA']?>/es/zona-admin" title="Zona privada">Login</a></li>
    <?php
    }
    ?>

</ul>