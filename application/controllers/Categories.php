<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Categories extends CI_Controller
{
	
	
	public  function __construct() 
	{
        parent::__construct();

          if (!isset($_SESSION['id_sess'])){
            redirect(base_url().'login');
     }}


	public function index()
	{
		$data['categories']= $this->Category_model->get_category();
		//print_r($data['categories']);

		$this->load->view('user_part');
		$this->load->view('category_form',$data);
		$this->load->view('footer');
	}

	//CREATION D'UNE NOUVELLE CATEGORIE

	public function create_category()
	{
		$this->form_validation->set_rules('ctitle','Titre','trim|required');
		$this->form_validation->set_rules('resume','Description','trim|required');

		if ($this->form_validation->run()=== FALSE) {
			# code...
			$this->load->view('header');
			$this->load->view('category_form',$data);
			$this->load->view('footer');

		}else
		{
			$this->Category_model->create_category();
			redirect('categories');
		}
	}
	

	public function posts_by_category($id_cat)
	{
		$data['posts'] = $this->Posts_model->get_post_by_category($id_cat);

		$this->load->view('user_part');
		$this->load->view('post_view',$data);
		$this->load->view('footer');
	}
}