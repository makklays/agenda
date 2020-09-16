<?php

// connect to db
require_once __DIR__ . '/../connect_db.php';

// obtenemos todos los contactos con teléfonos
$sql = 'SELECT co.nombre, co.apellidos, co.id FROM contacto as co LEFT JOIN telefono as tl ON (co.id=tl.contact_id) ORDER BY apellidos, nombre ';
//echo $sql;
$arr_json = [];
if ($result = mysqli_query($link, $sql)) {
    while ($row = mysqli_fetch_row($result)) {
        $arr_json[] = ["nombre" => $row[0], "apellidos" => $row[1], 'contact_id' => $row[2]];
    }
    mysqli_free_result($result);
}

mysqli_close($link);

// devolver json de API por URL
header('Content-Type: application/json');
echo json_encode($arr_json);
