<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chat extends MY_Controller {

	public function index(){
		if($this->config->item('down')) header('Location: ' . $this->config->item('failover'));
		$new_feature = $this->db->select('*')->from('new_features')->order_by('id','desc')->get()->row();
		if(!empty($new_feature)){
			$this->set_message($new_feature->feature_name, $new_feature->feature_description, '');
		}

		$data['messages'] = $this->db->select('*')->from('message')->order_by('id','desc')->limit(8)->get()->result();
		$data['avatars'] = $this->db->select('*')->from('avatar')->order_by('id','desc')->get()->result();

		$this->view('chat_page')->render($data);
	}

	public function submit(){
		$this->form_validation->set_rules('name', '<b>Name</b>', 'trim|required|max_length[100]');
		$this->form_validation->set_rules('avatar', '<b>Avatar</b>', 'trim|required');
		$this->form_validation->set_rules('message', '<b>message</b>', 'trim|required');


		if ($this->form_validation->run() == FALSE) {
			$arr['success'] = false;
			// $arr['notif'] = '<div class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 alert alert-danger alert-dismissable"><i class="fa fa-ban"></i><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' . validation_errors() . '</div>';
		} else {
			$arr['name'] = $this->input->post('name');
			$arr['avatar'] = $this->input->post('avatar');
			$arr['message'] = htmlentities($this->input->post('message'));
			$arr['ipaddress'] = $this->input->ip_address();

			$this->db->insert('message',$arr);
			$detail = $this->db->select('*')->from('message')->where('id',$this->db->insert_id())->get()->row();
			$arr['id'] = $detail->id;
			$arr['name'] = $detail->name;
			$arr['avatar'] = $detail->avatar;
			$arr['message'] = $detail->message;
			$arr['created_at'] = $detail->created_at;
			$arr['success'] = true;
			// $arr['notif'] = '<div class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 alert alert-success" role="alert"> <i class="fa fa-check"></i><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Message sent ...</div>';
		}
		echo json_encode($arr);
	}
}