<?php
// Preparar entorno serverless para Vercel
if (!file_exists("/tmp/views")) {
    @mkdir("/tmp/views", 0777, true);
}
if (!file_exists("/tmp/database.sqlite") && file_exists(__DIR__ . "/../database/database.sqlite")) {
    @copy(__DIR__ . "/../database/database.sqlite", "/tmp/database.sqlite");
}

if ((isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') || (isset($_SERVER['HTTP_HOST']) && strpos($_SERVER['HTTP_HOST'], 'vercel.app') !== false)) {
    $_SERVER['HTTPS'] = 'on';
    $_SERVER['SERVER_PORT'] = 443;
}

require __DIR__ . "/../public/index.php";
