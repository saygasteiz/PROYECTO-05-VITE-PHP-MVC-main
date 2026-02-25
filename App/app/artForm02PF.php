<?php

require_once __DIR__ . '/../vendor/autoload.php';
use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->safeLoad();


// zona de incluir recursos
include __DIR__ . '/../config/helpers.php';


// aquí voy a gestionar lo que reciba del formulario

// 1 recibir los datos del formulario a través de POST y meto los value en nuevas variables que usaré aquí
// Recoger el resto de valores del form
$nombre = $_POST['nombre'] ?? '';
$telefono = $_POST['telefono'] ?? '';
$email = $_POST['email'] ?? '';
$mensaje = $_POST['mensaje'] ?? '';
$ip = $_SERVER['REMOTE_ADDR'] ?? '';
$fecha = date('Y-m-d H:i:s');



if(!isset($_POST['terminos']) || comprobarVacio($_POST['terminos'])){
    // Como viene vacía, redirijo a la página de contacto
    // echo "Hay un error pues no ha aceptado las condiciones de privacidad";
    enviarRespuestaAsincrona("Debes aceptar las condiciones de consentimiento", true, "condiciones");
}else{
    $terminos = $_POST['terminos'];
}


// // comprobación de términos
// if(empty($_POST['terminos'])){
//     // Como viene vacía, redirijo a la página de contacto
//     // echo "Hay un error pues no ha aceptado las condiciones de privacidad";
//     header('location:/index.php?error=condiciones');
//     die;
// }else{
//     $terminos = $_POST['terminos'];
// }


// comprobación de captcha
$respUser = $_POST['respUser'] ?? null;
$respSystem = $_POST['respSystem'] ?? null;
// que venga vacío
if(!isset($respUser)){
    enviarRespuestaAsincrona("Debes cumplir con el captcha", true, "captcha");
}
// que la respuesta sea errónea
if($respUser != $respSystem){
    enviarRespuestaAsincrona("Debes resolver la operación de forma correcta", true, "captcha");
}







// echo $ip . "<br>";
// echo $fecha;
// die;

// Zona de comprobaciones DEV
// echo $nombre.'<br>'.$telefono.'<br>'.$email.'<br>'.$mensaje.'<br>'.$terminos.'<br>'.$respUser.'<br>'.$respSystem;


// 2 comprobar que los datos son correctos.
// que nombre venga vacío, salimos
if(comprobarVacio($nombre)){
    enviarRespuestaAsincrona("Debes rellenar el campo nombre", true, "nombre");
}
// // que nombre sea menor de 3 y mayor de 40, salimos
if(comprobarCaracteres($nombre, 3, 40)){
    enviarRespuestaAsincrona("El nombre debe tener más de 3 y menos de 40 caracteres", true, "nombre"); 
}

// que teléfono venga vacío, salimos
if(comprobarVacio($telefono)){
    enviarRespuestaAsincrona("El campo teléfono debe cumplimentarse", true, "telefono"); 
}

// que correo venga vacío, salimos
if(comprobarVacio($email)){
    enviarRespuestaAsincrona("Debes indicar el correo electrónico", true, "email"); 
}

// // que correo no tenga la forma de un correo, salimos (expresión regular)
if(!comprobarEmailSintaxis($email)){
    enviarRespuestaAsincrona("El correo electrónico no tiene un formato adecuado", true, "email"); 
}

// que mensaje venga vacío, salimos
if(comprobarVacio($mensaje)){
    enviarRespuestaAsincrona("El mensaje no puede quedar vacío", true, "mensaje"); 
}
// // que mensaje sea menor de 4 y mayor de 200, salimos
if(comprobarCaracteres($mensaje, 4, 200)){
    enviarRespuestaAsincrona("El mensaje debe tener una longitud entre 4 y 200 caracteres máximo", true, "mensaje"); 
}

// 3 enviar correos de aviso: a la empresa y al propio usuario

// 3.1 enviar un correo al ADMIN DE LA WEB
// recoger más variables que necesita el phpMailer:correo emisor y el nombre emisor,el correo receptor y su nombre, título del correo
$urlWeb = "http://localhost:3000";
$correoEmisor =$_ENV['EMAIL_WEB'];
$nombreEmisor ="Web Panadería";
$correoDestinatario = $_ENV['EMAIL_ADMIN'];
$nombreDestinatario= "Admin de la web";
$asunto = "Has recibido una nueva consulta en la web de $nombre";

// recoger el template con los placeholders
$html = file_get_contents(__DIR__ . '/templates/artForm01.html');
// dar el cambiazo a los placeholders por valores definitivos

