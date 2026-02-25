<!DOCTYPE html>
<html lang="<?=$lang?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
    <meta name="description" content="<?=$meta_description?>">

    <!-- linko el css que le corresponde a esta vista -->
    <?php echo vite_tags('src/js/views/gracias.js'); ?>

    <!-- Url de esta vista -->
    <link rel="canonical" href="<?=$_ENV['RUTA']?><?=$canonical_path?>">

    <!-- Indexación y autoridad-->
    <meta name="robots" data-lang="robots" content="nofollow, noindex">
    <meta name="referrer" content="origin">

    <?php
    // Metadatos globales
    include $appRoot . '/includes/metadatos_globales.php'
    ?>

</head>
<body>

    <?php
    // Elementos globales dentro del body: script de tag manager
    include $appRoot . '/includes/body_global.php'
    ?>

    <!-- NAV -->
    <?php
    // es código php
    include $appRoot . '/includes/nav.php'
    ?>

    <?php
    if(isset($_GET['nombre'])){
        $nombre = $_GET['nombre'];
    }
    ?>

    <!-- HERO01 -->
    <header>
        <h1><?=$h1?> <?php  if(isset($_GET['nombre'])){ echo $nombre;} ?></h1>
        <div>
            <img src="<?=$_ENV['RUTA']?>/assets/img/logos/panaderia-aginaga-logo.svg" alt="<?=$alt_logo?>" title="<?=$title_logo?>">
        </div>
        <a href="<?=$_ENV['RUTA']?><?=$link_inicio?>" class="boton" title="<?=$title_cta?>"><?=$cta_inicio?></a>
    </header>

    <!-- FOOTER -->
    <?php
    include $appRoot . '/includes/footer.php'
    ?>

</body>
</html>

