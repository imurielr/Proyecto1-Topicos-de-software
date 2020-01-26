<?php

    require_once('db_connection.php');

    if (isset($_POST['nombre']) && $_POST['nombre'] != '') {
        $nombre = $conn->real_escape_string($_POST['nombre']);

        $sql = "INSERT INTO Datos (nombre) VALUES ('".$nombre."')";

        if (!$result = $conn->query($sql)) {
            echo 'Ocurrió un error ejecutanto el query [' . $conn->error . ']';
        }
        else {
            echo "Los datos han sido agregados exitosamente";
        }
    }
    else {
        echo "Porfavor ingrese el nombre";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Respuesta</title>
</head>
<body>
    <form>
        <input type="button" value="Atrás" onclick="history.back()">
    </form>
</body>
</html>