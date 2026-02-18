<!DOCTYPE html>
<html lang="eu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eskerrik asko idazteagatik | Aginagako Okindegia – Lantegi artisaua eta taldea</title>

    <meta name="description" content="Ezagutu gure Aginagako okindegiaren historia eta gure artisau langileen taldea. Ama orearekin eta tokiko tradizioarekin konprometitutako okin maisuak. Usurbil eta Orioko zerbitzua kalitatearekin eta zero kilometroarekin konprometituta.">
        
    <!-- linko el css que le corresponde a esta vista -->
    <?php echo vite_tags('src/js/views/gracias.js'); ?>



    <!-- Url de esta vista -->
    <link rel="canonical" href="<?=$_ENV['RUTA']?>/eu/eskerrik-asko">

    <!-- Indexación y autoridad-->
    <meta name="robots" data-lang="robots" content="nofollow, noindex">
    <meta name="referrer" content="origin">



    <?php
    // Metadatos globales
    include $appRoot . '/includes/eu/metadatos_globales.php'
    ?>

</head>

<body>

    <?php
    // Elementos globales dentro del body: script de tag manager
    include $appRoot . '/includes/eu/body_global.php'
    ?>
    
    <!-- NAV -->
    <?php
    // es código php
    include $appRoot . '/includes/eu/nav.php'
    ?>



    <?php
    if(isset($_GET['nombre'])){
        $nombre = $_GET['nombre'];
    }
    ?>



    <!-- HERO01 -->
    <header>        
        <h1>Eskerrik asko idazteagatik <?php  if(isset($_GET['nombre'])){ echo $nombre;} ?></h1>
        <div>            
            <img src="<?=$_ENV['RUTA']?>/assets/img/logos/panaderia-aginaga-logo.svg" alt="Aginagako Okindegia logotipoa" title="Aginagako Okindegia">
        </div>
        <a href="<?=$_ENV['RUTA']?>/eu" class="boton" title="Aurkitu Aginagako Okindegia">Aurkitu gu</a>     
    </header>



    <!-- FOOTER -->
    <?php
    include $appRoot . '/includes/eu/footer.php'
    ?>

</body>
</html>