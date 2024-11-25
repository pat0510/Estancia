<?php
include '../model/reporte4_m.php';

// Verificar si el formulario fue enviado
if (isset($_POST['generar_reporte'])) {
    // Obtener las fechas del formulario
    $fecha_inicio = $_POST['fecha_inicio'];
    $fecha_fin = $_POST['fecha_fin'];

    // Validar que las fechas tienen el formato correcto
    if (preg_match('/^\d{4}-\d{2}-\d{2}$/', $fecha_inicio) && preg_match('/^\d{4}-\d{2}-\d{2}$/', $fecha_fin)) {
        generar_reporte_solicitudes($fecha_inicio, $fecha_fin);
    } else {
        echo "Las fechas proporcionadas no tienen el formato correcto.";
    }
}
?>
