<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index(){
		$this->load->model('ubigeo');
		$data = $this->ubigeo->listDep();
		$this->load->helper('url');
		$this->load->view('head');
		$this->load->view('vista',array('ubigeo'=>$data));
	}

	public function ajaxProvincia(){
		if($this->input->post() && is_numeric($this->input->post('iddep'))){
			$this->load->model('ubigeo');
			$prov = $this->ubigeo->listPro($this->input->post('iddep'));
			$this->load->view('ajax-provincias',array('provincias'=>$prov));
		}
		else
			header('Location: /');
	}

	public function ajaxDistrito(){
		if($this->input->post() && is_numeric($this->input->post('idprov'))){
			$this->load->model('ubigeo');
			$dist = $this->ubigeo->lisDis($this->input->post('idprov'));
			$this->load->view('ajax-distritos',array('distritos'=>$dist));
		}
		else
			header('Location: /');
	}

	public function register(){
		if($this->input->post()){
			$this->load->model('cliente');
			$data = array(
				'nombres'		=> $this->input->post('nombres'),
				'apellidos'		=> $this->input->post('apellidos'),
				'dni'			=> $this->input->post('dni'),
				'email'			=> $this->input->post('email'),
				'departamento'	=> $this->input->post('departamento'),
				'provincia'		=> $this->input->post('provincia'),
				'distrito'		=> $this->input->post('distrito'),
				);
			$idCliente = $this->cliente->insertCliente($data);
			$this->load->library('session');
			$data['idcliente'] = $idCliente;
			$this->session->set_userdata(array('dataClient' => $data));
			header('Location: /home/app');
		}
		else
			header('Location: /');
	}

	public function app(){
		$this->load->library('session');
		if($this->session->userdata('dataClient')){
			$data = $this->session->userdata('dataClient');
			$this->load->helper('url');
			$this->load->view('head');
			$this->load->view('app',array('data'=>$data));
		}
		else
			header('Location: /');
	}
	public function drop(){
		$this->load->library('session');
		$this->session->unset_userdata('dataClient');
		header('Location: /');
	}

	public function ajaxClip(){
		if($this->input->post()){
			$this->load->model('cliente');
			$data = array('oracion'=>$this->input->post('oracion'),'idcliente'=>$this->input->post('idCliente'));
			if($this->cliente->insertOracion($data)){
				$this->load->library('session');
				$this->session->unset_userdata('dataClient');
				echo 'success';
			}
			else
				echo 'fail';
		}
		else
			header('Location: /');
	}
}