<?php
if (!isset($_COOKIE["visitCounter"])) {
    setcookie("visitCounter", "2",strtotime( '+1 year' ),"/");
} else {
    setcookie("visitCounter", $_COOKIE["visitCounter"] + 1,strtotime( '+1 year' ),"/");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if (!isset($_COOKIE["visitCounter"])) {
    echo '<h1>Has visitado esta página 1 vez.</h1>';
} else {
    echo '<h1>Has visitado esta página '.$_COOKIE["visitCounter"].' veces</h1>';
}
?>
</body>
</html>
