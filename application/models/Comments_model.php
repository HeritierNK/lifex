<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comments_model extends CI_Model {


	public $table = 't_comment';

	public function create_comment($postid)
	{
		$data = array(

			'idpost' => $postid,
			'content' => $this->input->post('body'),
			'iduser' =>  $_SESSION['id_sess'] );

		return $this->db->insert('t_comment',$data);
	}

	// Affichage des commentaires d'un post donne>>>>>>>>>>>>>>>>>>>>>>>>>>
	// Dans la vue commentaitre sss
	public function get_comments($postid)
	{
		if ($postid === FALSE) {
			# code...
			$query = $this->db->get('t_comment');
			return $query->result_array();
		}

		$query = $this->db->get_where('t_comment',array('idpost' => $postid,));
		return $query->result_array();


	}

	public function get_comment_by($postid)
    {

    	$this->db->where($this->idpost, $postid);
        return $this->db->get($this->table)->row();
    }


    public function comments($postid){
    	$query = $this->db->get_where('t_comment', array('idpost' => $postid ));
    	return $query->result_array();
	}
	
	public function count_comment($idpost)
	{
		$this->db->like('idpost', $idpost);
		$this->db->from('t_comment');
		$this->db->where('idpost', $idpost);
		return $this->db->count_all_results();
	}
}