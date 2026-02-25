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
                        $consultasError = $error_db_fetch;
                    }
                } else {
                    $consultasError = $error_db_fetch;
                }

                mysqli_stmt_close($stmt);
            } else {
                $consultasError = $error_db_prepare;
            }

            mysqli_close($con);
        } else {
            $consultasError = $error_db_connect;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="<?=$lang?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
    <meta name="description" content="<?=$meta_description?>">
    <?php echo vite_tags('src/js/views/zonaAdmin.js'); ?>

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
            <img src="<?=$_ENV['RUTA']?>/assets/img/logos/panaderia-aginaga-logo.svg" alt="">
        </div>

        <?php
        if(isset($_SESSION['LOGIN']) && $_SESSION['LOGIN']=="1"){
            // MOSTRARÉ EL CONTENIDO PRIVADO
        ?>

            <h2><?=$h2_bienvenida?> <?= $_SESSION['NOMBRE'] ?></h2>
            <p class="mensajeBienvenida"><?=$p_bienvenida?></p>

        <?php
        }else{
            // MOSTRARÉ EL FORMULARIO DE LOGEO
        ?>
            <article class="artForm">
                <form action="<?=base_path()?>/app/gestionFormLogin" method="post">

                    <?php
                    if( isset($_GET['error']) ){
                        $error = $_GET['error'];
                    }
                    ?>

                    <!-- AQUÍ MOSTRAMOS EL ERROR SEA CUAL SEA -->
                    <span class="error"><?php if(isset($error)){echo $error_login;} ?></span>

                    <label for="usuario"><?=$label_usuario?></label>
                    <input type="text" name="usuario" id="usuario" placeholder="<?=$placeholder_usuario?>" value="">

                    <label for="pass"><?=$label_pass?></label>
                    <input type="password" name="password" id="pass" placeholder="<?=$placeholder_pass?>">

                    <!-- input oculto donde el value es el valor de $lang, ergo el idioma -->
                    <input type="text" name="inputIdioma" value="<?= $lang?>" style="display:none;">

                    <input type="submit" value="<?=$cta_enviar?>" class="boton">

                    <p><?=$campos_obligatorios?></p>

                    <a href="<?=$_ENV['RUTA']?><?=$link_registro?>"><?=$link_registro_texto?></a>

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
                <h2><?=$h2_consultas?></h2>
            </div>

            <article class="tablaConsultas">
                <p class="introConsultas"><?=$p_intro_consultas?></p>

                <?php if($consultasError !== ''): ?>
                    <p class="estadoConsultas error"><?= htmlspecialchars($consultasError, ENT_QUOTES, 'UTF-8'); ?></p>
                <?php elseif(empty($consultasUsuario)): ?>
                    <p class="estadoConsultas"><?=$p_sin_consultas?></p>
                <?php else: ?>
                    <div class="tablaResponsive">
                        <table>
                            <thead>
                                <tr>
                                    <th><?=$th_fecha?></th>
                                    <th><?=$th_nombre?></th>
                                    <th><?=$th_telefono?></th>
                                    <th><?=$th_email?></th>
                                    <th><?=$th_mensaje?></th>
                                    <th><?=$th_idioma?></th>
                                    <th><?=$th_url?></th>
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
    <?php include $appRoot . '/includes/footer.php'?>

</body>
</html>

