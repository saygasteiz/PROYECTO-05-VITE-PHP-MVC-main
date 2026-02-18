<?php

// aquí hago la consulta a la BBDD y obtengo los campos y los meto dentro de variables y los añado en donde corresponda dentro del contenido

// 1) CONEXIÓN CON BBDD (HOST, USER, PASS, NOMBRE DE BBDD)
$con = mysqli_connect($_ENV['BBDD_HOST'], $_ENV['BBDD_USER'], $_ENV['BBDD_PASS'], $_ENV['BBDD_BBDD']);
$con->set_charset("utf8mb4");


// 2) CONSULTA SQL A LA BBDD
$sql = "SELECT * FROM `productos` WHERE ruta = '$url'";


// Obtengo el resultado de todas las filas que me de la consulta
$resultado = mysqli_query($con, $sql);

// 3) COMPROBAMOS EL RESULTADO
// PRIMERO VER QUE NOS DEVUELVA AL MENOS 1 FILA DENTRO DE $RESULTADO
if(mysqli_num_rows($resultado) == 1){
    // procedo a recoger los datos
    // 4) recoger los datos y meter en variables mediante una iteración que va a recorrer el array de $resultado
    while($fila = mysqli_fetch_array(($resultado))){
        // En $fila ya tengo todos los campos de cada registro. En cada vuelta de este iterador tengo dentro de $fila un registro diferente. En este caso particular $resultado solo tiene un item, por lo que el iterador recorrerá 1 vez $resultado y en $fila tendré los valores de todos los campos de este registro.

        // 5) VARIABILIZAR
        $title = $fila['title'];
        $description = $fila['description'];
        // header
        $h1 = $fila['h1'];        
        $srcImg1 = $fila['srcImg1'];
        $altImg1 = $fila['altImg1'];
        $titleImg1 = $fila['titleImg1'];

        // art01
        $srcImg2 = $fila['srcImg2'];
        $altImg2 = $fila['altImg2'];
        $titleImg2 = $fila['titleImg2'];
        $h2_1  = $fila['h2_1'];
        $parrafo1 = $fila['parrafo1'];
        $parrafo2 = $fila['parrafo2'];

    }

}else{
    // que no ha encotrado ningun registro o hay más de 1, por lo que debemos dar fallo.
    // header location al index (redirección 301)
}

unset($resultado, $sql); //borrar de la memoria $resultado y $sql
mysqli_close($con); //cerrando la conexión a la BBDD

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
    <meta name="description" content="<?=$description?>">
    <?php echo vite_tags('src/js/views/producto.js'); ?>

    <!-- Url de esta vista -->
    <link rel="canonical" href="<?=$_ENV['RUTA'].'/'.$url?>">

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
        <h1><?=$h1?></h1>

        <div>            
            <img src="<?=$_ENV['RUTA']?>/assets/img/logos/panaderia-aginaga-logo.svg" alt="">
        </div>
        <a href="<?=$_ENV['RUTA']?>/eu/kontaktua" class="boton">Kontaktua</a>

        <img src="<?=$srcImg1?>" alt="<?=$altImg1?>" title="<?=$titleImg1?>" >

    </header>

    <main>
        <section>

            <!-- Artículo 01 -->
            <article class="art01">
                <img src="<?=$srcImg2?>" alt="<?=$altImg2?>" title="<?=$titleImg2?>">
                <div>
                    <h2><?=$h2_1?></h2>
                    <p><?=$parrafo1?></p>
                    <p><?=$parrafo2?></p>
                    <!-- <a href="" class="boton">CTA</a> -->
                    <a href="<?=$_ENV['RUTA']?>/eu/kontaktua" class="moduloBoton02">
                        <span>Contacta</span>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="Ve a contacto" title="Ve a contacto">
                    </a>
                </div>
            </article>

        </section>
    </main>


    <!-- FOOTER -->
    <?php include $appRoot . '/includes/eu/footer.php'?>
</body>
</html>