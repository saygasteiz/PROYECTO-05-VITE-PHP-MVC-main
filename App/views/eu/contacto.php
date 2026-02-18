<!DOCTYPE html>
<html lang="eu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jarri gurekin harremanetan</title>
    <meta name="description" content="Aginagako gure okindegiko harremanetarako orria">
    <?php echo vite_tags('src/js/views/contacto.js'); ?>



    <!-- Url de esta vista -->
    <link rel="canonical" href="<?=$_ENV['RUTA']?>/eu/kontaktua">

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
        <h1>Zugandik gertu gaude</h1>
        <div>            
            <img src="<?=$_ENV['RUTA']?>/assets/img/logos/panaderia-aginaga-logo.svg" alt="">
        </div>
    </header>



    <main>
        <section>

            <div class="h2Especial">
                <span></span>
                <h2>Kontaktua</h2>
            </div>



            <!-- artForm -->
            <article class="artForm">
                <h3>Harremanetarako formularioa</h3>

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

                    <span class="error"><?php if( isset($campo) && $campo == "nombre"){echo "Errorea dago $campo eremuan, mota: $error";} ?></span>
                    <label for="nombre">Izena *</label>
                    <input type="text" class='<?php if(isset($campo) && $campo == "nombre"){ echo "inputError";} ?>' name="nombre" id="nombre" placeholder="* Idatzi zure izena" value="<?php if(isset($nombre)){echo $nombre;}?>">

                    <span class="error"><?php if( isset($campo) && $campo == "telefono"){echo "Errorea dago $campo eremuan, mota: $error";} ?></span>
                    <label for="tel">Telefonoa</label>
                    <input type="tel" class='<?php if(isset($campo) && $campo == "telefono"){ echo "inputError";} ?>' name="tel" id="tel" placeholder="Hemen zure telefonoa" value="<?php if(isset($tel)){echo $tel;}?>">

                    <span class="error"><?php if( isset($campo) && $campo == "email"){echo "Errorea dago $campo eremuan, mota: $error";} ?></span>
                    <label for="email">Emaila *</label>
                    <input type="email" class='<?php if(isset($campo) && $campo == "email"){ echo "inputError";} ?>' name="email" id="email" placeholder="* Posta elektronikoa" value="<?php if(isset($email)){echo $email;}?>">

                    <span class="error"><?php if( isset($campo) && $campo == "mensaje"){echo "Errorea dago $campo eremuan, mota: $error";} ?></span>
                    <label for="mensaje">Iruzkinak</label>
                    <textarea name="mensaje" class='<?php if(isset($campo) && $campo == "mensaje"){ echo "inputError";} ?>' id="mensaje" placeholder="Idatzi hemen zure mezua"><?php if(isset($mensaje)){echo $mensaje;}?></textarea>

                    <span class="error"><?php if( isset($campo) && $campo == "terminos"){echo "Kontsulta bat bidaltzeko, baldintzak onartu behar dituzu";} ?></span>
                    <div>
                        <input type="checkbox" name="terminos" id="aceptarTerminos">
                        <label for="aceptarTerminos">Onartu <a href="<?=$_ENV['RUTA']?>/eu/lege-baldintzak">pribatutasun baldintzak</a></label>
                    </div>

                    <!-- CAPTCHA -->
                    <span class="error"><?php if(isset($campo) && $campo == "captcha"){echo "Ez duzu zuzen ebatzi Captcha";} ?></span>
                    <div>
                        <label for="respUser">Ebazten:</label>

                        <!-- campos que rellenamos desde js con números random -->
                        <span id="num1">XX</span>
                        <span>+</span>
                        <span id="num2">XX</span>
                        
                        <!-- campo que debe rellenar ewl usuario con la solución -->
                        <input type="text" name="respUser" id="respUser">

                        <!-- campo oculto con la respuesta correcta asignada desde js -->
                        <input type="hidden" name="respSystem" id="respSystem" value="XXXX">
                    </div>

                    <!-- inpout oculto donde el value es el valor de $lang, ergo el idioma -->
                    <input type="text" name="inputIdioma" value="<?= $lang?>" style="display:none;">
                    <!-- otro input oculta -->
                    <input type="text" name="inputUrl" value="<?= $url?>" style="display:none;">


                    <input type="submit" value="BIDALI" class="boton">

                    <p>* Derrigorrezko eremuak</p>

                </form>

            </article>
        </section>
    </main>

    <!-- FOOTER -->
    <?php include $appRoot . '/includes/eu/footer.php'?>
</body>

</html>
