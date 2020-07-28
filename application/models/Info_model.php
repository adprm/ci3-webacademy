<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Info_model extends CI_Model{
    // hanya akan digunakan pada kelas ini
    private $_table = 'ak_infos';
    // nama attribute harus sama besar kecil huruf pada table nya
    public $info_id;
    public $info_title;
    public $info_date;
    public $info_image = 'default.jpg';     // nilai default
    public $info_desk;

    // mengembalikan sebuah array yang berisi rules
    public function rules(){
        return 
        [
            [
                'field' => 'info_title',
                'label' => 'Info_title',
                'rules' => 'required'
            ],
            [
                'field' => 'info_date',
                'label' => 'Info_date',
                'rules' => 'date'
            ],
            [
                'field' => 'info_desk',
                'label' => 'Info_desk',
                'rules' => 'required'
            ]
        ];
    }

    // mengambil semua data pada tabel
    public function getAll(){
        return $this->db->get($this->_table)->result();
    }

    // mengambil sebuah data berdasarkan id
    public function getById($id){
        return $this->db->get_where($this->_table, ['info_id' => $id])->row();
    }

    public function save(){
        $post = $this->input->post();               // ambil data dari form
        $this->info_id = uniqid();                  // membuat id unik
        $this->info_title = $post['info_title'];    // isi field judul
        $this->info_date = $post['info_date'];      // isi field tanggal
        $this->info_image = $this->_uploadImage();
        $this->info_desk = $post['info_desk'];      // isi field deskripsi

        return $this->db->insert($this->_table, $this); // menyimpan kedatabase
    }

    public function update(){
        $post = $this->input->post();
        $this->info_id = $post["info_id"];
        $this->info_title = $post["info_title"];
        $this->info_date = $post["info_date"];

        // update gambar logic
        if (!empty($_FILES['info_image']['name'])) {
            $this->info_image = $this->_uploadImage();
        } else {
            $this->info_image = $post['old_image'];
        }

        $this->info_desk = $post["info_desk"];
        return $this->db->update($this->_table, $this, array('info_id' => $post['info_id']));
    }

    public function delete($id){
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array('info_id' => $id));
    }

    private function _uploadImage(){
        $config['upload_path']      = './upload/info';      // alamat lokasi file
        $config['allowed_types']    = 'gif|jpg|jpeg|png';   // format file
        $config['file_name']        = $this->info_id;       // nama file berdasakna id
        $config['overwrite']        = true;                 // menindih file yang sudah di upload saat edit data
        $config['max_size']         = 5000;                 // ukuran max upload
        // load library
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('info_image')) {
            return $this->upload->data('file_name');
        }

        return 'default.jpg';
    }

    private function _deleteImage($id){
        $info = $this->getById($id);
        
        if ($info->info_image != "default.jpg") {
	        $file_name = explode(".", $info->info_image)[0];
		    return array_map('unlink', glob(FCPATH."upload/info/$file_name.*"));
        }
    }

    // mengambil total jumlah data
    public function getJumlahInfo(){
        return $this->db->get('ak_infos')->num_rows();
    }
}