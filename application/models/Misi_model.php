<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Misi_model extends CI_Model{
    private $_table = 'ak_misis';

    public $misi_desk;

    public function rules(){
        return
        [
            [
                'field' => 'misi_desk',
                'label' => 'Misi_desk',
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
        return $this->db->get_where($this->_table, ['misi_id' => $id])->row();
    }

    public function save(){
        $post = $this->input->post();   // mengambil data dari form
        $this->misi_id = uniqid();  // membuat id unik
        $this->misi_desk = $post['misi_desk'];  // isi field desk

        return $this->db->insert($this->_table, $this);
    }

    public function update(){
        $post = $this->input->post();
        $this->misi_id = $post['misi_id'];
        $this->misi_desk = $post['misi_desk'];

        return $this->db->update($this->_table, $this, array('misi_id' => $post['misi_id']));
    }

    public function delete($id){
        return $this->db->delete($this->_table, array('misi_id' => $id));
    }

    // mengambil total jumlah data
    public function getJumlahMisi(){
        return $this->db->get('ak_misis')->num_rows();
    }
}