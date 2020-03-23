<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller 
{


		public function index()
		{

		}

		public  function __construct() 
		{
        parent::__construct();

       
     	}


	//Creation d'un nouvel utilisateur

		public function register()
		{

			$this->form_validation->set_rules('prename','Prenom','required|trim');
			$this->form_validation->set_rules('pseudo','Pseudo','trim|required|callback_check_pseudo_exists');
			$this->form_validation->set_rules('sexe','Genre','required');
			$this->form_validation->set_rules('email','Email','required|callback_check_email_exists');
			$this->form_validation->set_rules('tel','Téléphone','required');
			$this->form_validation->set_rules('pwd','Mot de passe','required');
			$this->form_validation->set_rules('pwd2','Confimation Mot de passe','matches[pwd]');



			if ($this->form_validation->run() === FALSE) {
				# code...
				$this->load->view('header');
				$this->load->view('register_form');
				$this->load->view('footer');

			}else
			{
				$this->Users_model->register_user();
				$this->load->view('user_part');
				$this->load->view('welcome_user');
				$this->load->view('footer');
				//redirect('users/edit_user');
			}

		}



		public function setting_user_view()
		{
				$this->load->view('user_part');
				$this->load->view('welcome_user');
				$this->load->view('footer');
		}

	// Regle de verification du pseudo
		public function check_pseudo_exists($pseudo)
		{
			$this->form_validation->set_message('check_pseudo_exists','Ce Nom utilisateur est déjà pris, choisissez un autre');
			if($this->Users_model->check_pseudo_exists($pseudo))
			{
				return true;

			}else{return false;}
		}


	//Verfication du mail
		public function check_email_exists($email)
		{
			$this->form_validation->set_message('check_email_exists','Il existe déjà un compte avec cette adresse mail , choisissez un autre');
			if($this->Users_model->check_email_exists($email))
			{
				return true;

			}else{return false;}
		}


		public function edit_user()
		{	

				$this->load->view('user_part');
				$this->load->view('edit_form');
				$this->load->view('footer');

		}

		public function update_user()
		{
			if (!empty($_FILES['userfile']['name'])) {
				# code...


				$config['upload_path']          = './assets/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 100;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                $img ="noprofil.jpg";

                if ( ! $this->upload->do_upload('userfile'))
                {
                

                   $img = "noprofil.jpg" ;
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());

                       $upload_data['file_name'] = $_FILES['userfile']['name'];
                       $img = $upload_data['file_name'];
                }
			}

			$this->Users_model->edit_user($img);
			//var_dump($config['file_name']); die();
		}


		//Les postes par user
	public function posts_by_user($id_user)
	{
		$data['posts'] = $this->Posts_model->get_post_by_user($id_user);

		$this->load->view('user_part');
		$this->load->view('post_view',$data);
		$this->load->view('footer');
	}


	public function list_user(){

		//$data['users'] = $this->Users_model->get_users();


		$this->load->view('user_part');
		$this->load->view('post_view',$data);
		$this->load->view('footer');

	}
		
		 
}