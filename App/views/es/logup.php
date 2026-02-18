<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <meta name="description" content="120 y 320 caracteres">
    <?php echo vite_tags('src/js/views/zonaAdmin.js'); ?>

    <!-- Url de esta vista -->
    <link rel="canonical" href="<?=$_ENV['RUTA']?>/es/registro">

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

                <label for="nombre">Nombre *</label>
                <input type="text" name="nombre" id="nombre" placeholder="* Escribe tu nombre" value="" autocomplete="off" require>

                <label for="correo">Correo *</label>
                <input type="email" name="correo" id="correo" placeholder="* Escribe tu correo" value="" autocomplete="off" require>

                <label for="pass">Contraseña *</label>
                <input type="password" name="password" id="pass" placeholder="Contraseña" autocomplete="off" require>
                
                <label for="pass2">Repetir contraseña *</label>
                <input type="password" name="passwordrepeat" id="pass2" placeholder="Repetir contraseña" autocomplete="off" require>

                <div>
                    <input type="checkbox" name="terminos" id="aceptarTerminos">                        
                    <labelfor="aceptarTerminos">Aceptar <a href="<?=$_ENV['RUTA']?>/es/terminos-legales">términos y condiciones de privacidad</a></label>
                </div>

                <!-- input oculto donde el value es el valor de $lang, ergo el idioma -->
                <input type="text" name="inputIdioma" value="<?= $lang?>" style="display:none;">

                <input type="submit" value="ENVIAR" class="boton">

                <p>* Campos obligatorios</p>
                
            </form>
        </article>       
        
           
    </header>

    

    <!-- FOOTER -->
    <?php include $appRoot . '/includes/es/footer.php'?>


</body>
</html>
