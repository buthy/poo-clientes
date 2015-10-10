<?php

ini_set('error_reporting', E_ALL);
ini_set('default_charset', 'UTF-8');

function url(){
    return sprintf(
        "%s://%s%s",
        isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
        $_SERVER['SERVER_NAME'],
        $_SERVER['REQUEST_URI']
    );
}

define('BASE_URL', url());
define('PUBLIC_HTML', __DIR__ . DIRECTORY_SEPARATOR);
define('SRC_DIR', __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR);
define('VENDOR_NAME', 'app');
define('VENDOR_DIR', SRC_DIR . VENDOR_NAME . DIRECTORY_SEPARATOR);
define('AUTOLOAD_FILE', SRC_DIR . 'autoload.php');

if (preg_match('/\.(?:png|jpg|jpeg|gif|css|js)$/', $_SERVER["REQUEST_URI"])) {
    return false;
} else {
    
    require_once AUTOLOAD_FILE;

    $pagina = 'home.php';
    $arquivo =  PUBLIC_HTML . $pagina;

    if(file_exists($arquivo)) {
        include $arquivo;
    } else {
        http_response_code(404);
        echo '<h1>Erro 404<br></nt><small>Página não encontrada!</small><h1>';
    }

}
