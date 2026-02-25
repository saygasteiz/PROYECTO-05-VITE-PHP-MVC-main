<!DOCTYPE html>
<html lang="<?=$lang?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
    <meta name="description" content="<?=$meta_description?>">
    <?php echo vite_tags('src/js/views/quienesSomos.js'); ?>

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
            <img src="<?=$_ENV['RUTA']?>/assets/img/logos/panaderia-aginaga-logo.svg" alt="<?=$h1?>" title="<?=$h1?>">
        </div>
    </header>

    <main>
        <!-- Equipo humano -->
        <section>
            <div class="h2Especial">
                <span></span>
                <h2><?=$h2_equipo?></h2>
            </div>

            <!-- PRESENTACIÓN DE QUIENES SOMOS -->
            <article class="art05">
                <h3><?=$h3_maestros?></h3>
                <p><?=$p_maestros_1?></p>
                <p><?=$p_maestros_2?></p>
                <a href="<?=$_ENV['RUTA']?><?=$link_contacto?>" class="boton" title="<?=$cta_contacto?>"><?=$cta_contacto?></a>
            </article>

            <!-- TRATO DISTINGUIDO Y PERSONAL -->
            <article class="art03">

                <h3><?=$h3_trato?></h3>

                <p><?=$p_trato_1?></p>

                <p><?=$p_trato_2?></p>

                <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/quienes-somos/equipo-de-panaderas-y-panaderos-1800.avif" alt="<?=$h3_trato?>" title="<?=$h3_trato?>">

            </article>

            <!-- LOS TRABAJADORES Y TRABAJADORAS -->
            <article class="art04">
                <h3><?=$h3_obradores?></h3>
                <span class="ralla"></span>
                <div class="contenedor-fichas">
                    <div class="ficha">
                        <h4><?=$ficha1_nombre?></h4>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/quienes-somos/empleado-01-1200.avif" alt="<?=$ficha1_nombre?>" title="<?=$ficha1_nombre?>">
                        <p><?=$ficha1_desc?></p>
                        <span class="ralla"></span>
                    </div>

                    <div class="ficha">
                        <h4><?=$ficha2_nombre?></h4>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/quienes-somos/empleada-03-1200.avif" alt="<?=$ficha2_nombre?>" title="<?=$ficha2_nombre?>">
                        <p><?=$ficha2_desc?></p>
                        <span class="ralla"></span>
                    </div>

                    <div class="ficha">
                        <h4><?=$ficha3_nombre?></h4>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/quienes-somos/empleado-02-1200.avif" alt="<?=$ficha3_nombre?>" title="<?=$ficha3_nombre?>">
                        <p><?=$ficha3_desc?></p>
                        <span class="ralla"></span>
                    </div>

                    <div class="ficha">
                        <h4><?=$ficha4_nombre?></h4>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/quienes-somos/empleada-04-1200.avif" alt="<?=$ficha4_nombre?>" title="<?=$ficha4_nombre?>">
                        <p><?=$ficha4_desc?></p>
                        <span class="ralla"></span>
                    </div>
                </div>
            </article>
        </section>

        <!-- Historia y valores de la panadería -->
        <section class="sect01">
            <div class="h2Especial">
                <span></span>
                <h2><?=$h2_historia?></h2>
            </div>
            <article>
                <!-- CERCANÍA Y TRADICIÓN -->
                <div>
                    <h3><?=$h3_cercania?></h3>
                    <p><?=$p_cercania?></p>
                    <span></span>
                    <div class="cards">
                        <div class="card">
                            <img src="<?=$_ENV['RUTA']?>/assets/img/system/star.svg" alt="<?=$h4_historia_card1?>" title="<?=$h4_historia_card1?>">
                            <h4><?=$h4_historia_card1?></h4>
                            <p><?=$p_historia_card1?></p>

                        </div>
                        <div class="card">
                            <img src="<?=$_ENV['RUTA']?>/assets/img/system/ribbon.svg" alt="<?=$h4_historia_card2?>" title="<?=$h4_historia_card2?>">
                            <h4><?=$h4_historia_card2?></h4>
                            <p><?=$p_historia_card2?></p>
                            <a href="<?=$_ENV['RUTA']?><?=$link_productos?>" class="moduloBoton01">
                                <span><?=$cta_productos?></span>
                                <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="" title="">
                            </a>
                        </div>
                    </div>
                    <a href="<?=$_ENV['RUTA']?><?=$link_contacto?>" class="moduloBoton02">
                        <span><?=$cta_contactanos?></span>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="" title="">
                    </a>
                </div>
                <!-- hijo 2 -->
                <div>
                    <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/inicio/panaderia-en-aginaga-1500.avif" alt="<?=$h3_cercania?>" title="<?=$h3_cercania?>">
                </div>
            </article>
        </section>

    </main>

    <!-- FOOTER -->
    <?php include $appRoot . '/includes/footer.php'?>
</body>
</html>

