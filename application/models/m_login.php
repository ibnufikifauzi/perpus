<?php

class M_login extends CI_Model{

    public function proses_login($user,$pass)
    {
        $password = md5($pass);
        $user = $this->db->where('username', $user);
        $pass = $this->db->where('password', $pass);
        $query = $this->db->get('login');
        if($query->num_rows()>0) {
            foreach ($query->result() as $row) {
                $sess = array(
                    'id'        => $row->id,
                    'nama'      => $row->nama,
                    'username'  => $row->username,
                    'password'  => $row->password,
                    'level'     => $row->level
                );
                $this->session->set_userdata($sess);
            }
            redirect('dashboard');
        }else{
            $this->session->set_flashdata('info','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Periksa Kembali Username dan Password Anda !
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
        }
        redirect('login');
    }
}