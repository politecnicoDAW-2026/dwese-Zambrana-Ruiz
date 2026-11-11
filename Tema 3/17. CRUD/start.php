<?php
require_once 'app/Controllers/clientController.php';

$controller = new ClientController();

switch ($_GET['action'] ?? 'list') {
    case 'list':
        $controller->listAction();
        break;
    case 'insert':
        $controller->createAction();
        break;
    case 'view': //TODO: remove in case that it's useless
        $id = $_GET['dni'] ?? null;
        $controller->viewAction($id);
        break;
    case 'remove':
        $id = $_GET['dni'] ?? null;
        $controller->removeAction($id);
        break;
    default:
        echo "Página no encontrada. <br><br>";
        ?>
            <a href="../../disabled.index.php">
                <button>Volver</button>
            </a>
        <?php
        break;
}