<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_aduan extends CI_model{
    function aduan(){
        $id = $this->session->userdata('id_user');
        $query = $this->db->query("SELECT * FROM tb_aduan WHERE id_user = '$id' ");

        return $query->result();
    }

    function distrik(){
        $query = $this->db->query("SELECT * FROM tb_distrik");

        return $query->result();
    }

    function user_fetch(){
        $user = $this->session->userdata('id_user');
        $query = $this->db->query("SELECT * FROM tb_user WHERE id_user = '$user' ");
        return $query->row_array();
    }

    function save_aduan($data)
    {
        $this->db->insert('tb_aduan',$data);
    }

    function detail_aduan($id){
        $query = $this->db->query("SELECT 
        id_aduan,
        nama,
        email,
        no_hp,
        judul_aduan,
        tb_distrik.distrik as distrik,
        kampung,
        terlapor,
        permasalahan,
        date_created,
        file_path 
        FROM tb_aduan 
        LEFT JOIN tb_distrik ON tb_aduan.id_distrik = tb_distrik.id_distrik 
        WHERE id_aduan = '$id' ");

        return $query->row_array();
    }
}