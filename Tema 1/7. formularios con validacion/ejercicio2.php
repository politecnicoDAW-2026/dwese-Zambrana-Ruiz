<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php if (!isset($_POST['title'])) { ?>
    <h1>Introduzca sus datos</h1>
    <form action="/tema%202/formularios%20+%20validaciones/ejercicio2.php" method="post" enctype="multipart/form-data">
        <label>Titulo:
            <input type="text" required value="<?php echo isset($_POST['title']) ? $_POST['title'] : '' ?>" name="title" id="title">
        </label><br>
        <label>Actores:
            <input type="text" required value="<?php echo isset($_POST['cast']) ? $_POST['cast'] : '' ?>"  name="cast" id="cast">
        </label><br>
        <label>Director:
            <input type="text" required name="director" id="director">
        </label><br>
        <label>Guión:
            <input type="text" required name="script" id="script">
        </label><br>
        <label>Guión:
            <input type="text" name="script" id="script">
        </label><br>
        <label>Produccion:
            <input type="text" name="production" id="production">
        </label><br>
        <label>Dirección Web de la distribuidora de la película en España:
            <input type="text" pattern=".*\.*\.*" required name="website" id="website">
        </label><br>
        <label>Email de contacto con la distribuidora:
            <input type="email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" required name="website" id="website">
        </label><br>
        <label>Año:
            <input type="text" name="year" id="year">
        </label><br>
        <label>Nacionalidad:
            <input type="text" name="nationality" id="nationality">
        </label><br>
        <label>Género:
            <select>
                <option value="male">Masculino</option>
                <option value="female">Femenino</option>
            </select>
        </label><br>
        <label>Duracion:
            <input type="text" name="duration" id="duration">
        </label><br>
        <p>Restricciones de edad:</p>
        <label>Todos los públicos.
            <input type="radio" name="age" id="age" value="nonRated">
        </label><br>
        <label>Mayores de 7 años.
            <input type="radio" name="age" id="age" value="overSeven">
        </label><br>
        <label>Mayores de 18 años.
            <input type="radio" name="age" id="age" value="overEighteen">
        </label><br>
        <label>Sinopsis:
            <textarea name="description" id="description" style="width: 20%;height: 20%"> </textarea>
        </label><br>
        <label>Carátula:
            <input type="file" name="cover" id="cover" multiple="multiple">
        </label><br>
        <input type="submit" value="send">
    </form>
<?php } else {
    echo '<a href="ejercicio2.php">volver</a>';
    echo '<pre>';
    var_dump($_POST);
    echo '<br>';
    echo '<br>';
    var_dump($_FILES);
    echo '</pre>';
    echo '<br>';
    echo '<br>';
    $target_dir = "/var/www/html/uploads/";
    $target_file = $target_dir . basename($_FILES["cover"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $fileName = $_FILES['cover']['name'];
    $temporales = $_FILES['cover']['tmp_name'];
    $fileType = $_FILES['cover']['type'];
    if (move_uploaded_file($_FILES["cover"]["tmp_name"], $target_file)) {
        echo "Se ha subido $fileName correctamente <br>";
        echo 'Nombre: ',$_FILES['cover']['name'],'<br>';
        echo 'Tamaño: ',$_FILES['cover']['size'],'<br>';
        echo 'Fichero temporal: ',$_FILES['cover']['tmp_name'],'<br>';
        echo 'Tipo: ',$_FILES['cover']['type'],'<br>';
        echo 'Error: ',$_FILES['cover']['error'],'<br>';
        echo '<img src="../../uploads/', $fileName, '"></img>';

        echo 'Título: '.$_POST['title'].'<br>';
        echo 'Casting: '.$_POST['cast'].'<br>';
        echo 'Director: '.$_POST['director'].'<br>';
        echo 'Guión: '.$_POST['script'].'<br>';
        echo 'Nacionalidad: '.$_POST['nationality'].'<br>';
        echo 'Duración: '.$_POST['duration'].'<br>';
        echo 'Descripción: '.$_POST['description'].'<br>';
    } else {
        echo "Ha habido algún error al subir algún archivo<br>";
        echo '<a href="ejercicio2.php">volver</a>';
    }
}
?>
</body>
</html>