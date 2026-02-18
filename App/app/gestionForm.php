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
$tel = $_POST['tel'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];
$terminos = $_POST['terminos'];

$respUser = $_POST['respUser'];
$respSystem = $_POST['respSystem'];

$lang = $_POST['inputIdioma'];
$url = $_POST['inputUrl'];

$ip = $_SERVER['REMOTE_ADDR'];
$fecha = date('Y-m-d H:i:s');


// // 02 Comprobación DEV (mostrarlos a través de echo para ver que vienen bien)
// echo $nombre.'<br>';
// echo $tel.'<br>';
// echo $email.'<br>';
// echo $mensaje.'<br>';
// echo $ip.'<br>';
// echo $fecha.'<br>';
// echo $_ENV['RUTA'].'<br>';
// echo $terminos;
// echo $lang.'<br>';
// echo $url;
// die;




// 03 Validaciones de campos

// Validación de aceptación de captcha
if(empty($respUser) || empty($respSystem) || $respUser!= $respSystem){    
    mensaje_error($lang, $_ENV['RUTA'],"captcha", "incorrecto", $nombre, $tel, $email, $mensaje);
}


// Validación de aceptación de términos
if(empty($terminos)){    
    mensaje_error($lang, $_ENV['RUTA'],"terminos", "vacio", $nombre, $tel, $email, $mensaje);
}

// de que no venga vacío Nombre
if(empty($nombre)){    
    mensaje_error($lang, $_ENV['RUTA'],"nombre", "vacio", $nombre, $tel, $email, $mensaje);
}
// de que no venga vacío el teléfono
if(empty($tel)){    
    mensaje_error($lang, $_ENV['RUTA'], "telefono", "vacio", $nombre, $tel, $email, $mensaje);
}
// de que no venga vacío el correo
if(empty($email)==true){    
    mensaje_error($lang, $_ENV['RUTA'],"email", "vacio", $nombre, $tel, $email, $mensaje);
}
// de que no venga vacío el correo
if(empty($mensaje)==true){    
    mensaje_error($lang, $_ENV['RUTA'],"mensaje", "vacio", $nombre, $tel, $email, $mensaje);
}

// de que sea un correo adecuado (con expresiones regulares)
if(validar_email($email)==false){    
    mensaje_error($lang, $_ENV['RUTA'],"email", "sintaxis", $nombre, $tel, $email, $mensaje);
}

// Comprobar si el nombre tiene entre 4 y 40 caracteres
$numeroCaracteres = strlen($nombre);
if($numeroCaracteres < 3 || $numeroCaracteres > 40){
    mensaje_error($lang, $_ENV['RUTA'],"nombre", "caracteres", $nombre, $tel, $email, $mensaje);
}
// Mensaje entre 5 y 200 caractéres.
$numeroCaracteres = strlen($mensaje);
if($numeroCaracteres < 5 || $numeroCaracteres > 200){
    mensaje_error($lang, $_ENV['RUTA'],"mensaje", "caracteres", $nombre, $tel, $email, $mensaje);
}




// Guardar la consulta en la base de datos
$con = mysqli_connect($_ENV['BBDD_HOST'], $_ENV['BBDD_USER'], $_ENV['BBDD_PASS'], $_ENV['BBDD_BBDD']);

if ($con === false) {
    error_log('Error de conexion con la BBDD (consultas_web): ' . mysqli_connect_error());
} else {
    $con->set_charset("utf8mb4");
    $sql = "INSERT INTO `consultas_web` (`creado_en`, `nombre`, `telefono`, `email`, `mensaje`, `ip`, `idioma`, `url_origen`) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($con, $sql);

    if ($stmt === false) {
        error_log('Error al preparar la insercion de consultas_web: ' . mysqli_error($con));
    } else {
        mysqli_stmt_bind_param($stmt, "ssssssss", $fecha, $nombre, $tel, $email, $mensaje, $ip, $lang, $url);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    }

    mysqli_close($con);
}


