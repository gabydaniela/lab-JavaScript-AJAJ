<?php
$request = json_decode(file_get_contents('php://input'));
switch($request->id) {
    case 11:
        $distritos = array(
            array('id' => 111, 'nombre' => 'Carmen'),
            array('id' => 112, 'nombre' => 'Merced')
        );
    break;

    case 12:
        $distritos = array(
            array('id' => 121, 'nombre' => 'Escazú'),
            array('id' => 122, 'nombre' => 'San Antonio')
        );
    break;

    case 21:
        $distritos = array(
            array('id' => 211, 'nombre' => 'Alajuela'),
            array('id' => 212, 'nombre' => 'Carrizal')
        );
    break;

    case 22:
        $distritos = array(
            array('id' => 221, 'nombre' => 'Santiago'),
            array('id' => 222, 'nombre' => 'San Juan')
        );
    break;
    
    default:
        $distritos = array();
    break;
}
echo json_encode($distritos);