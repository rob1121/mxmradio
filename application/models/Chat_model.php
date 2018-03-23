<?php

class Chat_model extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function get_messages(){
            return $this->db->select('*')
                            ->from('message')
                            ->order_by('id','desc')
                            ->get();
    }
    public function insert_entry(){
            $this->title    = $_POST['title']; // please read the below note
            $this->content  = $_POST['content'];
            $this->date     = time();
            $this->db->insert('entries', $this);
    }
    public function update_entry(){
            $this->title    = $_POST['title'];
            $this->content  = $_POST['content'];
            $this->date     = time();
            $this->db->update('entries', $this, array('id' => $_POST['id']));
    }

}