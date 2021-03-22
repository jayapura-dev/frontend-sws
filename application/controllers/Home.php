<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    function  __construct()
    {
      parent::__construct();
      $this->load->helper('form','url');
      $this->load->model('M_home');
    }

    public function index()
    {
        $data['title'] = 'Beranda | S P E';
        $this->template->load('frontend_site','page/home',$data);
    }
}