<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Visi_model extends CI_Model{
    private $_table = 'ak_visis';

    public $visi_desk;

    public function rules(){
        return
        [
            [
                'field' => 'visi_desk',
                'label' => 'Visi_desk',
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
        return $this->db->get_where($this->_table, ['visi_id' => $id])->row();
    }

    public function save(){
        $post = $this->input->post();   // mengambil data dari form
        $this->visi_id = uniqid();  // membuat id unik
        $this->visi_desk = $post['visi_desk'];  // isi field desk

        return $this->db->insert($this->_table, $this);
    }

    public function update(){
        $post = $this->input->post();
        $this->visi_id = $post['visi_id'];
        $this->visi_desk = $post['visi_desk'];

        return $this->db->update($this->_table, $this, array('visi_id' => $post['visi_id']));
    }

    public function delete($id){
        return $this->db->delete($this->_table, array('visi_id' => $id));
    }

    // mengambil total jumlah data
    public function getJumlahVisi(){
        return $this->db->get('ak_visis')->num_rows();
    }
}