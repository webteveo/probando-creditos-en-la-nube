<?php
// Router para el servidor embebido de PHP: replica las reglas de .htaccess.
// Lo usa build.php para generar la copia de GitHub Pages; el proyecto no se modifica.
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$root = dirname(__DIR__, 2);
chdir($root);

if (preg_match('#^/(config|src|data|vendor|scripts|tests)(/|$)#', $path)) {
    http_response_code(403);
    exit('Prohibido');
}
if ($path === '/sitemap.xml') { require $root . '/sitemap.php'; exit; }
if ($path === '/llms.txt') { require $root . '/llms.php'; exit; }
if ($path !== '/' && is_file($root . $path)) {
    return false; // archivo estático
}

$_SERVER['HTTP_HOST'] = getenv('SITE_HOST');
$_SERVER['HTTPS'] = 'on';
$_SERVER['SCRIPT_NAME'] = rtrim((string) getenv('SITE_BASE'), '/') . '/index.php';
$_GET['url'] = ltrim($path, '/');
require $root . '/index.php';
