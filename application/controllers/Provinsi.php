<?php

class Provinsi extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_provinsi');
		$this->load->helper('url');
		if ($this->session->userdata('status') != "login") {
			redirect(base_url("home"));
		}
	}

	function index()
	{
		$data['provinsi'] = $this->m_provinsi->tampil_data()->result();
		$data['title'] = 'SIPIa Provinsi';
		$this->load->view('templates/header_admin', $data);
		$this->load->view('templates/header_main');
		// $this->load->view('templates/sidebar_main');
		$this->load->view('backend/v_provinsi', $data);
		$this->load->view('templates/footer_copyright');
		$this->load->view('templates/sidebar_control');
		$this->load->view('templates/footer_admin');
	}

	function input()
	{
		$data['provinsi'] = $this->m_provinsi->tampil_data()->result();
		$data['title'] = 'SIPIa Input Provinsi';
		$this->load->view('templates/header_admin', $data);
		$this->load->view('templates/header_main');
		$this->load->view('templates/sidebar_control');
		$this->load->view('templates/sidebar_main');
		$this->load->view('backend/v_provinsi_input', $data);
		$this->load->view('templates/footer_copyright');
		$this->load->view('templates/footer_admin');
	}

	function input_action()
	{
		$this->load->library('upload');
		$file_name = "zfile_" . time(); //nama file saya beri nama langsung dan diikuti fungsi time
		$config['upload_path'] = './assets/images/provinsi/'; //path folder
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
		$config['max_size'] = '4048'; //maksimum besar file 2M
		$config['max_width']  = '6238'; //lebar maksimum 1288 px
		$config['max_height']  = '3288'; //tinggi maksimu 768 px
		$config['file_name'] = $file_name; //nama yang terupload nantinya

		$this->upload->initialize($config);

		$nama_provinsi = $this->input->post('nama_provinsi');
		$foto = $this->input->post('foto');

		if ($_FILES['filefoto']['name']) {
			if ($this->upload->do_upload('filefoto')) {
				$gbr = $this->upload->data();
				$data = array(
					'nama_provinsi' => $nama_provinsi,
					'foto' => $gbr['file_name']
				);
				$this->m_provinsi->input_provinsi($data, 'tb_provinsi');
				$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Upload gambar berhasil !!</div></div>");
				redirect('provinsi'); //jika berhasil maka akan ditampilkan view vupload
			} else {
				$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Gagal upload gambar !!</div></div>");
				redirect('provinsi/input'); //jika gagal maka akan ditampilkan form upload
			}
		}
	}

	function edit($id)
	{
		$where = array('id' => $id);
		$data['provinsi'] = $this->m_provinsi->edit_data($where, 'tb_provinsi')->result();
		$data['title'] = 'SIPIa Edit Provinsi';
		$this->load->view('templates/header_admin', $data);
		$this->load->view('templates/header_main');
		$this->load->view('templates/sidebar_control');
		$this->load->view('templates/sidebar_main');
		$this->load->view('backend/v_provinsi_edit', $data);
		$this->load->view('templates/footer_copyright');
		$this->load->view('templates/footer_admin');
	}

	function edit_action()
	{

		$this->load->library('upload'); // library dapat di load di fungsi , di autoload atau di construc nya tinggal pilih salah satunya
		$nmfile = "zfile_" . time(); //nama file saya beri nama langsung dan diikuti fungsi time
		$path   = './assets/images/provinsi/'; //path folder
		$config['upload_path'] = $path; //variabel path untuk config upload
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
		$config['max_size'] = '4048'; //maksimum besar file 2M
		$config['max_width']  = '5288'; //lebar maksimum 1288 px
		$config['max_height']  = '2268'; //tinggi maksimu 768 px
		$config['file_name'] = $nmfile; //nama yang terupload nantinya

		$this->upload->initialize($config);

		$id      = $this->input->post('id'); /* variabel id gambar */
		$nama_provinsi = $this->input->post('nama_provinsi');
		$foto = $this->input->post('foto');
		$filelama   = $this->input->post('filelama'); /* variabel file gambar lama */

		if ($_FILES['filefoto']['name']) {
			if ($this->upload->do_upload('filefoto')) {
				$gbr = $this->upload->data();
				$data = array(
					'nama_provinsi' => $nama_provinsi,
					'foto' => $gbr['file_name']
				);

				@unlink($path . $filelama); //menghapus gambar lama, variabel dibawa dari form

				$where = array('id' => $id); //array where query sebagai identitas pada saat query dijalankan
				$this->m_provinsi->get_update($data, $where); //akses model untuk menyimpan ke database

				$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Edit dan Upload gambar berhasil !!</div></div>"); //pesan yang muncul jika berhasil diupload pada session flashdata
				redirect('provinsi'); //jika berhasil maka akan ditampilkan view vupload

			} else {  /* jika upload gambar gagal maka akan menjalankan skrip ini */
				$er_upload = $this->upload->display_errors(); /* untuk melihat error uploadnya apa */
				//pesan yang muncul jika terdapat error dimasukkan pada session flashdata
				$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Gagal edit dan upload gambar !! " . $er_upload . "</div></div>");
				redirect('provinsi/edit'); //jika gagal maka akan ditampilkan form upload
			}
		} else { /* jika file foto tidak ada maka query yg dijalankan adalah skrip ini  */
			$data = array(
				'nama_provinsi' => $this->input->post('nama_provinsi'),
			);

			$where = array('id' => $id); //array where query sebagai identitas pada saat query dijalankan
			$this->m_provinsi->get_update($data, $where); //akses model untuk menyimpan ke database

			$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Berhasil edit, Gambar tidak ada diupload !!</div></div>");
			redirect('provinsi'); /* jika berhasil maka akan kembali ke home upload */
		}
	}

	function hapus($id_provinsi)
	{
		$where = array('id' => $id_provinsi);
		$this->m_provinsi->hapus_data($where, 'tb_provinsi');
		redirect('provinsi/index');
	}
}
