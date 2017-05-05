<?php
    require_once('bd/conexion.php');
    require_once('controlador/estudiante_controller.php');

    $controller= new estudiante_controller();
    
    if(!empty($_REQUEST['m'])){
        $metodo=$_REQUEST['m'];
        if (method_exists($controller, $metodo)) {
            $controller->$metodo();
        }else{
            $controller->index();
        }
    }else{
        $controller->index();
    }




?>