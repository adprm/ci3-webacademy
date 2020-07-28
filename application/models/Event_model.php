<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Event_model extends CI_Model{
    private $_table = 'ak_events';

    public $event_id;
    public $event_title;
    public $event_date;
    public $event_image = "default.jpg";
    public $event_desk;
    public $event_loc;

    public function rules(){
        return
        [
            [
                'field' => 'event_title',
                'label' => 'Event_title',
                'rules' => 'required'
            ],
            [
                'field' => 'event_date',
                'label' => 'Event_date',
                'rules' => 'date'
            ],
            [
                'field' => 'event_desk',
                'label' => 'Event_desk',
                'rules' => 'required'
            ],
            [
                'field' => 'event_loc',
                'label' => 'Event_loc',
                'rules' => 'required'
            ]
        ];
    }

    public function getAll(){
        return $this->db->get($this->_table)->result();
    }

    public function getById($id){
        return $this->db->get_where($this->_table, ['event_id' => $id])->row();
    }

    public function save(){
        $post = $this->input->post();
        $this->event_id = uniqid();
        $this->event_title = $post['event_title'];
        $this->event_date = $post['event_date'];
        $this->event_image = $this->_uploadImage();
        $this->event_desk = $post['event_desk'];
        $this->event_loc = $post['event_loc'];

        return $this->db->insert($this->_table, $this);
    }

    public function update(){
        $post = $this->input->post();
        $this->event_id = $post["event_id"];
        $this->event_title = $post["event_title"];
        $this->event_date = $post["event_date"];

        // update gambar logic
        if (!empty($_FILES['event_image']['name'])) {
            $this->event_image = $this->_uploadImage();
        } else {
            $this->event_image = $post['old_image'];
        }

        $this->event_desk = $post["event_desk"];
        $this->event_loc = $post["event_loc"];

        return $this->db->update($this->_table, $this, array('event_id' => $post['event_id']));
    }

    public function delete($id){
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array('event_id' => $id));
    }

    private function _uploadImage(){
        $config['upload_path']      = './upload/event';      // alamat lokasi file
        $config['allowed_types']    = 'gif|jpg|jpeg|png';   // format file
        $config['file_name']        = $this->event_id;       // nama file berdasakna id
        $config['overwrite']        = true;                 // menindih file yang sudah di upload saat edit data
        $config['max_size']         = 5000;                 // ukuran max upload
        // load library
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('event_image')) {
            return $this->upload->data('file_name');
        }

        return 'default.jpg';
    }

    private function _deleteImage($id){
        $event = $this->getById($id);
        
        if ($event->event_image != "default.jpg") {
	        $file_name = explode(".", $event->event_image)[0];
		    return array_map('unlink', glob(FCPATH."upload/event/$file_name.*"));
        }
    }

    // mengambil total jumlah data
    public function getJumlahEvent(){
        return $this->db->get('ak_events')->num_rows();
    }
}