<?php
require_once BASE_PATH . '/config/database.php';

function get_all_citas() {
    $conn = get_db_connection();
    $result = $conn->query("SELECT * FROM citas ORDER BY fecha_registro DESC");
    $citas = [];

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $citas[] = $row;
        }
    }

    $conn->close();
    return $citas;
}

$citas = get_all_citas();
?>