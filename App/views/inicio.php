<!DOCTYPE html>
<html lang="<?=$lang?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
    <meta name="description" content="<?=$meta_description?>">
    <?php echo vite_tags('src/js/views/inicio.js'); ?>

    <!-- Url de esta vista -->
    <link rel="canonical" href="<?=$_ENV['RUTA']?>/<?=$lang?>">

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
        <a href="<?=$_ENV['RUTA']?><?=$link_contacto?>" class="boton"><?=$cta_hero?></a>
    </header>

    <main>
        <!-- SECCIÓN PRESENTACIÓN -->
        <section class="sect01">
            <div class="h2Especial">
                <span></span>
                <h2><?=$h2_presentacion?></h2>
            </div>

            <article>
                <!-- hijo 1 -->
                <div>
                    <h3><?=$h3_obrador?></h3>
                    <p><?=$p_obrador?></p>
                    <span></span>
                    <div class="cards">
                        <div class="card">
                            <img src="<?=$_ENV['RUTA']?>/assets/img/system/people-outline.svg" alt="">
                            <h4><?=$h4_card1?></h4>
                            <p><?=$p_card1?></p>
                            <a href="<?=$_ENV['RUTA']?><?=$link_nosotros?>" class="moduloBoton01">
                                <span><?=$cta_card1?></span>
                                <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="" title="">
                            </a>
                        </div>
                        <div class="card">
                            <img src="<?=$_ENV['RUTA']?>/assets/img/system/star-outline.svg" alt="">
                            <h4><?=$h4_card2?></h4>
                            <p><?=$p_card2?></p>
                            <a href="<?=$_ENV['RUTA']?><?=$link_productos?>" class="moduloBoton01">
                                <span><?=$cta_card2?></span>
                                <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="" title="">
                            </a>
                        </div>
                    </div>
                    <a href="<?=$_ENV['RUTA']?><?=$link_contacto?>" class="moduloBoton02">
                        <span><?=$cta_pedido?></span>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="<?=$alt_pedido?>" title="<?=$alt_pedido?>">
                    </a>
                </div>
                <!-- hijo 2 -->
                <div>
                    <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/inicio/panaderia-pasteleria-aginaga-1500.avif" alt="" title="">
                </div>
            </article>
        </section>

        <!-- SECCIÓN SOBRE NOSOTROS -->
        <section>
            <div class="h2Especial">
                <span></span>
                <h2><?=$h2_nosotros?></h2>
            </div>
            <!-- Artículo 03 -->
            <article class="art03">
                <h3><?=$h3_siglo?></h3>

                <p><?=$p_siglo_1?></p>

                <p><?=$p_siglo_2?></p>

                <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/inicio/panaderas-profesionales-1500.avif" alt="<?=$h3_siglo?>" title="<?=$h3_siglo?>">
            </article>

            <!-- artículo 05 -->
            <article class="art05">
                <h3><?=$h3_historia?></h3>
                <p><?=$p_historia_1?></p>
                <p><?=$p_historia_2?></p>
                <a href="<?=$_ENV['RUTA']?><?=$link_nosotros?>" class="boton"><?=$cta_nosotros?></a>
            </article>

            <!-- artículo 06 -->
            <article class="art06">
                <div>
                    <h3><?=$h3_servicio?></h3>
                    <p><?=$p_servicio_1?></p>
                    <p><?=$p_servicio_2?></p>
                    <a href="<?=$_ENV['RUTA']?><?=$link_contacto?>" title="" class="boton"><?=$cta_contacto?></a>
                </div>
            </article>

        </section>

        <!-- SECCIÓN PRODUCTOS -->
        <section>
            <div class="h2Especial">
                <span></span>
                <h2><?=$h2_productos?></h2>
            </div>

            <!-- Artículo 02-bis -->
            <article class="art02-bis">
                <div class="textos">
                    <h3><?=$h3_productos?></h3>
                    <p><?=$p_productos?></p>
                    <a href="<?=$_ENV['RUTA']?><?=$link_productos?>" class="moduloBoton02">
                        <span><?=$cta_mas_info?></span>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="<?=$cta_mas_info?>" title="<?=$cta_mas_info?>">
                    </a>
                </div>

                <div class="imagenes">
                    <a href="<?=$_ENV['RUTA']?><?=$link_panes?>" title="<?=$h4_panaderia?>">
                        <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/inicio/amplio-surtido-panes-1200.avif" alt="<?=$h4_panaderia?>" title="<?=$h4_panaderia?>">
                        <h4><?=$h4_panaderia?></h4>
                    </a>
                    <a href="<?=$_ENV['RUTA']?><?=$link_pasteles?>" title="<?=$h4_pasteleria?>">
                        <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/inicio/amplio-surtido-pasteles-1200.avif" alt="<?=$h4_pasteleria?>" title="<?=$h4_pasteleria?>">
                        <h4><?=$h4_pasteleria?></h4>
                    </a>
                    <a href="<?=$_ENV['RUTA']?><?=$link_torrijas?>" title="<?=$h4_torrijas?>">
                        <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/inicio/las-mejores-torrijas-de-gipuzkoa1200.avif" alt="<?=$h4_torrijas?>" title="<?=$h4_torrijas?>">
                        <h4><?=$h4_torrijas?></h4>
                    </a>
                </div>
            </article>
        </section>

    </main>

    <!-- FOOTER -->
    <?php include $appRoot . '/includes/footer.php'?>




</body>
</html>

