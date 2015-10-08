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
define('SRC_DIR', __DIR__ . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR);
define('VENDOR_NAME', 'app');
define('VENDOR_DIR', SRC_DIR . VENDOR_NAME . DIRECTORY_SEPARATOR);

define('CLASS_DIR', 'src/');
set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
spl_autoload_register(function($name) {

    if (is_readable(strtolower($name).'.php')) {
        require_once(strtolower($name).'.php');
    } 
    elseif (is_readable(ucfirst($name).'.php')) {
        require_once(ucfirst($name).'.php');
    }
});

if (preg_match('/\.(?:png|jpg|jpeg|gif|css|js)$/', $_SERVER["REQUEST_URI"])) {
    return false;
} else {

    $pagina = 'home.php';
    $arquivo =  PUBLIC_HTML . $pagina;

    if(file_exists($arquivo)) {
        include $arquivo;
    } else {
        http_response_code(404);
        echo '<h1>Erro 404<br></nt><small>Página não encontrada!</small><h1>';
    }

}
