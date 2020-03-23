<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_model extends CI_Model {

	/**
	 *Author : H-son Lewi's
	 *Posts fonctions
	 */

	 public $id = 'id';
	 public $table = 't_category';

	public function get_category($id = FALSE)
	{
		if ($id === FALSE) {
			# code...
			$this->db->order_by('id','DESC');
			$query = $this->db->get('t_category');
			return $query->result_array();
		}

		$query = $this->db->get_where('t_category',array('id' => $id,));
		return $query->row_array();

	}
	// get Post by id

	function get_category_by($id)
    {

    	$this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }

	public function create_category()
	{
		$data = array
		(
			'title_cat' => $this->input->post('ctitle'),
			'resume' => $this->input->post('resume'),
			

		);

		return $this->db->insert('t_category',$data);
	}

} 