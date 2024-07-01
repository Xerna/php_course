<?php

function conectar()
{
    $dsn = "mysql:localhost=localhost;dbname=php_course";
    $username = "xernaroot";
    $pw = "5QLX3rn@0331UbUn7u";
    try {
        $conn = new PDO($dsn, $username, $pw);
        $conn->setAttribute(Pdo::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        echo "Error al conectarse " . $e->getMessage();
        exit;
    }
}
