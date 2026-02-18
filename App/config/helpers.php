<?php

//comienzo de sesión, tenemos que ejecutarlo antes de crear y usar las variables de sesión.
session_start();

// Función para validar si un correo tiene la forma o estructura de un correo adecuada
// La función devuelve true si es correcto, o false si no coincide con la expresión regular con la que se compara.
function validar_email($valorRecibido) {    
    $regex = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';

    return preg_match($regex, $valorRecibido);
    // Me devolverá false si hay error
    // Me devolverá true si NO hay error (si coincide la estructura )
}

// Función que se ejecuta cuando localizamos un error en el backend del formulario por no cumplimentar algún campo de forma correcta.
// La función obtiene todos los valores de los campos del formulario a través de los parámetros de entrada, y se encarga de redirigir a la página de contacto con los errores y los campos como query-param en la url.
function mensaje_error($lang, $ruta, $parametro01, $parametro02, $parametro03, $parametro04, $parametro05, $parametro06){    

    switch ($lang){
        case 'es':
            header("location:$ruta/es/contacto?campo=$parametro01&error=$parametro02&nombre=$parametro03&tel=$parametro04&email=$parametro05&mensaje=$parametro06");
            die;
        case 'eu':
            header("location:$ruta/eu/kontaktua?campo=$parametro01&error=$parametro02&nombre=$parametro03&tel=$parametro04&email=$parametro05&mensaje=$parametro06");
            die;
        default:
            header("location:$ruta/es/contacto?campo=$parametro01&error=$parametro02&nombre=$parametro03&tel=$parametro04&email=$parametro05&mensaje=$parametro06");
            die;
    }
    
}

function mensaje_error_login($ruta, $lang){
    switch ($lang){
        case 'es':
            header("location:$ruta/es/zona-admin?error=1");
            die;
        case 'eu':
            header("location:$ruta/eu/admin-gunea?error=1");
            die;
        default:
            header("location:$ruta/es/zona-admin?error=1");
            die;
    }
}

function mensaje_error_logup($ruta, $error, $lang){
    switch ($lang){
        case 'es':
            header("location:$ruta/es/registro?error=$error");
            die;
        case 'eu':
            header("location:$ruta/eu/erregistroa?error=$error");
            die;
        default:
            header("location:$ruta/es/registro?error=$error");
            die;
    }
}

// FUNCIÓN NATIVA PHP PARA CONSEGUIR EL AÑO, se usa en el footer
$anio=date('Y');


// MOSTRASR O NO ERRORES PHP, EN PRODUCCIÓN ESTO DEBERÍA ESTAR COMO 0, UNA VEZ SEPAMOS QUE TODO ESTÁ OK
ini_set('display_errors', $_ENV['DISPLAY_ERRORS']);

// Carga el manifest de Vite en producción para conocer los nombres finales
// de los archivos generados (hash en el nombre).
function vite_manifest() {
    static $manifest = null;
    if ($manifest !== null) {
        return $manifest;
    }

    // Ruta al manifest generado por "vite build".
    $manifestPath = __DIR__ . '/../../public/assets/.vite/manifest.json';
    if (!file_exists($manifestPath)) {
        $manifest = [];
        return $manifest;
    }

    // Leemos y parseamos el JSON del manifest.
    $contents = file_get_contents($manifestPath);
    $manifest = json_decode($contents, true) ?? [];

    return $manifest;
}

// Comprobamos si el servidor de Vite está activo en desarrollo.
// Esto nos permite decidir si servimos assets de dev o de build.
function vite_is_dev_server_running($devServerUrl) {
    static $isRunning = null;
    if ($isRunning !== null) {
        return $isRunning;
    }

    // Extraemos host/puerto del URL para intentar abrir un socket.
    $parsedUrl = parse_url($devServerUrl);
    if (!$parsedUrl || !isset($parsedUrl['host'])) {
        $isRunning = false;
        return $isRunning;
    }

    $host = $parsedUrl['host'];
    $port = $parsedUrl['port'] ?? 5173;

    $connection = @fsockopen($host, $port, $errno, $errstr, 0.3);
    if ($connection) {
        fclose($connection);
        $isRunning = true;
        return $isRunning;
    }

    $isRunning = false;
    return $isRunning;
}

// Genera las etiquetas <script> y <link> necesarias para una entrada de Vite.
// En dev, cargamos el JS desde el dev server (que también inyecta el CSS).
// En build, usamos el manifest para enlazar JS y CSS ya compilados.
function vite_tags($entry) {
    $entries = is_array($entry) ? $entry : [$entry];
    $devServer = $_ENV['VITE_DEV_SERVER'] ?? 'http://localhost:5173';
    $useDevServer = vite_is_dev_server_running($devServer);

    $tags = '';
    $shouldInjectClient = $useDevServer;
    static $clientInjected = false;

    foreach ($entries as $currentEntry) {
        if ($useDevServer) {
            if ($shouldInjectClient && !$clientInjected) {
                $tags .= '<script type="module" src="' . $devServer . '/@vite/client"></script>' . PHP_EOL;
                $clientInjected = true;
            }
            $tags .= '<script type="module" src="' . $devServer . '/' . $currentEntry . '"></script>' . PHP_EOL;
            continue;
        }

        $manifest = vite_manifest();
        if (!isset($manifest[$currentEntry])) {
            continue;
        }

        $asset = $manifest[$currentEntry];
        $file = $asset['file'] ?? '';
        $baseUrl = rtrim($_ENV['RUTA'], '/');

        if ($file !== '') {
            if (str_ends_with($file, '.css')) {
                $tags .= '<link rel="stylesheet" href="' . $baseUrl . '/assets/' . $file . '">' . PHP_EOL;
            } else {
                $tags .= '<script type="module" src="' . $baseUrl . '/assets/' . $file . '"></script>' . PHP_EOL;
            }
        }

        foreach ($asset['css'] ?? [] as $cssFile) {
            $tags .= '<link rel="stylesheet" href="' . $baseUrl . '/assets/' . $cssFile . '">' . PHP_EOL;
        }
    }

    return $tags;
}

// Devuelve el path base de la aplicación (sin dominio) para instalaciones en subcarpetas.
function base_path() {
    $scriptName = $_SERVER['SCRIPT_NAME'] ?? '';
    $base = str_replace('\\', '/', dirname($scriptName));
    $base = rtrim($base, '/');

    if ($base === '/' || $base === '.') {
        return '';
    }

    return $base;
}
