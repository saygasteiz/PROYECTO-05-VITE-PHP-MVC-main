<!DOCTYPE html>
<html lang="<?=$lang?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
    <meta name="description" content="<?=$meta_description?>">

    <!-- ASIGNACIÓN DE ARCHIVO CSS (MINIFICADO) A ESTE HTML -->
    <?php echo vite_tags('src/js/views/contacto.js'); ?>

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
            <img rel="preload" fetchpriority="high" src="<?=$_ENV['RUTA']?>/assets/img/logos/panaderia-aginaga-logo.svg" alt="">
        </div>
    </header>

    <main>
        <section>

            <div class="h2Especial">
                <span></span>
                <h2><?=$h2_contacta?></h2>
            </div>


            <!-- artForm -->
            <article class="artForm">
                <h3><?=$h3_form?></h3>

                <!-- Al abrir este otro archivo, genero otro scope, se reseta y limpia la memoria en el servidor -->
                <form action="<?=base_path()?>/app/gestionForm" method="post">

                    <?php
                    if( isset($_GET['campo']) ){
                        // si entro es que viene un error marcado en la url con query string
                        $campo = $_GET['campo'];
                        $error = $_GET['error'];
                        $nombre = $_GET['nombre'];
                        $tel = $_GET['tel'];
                        $email = $_GET['email'];
                        $mensaje = $_GET['mensaje'];
                    }
                    ?>

                    <span class="error"><?php if(isset($campo) && $campo == "nombre"){echo "$error_nombre $error";} ?></span>
                    <label for="nombre"><?=$label_nombre?></label>
                    <input type="text" class='<?php if(isset($campo) && $campo == "nombre"){ echo "inputError";} ?>' name="nombre" id="nombre" placeholder="<?=$placeholder_nombre?>" value="<?php if(isset($nombre)){echo $nombre;}?>">

                    <span class="error"><?php if( isset($campo) && $campo == "telefono"){echo "$error_telefono $error";} ?></span>
                    <label for="tel"><?=$label_tel?></label>
                    <input type="tel" class='<?php if(isset($campo) && $campo == "telefono"){ echo "inputError";} ?>' name="tel" id="tel" placeholder="<?=$placeholder_tel?>" value="<?php if(isset($tel)){echo $tel;}?>">


                    <span class="error"><?php if( isset($campo) && $campo == "email"){echo "$error_email $error";} ?></span>
                    <label for="email"><?=$label_email?></label>
                    <input type="email" class='<?php if(isset($campo) && $campo == "email"){ echo "inputError";} ?>' name="email" id="email" placeholder="<?=$placeholder_email?>" value="<?php if(isset($email)){echo $email;}?>">


                    <span class="error"><?php if( isset($campo) && $campo == "mensaje"){echo "$error_mensaje $error";} ?></span>
                    <label for="mensaje"><?=$label_mensaje?></label>
                    <textarea name="mensaje" class='<?php if(isset($campo) && $campo == "mensaje"){ echo "inputError";} ?>' id="mensaje" placeholder="<?=$placeholder_mensaje?>"><?php if(isset($mensaje)){echo $mensaje;}?></textarea>

                    <span class="error"><?php if( isset($campo) && $campo == "terminos"){echo $error_terminos;} ?></span>
                    <div>
                        <input type="checkbox" name="terminos" id="aceptarTerminos">
                        <label for="aceptarTerminos"><?=$label_terminos?> <a href="<?=$_ENV['RUTA']?><?=$link_terminos?>"><?=$link_terminos_texto?></a></label>
                    </div>

                    <!-- CAPTCHA -->
                    <span class="error"><?php if(isset($campo) && $campo == "captcha"){echo $error_captcha;} ?></span>
                    <div>
                        <label for="respUser"><?=$label_captcha?></label>

                        <!-- campos que rellenamos desde js con números random -->
                        <span id="num1">XX</span>
                        <span>+</span>
                        <span id="num2">XX</span>

                        <!-- campo que debe rellenar ewl usuario con la solución -->
                        <input type="text" name="respUser" id="respUser">

                        <!-- campo oculto con la respuesta correcta asignada desde js -->
                        <input type="hidden" name="respSystem" id="respSystem" value="XXXX">
                    </div>

                    <!-- input oculto donde el value es el valor de $lang, ergo el idioma -->
                    <input type="text" name="inputIdioma" value="<?= $lang?>" style="display:none;">
                    <!-- otro input oculto -->
                    <input type="text" name="inputUrl" value="<?= $url?>" style="display:none;">


                    <input type="submit" value="<?=$cta_enviar?>" class="boton">

                    <p><?=$campos_obligatorios?></p>

                </form>

            </article>
        </section>
    </main>

    <!-- FOOTER -->
    <?php include $appRoot . '/includes/footer.php'?>
</body>


</html>

