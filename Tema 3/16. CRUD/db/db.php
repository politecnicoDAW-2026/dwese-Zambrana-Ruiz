<?php
function getPDO(): PDO {
    static $pdo = null; // reuse the same connection within a request

    if ($pdo === null) {
        $pdo = new PDO(
            "mysql:host=localhost;dbname=db_foro;charset=utf8mb4",
            "nyae",
            "1234",
            [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            ]
        );
    }
    return $pdo;
}