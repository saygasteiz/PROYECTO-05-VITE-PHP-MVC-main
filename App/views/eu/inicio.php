<!DOCTYPE html>
<html lang="eu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aginagako Okindegia | Kalitate handiko gozotegi lantegia</title>
    <meta name="description" content="120 eta 320 karaktere">
    <?php echo vite_tags('src/js/views/inicio.js'); ?>



    <!-- Url de esta vista -->
    <link rel="canonical" href="<?=$_ENV['RUTA']?>/eu">

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
    <?php include $appRoot . '/includes/eu/nav.php' ?>



    <!-- HERO01 -->
    <header>
        <h1>Lorem Ipsum Aginaga</h1>
        <div>
            <img src="<?=$_ENV['RUTA']?>/assets/img/logos/panaderia-aginaga-logo.svg" alt="">
        </div>
        <a href="<?=$_ENV['RUTA']?>/eu/kontaktua" class="boton">Lorem ipsum</a>
    </header>



    <main>

        <!-- SECCIÓN PRESENTACIÓN -->
        <section class="sect01">
            <div class="h2Especial">
                <span></span>
                <h2>Lorem ipsum Aginagan</h2>
            </div>

            <article>
                <!-- hijo 1 -->
                <div>
                    <h3>Lorem ipsum egunerokoa</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nec lacus at dui fermentum rhoncus non vel velit. Nunc ultricies porttitor ligula, nec tincidunt lectus eleifend ac. Donec aliquet nisl sit amet urna gravida tempus.</p>
                    <span></span>
                    <div class="cards">

                        <div class="card">
                            <img src="<?=$_ENV['RUTA']?>/assets/img/system/people-outline.svg" alt="">
                            <h4>Lorem ipsum taldea</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur.</p>
                            <a href="<?=$_ENV['RUTA']?>/eu/guri-buruz" class="moduloBoton01">
                                <span>Lorem ipsum dolor</span>
                                <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="" title="">
                            </a>
                        </div>
                        <div class="card">
                            <img src="<?=$_ENV['RUTA']?>/assets/img/system/star-outline.svg" alt="">
                            <h4>Lorem ipsum kalitatea</h4>
                            <p>Egunero arreta eta zaintzarekin egina.</p>
                            <a href="<?=$_ENV['RUTA']?>/eu/produktuak" class="moduloBoton01">
                                <span>Lorem ipsum dolor</span>
                                <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="" title="">
                            </a>
                        </div>

                    </div>
                    <a href="<?=$_ENV['RUTA']?>/eu/kontaktua" class="moduloBoton02">
                        <span>Lorem ipsum dolor sit</span>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="100 urte baino gehiago kalitaterik onena eskaintzen Aginagan" title="100 urte baino gehiago kalitaterik onena eskaintzen Aginagan">
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
                <h2>Lorem ipsum taldearen gainean</h2>
            </div>
            <!-- Artículo 03 -->
            <article class="art03">
                <h3>Lorem ipsum tradizioarekin</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam suscipit, velit vel lobortis sagittis, eros erat congue nunc, non luctus risus mi eu lacus. Sed vitae quam in tortor scelerisque sollicitudin vel vitae ipsum.</p>
                <p>Morbi pretium magna vitae tortor blandit, at posuere odio elementum. Suspendisse bibendum lectus eget varius ultrices. Sed vehicula hendrerit sapien, nec tincidunt tellus. In euismod massa id mi aliquam, non suscipit neque euismod.</p>
                <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/inicio/panaderas-profesionales-1500.avif" alt="Aginagako okinen taldea lantegian lanean" title="Aginagako okinen taldea">

            </article>

            <!-- artículo 05 -->
            <article class="art05">
                <h3>Lorem ipsum gure historiari</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ac sem in mi pharetra feugiat. Praesent volutpat, nibh ac porta dignissim, nisl lacus tempor ante, non consequat arcu neque sed tortor.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eget mauris enim. Suspendisse potenti. Mauris efficitur porttitor arcu, in euismod odio condimentum id.</p>
                <a href="<?=$_ENV['RUTA']?>/eu/guri-buruz" class="boton">Lorem ipsum</a>
            </article>

            <!-- artículo 06 -->
            <article class="art06">
                <div>
                    <h3>Lorem ipsum aho bakoitzean</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur mattis semper velit, sed pharetra leo interdum sed. Vestibulum id massa vitae lacus blandit tempus.</p>
                    <p>Integer et augue id mi blandit pulvinar. Duis sed ultrices risus. Vestibulum sagittis odio non ipsum hendrerit, a interdum orci suscipit. Fusce ut risus non erat laoreet aliquet.</p>
                    <a href="<?=$_ENV['RUTA']?>/eu/kontaktua" title="" class="boton">Lorem ipsum</a>
                </div>
            </article>
        </section>



        <!-- SECCIÓN PRODUCTOS -->
        <section>
            <div class="h2Especial">
                <span></span>
                <h2>Lorem ipsum produktuak</h2>
            </div>
            <!-- Artículo 02-bis -->
            <article class="art02-bis">
                <div class="textos">
                    <h3>Lorem ipsum kalitatearekin</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lobortis leo id lectus viverra sagittis. Suspendisse venenatis efficitur justo, vitae dapibus nunc vehicula et. Phasellus volutpat pulvinar neque nec bibendum. Cras eget velit pellentesque, semper lacus et, condimentum risus. Maecenas dignissim est neque, at condimentum lectus blandit a. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin luctus, mi non viverra dapibus, eros orci rutrum mi, sed volutpat ante enim nec erat. Sed elementum dignissim ultrices. Maecenas a urna commodo, suscipit mauris ac, dapibus risus.</p>
                    <a href="<?=$_ENV['RUTA']?>/eu/produktuak" class="moduloBoton02">
                        <span>Informazio gehiago</span>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="Joan Gure produktuetara" title="Informazio gehiago">
                    </a>
                </div>
                <div class="imagenes">
                    <a href="<?=$_ENV['RUTA']?>/eu/produktuak#hitoPanes" title="Ama oreko ogi onenak">
                        <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/inicio/amplio-surtido-panes-1200.avif" alt="Ama oreko ogia Usurbilen eta Aginagan" title="Ama oreko ogia Usurbilen eta Aginagan">
                        <h4>Okindegia</h4>
                    </a>
                    <a href="<?=$_ENV['RUTA']?>/eu/produktuak#hitoPasteles" title="Gozotegi artisaua eskariaren arabera">
                        <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/inicio/amplio-surtido-pasteles-1200.avif" alt="Pastel artisauak: lantegitik zure mahaira" title="Pastel artisauak: lantegitik zure mahaira">
                        <h4>Gozotegia</h4>
                    </a>
                    <a href="<?=$_ENV['RUTA']?>/eu/produktuak#hitoTorrijas" title="Torrija tradizionalak su motelean">
                        <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/inicio/las-mejores-torrijas-de-gipuzkoa1200.avif" alt="Torrija tradizionalak urte osoan" title="Torrija tradizionalak urte osoan">
                        <h4>Torrijak</h4>
                    </a>
                </div>
            </article>
        </section>
    </main>

    <!-- FOOTER -->
    <?php include $appRoot . '/includes/eu/footer.php'?>

</body>
</html>
