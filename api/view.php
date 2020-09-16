<?php

// connect to db
require_once __DIR__ . '/../connect_db.php';

// obtener datos de $_GET
$contact_id = (int) $_GET['id'];
$result_json = '';

if (!empty($contact_id) && $contact_id instanceof int) {
    // obtener el contacto seleccionado con teléfonos para mostrar
    $sql = 'SELECT * FROM contacto as co JOIN LEFT telefono as tl ON (co.id=tl.contact_id) WHERE id = ?';

    $result_json = '';
}

// devolver json de API por URL
header('Content-Type: application/json');
echo json_encode($result_json);
