<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posts_model extends CI_Model {

	/**
	 *Author : H-son Lewi's
	 *Posts fonctions
	 */

	 public $id = 'id';
	 public $table = 't_posts';

	public function get_posts($id = FALSE)
	{
		if ($id === FALSE) {
			# code...
			$this->db->order_by('id','DESC');
			$query = $this->db->get('t_posts');
			return $query->result_array();
		}

		$query = $this->db->get_where('t_posts',array('id' => $id,));
		return $query->row_array();

	}
	// get Post by id

	public function get_post_by($id)
    {

    	$this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }

    /// LES POSTES PAR CATEGORIES
    public function get_post_by_category($category_id)
    {
    	$this->db->order_by('t_posts.id','DESC');
    	$this->db->join('t_category','t_category.id = t_posts.category_id' );
    	$query = $this->db->get_where('t_posts',array('category_id' => $category_id));
    	return $query->result_array();
    }

    /// LES POSTES PAR users

    public function get_post_by_user($user_id)
    {
    	$this->db->order_by('t_posts.id','DESC');
    	$this->db->join('t_users','t_users.id = t_posts.iduser' );
    	$query = $this->db->get_where('t_posts',array('iduser' => $user_id));
    	return $query->result_array();
    }

    // Get user name form post iduser
    public function get_user_name($user_id)
    {
    	$this->db->join('t_posts','t_posts.iduser = t_users.id');
    	$query = $this->db->get_where('t_users',array('id' => $user_id));
    	return $query->row_array();

    }

	public function create_posts($picture)
	{
		$data = array
		(
			'title' => $this->input->post('ptitle'),
			'content' => $this->input->post('pcontent'),
			'attach_file'=> $this->input->post('attach'),
			'iduser' => $this->session->userdata('id_sess'),
			'category_id' => $this->input->post('category_id'),
			'post_image' => $picture


		);



		return $this->db->insert('t_posts',$data);
	}

} 


	
