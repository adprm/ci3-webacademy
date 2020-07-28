<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Achievement_model extends CI_model{
    // hanya akan digunakan pada kelas ini
    private $_table = 'ak_achievements';
    // nama attribute harus sama besar kecil huruf pada table nya
    public $achievement_id;
    public $achievement_title;
    public $achievement_date;
    public $achievement_image = 'default.jpg';  // nilai default
    public $achievement_desk;

    // mengembalikan sebuah array yang  berisi rules
    public function rules(){
        return
        [
            [
                'field' => 'achievement_title',
                'label' => 'Achievement_title',
                'rules' => 'required'
            ],
            [
                'field' => 'achievement_date',
                'label' => 'Achievement_date',
                'rules' => 'date'
            ],
            [
                'field' => 'achievement_desk',
                'label' => 'Achievement_desk',
                'rules' => 'required'
            ]
        ];
    }

    // mengambl semua data pada tabel
    public function getAll(){
        return $this->db->get($this->_table)->result();
    }

    // mengambil sebuah data berdasarkan id
    public function getById($id){
        return $this->db->get_where($this->_table, ['achievement_id' => $id])->row();
    }

    public function save(){
        $post = $this->input->post();   //ambil data dari form
        $this->achievement_id = uniqid();   // membuat id unik
        $this->achievement_title = $post['achievement_title'];
        $this->achievement_date = $post['achievement_date'];
        $this->achievement_image = $this->_uploadImage();
        $this->achievement_desk = $post['achievement_desk'];

        return $this->db->insert($this->_table, $this);
    }

    public function update(){
        $post = $this->input->post();
        $this->achievement_id = $post['achievement_id'];
        $this->achievement_title = $post['achievement_title'];
        $this->achievement_date = $post['achievement_date'];

        // update gambar logic
        if (!empty($_FILES['achievement_image']['name'])) {
            $this->achievement_image = $this->_uploadImage();
        } else {
            $this->achievement_image = $post['old_image'];
        }

        $this->achievement_desk = $post['achievement_desk'];
        return $this->db->update($this->_table, $this, array('achievement_id' => $post['achievement_id']));
    }

    public function delete($id){
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array('achievement_id' => $id));
    }

    private function _uploadImage(){
        $config['upload_path']      = './upload/achievement';      // alamat lokasi file
        $config['allowed_types']    = 'gif|jpg|jpeg|png';   // format file
        $config['file_name']        = $this->achievement_id;       // nama file berdasakna id
        $config['overwrite']        = true;                 // menindih file yang sudah di upload saat edit data
        $config['max_size']         = 5000;                 // ukuran max upload
        // load library
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('achievement_image')) {
            return $this->upload->data('file_name');
        }

        return 'default.jpg';
    }

    private function _deleteImage($id){
        $achievement = $this->getById($id);
        
        if ($achievement->achievement_image != "default.jpg") {
	        $file_name = explode(".", $achievement->achievement_image)[0];
		    return array_map('unlink', glob(FCPATH."upload/achievement/$file_name.*"));
        }
    }

    // mengambil total jumlah data
    public function getJumlahAchievement(){
        return $this->db->get('ak_achievements')->num_rows();
    }
}