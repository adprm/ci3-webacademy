<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class About_model extends CI_Model{
    private $_table = 'ak_abouts';

    public $about_id;
    public $about_title;
    public $about_image = 'default.jpg';
    public $about_desk;

    public function rules(){
        return
        [
            [
                'field' => 'about_title',
                'label' => 'About_title',
                'rules' => 'required'
            ],
            [
                'field' => 'about_desk',
                'label' => 'About_desk',
                'rules' => 'required'
            ]
        ];
    }

    // mengambil semua data pada table
    public function getAll(){
        return $this->db->get($this->_table)->result();
    }

    // mengambil data berdasarkan id
    public function getById($id){
        return $this->db->get_where($this->_table, ['about_id' => $id])->row();
    }

    public function save(){
        $post = $this->input->post();   // mengambil data dari form
        $this->about_id = uniqid();     // membuat id unik
        $this->about_title = $post['about_title'];   // isi field judul
        $this->about_image = $this->_uploadImage();
        $this->about_desk = $post['about_desk'];

        return $this->db->insert($this->_table, $this);
    }

    public function update(){
        $post = $this->input->post();
        $this->about_id = $post['about_id'];
        $this->about_title = $post['about_title'];
        
        // post image
        if (!empty($_FILES['about_image']['name'])) {
            $this->about_image = $this->_uploadImage();
        } else {
            $this->about_image = $post['old_image'];
        }

        $this->about_desk = $post['about_desk'];
        return $this->db->update($this->_table, $this, array('about_id' => $post['about_id']));
    }

    public function delete($id){
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array('about_id' => $id));
    }

    private function _uploadImage(){
        $config['upload_path']      = './upload/about';      // alamat lokasi file
        $config['allowed_types']    = 'gif|jpg|jpeg|png';   // format file
        $config['file_name']        = $this->about_id;       // nama file berdasakna id
        $config['overwrite']        = true;                 // menindih file yang sudah di upload saat edit data
        $config['max_size']         = 5000;                 // ukuran max upload
        // load library
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('about_image')) {
            return $this->upload->data('file_name');
        }

        return 'default.jpg';
    }

    private function _deleteImage($id){
        $about = $this->getById($id);
        
        if ($about->about_image != "default.jpg") {
	        $file_name = explode(".", $about->about_image)[0];
		    return array_map('unlink', glob(FCPATH."upload/about/$file_name.*"));
        }
    }

    // mengambil total jumlah data
    public function getJumlahAbout(){
        return $this->db->get('ak_abouts')->num_rows();
    }
}