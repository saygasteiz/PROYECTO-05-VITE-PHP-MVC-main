<!DOCTYPE html>
<html lang="<?=$lang?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
    <meta name="description" content="<?=$meta_description?>">
    <?php echo vite_tags('src/js/views/productos.js'); ?>

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
        <a href="" class="boton">CTA</a>
    </header>

    <main>
        <!-- SECCIÓN INTRO A PRODUCTOS -->
        <section>
            <!-- H2 especial -->
            <div class="h2Especial">
                <span></span>
                <h2><?=$h2_intro?></h2>
            </div>

            <!-- presentación de productos -->
            <article class="art05">
                <h3><?=$h3_intro?></h3>
                <p><?=$p_intro_1?></p>
                <p><?=$p_intro_2?></p>
                <a href="<?=$_ENV['RUTA']?><?=$link_contacto?>" class="boton"><?=$cta_pedido?></a>
            </article>
        </section>

        <!-- SECCIÓN DE TODOS LOS PRODUCTOS -->
        <section>

            <!-- H2 especial -->
            <div class="h2Especial">
                <span></span>
                <h2><?=$h2_especialidades?></h2>
            </div>

            <!-- Panadería -->
            <article class="art01" id="hitoPanes">
                <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/inicio/amplio-surtido-panes-1200.avif" alt="">
                <div>
                    <h3><?=$h3_panaderia?></h3>
                    <p><?=$p_panaderia?></p>
                </div>
            </article>

            <!-- Pastelería -->
            <article class="art01 invert" id="hitoPasteles">
                <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/inicio/amplio-surtido-pasteles-1200.avif" alt="">
                <div>
                    <h3><?=$h3_pasteleria?></h3>
                    <p><?=$p_pasteleria?></p>
                </div>
            </article>

            <!-- Torrijas -->
            <article class="art01" id="hitoTorrijas">
                <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/inicio/las-mejores-torrijas-de-gipuzkoa1200.avif" alt="">
                <div>
                    <h3><?=$h3_torrijas?></h3>
                    <p><?=$p_torrijas?></p>
                </div>
            </article>

        </section>


    </main>

    <!-- FOOTER -->
    <?php include $appRoot . '/includes/footer.php'?>
</body>
</html>

