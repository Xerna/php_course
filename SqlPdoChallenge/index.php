<?php
require_once('conexion.php');
$conn = conectar();

$results = traerMultiplesRegistros($conn, "tareas");
foreach ($results as $result) {
    echo "Titulo "  . $result['titulo'] . "</br>";
    echo "Descripcion " . $result['descripcion'] . "</br>";
    echo "Fecha de creacion " . $result['fecha_creacion'] . "</br>";
}
echo "</br>";
echo "</br>";
echo "</br>";
$result = traerUnSoloRegistro($conn, "titulo", "id", 1, "tareas");
echo $result['titulo'];
echo "</br>";
echo "</br>";
echo "</br>";
eliminarUnRegistro($conn, 1);
echo "</br>";
echo "</br>";
echo "</br>";
AgregarRegistro($conn, "TAREA PRUEBA", "DESCRIPCION PRUEBA");
EditarRegistro($conn, "TITULO EDITADO", 2);
function traerMultiplesRegistros($conn, $tablename)
{
    $stmt = $conn->prepare("SELECT * FROM $tablename");
    $stmt->execute();
    $results = $stmt->fetchAll();
    return $results;
}
function traerUnSoloRegistro($conn, $field, $conditionField, $conditionValue, $tablename)
{
    $stmt = $conn->prepare("SELECT $field FROM $tablename WHERE $conditionField = :conditionValue");
    $stmt->bindParam(":conditionValue", $conditionValue);
    $stmt->execute();
    $result = $stmt->fetch();
    return $result;
}
function eliminarUnRegistro($conn, $id)
{
    $stmt = $conn->prepare("SELECT id from tareas WHERE id = :id");
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    if ($stmt->rowCount() > 0) {
        $stmt = $conn->prepare("DELETE FROM tareas WHERE id = :id");
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        echo "SE HA ELIMINADO EL REGISTRO CON EXITO";
    } else {
        echo "EL ID NO EXISTE";
    }
}
function AgregarRegistro($conn, $titulo, $descripcion)
{
    $stmt = $conn->prepare("INSERT INTO tareas (titulo,descripcion) VALUES (:titulo,:descripcion)");
    $stmt->bindParam(":titulo", $titulo);
    $stmt->bindParam(":descripcion", $descripcion);
    if ($stmt->execute()) {
        echo "SE REGISTRO CON EXITO";
    } else {
        echo "HUBO UN ERROR AL INSERTAR";
    }
}
function EditarRegistro($conn, $titulo, $id)
{
    $stmt = $conn->prepare("UPDATE tareas SET titulo = :titulo WHERE id = :id");
    $stmt->bindParam(":titulo", $titulo);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
}
