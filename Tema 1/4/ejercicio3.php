<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $monthlyWatchedMovies=array("Enero"=>9,"Febrero"=>12,"Marzo"=>0,"Abril"=>17);
    foreach ($monthlyWatchedMovies as $month => $movieCount) {
        if ($movieCount != 0) echo '<p>',$month,' = ',$movieCount;
    }
?>

</body>
</html>