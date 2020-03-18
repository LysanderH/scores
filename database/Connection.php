<?php
/* Connect to an ODBC database using driver invocation */
$dsn = 'mysql:host=localhost;dbname=scores';
$user = 'root';
$password = '';

try {
    $pdo = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}