<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
  function  __construct()
  {
    parent::__construct();
    $this->load->helper('form','url');
    $this->load->model('M_register');
  }

  function index(){
    $data['title'] = 'Daftar Akun | e - Aduan';
    $this->load->view('page/register',$data);
  }

  public function Register_process()
  {
    $nama = $this->input->post('username');
    $nama_lengkap = $this->input->post('nama_lengkap');
    $sandi = md5($this->input->post('sandi'));
    $sandi_deskripsi = $this->input->post('sandi'); 
    $email = $this->input->post('email');
    $kontak = $this->input->post('no_telfon');
    $level = '3';

    $data = array(
        'nama'  => $nama,
        'nama_lengkap' => $nama_lengkap,
        'sandi' => $sandi,
        'sandi_deskripsi' => $sandi_deskripsi,
        'email' => $email,
        'kontak' => $kontak,
        'level'     => $level
    );

    if($data) {
        $this->M_register->create_akun($data);
        $this->session->set_flashdata("success","
            <div class='ui success message'>
                <i class='close icon'></i>
                <div class='header'>
                    Registrasi Berhasil, Silahkan Login!
                </div>
            </div>");
        redirect('Auth');
    } else {
        $this->session->set_flashdata("fail","
            <div class='ui negative message'>
                <i class='close icon'></i>
                <div class='header'>
                    Registrasi Gagal, Silahkan Periksa Kembali Data!
                </div>
            </div>");
        redirect('Auth');
    }
  }
}