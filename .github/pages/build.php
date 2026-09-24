<?php
/**
 * Genera la copia estática del sitio para GitHub Pages en _site/.
 * Corre el PHP del proyecto tal cual con el servidor embebido, recorre el sitemap
 * y todos los links internos, y guarda cada página como carpeta/index.html.
 *
 * Uso: php .github/pages/build.php https://webteveo.github.io/probando-creditos-en-la-nube
 */

$publico = rtrim($argv[1] ?? '', '/');
if (!preg_match('#^https://([^/]+)(/.*)?$#', $publico, $m)) {
    fwrite(STDERR, "Uso: php .github/pages/build.php https://host/base\n");
    exit(1);
}
$root = dirname(__DIR__, 2);
$out = "$root/_site";
$local = 'http://127.0.0.1:8765';

$servidor = proc_open(
    [PHP_BINARY, '-S', '127.0.0.1:8765', '.github/pages/router.php'],
    [0 => ['pipe', 'r'], 1 => ['file', '/dev/null', 'w'], 2 => ['file', '/dev/null', 'w']],
    $pipes,
    $root,
    array_merge(getenv(), ['SITE_HOST' => $m[1], 'SITE_BASE' => $m[2] ?? ''])
);
register_shutdown_function(fn() => proc_terminate($servidor));
for ($i = 0; $i < 50 && !@file_get_contents("$local/robots.txt"); $i++) usleep(100000);

function pedir(string $url): array
{
    $ctx = stream_context_create(['http' => ['ignore_errors' => true, 'follow_location' => 0]]);
    $cuerpo = @file_get_contents($url, false, $ctx);
    preg_match('#HTTP/\S+ (\d+)#', $http_response_header[0] ?? '', $c);
    return [(int) ($c[1] ?? 0), $cuerpo === false ? '' : $cuerpo];
}

exec('rm -rf ' . escapeshellarg($out));
mkdir($out, 0777, true);
exec('cp -r ' . escapeshellarg("$root/public") . ' ' . escapeshellarg("$out/public"));
copy("$root/robots.txt", "$out/robots.txt");
copy("$root/public/images/logo/favicon.ico", "$out/favicon.ico");
copy(__DIR__ . '/forms.js', "$out/public/js/forms-estatico.js");
touch("$out/.nojekyll");

preg_match("#define\('CONTACTO_WHATSAPP', '(\d*)'\)#", file_get_contents("$root/config/variables.php"), $w);
$script = sprintf(
    "<script>window.SITIO_ESTATICO_WHATSAPP = %s;</script>\n<script src=\"%s/public/js/forms-estatico.js\" defer></script>\n",
    json_encode($w[1] ?? ''),
    $publico
);
$procesar = fn(string $html) => str_replace(
    ['"enabled":true', '</body>'],          // métricas apagadas: no hay servidor que las reciba
    ['"enabled":false', $script . '</body>'],
    $html
);

$cola = ['', 'sitemap.xml', 'llms.txt', 'resena', 'resena/dejar-resena', 'resena/gracias', 'resena/privacidad', 'contacto/gracias'];
[, $sitemap] = pedir("$local/sitemap.xml");
preg_match_all('#<loc>https?://[^/<]+/?([^<]*)</loc>#', $sitemap, $locs);
$cola = array_merge($cola, $locs[1]);

$vistas = [];
$errores = [];
$patron = '#(?:href|src|action)="' . preg_quote($publico, '#') . '/([^"\#?]*)#';

while ($cola) {
    $ruta = trim(array_shift($cola), '/');
    // public/ y favicon.ico ya se copiaron; otros archivos con extensión no son páginas
    if (isset($vistas[$ruta]) || str_starts_with($ruta, 'public/') || preg_match('#\.(?!xml$|txt$)\w+$#', $ruta)) continue;
    $vistas[$ruta] = true;

    [$codigo, $cuerpo] = pedir("$local/$ruta");
    if ($codigo !== 200) {
        // contacto/enviar y resena/enviar son solo POST: en Pages los reemplaza forms.js
        if (!preg_match('#^(contacto|resena)/enviar$#', $ruta)) $errores[] = "$codigo /$ruta";
        continue;
    }
    if (preg_match('#<b>(Fatal error|Warning|Notice|Deprecated)</b>#', $cuerpo, $e)) {
        $errores[] = "PHP {$e[1]} en /$ruta";
    }

    if (preg_match('#\.(xml|txt)$#', $ruta)) {
        $archivo = "$out/$ruta";
    } else {
        $cuerpo = $procesar($cuerpo);
        preg_match_all($patron, $cuerpo, $links);
        foreach ($links[1] as $link) $cola[] = $link;
        $archivo = $ruta === '' ? "$out/index.html" : "$out/$ruta/index.html";
    }
    @mkdir(dirname($archivo), 0777, true);
    file_put_contents($archivo, $cuerpo);
}

[, $cuerpo404] = pedir("$local/pagina-que-no-existe");
file_put_contents("$out/404.html", $procesar($cuerpo404));

echo 'Páginas generadas: ' . (count($vistas) - count($errores)) . "\n";
if ($errores) {
    fwrite(STDERR, "Errores:\n  " . implode("\n  ", $errores) . "\n");
    exit(1);
}
