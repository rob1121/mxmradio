<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notification extends MY_Controller {

	public function index(){
		$this->view('notification_page')->render();
    }

    public function submit_feature(){
		$this->form_validation->set_rules('feature_name', '<b>Feature Name</b>', 'trim|required');
		$this->form_validation->set_rules('feature_description', '<b>Feature Description</b>', 'trim|required');


		if ($this->form_validation->run() == FALSE) {
			$arr['success'] = false;
		} else {
			$arr['feature_name'] = $this->input->post('feature_name');
			$arr['feature_description'] = $this->input->post('feature_description');

			$this->db->insert('new_features',$arr);
			$detail = $this->db->select('*')->from('new_features')->where('id',$this->db->insert_id())->get()->row();
			$arr['feature_name'] = $detail->feature_name;
			$arr['feature_description'] = $detail->feature_description;
            $arr['success'] = true;
}
		echo json_encode($arr);
    }
}