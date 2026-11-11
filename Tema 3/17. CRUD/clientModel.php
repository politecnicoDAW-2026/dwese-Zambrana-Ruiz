<?php
require_once __DIR__ . '/../../config/database.php';

class ClientModel {
    private $pdo;

    public function __construct()
    {
        $this->pdo = Database::connect();
    }

    public function getUsers():array
    {
        $statement = $this->pdo->prepare("
                select dni, cus.name username, address, phone, c.name city, c.country
	                from customer cus left join city c on cus.city=c.id;
            ");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insertUser()
    {
        echo ('<pre>' . var_dump($_POST) . '</pre>');
    }

    public function removeUser($id): void
    {
        $statement = $this->pdo->prepare("DELETE FROM bank.customer WHERE dni=" . $id);
        $statement->execute();
    }
}