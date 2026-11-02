<?php
require_once __DIR__ . '/db.php';

function createUser(string $name, string $surname, string $email, string $password): bool {
    $stmt = getPDO()->prepare(
        'INSERT INTO users (name, surname, email, password_hash) VALUES (?, ?, ?, ?)'
    );
    return $stmt->execute([
        $name,
        $surname,
        $email,
        password_hash($password, PASSWORD_DEFAULT),
    ]);
}

function getUsers(): array
{
    $stmt = getPDO()->query('SELECT * FROM users');
    return $stmt->fetchAll();
}