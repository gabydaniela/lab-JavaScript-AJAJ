<?php
    $provincias = array(
        array('id' => 1, 'nombre' => 'San José'),
        array('id' => 2, 'nombre' => 'Alajuela'),
        array('id' => 3, 'nombre' => 'Cartago'),
        array('id' => 4, 'nombre' => 'Heredia'),
        array('id' => 5, 'nombre' => 'Guanacaste'),
        array('id' => 6, 'nombre' => 'Puntarenas'),
        array('id' => 7, 'nombre' => 'Limón'),
    );
    echo json_encode($provincias);