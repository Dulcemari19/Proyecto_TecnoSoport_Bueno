<?php

if (!isset($_POST['nombre']) || empty($_POST['nombre'])
    || !isset($_POST['descripcion']) || empty($_POST['descripcion'])
    || !isset($_POST['precio']) && is_numeric($_POST['precio'])
    // || !isset($_POST['sistema_operativo']) || empty($_POST[])
    
    ) {
    header('Location: formulario_producto.php?info=Parámetros incorrectos');
    exit;
}
require_once '.\conexion.php';
$sql = <<<fin
insert into products set
name = :nombre
, description = :descripcion
, price = :precio

fin;
$sentencia = $conn->prepare($sql, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
$sentencia->execute([
    ':name' => $_POST['nombre']
    , ':description' => $_POST['descripcion']
    , ':price' => $_POST['precio']

]);

header('Location: jugue.php?info=Equipo creado exitosamente: ' . $_POST['name']);
?>