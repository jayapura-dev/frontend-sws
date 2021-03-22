<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_register extends CI_model{
    function create_akun($data){
        $this->db->insert('tb_user',$data);
    }
}