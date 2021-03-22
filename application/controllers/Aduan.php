<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aduan extends CI_Controller {
    function  __construct()
    {
        parent::__construct();
        $this->load->helper('form','url');
        $this->load->model('M_aduan');
    }

    public function index(){
        $data['title'] = 'Pengaduan';
        $data['aduan'] = $this->M_aduan->aduan();

        $this->template->load('frontend_site','page/aduan',$data);
    }

    public function create(){
        $data['title'] = 'Form Pengaduan';
        $this->template->load('frontend_site','page/c-aduan',$data);
    }
}