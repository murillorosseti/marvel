<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Consultas');
	}
	
	public function index($pagina = null)
	{
		$consultas = $this->Consultas->consulta_principal($pagina);
		
		$contador = ceil($consultas->data->total/20);
		
		$data = array(
						'resultado' => $consultas->data->results,
						'pagina_atual' => $pagina,
						'paginacao' => $contador
					);
		$this->load->view('inicio',$data);
	}
}
