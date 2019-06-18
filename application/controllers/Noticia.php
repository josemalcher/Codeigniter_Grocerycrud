<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Noticia extends CI_Controller {

	public function index()
	{
		$crud = new Grocery_CRUD();
		$crud->set_table("noticia");
		$crud->set_subject("Notícia");

		$crud->set_field_upload("foto");

		//relacionamento
		$crud->set_relation("categoria_id_categoria", "categoria", "nome");
		$crud->set_relation("usuario_id_usuario", "usuario", "nome");

		$crud->display_as("categoria_id_categoria", "Categoria");
		$crud->display_as("usuario_id_usuario", "Autor");

		$form = $crud->render();
		$this->template->load("template/template_admin","crud/index", $form);
	}


}
