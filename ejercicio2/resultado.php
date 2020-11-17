<?php
    if(isset($_POST['enviar'])){
        $nombre = $_POST['destinatario'];
        $categoria = $_POST['destino'];
        $basico = $_POST['toneladas'];
        $tipo = $_POST['empresa'];
        include 'funciones.php';
        if($tipo=="IVOVIC"){
        $reg = new IVOVIC($nombre,$categoria,$basico);
        $reg->printall();
        }else {
            $reg = new LEONIDAS($nombre,$categoria,$basico);
            $reg->tarifas();
            $reg->printall();
        }

    }
?>