<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gerente extends CI_Controller {

	public function index()
	{
		
	}
	public function showFleet()
	{
		
		$this->load->view("Administrator/content_flotas");
	}
	public function showFact()
	{
		$this->load->view("Administrator/content_facturacion");	
	}
	public function showMantain()
	{
		$this->load->view("Administrator/content_mantain");		
	}

}