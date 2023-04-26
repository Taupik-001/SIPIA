<?php

class Dashboard extends CI_Controller
{

	//Load data dari database dengan fungsi construct
	function __construct()
	{
		parent::__construct();
		//Ambil pengolahan data dari model
		$this->load->model('m_kabupaten_kota');
		$this->load->model('m_provinsi');
		$this->load->model('m_hotel');
		$this->load->model('m_wisata');
		$this->load->model('m_kuliner');
		//Cek session apakah user sudah login atau belum
		// jika belum maka diarahkan ke halaman form login kembali
		if ($this->session->userdata('status') != "login") {
			redirect(base_url("login"));
		}
	}

	//Fungsi menampilkan halaman awal
	function index()
	{
		$data['hotel_count'] = $this->m_hotel->get_count();
		$data['wisata_count'] = $this->m_wisata->get_count();
		$data['kuliner_count'] = $this->m_kuliner->get_count();
		$data['provinsi_count'] = $this->m_provinsi->get_count();
		$data['kabupaten_count'] = $this->m_kabupaten_kota->get_count_kabupaten();
		$data['kota_count'] = $this->m_kabupaten_kota->get_count_kota();
		$data['nama'] = $this->session->userdata('nama');
		$data["page"] = "Dashboard";
		$data["pageTre"] = "none";
		$data['title'] = 'Dashboard | SIPIa - Sistem Informasi Pariwisata Indonesia';
		$this->load->view('templates/header_admin', $data);
		$this->load->view('templates/header_main');
		$this->load->view('templates/sidebar_main', $data);
		$this->load->view('backend/v_dashboard', $data);
		$this->load->view('templates/footer_copyright');
		$this->load->view('templates/footer_admin');
	}

	//Fungsi untuk logout
	function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}