// array asociativo de las relaciones de placeholders con los valores que tendrá para este correo
$vars = [
    '{url}'                 => $urlWeb,
    '{asunto}'              => $asunto,
    '{aviso}'               => "Has recibido un correo pidiendo información de $nombre. A continuación sus datos. Ha aceptado los términos de privacidad. ",
    '{explicacion}'         => "Has recibido un correo pidiendo información de $nombre. A continuación sus datos. Ha aceptado los términos de privacidad. ",
    '{contexto}'            => 'El cliente es ',
    '{razon}'               => 'Si quieres responderle, escríbele al correo que facilita a continuación',
    '{nombre}'              => $nombre,
    '{telefono}'            => $telefono,
    '{email}'               => $email,
    '{mensaje}'             => $mensaje,
    '{responder}'           => 'Procura responder dentro del plazo de 2 días',
    '{fecha}'               => $fecha,

];
$cuerpo = str_replace(array_keys($vars), array_values($vars), $html);
include __DIR__ . "/envioPhpMailer.php";
if (isset($phpMailerEnvioOk) && $phpMailerEnvioOk === false) {
    enviarRespuestaAsincrona("No se ha podido enviar el correo al administrador", true, "email");
}


// 3.2 enviar un correo al USUARIO DE LA WEB
// recoger más variables que necesita el phpMailer:correo emisor y el nombre emisor,el correo receptor y su nombre, título del correo
$urlWeb = "http://localhost:3000";
$correoEmisor =$_ENV['EMAIL_WEB'];
$nombreEmisor ="Web Panadería";
$correoDestinatario = $email;
$nombreDestinatario= $nombre;
$asunto = "$nombre, hemos recibido tu consulta.";

// recoger el template con los placeholders
$html = file_get_contents(__DIR__ . '/templates/artForm01.html');
// dar el cambiazo a los placeholders por valores definitivos

// array asociativo de las relaciones de placeholders con los valores que tendrá para este correo
$vars = [
    '{url}'                 => $urlWeb,
    '{asunto}'              => $asunto,
    '{aviso}'               => "$nombre, hemos recibido satisfactóriamente tu consulta.",
    '{explicacion}'         => "En breve nos pondremos en contacto contigo.",
    '{contexto}'            => 'Aquí están los datos que nos has facilitado',
    '{razon}'               => 'Consulta a la Panadería Aginaga',
    '{nombre}'              => $nombre,
    '{telefono}'            => $telefono,
    '{email}'               => $email,
    '{mensaje}'             => $mensaje,
    '{responder}'           => 'Procuraremos responderte en el plazo de 2 días laborales',
    '{fecha}'               => $fecha,
];

$cuerpo = str_replace(array_keys($vars), array_values($vars), $html);
include __DIR__ . "/envioPhpMailer.php";
if (isset($phpMailerEnvioOk) && $phpMailerEnvioOk === false) {
    enviarRespuestaAsincrona("No se ha podido enviar el correo de confirmación", true, "email");
}


// 4 guardar los datos en una bbdd
// Si falla la DB, NO rompemos el flujo del formulario.
$dbHost = $_ENV['DB_HOST'] ?? '';
$dbName = $_ENV['DB_NAME'] ?? '';
$dbUser = $_ENV['DB_USER'] ?? '';
$dbPass = $_ENV['DB_PASS'] ?? '';

if ($dbHost === '' || $dbName === '' || $dbUser === '') {
    error_log('DB env incompleta: revisa DB_HOST, DB_NAME, DB_USER y DB_PASS en .env de producción');
} else {
    try {
        // Evita excepciones fatales en servidores con MYSQLI_REPORT_STRICT activo.
        mysqli_report(MYSQLI_REPORT_OFF);
        $con = @mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

        if($con === false){
            error_log('Error de conexión con la DB: ' . mysqli_connect_error());
        }else{
            $con->set_charset("utf8mb4");
            $sql = "INSERT INTO `Consultas`(`nombre`, `telefono`, `email`, `mensaje`, `ip`, `fecha`) VALUES (?,?,?,?,?,?)";
            $stmt = mysqli_prepare($con, $sql);

            if($stmt === false){
                error_log('Error al preparar la inserción de la consulta: ' . mysqli_error($con));
            }else{
                mysqli_stmt_bind_param($stmt, "ssssss", $nombre, $telefono, $email, $mensaje, $ip, $fecha);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_close($stmt);
            }

            mysqli_close($con);
        }
    } catch (Throwable $e) {
        error_log('Excepción DB al guardar consulta: ' . $e->getMessage());
    }
}







// 5 redirigir a la página index para mostrar un mensaje de envío ok, en vez del formulario
// urlencode evita romper la cabecera si el nombre lleva espacios o acentos

enviarRespuestaAsincrona("Gracias por escribirnos, $nombre. En breve te contactaremos", false, $nombre); 


?>







