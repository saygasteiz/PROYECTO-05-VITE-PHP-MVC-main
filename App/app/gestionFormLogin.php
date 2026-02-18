<?php
// zona de variables de entorno
// Adaptamos el enrutamiento a donde esté /vendor y donde esté el .env
$basePath = dirname(__DIR__, 2);
require_once $basePath . '/vendor/autoload.php';
use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable($basePath);
$dotenv->load();

include_once $basePath . "/App/config/helpers.php";

// 01 Recoger los datos enviados por el form
$user = $_POST['usuario'];
$pass = $_POST['password'];
$lang = $_POST['inputIdioma'];

// 02 Comprobación DEV (mostrarlos a través de echo para ver que vienen bien)
// echo $user.'<br>';
// echo $pass;

// 03 Validaciones de campos
// de que no venga vacío Usuario
if(empty($user)){    
    mensaje_error_login($_ENV['RUTA'], $lang);
}
// de que no venga vacío Password
if(empty($pass)){    
    mensaje_error_login($_ENV['RUTA'], $lang);
}

// 04 COMPROBACIÓN DE SI EXISTE EN LA BASE DE DATOS

// 1) CONEXIÓN CON BBDD (HOST, USER, PASS, NOMBRE DE BBDD)
$con = mysqli_connect($_ENV['BBDD_HOST'], $_ENV['BBDD_USER'], $_ENV['BBDD_PASS'], $_ENV['BBDD_BBDD']);
$con->set_charset("utf8mb4");


// 2) CONSULTA SQL A LA BBDD
$sql = "SELECT * FROM `usuarios` WHERE correo = '$user'";
$resultado = mysqli_query($con, $sql);


if(mysqli_num_rows($resultado) == 1){

    $fila = mysqli_fetch_array($resultado);

    $passBBDD = $fila['password'];

    if(password_verify($pass, $passBBDD)){
        $nombre = $fila['nombre'];
        $correo = $fila['correo'];

        $_SESSION['LOGIN'] = "1";
        $_SESSION['NOMBRE'] = $nombre;
        $_SESSION['CORREO'] = $correo;

        // EXISTE ESE USER CON ESA PASS
        switch ($lang){
            case "es":
                header('location:'.$_ENV["RUTA"].'/es/zona-admin');
                die;
                break;
            case "eu":
                header('location:'.$_ENV["RUTA"].'/eu/admin-gunea');
                die;
                break;
            default:
                header('location:'.$_ENV["RUTA"].'/es/zona-admin');
                die;
                break;
        }
                
    }else{
        // NO EXISTE ESE USER CON ESA PASS
        mensaje_error_login($_ENV['RUTA'], $lang);
    }

    
}else{
    // NO EXISTE ESE USER CON ESA PASS
    mensaje_error_login($_ENV['RUTA'], $lang);
}


