<!DOCTYPE html>
<html lang="eu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pribatutasun eta cookie kudeaketaren baldintzak</title>
    <?php echo vite_tags('src/js/views/terminos.js'); ?>

    <!-- Url de esta vista -->
    <link rel="canonical" href="<?=$_ENV['RUTA']?>/eu/lege-baldintzak">

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
        <h1>Pribatutasun eta cookie kudeaketaren baldintzak</h1>
        <div>
            <img src="<?=$_ENV['RUTA']?>/assets/img/logos/panaderia-aginaga-logo.svg" alt="Aginagako Okindegia logotipoa" title="Aginagako Okindegia">
        </div>
        <a href="<?=$_ENV['RUTA']?>/eu" class="boton" title="Hasiera">Hasiera</a>    
    </header>

    <?php
    // Datu juridikoak
    $razonSocial = "Aginagako Okindegia";
    $correo = "info@profe.webda.eus";
    $cif = "N123123";
    $telefono = "";
    $direccion = "Elutx kalea 14, behea, 20170 Aginaga, Gipuzkoa (Espainia)";
    ?>

    <main>
        <section>
            <div class="hito" id="legalZona"></div>
            <h2>Lege Oharra</h2>

            <article id="identificacion-titular">
                <h3>Titularraren identifikazioa</h3>
                <p>34/2002 Legearen 10. artikulua betez, informazioaren gizarteko zerbitzuei eta merkataritza elektronikoari buruzko uztailaren 11koa (LSSI‑CE), honako identifikazio datuak ematen dira:</p>
                <ul>
                    <li><strong>Izen soziala:</strong> <?= $razonSocial ?></li>
                    <li><strong>IFK:</strong> <?= $cif ?></li>
                    <li><strong>Helbidea:</strong> <?= $direccion ?></li>
                    <li><strong>Posta elektronikoa:</strong> <a href="mailto:<?= $correo ?>"><?= $correo ?></a></li>
                </ul>
            </article>

            <article id="objeto-sitio">
                <h3>Gunearen helburua</h3>
                <p><?= $razonSocial ?>-ren produktu artisauei buruz informatzea eta erabiltzaileei harremanetarako bideak eskaintzea, kontsultak edo eskaerak egiteko.</p>
            </article>

            <article id="condiciones-uso">
                <h3>Erabilera baldintzak</h3>
                <p>Webgune honetara sartzeak eta nabigatzeak erabiltzaile izaera ematen du eta Lege Ohar hau onartzea dakar. <?= $razonSocial ?>-k edukia aldatu ahal izango du bere egiokitasunaren arabera.</p>
            </article>

            <article id="responsabilidad">
                <h3>Erantzukizuna</h3>
                <p><?= $razonSocial ?>-k neurri arrazoizkoak hartzen ditu edukiak zehatzak eta eguneratuak izan daitezen, baina ezin da bermatu akats edo etenik egon ez daitekeenik.</p>
            </article>

            <article id="propiedad-intelectual">
                <h3>Jabetza intelektuala eta industriala</h3>
                <p>Guneko eduki guztiak (testuak, irudiak, logotipoak, diseinua eta kodea) <?= $razonSocial ?>-renak edo baimendutako hirugarrenenak dira. Kopiak, banaketa edo eraldaketak aurretik idatzizko baimenik gabe debekatuta daude.</p>
            </article>

            <article id="enlaces-terceros">
                <h3>Estekak</h3>
                <p>Hirugarrenen guneetarako estekak erabilgarritasunagatik daude: <?= $razonSocial ?>k ez du erantzukizunik hirugarren hauek edukiagatik edo horien erabilerak dakartzan ondorioengatik.</p>
            </article>

            <article id="ley-y-jurisdiccion">
                <h3>Legeria eta jurisdikzioa</h3>
                <p>Lege Ohar hau Espainiako legeen arabera arautzen da. Edozein gatazka konpontzeko Donostiako auzitegiek eskuratzen dute jurisdikzioa, baldintza legezko batek ez badu bestelakorik ezartzen.</p>
            </article>
        </section>

        <section>
            <div class="hito" id="cookiesZona"></div>
            <h2>Cookie kudeaketa</h2>

            <article id="que-son-cookies">
                <h3>Zer dira cookie-ak?</h3>
                <p>Cookie-ak webguneek zure gailuan gordetzen dituzten fitxategi txikiak dira, erabiltzailearen lehentasunak edo webgunearen jarduera gogoratzeko erabiltzen direnak.</p>
            </article>

            <article id="cookies-utilizadas">
                <h3>Erabilitako cookie-ak</h3>
                <ul>
                    <li><strong>Cookie teknikoak (beharrezkoak):</strong> nabigazio funtzioak eta segurtasuna ahalbidetzen dituzte eta titularraren interes legitimoagatik instalatzen dira.</li>
                    <li><strong>Pertsonalizazio cookie-ak:</strong> hizkuntza edo kokapena bezalako lehentasunak gordetzen dituzte.</li>
                    <li><strong>Analisi cookie-ak:</strong> webgunearen erabilera neurtzeko erabiltzen dira eta zure baimenarekin instalatzen dira (adibidez, Google Analytics).</li>
                </ul>
            </article>

            <article id="base-juridica-cookies">
                <h3>Oinarri juridikoa</h3>
                <p>Cookie teknikoak funtsezkoak dira webgunearen funtzionamendurako; bestelako cookie-ak zure baimenaren azpian instalatzen dira eta beti eman eta kendu ditzakezu cookie konfigurazioen paneletik.</p>
            </article>

            <article id="transferencias-internacionales-cookies">
                <h3>Nazioarteko transferentziak</h3>
                <p>Hornitzaileek gure datuak EBtik kanpo transferitzeko premia izan dezakete; hurbiletik, egiaztatzen ditugu transferentzia seguruak eta legezko babesak daudela.</p>
            </article>

            <article id="gestionar-cookies-navegador">
                <h3>Nola kudeatu cookie-ak nabigatzailean</h3>
                <p>Cookie-ak zure nabigatzailearen ezarpenetatik kendu edo blokeatu ditzakezu. Adibidez:</p>
                <ul>
                    <li><a href="https://support.google.com/chrome/answer/95647" target="_blank" rel="noopener">Google Chrome</a></li>
                    <li><a href="https://support.mozilla.org/kb/borrar-cookies" target="_blank" rel="noopener">Mozilla Firefox</a></li>
                    <li><a href="https://support.apple.com/guide/safari/manage-cookies-sfri11471/mac" target="_blank" rel="noopener">Safari</a></li>
                    <li><a href="https://support.microsoft.com/help/17442/windows-internet-explorer-delete-manage-cookies" target="_blank" rel="noopener">Edge / Internet Explorer</a></li>
                </ul>
                <p>Cookie jakin batzuk desgaitzeak webgunearen funtzionalitatea murriztu dezake.</p>
            </article>

            <article id="config-cookies">
                <h3>Cookie-en konfigurazioa</h3>
                <p>Hemen zure cookie lehentasunak aldatu ditzakezu: onartu edo ezeztatu analisi edo pertsonalizazio cookie-ak.</p>
                <div class="cookies-preferences-container" aria-live="polite"></div>
            </article>

            <article id="actualizaciones-cookies">
                <h3>Eguneratzeak</h3>
                <p><?= $razonSocial ?>-k cookie politika hau eguneratu dezake, eta gomendagarria da aldizka kontsultatzea.</p>
            </article>
        </section>

        <section>
            <div class="hito" id="privacidadZona"></div>
            <h2>Pribatutasun politika</h2>

            <article id="responsable-tratamiento">
                <h3>Tratamenduaren arduraduna</h3>
                <p><strong><?= $razonSocial ?></strong> (IFK <?= $cif ?>), <?= $direccion ?>. Posta: <a href="mailto:<?= $correo ?>"><?= $correo ?></a>.</p>
            </article>

            <article id="datos-procedencia">
                <h3>Tratatutako datuak eta jatorria</h3>
                <p>Gunearen bidez ematen dituzun datuak tratatzen ditugu (izenak, posta elektronikoa, telefonoa, helbidea eta zure mezua). Halaber, cookie-etan jasotako nabigazio-datuak tratatuko ditugu zure baimenarekin.</p>
            </article>

            <article id="finalidades-tratamiento">
                <h3>Helburuak</h3>
                <ul>
                    <li><strong>Kontsultaren baieztapena:</strong> zure eskaera jaso dela baieztatzen duen posta elektroniko automatikoa bidaltzea.</li>
                    <li><strong>Kontsulten kudeaketa eta arreta:</strong> zure kontsulta aztertzea eta erantzutea.</li>
                    <li><strong>Barne erregistroa:</strong> kontsultak eta eskaerak jarraitzeko erregistro bat gordetzea.</li>
                    <li><strong>Eskaera kudeaketa:</strong> eskaerak eta salmentak kudeatzea.</li>
                    <li><strong>Merkataritza komunikazioak:</strong> soilik zure baimenarekin egingo dira.</li>
                    <li><strong>Segurtasuna eta estatistikak:</strong> gunearen abusuen prebentzioa eta estatistika anonimoak egiteko erabiliko dira.</li>
                </ul>
            </article>

            <article id="legitimacion">
                <h3>Legitimazioa</h3>
                <p>Datuen tratamendurako oinarriak: zure baimena, kontratuarekin lotutako beharrak eta interes legitimoak.</p>
            </article>

            <article id="destinatarios">
                <h3>Hartzaileak</h3>
                <p>Zure datuak ez ditugu salduko; hirugarrenei ematen badizkiegu, beti egingo da legeak eta kontratuak eskatzen duten bermeekin.</p>
            </article>

            <article id="plazo-conservacion">
                <h3>Datuen gordetzearen epea</h3>
                <p>Datuak gordeko dira beharrezkoa den denboran, zerbitzua eskaintzeko eta legezko betebeharrak betetzeko.</p>
            </article>

            <article id="derechos">
                <h3>Zure eskubideak</h3>
                <p>Eskubide hauek dauzkazu: sarbidea, zuzenketa, ezabatzea, tratamenduaren murrizketa, aurka egitea eta eramangarritasuna. Exerzitu eskubideak idatziz: <a href="mailto:<?= $correo ?>"><?= $correo ?></a> eta atxiki identifikazio dokumentuaren kopia.</p>
            </article>
        </section>
    </main>

    <!-- FOOTER -->
    <?php include $appRoot . '/includes/eu/footer.php' ?>
</body>
</html>