<?php
// Erabiltzaile logeatuaren kontsultak ekartzeko
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
                        $consultasError = 'Ezin izan da zure kontsulten zerrenda kargatu.';
                    }
                } else {
                    $consultasError = 'Ezin izan da zure kontsulten zerrenda kargatu.';
                }

                mysqli_stmt_close($stmt);
            } else {
                $consultasError = 'Ezin izan da kontsulta prestatu.';
            }

            mysqli_close($con);
        } else {
            $consultasError = 'Ezin izan da datu-basearekin konektatu.';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Gunea</title>
    <meta name="description" content="120 y 320 caracteres">
    <?php echo vite_tags('src/js/views/zonaAdmin.js'); ?>

    <!-- Url de esta vista -->
    <link rel="canonical" href="<?=$_ENV['RUTA']?>/eu/admin-gunea">

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
        <h1>Admin gunea sarrera</h1>
        <div>            
            <img src="<?=$_ENV['RUTA']?>/assets/img/logos/panaderia-aginaga-logo.svg" alt="">
        </div>

        <?php
        if(isset($_SESSION['LOGIN']) && $_SESSION['LOGIN']=="1"){
            // MOSTRARÉ EL CONTENIDO PRIVADO
        ?>

            <h2>kaixo, zaude barruan <?= $_SESSION['NOMBRE'] ?></h2>
            <p class="mensajeBienvenida">Hemen bidali dituzun kontsulta guztiak ikus ditzakezu.</p>

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

                    <label for="usuario">Email *</label>
                    <input type="text" name="usuario" id="usuario" placeholder="* Idatzi zure emaila" value="">

                    <label for="pass">Pasahitza *</label>
                    <input type="password" name="password" id="pass" placeholder="Pasahitza">    
                    
                    <!-- input oculto donde el value es el valor de $lang, ergo el idioma -->
                    <input type="text" name="inputIdioma" value="<?= $lang?>" style="display:none;">

                    <input type="submit" value="BIDALI" class="boton">

                    <p>* Derrigorrezko eremuak</p>

                    <a href="<?=$_ENV['RUTA']?>/eu/erregistroa">Ez zara oraindik bazkide? Erregistratu hemen</a>

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
                <h2>Zure kontsultak</h2>
            </div>

            <article class="tablaConsultas">
                <p class="introConsultas">Webetik bidalitako mezuen historikoa kontsulta ezazu.</p>

                <?php if($consultasError !== ''): ?>
                    <p class="estadoConsultas error"><?= htmlspecialchars($consultasError, ENT_QUOTES, 'UTF-8'); ?></p>
                <?php elseif(empty($consultasUsuario)): ?>
                    <p class="estadoConsultas">Oraindik ez duzu kontsultarik bidali.</p>
                <?php else: ?>
                    <div class="tablaResponsive">
                        <table>
                            <thead>
                                <tr>
                                    <th>Data</th>
                                    <th>Izena</th>
                                    <th>Telefonoa</th>
                                    <th>Emaila</th>
                                    <th>Mezua</th>
                                    <th>Hizkuntza</th>
                                    <th>Jatorrizko URLa</th>
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
    <?php include $appRoot . '/includes/eu/footer.php'?>


</body>
</html>
