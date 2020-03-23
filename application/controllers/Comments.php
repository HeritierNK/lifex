<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comments extends CI_Controller {


	public function index(){

	}


	public function create($postid)
	{

		
		$this->form_validation->set_rules('body','Commentaire','required');

		if ($this->form_validation->run() === FALSE)
		{
			
			$row = $this->Posts_model->get_post_by($postid);
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

		$this->load->view('user_part');
		$this->load->view('post_view_detail',$data);
		$this->load->view('footer');
		}
			
		}else
		{
			$this->Comments_model->create_comment($postid);
			redirect('posts/read_post/'.$postid);
			
	}}

	//Affichage de tous les commentaires d'un post

	/*public function list_comment($id)
	{
		
		$data['comments']= $this->Comments_model->get_comments($postid);
		$data['users'] = $this->Users_model->get_users();
		
		
		//$page = $this->load->view('comment_view',$data, true);
		//$this->load->view('post_view_detail',['page' => $page])

		$this->load->view('post_view_detail',$data);
		
	}*/

}
