<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_hotel');
        $this->load->model('m_wisata');
        $this->load->model('m_kuliner');
        $this->load->helper('url');
    }
    public function index()
    {

        $data['wisata'] = $this->m_wisata->tampil_data()->result();
        $data['hotel'] = $this->m_hotel->tampil_data()->result();
        $data['kuliner'] = $this->m_kuliner->tampil_data()->result();
        $data['page'] = 'home';
        $data['title'] = 'SIPIA | Mari Mulai Perjalanan Wisata Anda';
        $this->load->view('user/v_header', $data);
        $this->load->view('user/v_navbar', $data);
        $this->load->view('user/v_home', $data);
        $this->load->view('user/v_visi_misi', $data);
        $this->load->view('user/v_data_artikel', $data);
        $this->load->view('user/v_artikel', $data);
        $this->load->view('user/v_pertanyaan', $data);
        $this->load->view('user/v_footer', $data);
    }
}
