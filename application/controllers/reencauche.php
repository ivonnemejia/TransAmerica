<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reencauche extends CI_Controller {

	public function index()
	{
		
	}
	public function newReencauche()
	{
		$this->load->view("Administrator/Reencauche/newReencauche");		
	}
	public function editReencauche()
	{
		//Jala de la base todos los Reencauches para llenarlos en un autocomplete
		$data="";
		$this->load->view("Administrator/Reencauche/editReencauche",$data);		
	}
	public function editReencauche2()
	{
		$nameReencauche=$this->input->post("nameReencauche",true);
		//Jala de la base los campos del Reencauche para llenar el formulario
		$data="";
		$this->load->view("Administrator/Reencauche/editReencauche2",$data);		
	}
	public function deleteReencauche()
	{
		//Jala todos los Reencauches de la base para mostrarlos en una tabla y el usuario pueda eliminar el que desee
		$data="";
		$this->load->view("Administrator/Reencauche/deleteReencauche",$data);		
	}
	public function searchReencauche()
	{
		//Jala de la base todos los Reencauches para llenarlos en un autocomplete
		$data="";
		$this->load->view("Administrator/Reencauche/searchReencauche",$data);		
	}
	public function searchReencauche2()
	{
		$nameReencauche=$this->input->post("nameReencauche",true);
		//Jala de la base los campos del Reencauche para llenar el formulario
		$data="";
		$this->load->view("Administrator/Reencauche/searchReencauche2",$data);		
	}
	public function storeNewReencauche()
	{
		$fechaReencauche=$this->input->post("fechaReencauche",true);
		$noWheel=$this->input->post("noWheel",true);
		$descripcion=$this->input->post("descripcion",true);
		

		//Se almacena en la base de datos

		$data['message']="<div class='text-center'><h4>Reencauche Agregado Exitosamente!</h4></div>";
		$this->load->view("Administrator/Reencauche/newReencauche",$data);
	}
	public function storeEditReencauche()
	{
		$fechaReencauche=$this->input->post("fechaReencauche",true);
		$noWheel=$this->input->post("noWheel",true);
		$descripcion=$this->input->post("descripcion",true);

		//Se almacena en la base de datos

		$data['message']="<div class='text-center'><h4>Reencauche Editado Exitosamente!</h4></div>";
		$this->load->view("Administrator/Reencauche/editReencauche",$data);
	}



}