// 04 envío de correos
// enviar un correo al usuario que ha escrito
// Crear el template del correo y darle valor a las variables que necesita phpMailer

// recoger más variables que necesita el phpMailer:correo emisor y el nombre emisor,el correo receptor y su nombre, título del correo
$correoEmisor =$_ENV['EMAIL_WEB']; //debe ser un correo que esté dado de alta en el servidor (webda.eus)
$nombreEmisor ="Panadería Aginaga";
$correoDestinatario = $email;
$nombreDestinatario= $nombre;

switch ($lang){
    case 'es':
        $asunto = "Hemos recibido tu correo, $nombre - Panadería Aginaga";
        $cuerpo='
        <!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>'.$asunto.'</title>
        </head>
        <body align="center" style="padding: 1.5rem;background-color: rgb(255, 227, 227);">
            <h1>Hemos recibido tu correo, '.$nombre.'</h1>
            <p>Estos son los datos que hemos recibido en la web de <a href="https://profe.webda.eus/proyecto05/">profe.webda.eus/proyecto05</a> de tu consulta:</p>
            <table align="center">
                <tr>
                    <td align="left" style="background-color: white;padding: 0.5rem 1rem;border: 1px solid black">Nombre:</td>
                    <td align="left" style="background-color: white;padding: 0.5rem 1rem;border: 1px solid black">'.$nombre.'</td>
                </tr>
                <tr>
                    <td align="left" style="background-color: white;padding: 0.5rem 1rem;border: 1px solid black">Teléfono:</td>
                    <td align="left" style="background-color: white;padding: 0.5rem 1rem;border: 1px solid black">'.$tel.'</td>
                </tr>
                <tr>
                    <td align="left" style="background-color: white;padding: 0.5rem 1rem;border: 1px solid black">Correo Electrónico:</td>
                    <td align="left" style="background-color: white;padding: 0.5rem 1rem;border: 1px solid black">'.$email.'</td>
                </tr>
                <tr>
                    <td align="left" style="background-color: white;padding: 0.5rem 1rem;border: 1px solid black">Consulta:</td>
                    <td align="left" style="background-color: white;padding: 0.5rem 1rem;border: 1px solid black">'.$mensaje.'</td>
                </tr>
            </table>

            <p>Gracias por escribirnos.</p>
            <p>Equipo de Panadería Agianga</p>
            <a href="'.$_ENV['RUTA'].'/'.$lang.'">'.$_ENV['RUTA'].'/'.$lang.'</a>
            
        </body> 
        </html>
        ';
        break;
    case 'eu':
        $asunto = "Zure mezua jaso dugu, $nombre - Aginagako Okindegia";
        $cuerpo='
        <!DOCTYPE html>
        <html lang="eu">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>'.$asunto.'</title>
        </head>
        <body align="center" style="padding: 1.5rem;background-color: rgb(255, 227, 227);">
            <h1>Zure mezua jaso dugu, '.$nombre.'</h1>
            <p>Hona hemen webgunean jaso ditugun datuak zure kontsultari buruz:</p>
            <table align="center">
                <tr>
                    <td align="left" style="background-color: white;padding: 0.5rem 1rem;border: 1px solid black">Izena:</td>
                    <td align="left" style="background-color: white;padding: 0.5rem 1rem;border: 1px solid black">'.$nombre.'</td>
                </tr>
                <tr>
                    <td align="left" style="background-color: white;padding: 0.5rem 1rem;border: 1px solid black">Telefonoa:</td>
                    <td align="left" style="background-color: white;padding: 0.5rem 1rem;border: 1px solid black">'.$tel.'</td>
                </tr>
                <tr>
                    <td align="left" style="background-color: white;padding: 0.5rem 1rem;border: 1px solid black">Posta elektronikoa:</td>
                    <td align="left" style="background-color: white;padding: 0.5rem 1rem;border: 1px solid black">'.$email.'</td>
                </tr>
                <tr>
                    <td align="left" style="background-color: white;padding: 0.5rem 1rem;border: 1px solid black">Kontsulta:</td>
                    <td align="left" style="background-color: white;padding: 0.5rem 1rem;border: 1px solid black">'.$mensaje.'</td>
                </tr>
            </table>

            <p>Eskerrik asko idazteagatik.</p>
            <p>Aginagako Okindegi taldea</p>
            <a href="'.$_ENV['RUTA'].'/'.$lang.'">'.$_ENV['RUTA'].'/'.$lang.'</a>

        </body>
        </html>
        ';
        break;
    default:
        
        break;
}

