<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Learning_model extends CI_Model{
    // hanya digunakan pada kelas ini
    private $_table = 'ak_learnings';
    // nama attribure harus sama besar kecil huruf pada table nya
    public $learning_id;
    public $learning_title;
    public $learning_image = 'default.jpg';
    public $learning_desk;

    // mengambil sebuah array yang berisi rules
    public function rules(){
        return
        [
            [
                'field' => 'learning_title',
                'label' => 'Learning_title',
                'rules' => 'required'
            ],
            [
                'field' => 'learning_desk',
                'label' => 'Learning_desk',
                'rules' => 'required'
            ]
        ];
    }

    // mengambil semua data pada table
    public function getAll(){
        return $this->db->get($this->_table)->result();
    }

    // mengambil sebudah data berdasarkan id
    public function getById($id){
        return $this->db->get_where($this->_table, ['learning_id' => $id])->row();
    }

    public function save(){
        $post = $this->input->post();   // ambil data dari form
        $this->learning_id = uniqid();  // membuat id unik
        $this->learning_title = $post['learning_title'];    // isi field judul
        $this->learning_image = $this->_uploadImage();  // isi field image
        $this->learning_desk = $post['learning_desk'];  // isi field desk

        return $this->db->insert($this->_table, $this);  // menyimpan file ke db
    }

    public function update(){
        $post = $this->input->post();
        $this->learning_id = $post['learning_id'];
        $this->learning_title = $post['learning_title'];

        // update image
        if (!empty($_FILES['learning_image']['name'])) {
            $this->learning_image = $this->_uploadImage();
        } else {
            $this->learning_image = $post['old_image'];
        }

        $this->learning_desk = $post['learning_desk'];
        return $this->db->update($this->_table, $this, array('learning_id' => $post['learning_id']));
    }

    public function delete($id){
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array('learning_id' => $id));
    }

    private function _uploadImage(){
        $config['upload_path']      = './upload/learning';  // alamat lokas file
        $config['allowed_types']    = 'gif|jpg|jpeg|png';   // format file
        $config['file_name']        = $this->learning_id;       // nama file berdasakna id
        $config['overwrite']        = true;                 // menindih file yang sudah di upload saat edit data
        $config['max_size']         = 5000;                 // ukuran max upload

        // load library
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('learning_image')) {
            return $this->upload->data('file_name');
        }

        return 'default.jpg';
    }

    private function _deleteImage($id){
        $learning = $this->getById($id);
        
        if ($learning->learning_image != "default.jpg") {
	        $file_name = explode(".", $learning->learning_image)[0];
		    return array_map('unlink', glob(FCPATH."upload/learning/$file_name.*"));
        }
    }

    // mengambil total jumlah data
    public function getJumlahLearning(){
        return $this->db->get('ak_learnings')->num_rows();
    }
}