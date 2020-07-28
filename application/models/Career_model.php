<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Career_model extends CI_Model{
    private $_table = 'ak_careers';

    public $career_id;
    public $career_title;
    public $career_date;
    public $career_image = 'default.jpg';
    public $career_desk;

    public function rules(){
        return
        [
            [
                'field' => 'career_title',
                'label' => 'Career_title',
                'rules' => 'required'
            ],
            [
                'field' => 'career_date',
                'label' => 'Career_date',
                'rules' => 'date'
            ],
            [
                'field' => 'career_desk',
                'label' => 'Career_desk',
                'rules' =>'required'
            ]
        ];
    }

    // emngambil semua data pada tabel
    public function getAll(){
        return $this->db->get($this->_table)->result();
    }

    // mengambil sebuah data berdasarkan id
    public function getById($id){
        return $this->db->get_where($this->_table, ['career_id' => $id])->row();
    }

    public function save(){
        $post = $this->input->post();
        $this->career_id = uniqid();
        $this->career_title = $post['career_title'];
        $this->career_date = $post['career_date'];
        $this->career_image = $this->_uploadImage();
        $this->career_desk = $post['career_desk'];

        return $this->db->insert($this->_table, $this);
    }

    public function update(){
        $post = $this->input->post();
        $this->career_id = $post['career_id'];
        $this->career_title = $post['career_title'];
        $this->career_date = $post['career_date'];
        
        if (!empty($_FILES['career_image']['name'])) {
            $this->career_image = $this->_uploadImage();
        } else {
            $this->career_image = $post['old_image'];
        }

        $this->career_desk = $post['career_desk'];
        return $this->db->update($this->_table, $this, array('career_id' => $post['career_id']));
    }

    public function delete($id) {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array('career_id' => $id));
    }

    private function _uploadImage(){
        $config['upload_path']      = './upload/career';      // alamat lokasi file
        $config['allowed_types']    = 'gif|jpg|jpeg|png';   // format file
        $config['file_name']        = $this->career_id;       // nama file berdasakna id
        $config['overwrite']        = true;                 // menindih file yang sudah di upload saat edit data
        $config['max_size']         = 5000;                 // ukuran max upload
        // load library
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('career_image')) {
            return $this->upload->data('file_name');
        }

        return 'default.jpg';
    }

    private function _deleteImage($id){
        $career = $this->getById($id);
        
        if ($career->career_image != "default.jpg") {
	        $file_name = explode(".", $career->career_image)[0];
		    return array_map('unlink', glob(FCPATH."upload/career/$file_name.*"));
        }
    }

    // mengambil total jumlah data
    public function getJumlahCareer(){
        return $this->db->get('ak_careers')->num_rows();
    }
}