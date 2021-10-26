<?php

class VisitaModel
{
	/**
	 * Constructor
	 */
	function __construct($id, $nombre, $apellido, $telCasa, $dirCasa, $telTrabajo, $dirTrabajo, $correo)
	{
		$this->id = $id;
        $this->nombre = $nombre;
        $this->$apellido = $apellido;
        $this->$telCasa = $telCasa;
        $this->$dirCasa = $dirCasa;
        $this->$telTrabajo = $telTrabajo;
        $this->$dirTrabajo = $dirTrabajo;
		$this->correo = $correo;
	}

	function serialice(){
		return $this->id.':'.$this->nombre.':'.$this->apellido':'.$this->telCasa':'.$this->dirCasa':'.$this->telTrabajo':'.$this->dirTrabajo':'.$this->correo);
	}
}