include __DIR__ . "/envioPhpMailer.php"; //necesite ejecutar el envío de correo.



// enviar un correo al admin de la web
// recoger más variables que necesita el phpMailer:correo emisor y el nombre emisor,el correo receptor y su nombre, título del correo
$correoEmisor =$_ENV['EMAIL_WEB'];
$nombreEmisor ="Web Panadería";
$correoDestinatario = $_ENV['EMAIL_ADMIN'];
$nombreDestinatario= "Admin de la web";
$asunto = "Has recibido una nueva consulta en la web de $nombre";
$cuerpo='
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>'.$asunto.'</title>
</head>
<body align="center" style="padding: 1.5rem;background-color: rgb(255, 227, 227);">
    <h1>Has recibido un nuevo mensaje de '.$nombre.'</h1>
    <p>Estos son los datos que hemos recibido en la web de <a href="https://profe.webda.eus/proyecto05/">profe.webda.eus/proyecto05</a> de la consulta del usuario:</p>
    <table align="center">
        <tr>
            <td align="left" style="background-color: white;padding: 0.5rem 1rem;border: 1px solid black">Nombre:</td>
            <td align="left" style="background-color: white;padding: 0.5rem 1rem;border: 1px solid black">'.$nombre.'</td>
        </tr>
        <tr>
            <td align="left" style="background-color: white;padding: 0.5rem 1rem;border: 1px solid black">Teléfono:</td>
            <td align="left" style="background-color: white;padding: 0.5rem 1rem;border: 1px solid black">'.$tel.'</td>
        </tr>
        <tr>
            <td align="left" style="background-color: white;padding: 0.5rem 1rem;border: 1px solid black">Correo Electrónico:</td>
            <td align="left" style="background-color: white;padding: 0.5rem 1rem;border: 1px solid black">'.$email.'</td>
        </tr>
        <tr>
            <td align="left" style="background-color: white;padding: 0.5rem 1rem;border: 1px solid black">Consulta:</td>
            <td align="left" style="background-color: white;padding: 0.5rem 1rem;border: 1px solid black">'.$mensaje.'</td>
        </tr>
        <tr>
            <td align="left" style="background-color: white;padding: 0.5rem 1rem;border: 1px solid black">Url desde la que ha escrito el form:</td>
            <td align="left" style="background-color: white;padding: 0.5rem 1rem;border: 1px solid black">'.$url.'</td>
        </tr>
        <tr>
            <td align="left" style="background-color: white;padding: 0.5rem 1rem;border: 1px solid black">Idioma usado por el cliente</td>
            <td align="left" style="background-color: white;padding: 0.5rem 1rem;border: 1px solid black">'.$lang.'</td>
        </tr>
    </table>

    <p>Un saludo</p>
    <p>Equipo de Panadería Agianga</p>
    <a href="'.$_ENV['RUTA'].'">'.$_ENV['RUTA'].'</a>

</body> 
</html>
';
include __DIR__ . "/envioPhpMailer.php";



// 05 Redirección a la página de gracias.php


switch ($lang){
    case 'es':
        header('location:'.$_ENV["RUTA"].'/es/gracias?nombre='.$nombre);
        die;
    case 'eu':
        header('location:'.$_ENV["RUTA"].'/eu/eskerrikasko?nombre='.$nombre);
        die;
    default:
        header('location:'.$_ENV["RUTA"].'/es/gracias?nombre='.$nombre);
        die;
}




?>
