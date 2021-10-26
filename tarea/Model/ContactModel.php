<?php

class ContactModel extends ADODB_Active_Record {
    public $_table = 'eb25247_contacts';

    function __construct() {
        parent::__construct();
        $row = $GLOBALS['db']->GetRow("SELECT nextval('eb25247_contacts_id_seq'::regclass) AS id");
        $this->id = $row['id'];
    }

    function lista() {
        // Obtener todos los registros:
        $contacts = $GLOBALS['db']->GetActiveRecords('eb25247_contacts');

		return $this->contacts;
	}

	function borra($id) {
		// Borrar un registro:
		$contact = new ContactModel();
		$contact->load('id=3');
		$contact->delete();
	}

	function edita(DirectionModel $direccion) {
		// Modificar y guardar un registro:
		$contact = new ContactModel();
		$contact->load($direccion->id);
		$contact->nombre = $direccion->nombre;
		$contact->apellido = $direccion->apellido;
		$contact->telCasa = $direccion->telCasa;
		$contact->dirCasa = $direccion->dirCasa;
		$contact->telTrabajo = $direccion->telTrabajo;
		$contact->dirTrabajo = $direccion->dirTrabajo;
		$contact->correo = $direccion->correo;
		$contact->save();
	}

	function agregar(DirectionModel $direccion) {
		$contact = new ContactModel();
		$contact->insert($direccion);
		$contact->save();
	}
}