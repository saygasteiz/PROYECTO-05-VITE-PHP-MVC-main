<?php

$basePath = dirname(__DIR__);
$appRoot = $basePath . '/App';

// zona de variables de entorno
require_once $basePath . '/vendor/autoload.php';
use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable($basePath);
$dotenv->load();

require_once $appRoot . "/config/helpers.php";


// FASE 1 - CONFIGURAMOS LOS IDIOMAS Y RUTAS PERMITIDAS, Y MOD DE DESARROLLO DEL SERVIDOR
// A CADA RUTA PERMITIDA LE ASIGNAMOS LA UBICACIÓN DEL ARCHIVO QUE TIENE SU CONTENIDO
require_once $appRoot . "/config/config.php";



// FASE 2 - COMO TODAS LAS PETICIONES LLEGAN AL INDEX.PHP (POR ACCIÓN DEL HTACCESS), AQUÍ ANALIZAMOS LA URL POR LA QUE VIENE PARA VER SI ES VÁLIDA O NO Y EN CASO DE SER VÁLIDA, CARGARLE LA VISTA (VIEW) ASIGNADA A ESA URL EN EL ARRAY.
// EN ESTA FASE 2 ANALIZAMOS LA URL POR LA QUE EL USUARIO VIENE, Y EXTRAEMOS EL LENGUAJE EN $lang Y LA RUTA AMIGABLE EN $url, SIENDO ESTAS DOS VARIABLES NECESARIAS PARA LA FASE 3



//Obtenemos la url entera desde la raiz
// Ejemplo: "/es/contacto?id=10"
// Nullish coalescing operator (??)
$request = urldecode($_SERVER["REQUEST_URI"]) ?? '/'.$_ENV['LANG_DEFAULT']; 



// Extraemos únicamente el path para ignorar los parámetros de consulta
// ejemplo: "/es/contacto"
$url = parse_url($request, PHP_URL_PATH) ?? '/'.$_ENV['LANG_DEFAULT'];

// Ajustamos si la app está instalada en una subcarpeta (ej: /public).
$basePath = base_path();
if ($basePath !== '' && str_starts_with($url, $basePath . '/')) {
    $url = substr($url, strlen($basePath));
}

$method = $_SERVER['REQUEST_METHOD'] ?? 'GET';

// Rutas POST para formularios
if ($method === 'POST') {
    if (isset($arrayRutasPost[$url])) {
        $view = $arrayRutasPost[$url]['view'];
        require_once $appRoot . $view;
        exit;
    }

    http_response_code(404);
    exit;
}





// Compruebo que $url no sea un "/", sino que sea otras url como "/es/contacto"
if ($url != "/") {
    // quito la "/" del final en caso de que la tenga
    // Ejemplo: Si $url es "/es/contacto/" me quita "/" del final, es decir, me deja $url en "/es/contacto"
    $url = rtrim($url, "/");
    // De $url me divide y extrae todos los valores teniendo la "/" como divisor.
    // Ejemplo: en $urlParse tengo un array con estos valores ["", "es", "contacto"] ya que $url es "/es/contacto"
    // Ejemplo de explode a una $url que es "/es/productos/taza/amarilla" ["", "es", "productos", "taza", "amarilla"]
    // Ejemplo si fuese $url "/es", entonces el array sería ["", "es"]
    $urlParse = explode("/", $url);
    // Metemos dentro de $lang, el valor del array enb la posición 1, que es donde está el idioma. El arrat cuenta sus items empezando desde el 0, por lo tanto en el array ["", "es", "contacto"], la posición 1 es "es"

    // Para un caso en producción o desarrollo donde el stack no esté dentro de una carpeta adicional, usamos esto:
    $lang = $urlParse[1];
    
    // Obtener $lang me sirve para determinar en qué carpeta tengo que buscar $view, que es la vista del contenido que se cargará.
} else {
    // Si la ruta termina viene vacía como "/", redirigimos a la ruta principal con el idioma principal para que venga como "/es"
    header("HTTP/1.1 301 Moved Permanently");
    $idioma = $_ENV['LANG_DEFAULT'];
    header("Location: /$idioma");
    exit;
}



// Una barrera para contener que si el usuario ha metido a mano o la url viene con un $lang que no se contempla en el array, le redirijamos a la página de inicio, pero con el idioma que queramos por defecto,
// if (!in_array($lang, $langs)) {
//     header("HTTP/1.1 301 Moved Permanently");
//     $idioma = $_ENV['LANG_DEFAULT'];
//     header("Location: /$idioma");
//     exit;
// }

// FASE 3 - UNA VEZ TENEMOS LA $URL DEL USUARIO, Y TENEMOS EL IDIOMA DE LA URL EN $LANG, COMPROBAMOS SI EXISTE ESA URL EN ESE IDIOMA CONSULTANDO EL ARRAY DE URL
if (isset($arrayRutasGet[$lang][$url])) {


    // Si la url existe dentro del array de url's, entonces cogemos el valor de view, que es el archivo que haremos include para cargar el contenido pertienente de esta url.
    $view = $arrayRutasGet[$lang][$url]['view']; 
     
    
    //----VISTA----------
    require_once $appRoot . $view;

    /* 
    AQUÍ SE CARGARÁ TODO EL HTML DE LA VISTA QUE CORRESPONDA A TRAVÉS DEL INCLUDE (REQUIRE_ONCE)
    */
    
} else {

    // En caso de que $url no exista dentro del array de url permitidas, cargamos el contenido de la 404
    //----VISTA----------

    if (!in_array($lang, $langs)) {
        $lang = $_ENV['LANG_DEFAULT'];
    }
    http_response_code(404);
    require_once $appRoot . "/views/$lang/404.php";

    /* 
    AQUÍ SE CARGARÁ TODO EL HTML DEL 404
    */
}
