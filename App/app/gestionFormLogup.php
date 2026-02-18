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
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$pass1 = $_POST['password'];
$pass2 = $_POST['passwordrepeat'];
$terminos = $_POST['terminos'];
$lang = $_POST['inputIdioma'];

// echo $nombre .'<br>';
// echo $correo .'<br>';
// echo $pass1 .'<br>';
// echo $pass2 .'<br>';
// echo $terminos .'<br>';

// VERIFICACIÓN

if(empty($terminos)){
    switch ($lang){
        case "es":
            mensaje_error_logup($_ENV['RUTA'], "Debes aceptar los términos y condiciones de privacidad.", $lang);
            break;
        case "eu":
            mensaje_error_logup($_ENV['RUTA'], "Pribatutasun-baldintzak onartu behar dituzu", $lang);
            break;
        default:
            mensaje_error_logup($_ENV['RUTA'], "Debes aceptar los términos y condiciones de privacidad.", $lang);
            break;
    }    
}

// vacio nombre
if(empty($nombre)){    
    
    switch ($lang){
        case "es":
            mensaje_error_logup($_ENV['RUTA'], "Has dejado el nombre vacío.", $lang);
            break;
        case "eu":
            mensaje_error_logup($_ENV['RUTA'], "Izena hutsik utzi duzu.", $lang);
            break;
        default:
            mensaje_error_logup($_ENV['RUTA'], "Has dejado el nombre vacío.", $lang);
            break;
    }
}
// EL NOMBRE NO ESTÁ ENTRE 3 Y 40 CARACTERES
$numeroCaracteres = strlen($nombre);
if($numeroCaracteres < 3 || $numeroCaracteres > 40){    
    switch ($lang){
        case "es":
            mensaje_error_logup($_ENV['RUTA'], "El nombre debe tener entre 3 y 40 caracteres máximo", $lang);
            break;
        case "eu":
            mensaje_error_logup($_ENV['RUTA'], "Izenak 3 eta 40 karaktere artean izan behar ditu, gehienez", $lang);
            break;
        default:
            mensaje_error_logup($_ENV['RUTA'], "El nombre debe tener entre 3 y 40 caracteres máximo", $lang);
            break;
    }
}

// vacio correo
if(empty($correo)){        
    switch ($lang){
        case "es":
            mensaje_error_logup($_ENV['RUTA'], "Has dejado el correo vacío", $lang);
            break;
        case "eu":
            mensaje_error_logup($_ENV['RUTA'], "Posta hutsik utzi duzu", $lang);
            break;
        default:
            mensaje_error_logup($_ENV['RUTA'], "Has dejado el correo vacío", $lang);
            break;
    }
}
// QUE NO TENGA FORMATO DE CORREO
if(validar_email($correo)==false){    
    
    switch ($lang){
        case "es":
            mensaje_error_logup($_ENV['RUTA'], "El correo no tiene un formato válido", $lang);
            break;
        case "eu":
            mensaje_error_logup($_ENV['RUTA'], "Mezuaren formatua ez da zuzena", $lang);
            break;
        default:
            mensaje_error_logup($_ENV['RUTA'], "El correo no tiene un formato válido", $lang);
            break;
    }
}

// PASS1 NO VENGA VACÍO
if(empty($pass1) || empty($pass2)){
    switch ($lang){
        case "es":
            mensaje_error_logup($_ENV['RUTA'], "No puedes dejar el campo contraseña vacío", $lang);
            break;
        case "eu":
            mensaje_error_logup($_ENV['RUTA'], "Ezin duzu pasahitzaren eremua hutsik utzi", $lang);
            break;
        default:
            mensaje_error_logup($_ENV['RUTA'], "No puedes dejar el campo contraseña vacío", $lang);
            break;
    }

}

// QUE LOS PASSWORD NO COINCIDAN ENTRE SÍ
if($pass1 != $pass2){
    switch ($lang){
        case "es":
            mensaje_error_logup($_ENV['RUTA'], "Las contraseñas no coinciden", $lang);
            break;
        case "eu":
            mensaje_error_logup($_ENV['RUTA'], "Pasahitzak ez datoz bat", $lang);
            break;
        default:
            mensaje_error_logup($_ENV['RUTA'], "Las contraseñas no coinciden", $lang);
            break;
    }

}


// consultar si existe algún usuario con ese mismo correo.
// conexión
$con = mysqli_connect($_ENV['BBDD_HOST'], $_ENV['BBDD_USER'], $_ENV['BBDD_PASS'], $_ENV['BBDD_BBDD']);
$con->set_charset("utf8mb4");

// sentencia sql (select)
$sql = "SELECT * FROM `usuarios` WHERE correo = '$correo'";
// ejecución de la consulta sql a la bbdd
$resultado = mysqli_query($con, $sql);
// comprobación del resultado (si existe un regisdtro con ese correo, mandamos error)
if(mysqli_num_rows($resultado) > 0){
    switch ($lang){
        case "es":
            mensaje_error_logup($_ENV['RUTA'], "Ya existe un usuario con ese correo", $lang);
            break;
        case "eu":
            mensaje_error_logup($_ENV['RUTA'], "Posta elektroniko horrekin erabiltzaile bat dago jada", $lang);
            break;
        default:
            mensaje_error_logup($_ENV['RUTA'], "Ya existe un usuario con ese correo", $lang);
            break;
    }
}
unset($resultado, $sql); //borrar de la memoria $resultado y $sql


// meter en la bbdd el nuevo usuario
$passCrypt = password_hash($pass1, PASSWORD_ARGON2ID);

// sentencia SQL para insertar
$sql = "INSERT INTO `usuarios`(`id_usuario`, `nombre`, `correo`, `password`) VALUES (NULL,'$nombre','$correo','$passCrypt')";
// ejecutar la sentencia
$resultado = mysqli_query($con, $sql);

unset($resultado, $sql); //borrar de la memoria $resultado y $sql
mysqli_close($con); //cerrando la conexión a la BBDD

// si todo bien redirigimos

$ruta = $_ENV['RUTA'];
switch ($lang){
    case "es":
        header("location:$ruta/es/zona-admin");
        die;
        break;
    case "eu":
        header("location:$ruta/eu/admin-gunea");
        die;
        break;
    default:
        header("location:$ruta/es/zona-admin");
        die;
        break;
}
