<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {


	public $id = 'id';
	public $table = 't_users';
	

    public function __construct()
    {
        parent::__construct();
    }


    public function get_users($pseudo= FALSE)
	{
		if ($pseudo === FALSE) {
			# code...
			$this->db->order_by('id','DESC');
			$query = $this->db->get('t_users');
			return $query->result_array();
		}

		$query = $this->db->get_where('t_users',array('pseudo' => $pseudo,));
		return $query->row_array();

	}



	public function register_user()
	{
		$data = array(
			'pseudo' => $this->input->post('pseudo'),
			'prenom' => $this->input->post('prename'),
			'genre' => $this->input->post('sexe'),
			'email' => $this->input->post('email'), 
			'tel' => $this->input->post('tel'), 
			'pwd' => $this->input->post('pwd'),

	);


		//$this->session->set_userdata('pseudo',$this->input->post('pseudo'));
		//$data['pseudo_sess'] = $this->session->userdata('pseudo');

		$this->db->insert('t_users',$data);

		$this->session->set_userdata('pseudo_sess', $this->input->post('pseudo'));
		$this->session->set_userdata('name_sess', $this->input->post('name'));
		$this->session->set_userdata('prename_sess', $this->input->post('prename'));
		$this->session->set_userdata('email_sess', $this->input->post('email'));
		$this->session->set_userdata('tel_sess', $this->input->post('tel'));
	

		
	}

	// Modifier le profil

	public function edit_user($profil)
	{
		$pseudo = $this->session->userdata('pseudo_sess'); 
		
		$data = array(
			'pseudo' =>$this->input->post('pseudo'), 
			'prenom' => $this->input->post('prename'),
			'nom' => $this->input->post('name'),
			'email' => $this->input->post('email'), 
			'tel' => $this->input->post('tel'), 
			'nom' => $this->input->post('nom'),
			'profession'=>$this->input->post('profession'),
			'bio'=>$this->input->post('bio'),
			'profil' =>$profil


		);

		$this->db->where('pseudo',$pseudo);
		$this->db->update('t_users',$data);
	}

	//CHOISIR UN LE USER
	public function get_user_by($pseudo)
    {

    	$this->db->where('pseudo', $pseudo);
        return $this->db->get('t_users')->row();
    }

    public function get_one_user($pseudo)
    {
    	$this->db->where('pseudo', $pseudo );
    	$row = $this->db->get('t_users');
    	return $row->row_array();
    }

	// Verifie si le pseudo existe
	public function check_pseudo_exists($pseudo)
	{
		$query = $this->db->get_where('t_users',array('pseudo' => $pseudo));
		if (empty($query->row_array())) {
			# code...
			return true;
		}else
		{
			return false;
		}
	}

		// Verifie si l'email existe deja

	public function check_email_exists($email)
	{
		$query = $this->db->get_where('t_users',array('email' => $email));
		if (empty($query->row_array())) {
			# code...
			return true;
		}else
		{
			return false;
		}
	}


	public function can_log($pseudo,$pwd)
	{
		$this->db->where('pseudo',$pseudo);
		$this->db->where('pwd',$pwd);
		$result = $this->db->get('t_users');

		if ($result->num_rows()>0) {
			# code...
			return true;
		}else{ return FALSE;}
	}
}