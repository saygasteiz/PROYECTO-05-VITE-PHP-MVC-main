<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre nosotros | Panadería Aginaga - Tradición desde 1925</title>
    <meta name="description" content="Conoce al equipo de profesionales de Panadería Aginaga. Casi un siglo de tradición panadera en el corazón de Aginaga, elaborando productos artesanales de la mejor calidad.">
    <?php echo vite_tags('src/js/views/quienesSomos.js'); ?>

    <!-- Url de esta vista -->
    <link rel="canonical" href="<?=$_ENV['RUTA']?>/es/sobre-nosotros">

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
        <h1>Panaderos por tradición desde 1925</h1>
        <div>            
            <img src="<?=$_ENV['RUTA']?>/assets/img/logos/panaderia-aginaga-logo.svg" alt="Panadería Aginaga" title="Panadería Aginaga">
        </div>            
    </header>

    <main>        
        <!-- Equipo humano -->
        <section>
            <div class="h2Especial">
                <span></span>
                <h2>Nuestro equipo de profesionales</h2>
            </div>

            <!-- PRESENTACIÓN DE QUIENES SOMOS -->
            <article class="art05">
                <h3>Maestros panaderos con alma y tradición</h3>
                <p>En Panadería Aginaga llevamos más de siete décadas horneando cada día con la misma pasión que el primer día. Nuestro equipo está formado por profesionales que combinan el saber hacer heredado de generaciones con una mirada atenta a la innovación, manteniendo viva una tradición que ha convertido nuestro obrador en un referente en la comarca.</p>
                <p>Desde los maestros panaderos hasta los más jóvenes aprendices, compartimos un mismo objetivo: elaborar panes y dulces artesanos que transmitan autenticidad, calidad y cercanía. Cada pieza que sale de nuestros hornos es fruto del trabajo en equipo, la dedicación y el amor por nuestro oficio.</p>
                <a href="<?=$_ENV['RUTA']?>/es/contacto" class="boton" title="Contacta con nosotros">Contáctanos</a>
            </article>

            <!-- TRATO DISTINGUIDO Y PERSONAL -->
            <article class="art03">
                
                <h3>Un trato personal y cercano</h3>

                <p>En Panadería Aginaga, nuestro equipo es nuestra mayor fortaleza. Con más de 20 profesionales dedicados al arte de la panadería y pastelería artesanal, mantenemos viva la tradición que comenzó hace casi un siglo. Cada miembro de nuestro equipo aporta su experiencia y pasión para crear productos excepcionales que deleitan a nuestros clientes día tras día.</p>

                <p>La formación continua y el amor por nuestro oficio son los pilares que nos permiten mantener los más altos estándares de calidad. Desde maestros panaderos con décadas de experiencia hasta jóvenes aprendices que mantienen vivo el espíritu de innovación, todos compartimos el mismo compromiso: ofrecer el mejor producto artesanal con un trato cercano y personalizado.</p>

                <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/quienes-somos/equipo-de-panaderas-y-panaderos-1800.avif" alt="Amor por nuestro oficio" title="Amor por nuestro oficio">

            </article>

            <!-- LOS TRABAJADORES Y TRABAJADORAS -->
            <article class="art04">
                <h3>Obradores de profesión</h3>
                <span class="ralla"></span>
                <div class="contenedor-fichas">
                    <div class="ficha">
                        <h4>Mikel Arrizabalaga</h4>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/quienes-somos/empleado-01-1200.avif" alt="Mikel Arrizabalaga - Maestro Panadero" title="Mikel Arrizabalaga">                        
                        <p>Maestro panadero con más de 30 años de experiencia. Especialista en masas madre y panes tradicionales vascos. Su dedicación y conocimiento son el corazón de nuestra panadería.</p>
                        <span class="ralla"></span>
                    </div>

                    <div class="ficha">
                        <h4>María Etxeberria</h4>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/quienes-somos/empleada-03-1200.avif" alt="María Etxeberria - Maestra Pastelera" title="María Etxeberria">                        
                        <p>Maestra pastelera que combina técnicas tradicionales con toques innovadores. Su creatividad ha dado lugar a algunas de nuestras especialidades más populares.</p>
                        <span class="ralla"></span>
                    </div>

                    <div class="ficha">
                        <h4>Jon Lizarraga</h4>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/quienes-somos/empleado-02-1200.avif" alt="Jon Lizarraga - Especialista en Bollería" title="Jon Lizarraga">                        
                        <p>Especialista en bollería artesanal. Su pasión por los detalles y la perfección técnica se refleja en cada croissant y pieza de bollería que sale de nuestro obrador.</p>
                        <span class="ralla"></span>
                    </div>

                    <div class="ficha">
                        <h4>Ana Mendizabal</h4>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/quienes-somos/empleada-04-1200.avif" alt="Ana Mendizabal - Panadera Artesana" title="Ana Mendizabal">                        
                        <p>Panadera artesana especializada en panes especiales y sin gluten. Su compromiso con la innovación nos permite ofrecer productos para todos los gustos y necesidades.</p>
                        <span class="ralla"></span>
                    </div>
                </div>
            </article>
        </section>

        <!-- Historia y valores de la panadería -->
        <section class="sect01">
            <div class="h2Especial">
                <span></span>
                <h2>Desde 1925 en Aginaga</h2>
            </div>
            <article>
                <!-- CERCANÍA Y TRADICIÓN -->
                <div>
                    <h3>Cercanía y tradición</h3>
                    <p>Nuestra historia comenzó en 1925 cuando la familia Arrizabalaga abrió las puertas de su pequeña panadería en Aginaga. Desde entonces, cuatro generaciones han mantenido vivo el espíritu artesanal y el compromiso con la calidad que nos caracteriza. Cada día elaboramos nuestros productos siguiendo las recetas tradicionales, combinando el saber hacer heredado con las técnicas más actuales.</p>
                    <span></span>
                    <div class="cards">
                        <div class="card">
                            <img src="<?=$_ENV['RUTA']?>/assets/img/system/star.svg" alt="Icono historia" title="Nuestra historia">
                            <h4>Una historia llena de harina</h4>
                            <p>Casi un siglo de tradición panadera en Aginaga nos avala. Descubre cómo una pequeña panadería familiar se ha convertido en referente de la panadería artesanal en la comarca.</p>
                            
                        </div>
                        <div class="card">
                            <img src="<?=$_ENV['RUTA']?>/assets/img/system/ribbon.svg" alt="Icono calidad" title="Calidad artesanal">
                            <h4>Productos de la mejor calidad</h4>
                            <p>Seleccionamos las mejores materias primas y mantenemos los procesos artesanales para garantizar el sabor y la calidad que nos distingue desde hace generaciones.</p>
                            <a href="<?=$_ENV['RUTA']?>/es/productos" class="moduloBoton01">
                                <span>Nuestros productos</span>
                                <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="" title="">
                            </a>
                        </div>
                    </div>
                    <a href="<?=$_ENV['RUTA']?>/es/contacto" class="moduloBoton02">
                        <span>Contacta con nosotros</span>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="Contamos con terraza para poder tomar el café" title="">
                    </a>
                </div>
                <!-- hijo 2 -->
                <div>
                    <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/inicio/panaderia-en-aginaga-1500.avif" alt="Contamos con terraza para poder tomar el café" title="Contamos con terraza para poder tomar el café">
                </div>
            </article>
        </section>

    </main>

    <!-- FOOTER -->
    <?php include $appRoot . '/includes/es/footer.php'?>
</body>
</html>