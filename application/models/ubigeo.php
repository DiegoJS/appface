<?php
/**
* clase para la tablas de ubigeo
*/
class Ubigeo extends CI_Model
{
	protected $tablaDep = 'ubdepartamento';
	protected $tablaDis = 'ubdistrito';
	protected $tablaPro = 'ubprovincia';
	
	function __construct()
	{
		parent::__construct();
	}

	function listDep(){
		$this->db->select();
		$this->db->from($this->tablaDep);
		$res = $this->db->get()->result();
		if(count($res) == 0)
			return '0';
		else
			return $res;
	}

	function listPro($idDep){
		$this->db->select();
		$this->db->from($this->tablaPro);
		$this->db->where('iddepa',$idDep);
		$res = $this->db->get()->result();
		if(count($res) == 0)
			return '0';
		else
			return $res;
	}

	function lisDis($idProv){
		$this->db->select();
		$this->db->from($this->tablaDis);
		$this->db->where('idprov',$idProv);
		$res = $this->db->get()->result();
		if(count($res) == 0)
			return '0';
		else
			return $res;
	}
}
?>