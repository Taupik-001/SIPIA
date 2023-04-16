<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Artikel extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_hotel');
        $this->load->model('m_wisata');
        $this->load->model('m_kuliner');
        $this->load->helper('url');
    }

    public function wisata($urlwisata)
    {
        $where = array('url' => $urlwisata);
        $data['wisata'] = $this->m_wisata->get_data($where, 'tb_wisata')->result();

        $data['title'] = 'SIPIa | Mari Mulai Perjalanan Wisata Anda';
        
        $this->load->view('user/v_header', $data);
        $this->load->view('user/v_navbar');
        $this->load->view('user/v_artikel_wisata', $data);
        $this->load->view('user/v_footer', $data);
    }
    public function hotel($urlhotel)
    {
        $where = array('url' => $urlhotel);
        $data['hotel'] = $this->m_hotel->get_data($where, 'tb_hotel')->result();

        $data['title'] = 'SIPIa | Mari Mulai Perjalanan hotel Anda';
        
        $this->load->view('user/v_header', $data);
        $this->load->view('user/v_navbar');
        $this->load->view('user/v_artikel_hotel', $data);
        $this->load->view('user/v_footer', $data);
    }
    public function kuliner($urlkuliner)
    {
        $where = array('url' => $urlkuliner);
        $data['kuliner'] = $this->m_kuliner->get_data($where, 'tb_kuliner')->result();

        $data['title'] = 'SIPIa | Mari Mulai Perjalanan kuliner Anda';
        
        $this->load->view('user/v_header', $data);
        $this->load->view('user/v_navbar');
        $this->load->view('user/v_artikel_kuliner', $data);
        $this->load->view('user/v_footer', $data);
    }
}
