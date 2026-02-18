<!DOCTYPE html>
<html lang="eu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gure okindegiko produktuak</title>
    <meta name="description" content="">
    <?php echo vite_tags('src/js/views/productos.js'); ?>



    <!-- Url de esta vista -->
    <link rel="canonical" href="<?=$_ENV['RUTA']?>/eu/produktuak">

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
        <h1>Produkturik onenak zure mahaian</h1>
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
                <h2>Egunero %100 produktu artisauak egiten ditugu</h2>
            </div>

            <!-- presentación de productos -->
            <article class="art05">
                <h3>Ogia, gozoak eta berezitasunak gure zigiluarekin</h3>
                <p>Aginagako Okindegian egunero lan egiten dugu tradizioa errespetatzen duten eta gure lurraldeko zapore benetakoa nabarmentzen duten produktuak eskaintzeko. Lehen mailako osagaiak aukeratzen ditugu eta belaunaldiz belaunaldi gurekin egon diren prozesu artisauak jarraitzen ditugu.</p>
                <p>Ama ore naturalarekin egindako gure ogi-biribiletatik gozokirik finenak arte, pieza bakoitza gure taldearen dedikazio, esperientzia eta maitasunaren emaitza da. Ahokada bakoitzak lantegira, ogi berriaren usainera eta 70 urte baino gehiagoan eskuz esku igaro diren errezetatara eraman zaitzala nahi dugu.</p>
                <a href="<?=$_ENV['RUTA']?>/eu/kontaktua" class="boton">Egin zure eskaera</a>
            </article>
        </section>

        <!-- SECCIÓN DE TODOS LOS PRODUCTOS -->
        <section>  

            <!-- H2 especial -->
            <div class="h2Especial">
                <span></span>
                <h2>Gure berezitasunak</h2>
            </div>            
            
            <!-- Panadería -->             
            <article class="art01" id="hitoPanes">
                <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/inicio/amplio-surtido-panes-1200.avif" alt="Ogi artisau berria Aginagako Okindegian" title="Okintza artisaua Aginagan">
                <div>
                    <h3>Okintza tradizionala ama orearekin</h3>
                    <p>Gure ogiak okindegiaren bihotza dira. Ama ore naturala, hartzidura luzeak eta hautatutako irinekin eginda, azal kurruskaria, mamia harroa eta zapore sakon eta bereizgarria duten piezak lortzen ditugu. Egunsentiro euskal okin-tradizioaren funtsa gordetzen duten ogiak labekatzen ditugu.</p>
                    <!-- <a href="<?=$_ENV['RUTA']?>/eu/produktuak/okindegia" class="moduloBoton02">
                        <span>Ezagutu gure okindegia</span>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="" title="">
                    </a> -->
                </div>
            </article>

            <!-- Pastelería -->
            <article class="art01 invert" id="hitoPasteles">
                <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/inicio/amplio-surtido-pasteles-1200.avif" alt="Pastel eta gozoki artisauak Aginagako Okindegian" title="Gozogintza artisaua Aginagan">
                <div>
                    <h3>Gozogintza artisaua gustu guztietarako</h3>
                    <p>Gure gozotegian era artisauan egindako gozoki aukera zabala aurkituko duzu: pastelak, opilak, tartak eta sasoiko berezitasunak. Errezeta tradizionalak ukitu moderno batekin uztartzen ditugu ahosabarik zorrotzenak harritzeko, eskuz egindakoaren funtsa galdu gabe.</p>
                    <!-- <a href="<?=$_ENV['RUTA']?>/eu/produktuak/gozotegia" class="moduloBoton02">
                        <span>Ezagutu gure gozotegia</span>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="" title="">
                    </a> -->
                </div>
            </article>

            <!-- Torrijas -->
            <article class="art01" id="hitoTorrijas">
                <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/inicio/las-mejores-torrijas-de-gipuzkoa1200.avif" alt="Torrija artisauak Aginagako Okindegian" title="Torrija tradizionalak Aginagan">
                <div>
                    <h3>Torrijak, gure ikono gozoena</h3>
                    <p>Gure torrija artisauak eskualdeko erreferente bihurtu dira. Familiaren errezeta tradizionalari jarraituz, gure lantegian egindako ogiarekin, infusionatutako esnearekin eta frijitze fin batekin eginda, postre harrotsu, usaintsu eta zaporez betea lortzen dugu. Ahokada bakoitzean maitemintzen duen klasiko bat.</p>
                    <!-- <a href="<?=$_ENV['RUTA']?>/eu/produktuak/torrijak" class="moduloBoton02">
                        <span>Ezagutu gure torrijak</span>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="" title="">
                    </a> -->
                </div>
            </article>

        </section>

    </main>

    <!-- FOOTER -->
    <?php include $appRoot . '/includes/eu/footer.php'?>
</body>
</html>