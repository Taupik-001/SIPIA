<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
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
        $data['page'] = 'artikel';
        $data['title'] = 'SIPIa Artikel | Mari Mulai Perjalanan Wisata Anda';
        $data['wisata'] = $this->m_wisata->tampil_data()->result();
        $data['hotel'] = $this->m_hotel->tampil_data()->result();
        $data['kuliner'] = $this->m_kuliner->tampil_data()->result();
        // $data['wisata'] = $this->m_wisata->tampil_data()->result();
        $this->load->view('user/v_Header_Home', $data);
        $this->load->view('user/v_Navigation_Bar_Home');
        $this->load->view('kategori/v_kategori');
        $this->load->view('user/v_Footer_Home', $data);
    }

    public function wisata()
    {
        $data['page'] = 'wisata';
        $data['title'] = 'SIPIa Artikel Wisata | Mari Mulai Perjalanan Wisata Anda';
        $data['wisata'] = $this->m_wisata->tampil_data()->result();
        $this->load->view('user/v_Header_Home', $data);
        $this->load->view('user/v_Navigation_Bar_Home');
        $this->load->view('kategori/v_kategori_wisata');
        $this->load->view('user/v_Footer_Home', $data);
    }

    public function hotel()
    {
        $data['page'] = 'hotel';
        $data['title'] = 'SIPIa Artikel Hotel | Mari Mulai Perjalanan Wisata Anda';
        $data['hotel'] = $this->m_hotel->tampil_data()->result();
        $this->load->view('user/v_Header_Home', $data);
        $this->load->view('user/v_Navigation_Bar_Home');
        $this->load->view('kategori/v_kategori_hotel');
        $this->load->view('user/v_Footer_Home', $data);
    }

    public function kuliner()
    {
        $data['page'] = 'kuliner';
        $data['title'] = 'SIPIa Artikel Kuliner | Mari Mulai Perjalanan Wisata Anda';
        $data['kuliner'] = $this->m_kuliner->tampil_data()->result();
        $this->load->view('user/v_Header_Home', $data);
        $this->load->view('user/v_Navigation_Bar_Home');
        $this->load->view('kategori/v_kategori_kuliner');
        $this->load->view('user/v_Footer_Home', $data);
    }
}
