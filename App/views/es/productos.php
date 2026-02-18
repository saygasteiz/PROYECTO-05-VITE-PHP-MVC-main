<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuestros productos panaderos</title>
    <meta name="description" content="">
    <?php echo vite_tags('src/js/views/productos.js'); ?>

    <!-- Url de esta vista -->
    <link rel="canonical" href="<?=$_ENV['RUTA']?>/es/productos">

    <!-- Indexación y autoridad-->
    <meta name="robots" data-lang="robots" content="nofollow, noindex">
    <meta name="referrer" content="origin">

    <?php
    // Metadatos globales
    include $appRoot . '/includes/es/metadatos_globales.php'
    ?>

</head>
<body>

    <?php
    // Elementos globales dentro del body: script de tag manager
    include $appRoot . '/includes/es/body_global.php'
    ?>

    <!-- NAV -->
    <?php include $appRoot . '/includes/es/nav.php' ?>

    <!-- HERO01 -->
    <header>        
        <h1>Los mejores productos en tu mesa</h1>
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
                <h2>Elaboramos cada día productos 100% artesanos</h2>
            </div>

            <!-- presentación de productos -->
            <article class="art05">
                <h3>Pan, dulces y especialidades con sello propio</h3>
                <p>En Panadería Aginaga trabajamos cada día para ofrecer productos que respetan la tradición y realzan el sabor auténtico de nuestra tierra. Seleccionamos ingredientes de primera calidad y seguimos procesos artesanales que nos han acompañado durante generaciones.</p>
                <p>Desde nuestras hogazas elaboradas con masa madre natural hasta los dulces más delicados, cada pieza es fruto de la dedicación, la experiencia y el cariño de nuestro equipo. Queremos que cada bocado te transporte al obrador, al olor a pan recién hecho y a las recetas que han pasado de mano en mano durante más de 70 años.</p>
                <a href="<?=$_ENV['RUTA']?>/es/contacto" class="boton">Haz tu pedido</a>
            </article>
        </section>

        <!-- SECCIÓN DE TODOS LOS PRODUCTOS -->
        <section>  

            <!-- H2 especial -->
            <div class="h2Especial">
                <span></span>
                <h2>Nuestras especialidades</h2>
            </div>            
            
            <!-- Panadería -->             
            <article class="art01" id="hitoPanes">
                <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/inicio/amplio-surtido-panes-1200.avif" alt="Pan artesanal recién horneado en Panadería Aginaga" title="Panadería artesanal en Aginaga">
                <div>
                    <h3>Panadería tradicional con masa madre</h3>
                    <p>Nuestros panes son el corazón de la panadería. Elaborados con masa madre natural, largas fermentaciones y harinas seleccionadas, conseguimos piezas con corteza crujiente, miga esponjosa y un sabor profundo e inconfundible. Cada madrugada horneamos panes que conservan la esencia de la tradición panadera vasca.</p>
                    <!-- <a href="<?=$_ENV['RUTA']?>/es/productos/panaderia" class="moduloBoton02">
                        <span>Descubre nuestra panadería</span>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="" title="">
                    </a> -->
                </div>
            </article>

            <!-- Pastelería -->
            <article class="art01 invert" id="hitoPasteles">
                <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/inicio/amplio-surtido-pasteles-1200.avif" alt="Pasteles y dulces artesanos de Panadería Aginaga" title="Pastelería artesanal en Aginaga">
                <div>
                    <h3>Pastelería artesanal para todos los gustos</h3>
                    <p>En nuestra pastelería encontrarás una amplia variedad de dulces elaborados de forma artesanal: pasteles, bollería, tartas y especialidades de temporada. Combinamos recetas tradicionales con un toque actual para sorprender a los paladares más exigentes sin perder la esencia de lo hecho a mano.</p>
                    <!-- <a href="<?=$_ENV['RUTA']?>/es/productos/pasteleria" class="moduloBoton02">
                        <span>Explora nuestra pastelería</span>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="" title="">
                    </a> -->
                </div>
            </article>

            <!-- Torrijas -->
            <article class="art01" id="hitoTorrijas">
                <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/inicio/las-mejores-torrijas-de-gipuzkoa1200.avif" alt="Torrijas artesanas de Panadería Aginaga" title="Torrijas tradicionales de Aginaga">
                <div>
                    <h3>Torrijas, nuestro icono más dulce</h3>
                    <p>Nuestras torrijas artesanas se han convertido en todo un referente en la comarca. Elaboradas siguiendo la receta tradicional de la familia, con pan hecho en nuestro propio obrador, leche infusionada y una fritura delicada, conseguimos un postre esponjoso, aromático y lleno de sabor. Un clásico que enamora en cada bocado.</p>
                    <!-- <a href="<?=$_ENV['RUTA']?>/es/productos/torrijas" class="moduloBoton02">
                        <span>Descubre nuestras torrijas</span>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="" title="">
                    </a> -->
                </div>
            </article>

        </section>


    </main>

    <!-- FOOTER -->
    <?php include $appRoot . '/includes/es/footer.php'?>
</body>
</html>