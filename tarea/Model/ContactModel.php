<?php

/**
 * Modelo Contact.  Cada contact tendra:
 *      - nombre y apellidos
 *      - teléfono de la casa
 *      - teléfono del trabajo
 *      - dirección de la casa
 *      - dirección del trabajo 
 *      - dirección de correo electrónico.
 *
 */
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


		$this->libro = array();
		$archivo = fopen('visitas.txt', 'r');
		while($registro = fgets($archivo))
		{
			$visita = explode(':', $registro);
			$this->libro[] = new VisitaModel($visita[0], $visita[1], $visita[3]);
		} // while
		fclose($archivo);
		return $this->libro;
	}
}