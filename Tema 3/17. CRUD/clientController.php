<?php
require_once __DIR__ . '/../Models/clientModel.php';


function checkNames($string): string {
    if (preg_match("/^[a-zA-Z-' ]*$/",$string)) return $string;
    return "";
}

function testInput($string): string {
    global $isFormFieldValidated;
    if (empty($string)) { return ""; }
    $string = trim($string);
    $string = stripslashes($string);
    $string = htmlspecialchars($string);
    return $string;
}


class ClientController {

    public function listAction(): void
    {
        $model = new ClientModel();
        $dataBaseOutput = $model->getUsers();
        require_once __DIR__ . '/../Views/clientList.php';
    }

    public function createAction(): void
    {
        if ($_SERVER["REQUEST_METHOD"] == 'POST') {
            var_dump($_POST);
            $dni = checkNames( testInput($_POST['dni']) );
            $name = checkNames( testInput($_POST['name']) );
            $address = testInput($_POST['address']);
            $phone = testInput($_POST['phone']);
            $city = testInput($_POST['city']);
            $country = testInput($_POST['country']);

            if (!empty($dni) && !empty($name) && !empty($address) && !empty($phone) && !empty($city) && !empty($country)) {
                echo "INSERT";
                $model = new ClientModel();
                $model->insertUser($dni, $name, $address, $phone, $city, $country);
                //require_once __DIR__  . '/../../public/disabled.index.php';
                echo "INSERT";
            }

        } else {
            require __DIR__ . '/../Views/clientInsert.php';
        }
    }

    public function removeAction($id): void
    {
        $model = new ClientModel();
        $model->removeUser($id);
        header("Location: disabled.index.php");//Note: parameters don't work with require, use header instead
        //require_once __DIR__  . '/../../public/disabled.index.php';
    }
}