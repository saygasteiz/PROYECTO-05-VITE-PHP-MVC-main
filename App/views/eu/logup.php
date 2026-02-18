<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erregistroa</title>
    <meta name="description" content="120 y 320 caracteres">
    <?php echo vite_tags('src/js/views/zonaAdmin.js'); ?>

    <!-- Url de esta vista -->
    <link rel="canonical" href="<?=$_ENV['RUTA']?>/eu/erregistroa">

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
        <h1>Registro</h1>
        <div>            
            <img src="<?=$_ENV['RUTA']?>/assets/img/logos/panaderia-aginaga-logo.svg" alt="">
        </div>

        
        <article class="artForm">
            <form action="<?=base_path()?>/app/gestionFormLogup" method="post">

                <?php
                if( isset($_GET['error']) ){
                    // si entro es que viene un error marcado en la url con query string
                    $error = $_GET['error'];                    
                    // echo "<p class='error'>Hay un error en el campo $campo de tipo $error</p>";
                }
                ?>

                <!-- AQUÍ MOSTRAMOS EL ERROR SEA CUAL SEA -->
                <span class="error"><?php if(isset($error)){echo $error;} ?></span>

                <label for="nombre">Izena *</label>
                <input type="text" name="nombre" id="nombre" placeholder="* Idatzi zure izena" value="" autocomplete="off" require>

                <label for="correo">Email *</label>
                <input type="email" name="correo" id="correo" placeholder="* Idatzo zure emaila" value="" autocomplete="off" require>

                <label for="pass">Pasahitza *</label>
                <input type="password" name="password" id="pass" placeholder="pasahitza" autocomplete="off" require>
                
                <label for="pass2">Pasahitza errepikatu*</label>
                <input type="password" name="passwordrepeat" id="pass2" placeholder="Pasahitza errepikatu" autocomplete="off" require>

                <div>
                    <input type="checkbox" name="terminos" id="aceptarTerminos">                        
                    <labelfor="aceptarTerminos">Onartu <a href="<?=$_ENV['RUTA']?>/es/terminos-legales">pribatutasun baldintzak eta baldintzak</a></label>
                </div>

                <!-- input oculto donde el value es el valor de $lang, ergo el idioma -->
                <input type="text" name="inputIdioma" value="<?= $lang?>" style="display:none;">

                <input type="submit" value="BIDALI" class="boton">

                <p>* Derrigorrezko eremuak</p>
                
            </form>
        </article>       
        
           
    </header>

    

    <!-- FOOTER -->
    <?php include $appRoot . '/includes/eu/footer.php'?>


</body>
</html>
