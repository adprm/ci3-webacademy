<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Contact_model extends CI_Model{
    private $_table = 'ak_contacts';

    public $contact_id;
    public $contact_add;
    public $contact_phone;
    public $contact_email;

    public function rules(){
        return
        [
            [
                'field' => 'contact_add',
                'label' => 'Contact_add',
                'rules' => 'required'
            ],
            [
                'field' => 'contact_phone',
                'label' => 'Contact_phone',
                'rules' => 'required'
            ],
            [
                'field' => 'contact_email',
                'label' => 'Contact_email',
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
        return $this->db->get_where($this->_table, ['contact_id' => $id])->row();
    }

    public function save(){
        $post = $this->input->post();   // mengambil data dari form
        $this->contact_id = uniqid();   // membuat id unit
        $this->contact_add = $post['contact_add'];  // isi field address
        $this->contact_phone = $post['contact_phone'];  // isi field nomor telpon
        $this->contact_email = $post['contact_email'];  // isi field email

        return $this->db->insert($this->_table, $this);
    }

    public function update(){
        $post = $this->input->post();
        $this->contact_id = $post['contact_id'];
        $this->contact_add = $post['contact_add'];
        $this->contact_phone = $post['contact_phone'];
        $this->contact_email = $post['contact_email'];

        return $this->db->update($this->_table, $this, array('contact_id' => $post['contact_id']));
    }

    public function delete($id){
        return $this->db->delete($this->_table, array('contact_id' => $id));
    }

    // mengambil total jumlah data
    public function getJumlahContact(){
        return $this->db->get('ak_contacts')->num_rows();
    }
}