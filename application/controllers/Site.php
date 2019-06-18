<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	public function index()
	{
		$this->template->load("template/template_site","site/home");
		//$this->template->load("template/template_admin","site/home");
		//$this->load->view("template/template_site");
	}
}
