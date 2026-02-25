<!DOCTYPE html>
<html lang="<?=$lang?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
    <meta name="description" content="<?=$meta_description?>">
    <?php echo vite_tags('src/js/views/zonaAdmin.js'); ?>

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
    <?php include $appRoot . '/includes/nav.php' ?>

    <!-- HERO01 -->
    <header>
        <h1><?=$h1?></h1>
        <div>
            <img src="<?=$_ENV['RUTA']?>/assets/img/logos/panaderia-aginaga-logo.svg" alt="">
        </div>


        <article class="artForm">
            <form action="<?=base_path()?>/app/gestionFormLogup" method="post">

                <?php
                if( isset($_GET['error']) ){
                    $error = $_GET['error'];
                }
                ?>

                <!-- AQUÍ MOSTRAMOS EL ERROR SEA CUAL SEA -->
                <span class="error"><?php if(isset($error)){echo $error;} ?></span>

                <label for="nombre"><?=$label_nombre?></label>
                <input type="text" name="nombre" id="nombre" placeholder="<?=$placeholder_nombre?>" value="" autocomplete="off" require>

                <label for="correo"><?=$label_correo?></label>
                <input type="email" name="correo" id="correo" placeholder="<?=$placeholder_correo?>" value="" autocomplete="off" require>

                <label for="pass"><?=$label_pass?></label>
                <input type="password" name="password" id="pass" placeholder="<?=$placeholder_pass?>" autocomplete="off" require>

                <label for="pass2"><?=$label_pass2?></label>
                <input type="password" name="passwordrepeat" id="pass2" placeholder="<?=$placeholder_pass2?>" autocomplete="off" require>

                <div>
                    <input type="checkbox" name="terminos" id="aceptarTerminos">
                    <label for="aceptarTerminos"><?=$label_terminos?> <a href="<?=$_ENV['RUTA']?><?=$link_terminos?>"><?=$link_terminos_texto?></a></label>
                </div>

                <!-- input oculto donde el value es el valor de $lang, ergo el idioma -->
                <input type="text" name="inputIdioma" value="<?= $lang?>" style="display:none;">

                <input type="submit" value="<?=$cta_enviar?>" class="boton">

                <p><?=$campos_obligatorios?></p>

            </form>
        </article>


    </header>



    <!-- FOOTER -->
    <?php include $appRoot . '/includes/footer.php'?>


</body>
</html>

