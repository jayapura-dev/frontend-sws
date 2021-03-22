<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_aduan extends CI_model{
    function aduan(){
        $id = $this->session->userdata('id_user');
        $query = $this->db->query("SELECT * FROM tb_aduan WHERE id_user = '$id' ");

        return $query->result();
    }
}