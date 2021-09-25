<?php
$request = json_decode(file_get_contents('php://input'));
switch($request->id) {
    case 1:
        $cantones = array(
            array('id' => 11, 'nombre' => 'San José'),
            array('id' => 12, 'nombre' => 'Escazú')
        );
    break;

    case 2:
        $cantones = array(
            array('id' => 21, 'nombre' => 'Alajuela'),
            array('id' => 22, 'nombre' => 'San Ramón')
        );
    break;
    
    default:
        $cantones = array();
    break;
}
echo json_encode($cantones);