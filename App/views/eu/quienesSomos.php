<!DOCTYPE html>
<html lang="eu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guri buruz | Okindegia Aginaga - Tradizioa 1925etik</title>
    <meta name="description" content="Ezagutu Okindegia Aginagako profesionalen taldea. Ia mende bateko tradizioa Aginagan, artisau produktuak kalitate handienarekin prestatzen.">
    <?php echo vite_tags('src/js/views/quienesSomos.js'); ?>

    <!-- Url de esta vista -->
    <link rel="canonical" href="<?=$_ENV['RUTA']?>/eu/sobre-nosotros">

    <!-- Indexación y autoridad-->
    <meta name="robots" data-lang="robots" content="nofollow, noindex">
    <meta name="referrer" content="origin">

    <?php
    // Metadatos globales (eu)
    include $appRoot . '/includes/eu/metadatos_globales.php';
    ?>
</head>

<body>

    <?php
    // Elementos globales dentro del body: script de tag manager
    include $appRoot . '/includes/eu/body_global.php'
    ?>

    <!-- NAV -->
    <?php include $appRoot . '/includes/eu/nav.php'; ?>

    <!-- HERO01 -->
    <header>
        <h1>Tradizioz ogigileak 1925etik</h1>
        <div>
            <img src="<?=$_ENV['RUTA']?>/assets/img/logos/panaderia-aginaga-logo.svg" alt="Okindegia Aginaga" title="Okindegia Aginaga">
        </div>
    </header>

    <main>
        <!-- Equipo humano -->
        <section>
            <div class="h2Especial">
                <span></span>
                <h2>Gure profesionalen taldea</h2>
            </div>

            <!-- PRESENTACIÓN DE QUIENES SOMOS -->
            <article class="art05">
                <h3>Tradiziozko eta bihotzezko okindegi-maisuak</h3>
                <p>Okindegia Aginagan egunero sukaldean pasio berarekin lan egiten dugu, lehen eguna bezalaxe. Gure taldea belaunaldien jakintza eta berrikuntzara begirako ikuspegia uztartzen duten profesionalek osatzen dute, artisau tradizio bat bizirik mantenduz.</p>
                <p>Maisu okindegietatik hasi eta gazte ikasleetara arte, helburu bera dugu: benetakotasuna, kalitatea eta gertutasuna transmititzen duten ogi eta gozoki artisauak prestatzea. Gure labeetatik irteten den pieza bakoitza talde-lanaren, dedikazioaren eta gure lanarekiko maitasunaren ondorioa da.</p>
                <a href="<?=$_ENV['RUTA']?>/eu/contacto" class="boton" title="Jarri gurekin harremanetan">Jarri gurekin harremanetan</a>
            </article>

            <!-- TRATO DISTINGUIDO Y PERSONAL -->
            <article class="art03">
                <h3>Gertuko eta pertsonala zerbitzua</h3>

                <p>Gure taldea gure indarrik handiena da. 20 baino gehiago profesional artisau ogigintzan eta gozegintzan aritzen gara, eta mende bat baino gehiagoko tradizioa mantentzen dugu. Taldeko kide bakoitzak esperientzia eta pasioa ekartzen ditu eguneroko produktu bikainak sortzeko.</p>

                <p>Etengabeko prestakuntza eta lanarekiko maitasuna dira kalitate estandar altuenak mantentzen laguntzen diguten oinarriak. Esperientzia handiko maisu okindegietatik hasi eta berrikuntzaren espiritua bizirik mantentzen duten gazte ikasleetara, guztion konpromisoa da produktu artisau onena eta zerbitzu pertsonala eskaintzea.</p>

                <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/quienes-somos/equipo-de-panaderas-y-panaderos-1800.avif" alt="Gure lanarekiko maitasuna" title="Gure lanarekiko maitasuna">

            </article>

            <!-- LOS TRABAJADORES Y TRABAJADORAS -->
            <article class="art04">
                <h3>Lanbidezko ogigileak</h3>
                <span class="ralla"></span>
                <div class="contenedor-fichas">
                    <div class="ficha">
                        <h4>Mikel Arrizabalaga</h4>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/quienes-somos/empleado-01-1200.avif" alt="Mikel Arrizabalaga - Okindegi-maisu" title="Mikel Arrizabalaga">
                        <p>Okindegi-maisuak 30 urte baino gehiagoko esperientzia du. Masa amak eta euskal ogi tradizionalen espezialista da. Bere dedikazioa eta ezagutza gure okindegiaren bihotza dira.</p>
                        <span class="ralla"></span>
                    </div>

                    <div class="ficha">
                        <h4>María Etxeberria</h4>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/quienes-somos/empleada-03-1200.avif" alt="María Etxeberria - Gozogile-maisu" title="María Etxeberria">
                        <p>Gozogile-maisuak teknikak uztartzen ditu, tradizionaletatik abiatuta ukitu berritzaileekin. Bere sormenak gure espezialitate batzuei itxura berezia eman die.</p>
                        <span class="ralla"></span>
                    </div>

                    <div class="ficha">
                        <h4>Jon Lizarraga</h4>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/quienes-somos/empleado-02-1200.avif" alt="Jon Lizarraga - Opil-espezialista" title="Jon Lizarraga">
                        <p>Opil artisauetan espezialista. Xehetasunekiko eta perfekzio teknikoarekiko grinak islatzen dira gure kroisan eta opil bakoitzean.</p>
                        <span class="ralla"></span>
                    </div>

                    <div class="ficha">
                        <h4>Ana Mendizabal</h4>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/quienes-somos/empleada-04-1200.avif" alt="Ana Mendizabal - Artisau ogigilea" title="Ana Mendizabal">
                        <p>Artisau ogigilea, ogi berezi eta glutenik gabeko produktuen espezialistak. Berrikuntzarekiko konpromisoak aukera ematen digu gustu eta beharrizan guztientzako produktuak eskaintzeko.</p>
                        <span class="ralla"></span>
                    </div>
                </div>
            </article>
        </section>

        <!-- Historia y valores de la panadería -->
        <section class="sect01">
            <div class="h2Especial">
                <span></span>
                <h2>1925etik Aginagan</h2>
            </div>
            <article>
                <!-- CERCANÍA Y TRADICIÓN -->
                <div>
                    <h3>Gertutasuna eta tradizioa</h3>
                    <p>Gure historia 1925ean hasi zen, Arrizabalaga familak bere okindegi txikiaren ateak ireki zituenean Aginagan. Ordutik, lau belaunaldik artisau espiritua eta kalitatearekiko konpromisoa mantendu dute. Egunero gure produktuak prestatu eta errezeta tradizionalak jarraitzen ditugu, ondarea eta gaur egungo teknikak elkarlotuz.</p>
                    <span></span>
                    <div class="cards">
                        <div class="card">
                            <img src="<?=$_ENV['RUTA']?>/assets/img/system/star.svg" alt="Istorio ikonoa" title="Gure istorioa">
                            <h4>Irinaz betetako istorioa</h4>
                            <p>Ia mende bateko tradizioak bermatzen gaitu. Ezagutu nola familia okindegi txiki bat eskualdeko artisau okindegien erreferente bilakatu zen.</p>
                        </div>
                        <div class="card">
                            <img src="<?=$_ENV['RUTA']?>/assets/img/system/ribbon.svg" alt="Kalitate ikonoa" title="Kalitate artisaua">
                            <h4>Kalitate oneneko produktuak</h4>
                            <p>Lehen mailako osagaiak hautatzen ditugu eta prozesu artisauak mantentzen ditugu zaporea eta kalitatea bermatzeko, belaunaldiz belaunaldi.</p>
                            <a href="<?=$_ENV['RUTA']?>/eu/productos" class="moduloBoton01">
                                <span>Gure produktuak</span>
                                <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="" title="">
                            </a>
                        </div>
                    </div>
                    <a href="<?=$_ENV['RUTA']?>/eu/contacto" class="moduloBoton02">
                        <span>Jarri gurekin harremanetan</span>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="Terraza izango dugu kafea hartzeko" title="">
                    </a>
                </div>
                <!-- hijo 2 -->
                <div>
                    <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/inicio/panaderia-en-aginaga-1500.avif" alt="Terraza izango dugu kafea hartzeko" title="Terraza">
                </div>
            </article>
        </section>

    </main>

    <!-- FOOTER -->
    <?php include $appRoot . '/includes/eu/footer.php'; ?>
</body>
</html>