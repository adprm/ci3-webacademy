<?php

class User_model extends CI_Model{
    private $_table = 'users';

    public function doLogin(){
        $post = $this->input->post();

        // mencari user berdasarkan id dan email
        $this->db->where('email', $post['email'])->or_where('username', $post['email']);
        $user = $this->db->get($this->_table)->row();

        // jika user terdaftar
        if($user){
            // memeriksa password
            $isPasswordTrue = password_verify($post['password'], $user->password);
            // periksa role nya
            $isAdmin = $user->role == 'admin';

            // jika password dan user admin
            if  ($isPasswordTrue && $isAdmin) {
                $this->session->set_userdata(['user_logged' => $user]);
                $this->_updateLastLogin($user->user_id);
                return true;
            }
        }

        // login gagal
        return false;
    }

    public function isNotLogin(){
        return $this->session->userdata('user_logged') === null;
    }

    private function _updateLastLogin($user_id){
    $sql = "UPDATE {$this->_table} SET last_login=now() WHERE user_id={$user_id}";
    $this->db->query($sql);
    }

    // mengambil total jumlah data
    public function getJumlahUser(){
        return $this->db->get('users')->num_rows();
    }
}