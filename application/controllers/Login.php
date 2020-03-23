<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	public  $user;
	public $ps='';
	public $pwd= '';

    public function __construct() 
    {
            parent::__construct();

	        $this->user = new Users_model(); 
    }

	public function index()
	{

		$this->load->view('login_form');
	}


	public function can_log()
	{
		$this->form_validation->set_rules('ps','Pseudo','required');
		$this->form_validation->set_rules('pwd','Mot de passe','required');


		if ($this->form_validation->run()) {
			# code...
			$pseudo = $this->input->post('ps');
			$pwd = $this->input->post('pwd');

			if ($this->Users_model->can_log($pseudo,$pwd)) {
				# code...
				
				$user = $this->Users_model->get_one_user($pseudo);
				//var_dump($user[]);
				$this->session->set_userdata('id_sess',$user['id']);
				$this->session->set_userdata('pseudo_sess',$user['pseudo']);
				$this->session->set_userdata('prename_sess',$user['prenom']);
				$this->session->set_userdata('tel_sess',$user['tel']);
				$this->session->set_userdata('email_sess',$user['email']);
				$this->session->set_userdata('bio_sess',$user['bio']);
				$this->session->set_userdata('profession_sess',$user['profession']);
				$this->session->set_userdata('profil_sess',$user['profil']);

				//var_dump($_SESSION['pseudo_sess']);

				redirect('users/setting_user_view');

			}else{
				$this->session->set_flashdata('error','Le Pseudo ou le Mot de Passe Incorrect');
				$this->load->view('login_form');
			}

		}else{

			
			$this->load->view('login_form');
			

		}
	}


	 public function logout(){
       
        unset($_SESSION['pseudo_sess']);
        unset($_SESSION['prename_sess']);
        unset($_SESSION['tel_sess']);
        unset($_SESSION['email_sess']);
        unset($_SESSION['bio_sess']);
        unset($_SESSION['profession_sess']);
     
        
        
        redirect(base_url().'login');
    }

    public function signin()
    {
    	
    		$ps =$this->input->post('ps');
    		$pwd = $this->input->post('pwd');
    	
    	

    	$users = $this->Users_model->get_users();

    	foreach ($users as $user) : {
    		# code...

    		
    		$this->user = $this->Users_model->get_user_by('$pseudo');

    		if ($user['pseudo'] == $ps  AND $user['pwd'] == $pwd) {
    			# code...
    			
				$this->session->set_userdata('pseudo_sess',$this->user['pseudo']);
				$this->session->set_userdata('prename_sess',$this->user['prenom']);
				$this->session->set_userdata('tel_sess',$this->$user['tel']);
				$this->session->set_userdata('email_sess',$this->$user['email']);
				$this->session->set_userdata('bio_sess',$this->$user['bio']);
				$this->session->set_userdata('profession_sess',$this->$user['profession']);
				$this->session->set_userdata('profil_sess',$this->$user['profil']);


				redirect('users');


    		}
    			/// Echec de login
    		else
    		{
    			
    			//$this->load->view('login_form');
    			die($user);
    		}
    	}
    	 endforeach;

    	
    }
}