<!DOCTYPE html>
<html lang="eu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Orria ez da aurkitu</title>
    <meta name="description" content="Orria ez da aurkitu. 404 errorea">
    <?php echo vite_tags('src/js/views/404.js'); ?>

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
    
    <main>
        <img src="<?=$_ENV['RUTA']?>/assets/img/logos/panaderia-aginaga-logo.svg" alt="Aginagako Okindegia" title="Aginagako Okindegia">
        <h1>404 - Orria ez da aurkitu</h1>
        <a href="<?=$_ENV['RUTA']?>/eu" class="boton">Hasierara joan</a>
    </main>

    <!-- FOOTER -->
    <?php include $appRoot . '/includes/eu/footer.php'?>
</body>
</html>