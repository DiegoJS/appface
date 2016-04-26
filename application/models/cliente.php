<?php
/**
* clase para la tablas de Cliente
*/
class Cliente extends CI_Model
{
	protected $tablaCli = 'cliente';
	protected $tablaOra = 'oracion';
	
	function __construct()
	{
		parent::__construct();
	}

	function insertCliente($data){
		$this->db->insert($this->tablaCli,$data);
		return $this->db->insert_id();
	}

	function insertOracion($data){
		$this->db->insert($this->tablaOra,$data);
		return $this->db->insert_id();
	}
}