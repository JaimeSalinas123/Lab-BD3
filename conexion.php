<?php
$db = new SQLite3('C:/Users/50369/Desktop/LABORATORIO/sql-murder-mystery.db');
if (!$db) {
    die("Error al conectar a la base de datos");
}
?>
<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['NOMBRE'];
    $funcion = $_POST['FUNCION'];

    $query = "INSERT INTO usuarios (nombre, funcion) VALUES ('$nombre', '$funcion')";
    $result = $db->exec($query);

    if (!$result) {
        echo "Error al agregar el registro";
    } else {
        echo "Registro agregado exitosamente";
    }
}
?>
<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $funcion = $_POST['funcion'];

    $query = "UPDATE usuarios SET nombre='$nombre', funcion='$funcion' WHERE id=$id";
    $result = $db->exec($query);

    if (!$result) {
        echo "Error al actualizar el registro";
    } else {
        echo "Registro actualizado exitosamente";
    }
}
?>
<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];

    $query = "DELETE FROM usuarios WHERE id=$id";
    $result = $db->exec($query);

    if (!$result) {
        echo "Error al eliminar el registro";
    } else {
        echo "Registro eliminado exitosamente";
    }
}
?>