<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surveys extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index(){
		$this->load->view("form");
	}

	public function process_form(){		
		$this->form_validation->set_rules("name", "Name", "required");
		$this->form_validation->set_rules("dojo_location", "Dojo Location", "required");
		$this->form_validation->set_rules("fave_language", "Favorite Language", "required");

		if($this->form_validation->run() == FALSE){
			// $this->load->view("form");
			$errors = array(
				"error_name" => form_error("name"),
				"error_dojo_location" => form_error("dojo_location"),
				"error_fave_language" => form_error("fave_language"),
			);

			$this->session->set_userdata($errors);
			redirect("/");
		}
		else{
			$this->session->unset_userdata("erro_name");
			$this->session->unset_userdata("erro_dojo_location");
			$this->session->unset_userdata("erro_fave_language");

			if(($this->session->userdata("counter")) == NULL)
				$this->session->set_userdata("counter", 0);
			
			$form_data = array(
				"name" => $this->input->post("name"),
				"dojo_location" => $this->input->post("dojo_location"),
				"fave_language" => $this->input->post("fave_language"),
				"comment" => $this->input->post("comment"),
			);
			$this->session->set_userdata($form_data);
			$this->session->set_userdata("counter", $this->session->userdata("counter") + 1);

			redirect("/result");
		}
	}
}
