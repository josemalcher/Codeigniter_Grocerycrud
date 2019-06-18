<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categoria extends CI_Controller {

	public function index()
	{
		$crud = new Grocery_CRUD();
		$crud->set_table("categoria");
		$crud->set_subject("Categoria");

		$form = $crud->render();
		$this->template->load("template/template_admin","crud/index", $form);
	}


}
