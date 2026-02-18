<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panadería Aginaga | Obrador de pan y pastelería artesanal</title>
    <meta name="description" content="Panadería y pastelería artesanal en Aginaga desde 1925. Conoce a nuestro equipo, descubre nuestros productos y disfruta de un trato cercano en cada visita.">
    <?php echo vite_tags('src/js/views/inicio.js'); ?>

    <!-- Url de esta vista -->
    <link rel="canonical" href="<?=$_ENV['RUTA']?>/es">

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
        <h1>Panadería Aginaga, tradición artesanal desde 1925</h1>
        <div>
            <img src="<?=$_ENV['RUTA']?>/assets/img/logos/panaderia-aginaga-logo.svg" alt="">
        </div>
        <a href="<?=$_ENV['RUTA']?>/es/contacto" class="boton">Haz tu pedido</a>
    </header>

    <main>
        <!-- SECCIÓN PRESENTACIÓN -->
        <section class="sect01">
            <div class="h2Especial">
                <span></span>
                <h2>Pan, pasteles y cercanía en Aginaga</h2>
            </div>

            <article>
                <!-- hijo 1 -->
                <div>
                    <h3>Un obrador vivo cada mañana</h3>
                    <p>En Aginaga horneamos cada día panes de masa madre y dulces artesanos con ingredientes seleccionados. Nuestro obrador combina las recetas de siempre con técnicas actuales para que cada pieza llegue fresca, crujiente y con el sabor auténtico de nuestra tierra.</p>
                    <span></span>
                    <div class="cards">
                        <div class="card">
                            <img src="<?=$_ENV['RUTA']?>/assets/img/system/people-outline.svg" alt="">
                            <h4>Equipo cercano y experto</h4>
                            <p>Más de 20 profesionales dedicados al pan y la pastelería artesanal, siempre dispuestos a ayudarte.</p>
                            <a href="<?=$_ENV['RUTA']?>/es/sobre-nosotros" class="moduloBoton01">
                                <span>Conoce quiénes somos</span>
                                <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="" title="">
                            </a>
                        </div>
                        <div class="card">
                            <img src="<?=$_ENV['RUTA']?>/assets/img/system/star-outline.svg" alt="">
                            <h4>Calidad que se nota</h4>
                            <p>Panes, pasteles y torrijas artesanas elaborados a diario con harinas selectas y fermentaciones largas.</p>
                            <a href="<?=$_ENV['RUTA']?>/es/productos" class="moduloBoton01">
                                <span>Descubre nuestros productos</span>
                                <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="" title="">
                            </a>
                        </div>
                    </div>
                    <a href="<?=$_ENV['RUTA']?>/es/contacto" class="moduloBoton02">
                        <span>Haz tu pedido o reserva</span>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="Más de 100 años ofreciendo la mejor calidad en Agiña" title="Más de 100 años ofreciendo la mejor calidad en Agiña">
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
                <h2>Somos panaderos por tradición</h2>
            </div>
            <!-- Artículo 03 -->
            <article class="art03">
                <h3>Casi un siglo de oficio artesanal</h3>

                <p>Desde 1925 mantenemos viva la tradición panadera de Aginaga. Somos un equipo que ha aprendido el oficio de generación en generación y que sigue cuidando cada detalle: la selección de harinas, las fermentaciones lentas y el horneado que perfuma el barrio cada mañana.</p>

                <p>Creemos en la cercanía y el trato personal. Queremos que nos conozcas, que sepas quién amasa tu pan y quién prepara tus dulces favoritos. Por eso abrimos nuestro obrador y compartimos cada día el trabajo que nos apasiona.</p>

                <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/inicio/panaderas-profesionales-1500.avif" alt="Equipo de panaderos de Aginaga trabajando en el obrador" title="Equipo de panaderos de Aginaga">
            </article>

            <!-- artículo 05 -->
            <article class="art05">
                <h3>Nuestra historia, nuestro barrio</h3>
                <p>La familia Arrizabalaga abrió las puertas de la panadería en Aginaga hace casi cien años. Hoy seguimos aquí, cerca de ti, creciendo junto a las personas que nos visitan cada día. Cada hogaza y cada pastel lleva el sabor de nuestras raíces y el cariño de quienes los elaboran.</p>
                <p>Te invitamos a conocernos, a preguntar, a compartir un café en nuestra terraza y a descubrir por qué seguimos siendo la panadería de confianza del barrio.</p>
                <a href="<?=$_ENV['RUTA']?>/es/sobre-nosotros" class="boton">Saber más sobre nosotros</a>
            </article>

            <!-- artículo 06 -->
            <article class="art06">
                <div>
                    <h3>Servicio cercano en cada bocado</h3>
                    <p>Escuchamos lo que necesitas y te recomendamos el pan o el dulce perfecto para cada ocasión. Elaboramos por encargo, preparamos tartas personalizadas y cuidamos cada detalle para que siempre te lleves lo mejor del obrador a tu mesa.</p>
                    <p>Si buscas un trato cercano y productos artesanos, aquí nos tienes. Ven a vernos o llámanos y estaremos encantados de ayudarte.</p>
                    <a href="<?=$_ENV['RUTA']?>/es/contacto" title="" class="boton">Contacta con nosotros</a>
                </div>
            </article>

        </section>

        <!-- SECCIÓN PRODUCTOS -->
        <section>
            <div class="h2Especial">
                <span></span>
                <h2>Nuestros productos artesanos</h2>
            </div>

            <!-- Artículo 02-bis -->
            <article class="art02-bis">
                <div class="textos">
                    <h3>Pan, pastelería y dulces con identidad propia</h3>
                    <p>Nuestras especialidades hablan de quiénes somos: panes de masa madre con largas fermentaciones, pasteles artesanos elaborados cada día y las torrijas que se han convertido en nuestro icono más dulce. Seleccionamos materias primas de proximidad y trabajamos con el tiempo y el mimo que merecen las elaboraciones artesanas.</p>
                    <a href="<?=$_ENV['RUTA']?>/es/productos" class="moduloBoton02">
                        <span>Más información</span>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="Ir a Nuestros productos" title="Más información">
                    </a>
                </div>

                <div class="imagenes">
                    <a href="<?=$_ENV['RUTA']?>/es/productos#hitoPanes" title="Los mejores panes de masa madre">
                        <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/inicio/amplio-surtido-panes-1200.avif" alt="Pan de masa madre en Usurbil y Aginaga" title="Pan de masa madre en Usurbil y Aginaga">
                        <h4>Panadería</h4>
                    </a>
                    <a href="<?=$_ENV['RUTA']?>/es/productos#hitoPasteles" title="Pastelería artesana bajo demanda">
                        <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/inicio/amplio-surtido-pasteles-1200.avif" alt="Pasteles artesanos: del obrador a tu mesa" title="Pasteles artesanos: del obrador a tu mesa">
                        <h4>Pastelería</h4>
                    </a>
                    <a href="<?=$_ENV['RUTA']?>/es/productos#hitoTorrijas" title="Torrijas tradicionales a fuego lento">
                        <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/inicio/las-mejores-torrijas-de-gipuzkoa1200.avif" alt="Torrijas tradicionales todo el año" title="Torrijas tradicionales todo el año">
                        <h4>Torrijas</h4>
                    </a>
                </div>
            </article>
        </section>

    </main>

    <!-- FOOTER -->
    <?php include $appRoot . '/includes/es/footer.php'?>




</body>
</html>
