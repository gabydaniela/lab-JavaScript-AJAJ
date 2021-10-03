<?php
 $request = json_decode(file_get_contents('php://input')); 
 $response = array();
 $personajes = array(
    array('nombre' => 'Ada', 'apellido' => 'Wong', 'juegos' => array(2, 4, 6)), 
    array('nombre' => 'Chris', 'apellido' => 'Redfield', 'juegos' => array(1, 5, 6, 7)),
    array('nombre' => 'Claire', 'apellido' => 'Redfield', 'juegos' => array(2)),
    array('nombre' => 'Ethan', 'apellido' => 'Winters', 'juegos' => array(7)),
    array('nombre' => 'Jill', 'apellido' => 'Valentine', 'juegos' => array(1, 3, 5)),
    array('nombre' => 'Leon', 'apellido' => 'Kennedy', 'juegos' => array(2, 4, 6)),
    array('nombre' => 'Sherry', 'apellido' => 'Birkin', 'juegos' => array(2, 6)) 
 );
 if(is_null($request)){
    $response = $personajes;
 }else{ 
    foreach($personajes as $item){
       if(in_array($request->juego, $item['juegos'])){
          $response[] = $item;
       }
    }
 }
 echo json_encode($response);