
<?php

if(isset($_POST['enviar'])){
    $nombre = $_POST['nombre'];
    $categoria = $_POST['categoria'];
    $basico = $_POST['basico'];
    $bonificacion = $_POST['bonificacion'];
    $tipo = $_POST['tipo'];

    include 'Empleado.php';
    $empleado = new Empleado($nombre,$categoria,$basico,$bonificacion,$tipo);
    echo '<h1>Resultados</h1>';
    $empleado->remuneracion();
    $empleado->descuento();
    $empleado->neto();
}
?>