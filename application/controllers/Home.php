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
        $this->load->view('user/v_Header_Home', $data);
        $this->load->view('user/v_Navigation_Bar_Home', $data);
        $this->load->view('user/v_Home_Section', $data);
        $this->load->view('user/v_Featured_Articles', $data);
        $this->load->view('user/v_Popular_Articles', $data);
        $this->load->view('user/v_Frequently_Asked_Questions', $data);
        $this->load->view('user/v_Recommended_Articles', $data);
        $this->load->view('user/v_Footer_Home', $data);
    }
}
