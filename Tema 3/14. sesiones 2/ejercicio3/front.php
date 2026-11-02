<?php
use ejercicio3\Zona;

include_once 'Zona.php';   // before session_start()
session_start();

// Create the zones only once per session
if (!isset($_SESSION['zonas'])) {
    $_SESSION['zonas'] = [
            'main'   => new Zona(1000, 'principal'),
            'market' => new Zona(200, 'compra-venta'),
            'vip'    => new Zona(25, 'vip'),
    ];
}
$zonas = $_SESSION['zonas'];

$mensaje = '';
$amount = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $selected = $_POST['zone'] ?? '';
    $amount = trim($_POST['amount'] ?? '');
    $quantity = filter_var($amount, FILTER_VALIDATE_INT);

    if (!isset($zonas[$selected])) {
        $mensaje = 'Seleccione una zona.';
    } elseif ($quantity === false || $quantity <= 0) {
        $mensaje = 'Introduzca una cantidad válida.';
    } elseif (!$zonas[$selected]->buyTicket($quantity)) {
        $mensaje = 'No quedan suficientes entradas en esa zona.';
    } else {
        $mensaje = "Has reservado $quantity entrada(s).";
        $amount = '';
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expocoches Politécnico</title>
</head>
<body>
<h1>Expocoches Politécnico</h1>
<p>Quedan <?= $zonas['main']->getTicketsLeft() ?> entradas en la zona principal,
    <?= $zonas['market']->getTicketsLeft() ?> en la de compra venta,
    y <?= $zonas['vip']->getTicketsLeft() ?> en la VIP</p>

<?php if ($mensaje): ?>
    <p><strong><?= htmlspecialchars($mensaje) ?></strong></p>
<?php endif; ?>

<h2>Comprar entradas:</h2>
<form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
    <p>Seleccione la sala en la que reservar entradas:</p>
    <label>Principal: <input type="radio" name="zone" value="main"></label>
    <label>Compra venta: <input type="radio" name="zone" value="market"></label>
    <label>VIP: <input type="radio" name="zone" value="vip"></label>
    <br>
    <label>Introduzca la cantidad a reservar:
        <input type="text" name="amount" value="<?= htmlspecialchars($amount) ?>">
    </label>
    <br>
    <button type="submit">Reservar</button>
</form>
</body>
</html>