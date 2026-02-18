<?php
// Obtener las consultas realizadas por el usuario logeado
$consultasUsuario = [];
$consultasError = '';

if (isset($_SESSION['LOGIN']) && $_SESSION['LOGIN'] === "1") {
    $correoUsuario = $_SESSION['CORREO'] ?? '';

    if (!empty($correoUsuario)) {
        $con = mysqli_connect($_ENV['BBDD_HOST'], $_ENV['BBDD_USER'], $_ENV['BBDD_PASS'], $_ENV['BBDD_BBDD']);

        if ($con) {
            $con->set_charset("utf8mb4");

            $sql = "SELECT creado_en, nombre, telefono, email, mensaje, idioma, url_origen FROM `consultas_web` WHERE email = ? ORDER BY creado_en DESC";
            $stmt = mysqli_prepare($con, $sql);

            if ($stmt) {
                mysqli_stmt_bind_param($stmt, 's', $correoUsuario);

                if (mysqli_stmt_execute($stmt)) {
                    $resultado = mysqli_stmt_get_result($stmt);

                    if ($resultado) {
                        $consultasUsuario = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
                    } else {
                        $consultasError = 'No se han podido recuperar tus consultas.';
                    }
                } else {
                    $consultasError = 'No se han podido recuperar tus consultas.';
                }

                mysqli_stmt_close($stmt);
            } else {
                $consultasError = 'No se ha podido preparar la consulta.';
            }

            mysqli_close($con);
        } else {
            $consultasError = 'No se ha podido conectar con la base de datos.';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zona Admin</title>
    <meta name="description" content="120 y 320 caracteres">
    <?php echo vite_tags('src/js/views/zonaAdmin.js'); ?>

    <!-- Url de esta vista -->
    <link rel="canonical" href="<?=$_ENV['RUTA']?>/es/zona-admin">
 
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
        <h1>Acceso Zona privada</h1>
        <div>            
            <img src="<?=$_ENV['RUTA']?>/assets/img/logos/panaderia-aginaga-logo.svg" alt="">
        </div>

        <?php
        if(isset($_SESSION['LOGIN']) && $_SESSION['LOGIN']=="1"){
            // MOSTRARÉ EL CONTENIDO PRIVADO
        ?>

            <h2>Hola, estás logeado <?= $_SESSION['NOMBRE'] ?></h2>
            <p class="mensajeBienvenida">Aquí puedes revisar todas las consultas que has enviado.</p>

        <?php
        }else{
            // MOSTRARÉ EL FORMULARIO DE LOGEO
        ?>
            <article class="artForm">
                <form action="<?=base_path()?>/app/gestionFormLogin" method="post">

                    <?php
                    if( isset($_GET['error']) ){
                        // si entro es que viene un error marcado en la url con query string
                        $error = $_GET['error'];                    
                        // echo "<p class='error'>Hay un error en el campo $campo de tipo $error</p>";
                    }
                    ?>

                    <!-- AQUÍ MOSTRAMOS EL ERROR SEA CUAL SEA -->
                    <span class="error"><?php if(isset($error)){echo "Usuario y/o contraseña incorrectos";} ?></span>

                    <label for="usuario">Usuario *</label>
                    <input type="text" name="usuario" id="usuario" placeholder="* Escribe tu usuario" value="">

                    <label for="pass">Contraseña *</label>
                    <input type="password" name="password" id="pass" placeholder="Contraseña">    
                    
                    <!-- input oculto donde el value es el valor de $lang, ergo el idioma -->
                    <input type="text" name="inputIdioma" value="<?= $lang?>" style="display:none;">

                    <input type="submit" value="ENVIAR" class="boton">

                    <p>* Campos obligatorios</p>

                    <a href="<?=$_ENV['RUTA']?>/es/registro">¿No eres socio aún? Regístrate aquí</a>

                </form>
            </article>
        <?php
        }
        ?>



    </header>

    <?php
    if(isset($_SESSION['LOGIN']) && $_SESSION['LOGIN']=="1"){
    ?>
    <main>
        <section class="panelConsultas">
            <div class="h2Especial">
                <span></span>
                <h2>Tus consultas</h2>
            </div>

            <article class="tablaConsultas">
                <p class="introConsultas">Consulta el histórico de mensajes que has enviado desde la web.</p>

                <?php if($consultasError !== ''): ?>
                    <p class="estadoConsultas error"><?= htmlspecialchars($consultasError, ENT_QUOTES, 'UTF-8'); ?></p>
                <?php elseif(empty($consultasUsuario)): ?>
                    <p class="estadoConsultas">Todavía no has enviado ninguna consulta.</p>
                <?php else: ?>
                    <div class="tablaResponsive">
                        <table>
                            <thead>
                                <tr>
                                    <th>Fecha</th>
                                    <th>Nombre</th>
                                    <th>Teléfono</th>
                                    <th>Email</th>
                                    <th>Mensaje</th>
                                    <th>Idioma</th>
                                    <th>Url de origen</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($consultasUsuario as $consulta): ?>
                                    <tr>
                                        <td><?= htmlspecialchars(date('d/m/Y H:i', strtotime($consulta['creado_en'])), ENT_QUOTES, 'UTF-8'); ?></td>
                                        <td><?= htmlspecialchars($consulta['nombre'], ENT_QUOTES, 'UTF-8'); ?></td>
                                        <td><?= htmlspecialchars($consulta['telefono'], ENT_QUOTES, 'UTF-8'); ?></td>
                                        <td><?= htmlspecialchars($consulta['email'], ENT_QUOTES, 'UTF-8'); ?></td>
                                        <td><?= htmlspecialchars($consulta['mensaje'], ENT_QUOTES, 'UTF-8'); ?></td>
                                        <td><?= htmlspecialchars($consulta['idioma'], ENT_QUOTES, 'UTF-8'); ?></td>
                                        <td><?= htmlspecialchars($consulta['url_origen'], ENT_QUOTES, 'UTF-8'); ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                <?php endif; ?>
            </article>
        </section>
    </main>
    <?php
    }
    ?>



    <!-- FOOTER -->
    <?php include $appRoot . '/includes/es/footer.php'?>


</body>
</html>
