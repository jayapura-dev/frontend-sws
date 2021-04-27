<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aduan extends CI_Controller {
    function  __construct()
    {
        parent::__construct();
        $this->load->helper('form','url');
        $this->load->model('M_aduan');
        $this->load->library(array('upload','session'));
    }

    public function index(){
        $data['title'] = 'Pengaduan';
        $data['aduan'] = $this->M_aduan->aduan();

        $this->template->load('frontend_site','page/aduan',$data);
    }

    public function create_aduan(){
        $data['title'] = 'Form Pengaduan';
        $data['distrik'] = $this->M_aduan->distrik();
        $data['user'] = $this->M_aduan->user_fetch();
        $this->template->load('frontend_site','page/add-aduan',$data);
    }

    function send_aduan(){
        $config['upload_path'] = './file/attachment';
		$config['allowed_types'] = 'pdf';
        $config['encrypt_name'] = TRUE;
        $config['overwrite'] = TRUE;
		//$config['max_width']  = 1024*5;
		//$config['max_height']  = 768*5;
        $config['max_size'] = 1024*15;

        $this->upload->initialize($config);

        if ( ! $this->upload->do_upload('file_path')){
            $file_path = "";
			$this->session->set_flashdata(
                "error",
                "<div class='alert alert-danger fade in'>
                    <a href='#' class='close' data-dismiss='alert'>&times;</a>
                    <strong>error !</strong> Periksa File Upload Apakah Sudah Sesuai Ketentuan!
                </div>"
            );

            redirect('Aduan/create_aduan');
        } else{
			$file_path = $this->upload->file_name;

            $id_user = $this->input->post('id_user');
            $nama = $this->input->post('nama');
            $no_hp = $this->input->post('kontak');
            $email = $this->input->post('email');
            $judul_aduan = $this->input->post('judul_aduan');
            $id_distrik = $this->input->post('id_distrik');
            $kampung = $this->input->post('kampung');
            $permasalahan = $this->input->post('permasalahan');
            $terlapor = $this->input->post('terlapor');
            $anonim = $this->input->post('anonim');
            $date_created = $this->input->post('date_created');

            $data = array(
                'id_user' => $id_user,
                'nama'  => $nama,
                'no_hp' => $no_hp,
                'email' => $email,
                'judul_aduan'   => $judul_aduan,
                'id_distrik'  => $id_distrik,
                'kampung' => $kampung,
                'permasalahan' => $permasalahan,
                'terlapor' => $terlapor,
                'anonim'    => $anonim,
                'date_created' => $date_created,
                'file_path' => $file_path
            );

            if($data){
                $this->M_aduan->save_aduan($data);
                $this->session->set_flashdata(
                    "simpan",
                    "<div class='alert alert-success fade in'>
                        <a href='#' class='close' data-dismiss='alert'>&times;</a>
                        <strong>Success !</strong> Aduan Telah Dikirim!
                    </div>"
                );

                redirect('Aduan');
            } else {
                $this->session->set_flashdata(
                    "simpan",
                    "<div class='alert alert-danger fade in'>
                        <a href='#' class='close' data-dismiss='alert'>&times;</a>
                        <strong>Success !</strong> Periksa Data Aduan Anda!
                    </div>"
                );
            }
        }
    }

    public function detail_aduan($id){
        $data['title'] = 'Detail Aduan Anda';
        $data['detail'] = $this->M_aduan->detail_aduan($id);

        $this->template->load('frontend_site','page/detail_aduan',$data);
    }

    public function petunjuk(){
        $data['title'] = 'Petunjuk Penulisan Pengaduan';
        $this->template->load('frontend_site','page/petunjuk',$data);
    }
}