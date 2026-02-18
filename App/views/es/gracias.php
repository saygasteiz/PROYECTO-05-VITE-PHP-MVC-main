<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gracias por escribirnos | Panadería Aginaga – Obrador artesano y equipo</title>
    <meta name="description" content="Descubre la historia de nuestra panadería en Aginaga y conoce al equipo de obradores artesanos. Maestros panaderos comprometidos con la masa madre y la tradición local. Servicio a Usurbil y Orio con pasión por la calidad y kilómetro cero.">
    
    <!-- linko el css que le corresponde a esta vista -->
    <?php echo vite_tags('src/js/views/gracias.js'); ?>

    <!-- Url de esta vista -->
    <link rel="canonical" href="<?=$_ENV['RUTA']?>/es/gracias">

    <!-- Indexación y autoridad-->
    <meta name="robots" data-lang="robots" content="nofollow, noindex">
    <meta name="referrer" content="origin">

    <?php
    // Metadatos globales
    include $appRoot . '/includes/es/metadatos_globales.php'
    ?>

</head>
<body>

    <?php
    // Elementos globales dentro del body: script de tag manager
    include $appRoot . '/includes/es/body_global.php'
    ?>

    <!-- NAV -->
    <?php
    // es código php
    include $appRoot . '/includes/es/nav.php'
    // ?>

    <?php
    if(isset($_GET['nombre'])){
        $nombre = $_GET['nombre'];
    }
    ?>

    <!-- HERO01 -->
    <header>        
        <h1>Gracias por escribirnos <?php  if(isset($_GET['nombre'])){ echo $nombre;} ?></h1>
        <div>            
            <img src="<?=$_ENV['RUTA']?>/assets/img/logos/panaderia-aginaga-logo.svg" alt="Logotipo Panadería Aginaga" title="Panadería Aginaga">
        </div>
        <a href="<?=$_ENV['RUTA']?>/es" class="boton" title="Encuentra Panadería Aginaga">Encuéntranos</a>     
    </header>

    <!-- FOOTER -->
    <?php
    include $appRoot . '/includes/es/footer.php'
    ?>

</body>
</html>