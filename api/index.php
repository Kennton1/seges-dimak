<?php
// Preparar entorno serverless para Vercel
if (!file_exists("/tmp/views")) {
    @mkdir("/tmp/views", 0777, true);
}
if (!file_exists("/tmp/database.sqlite") && file_exists(__DIR__ . "/../database/database.sqlite")) {
    @copy(__DIR__ . "/../database/database.sqlite", "/tmp/database.sqlite");
}

require __DIR__ . "/../public/index.php";
