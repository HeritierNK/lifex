<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posts extends CI_Controller {


	private $id;
	public $title = 'la vraie ecole| liste article';


	public  function __construct() 
	{
        parent::__construct();

          if (!isset($_SESSION['id_sess'])){
            redirect(base_url().'login');
     }}

	
	public function index()
	{
		$data['posts']= $this->Posts_model->get_posts();
		$data['users'] = $this->Users_model->get_users();


		$this->load->view('user_part',$this->title);
		$this->load->view('post_view',$data);
		$this->load->view('footer');
	}



	//Affichage de tous les postes

	public function list_post()
	{
		
		$data['posts']= $this->Posts_model->get_posts();
		$data['users'] = $this->Users_model->get_users();
		//$data['count']=$this->Comments_model->count_comment($id);

		
		$this->load->view('user_part');
		$this->load->view('post_view',$data);
		$this->load->view('footer');

	}

	// AFFICHAGE DES POSTES en detail
	// Affiche egalement la vue des commentaires

	public function read_post($id)
	{


		 $row = $this->Posts_model->get_post_by($id);

        if ($row) {
            $data = array(
                'id' => $row->id,
                'title' => $row->title,
                'content' => $row->content,
                'created_at' => $row->created_at,
                'iduser' => $row->iduser,
                'attach_file' => $row->attach_file,
                'post_image'=>$row->post_image
            );

		$data['comments']=$this->Comments_model->get_comments($id);
		$data['users'] = $this->Users_model->get_users();
		$data['count']=$this->Comments_model->count_comment($id);

        $page = $this->load->view('post_view_detail', $data, true);
		
		
		$this->load->view('user_part');
		$this->load->view('post_view_detail',['page' => $page]);
		$this->load->view('footer');
		}
	}
		
		// CREATION DU POSTE

	public function create_post()
	{

		$data['paget'] = 'la vraie ecole| creation article';
		
		$data['categories'] = $this->Category_model->get_category();

		$this->form_validation->set_rules('ptitle','Titre','trim|required');
		$this->form_validation->set_rules('pcontent','Corps','trim|required');
		$this->form_validation->set_rules('userfile','Image','trim');
		
		if ($this->form_validation->run() === FALSE) {
			# code...
			$this->load->view('user_part');
			$this->load->view('post_form',$data);
			$this->load->view('footer');

			}else{
					//cheking whether the file upload

				if (!empty($_FILES['userfile']['name'])) {

					$config['upload_path']          = './assets/images/blog/';
                	$config['allowed_types']        = 'jpg|jpeg|png|gif';
                	$config['max_size'] 			= 2048;
                	$config['file_name']            = $_FILES['userfile']['name'];

                	$this->load->library('upload', $config);
                    $this->upload->initialize($config);
                	
                	if ($this->upload->do_upload()) {
                		
                		$uploadData = $this->upload->data();
                		$picture = $uploadData['file_name'];
                	}else
                	{
                		$picture = 'noimage.jpg';
                	}
					
				}

				
                $this->Posts_model->create_posts($picture);

               $this->list_post();
				
                      
		}
	}

}
