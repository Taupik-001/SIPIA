<?php

class Wisata extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_wisata');
		$this->load->model('m_wisata_jenis');
		$this->load->model('m_kabupaten_kota');
		$this->load->model('m_provinsi');
		$this->load->helper('url');
		if ($this->session->userdata('status') != "login") {
			redirect(base_url("home"));
		}
	}

	function index()
	{
		$data['wisata'] = $this->m_wisata->tampil_data()->result();
		$data['nama'] = $this->session->userdata('nama');
		$data['title'] = 'Wisata | SIPIa - Sistem Informasi Pariwisata Indonesia';
		$data["page"] = "Wisata";
		$data["pageTre"] = "none";
		$this->load->view('templates/header_admin', $data);
		$this->load->view('templates/header_main');
		$this->load->view('templates/sidebar_main');
		$this->load->view('wisata/v_wisata', $data);
		$this->load->view('templates/footer_copyright');
		$this->load->view('templates/footer_admin');
	}

	// Halaman Wisata Untuk Menambahkan data
	function input()
	{
		$data['kabupaten_kota'] = $this->m_kabupaten_kota->tampil_data()->result();
		$data['wisata_jenis'] = $this->m_wisata_jenis->tampil_data()->result();
		$data['provinsi'] = $this->m_provinsi->tampil_data()->result();
		$data['nama'] = $this->session->userdata('nama');
		$data['title'] = 'Input Wisata | SIPIa - Sistem Informasi Pariwisata Indonesia';
		$data["page"] = "Wisata";
		$data["pageTre"] = "none";
		$this->load->view('templates/header_admin', $data);
		$this->load->view('templates/header_main');
		$this->load->view('templates/sidebar_main', $data);
		$this->load->view('wisata/v_wisata_input', $data);
		$this->load->view('templates/footer_copyright');
		$this->load->view('templates/footer_admin');
	}

	// Data Wisata Untuk Menambahkan data
	function input_action()
	{
		$this->load->library('upload');
		$nmfile = "zfile_" . time(); //nama file saya beri nama langsung dan diikuti fungsi time
		$config['upload_path'] = './assets/images/wisata/'; //path folder
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
		$config['max_size'] = '4048'; //maksimum besar file 2M
		$config['max_width']  = '6238'; //lebar maksimum 1288 px
		$config['max_height']  = '3288'; //tinggi maksimu 768 px
		$config['file_name'] = $nmfile; //nama yang terupload nantinya

		$this->upload->initialize($config);

		$nama_kabupaten_kota = $this->input->post('nama_kabupaten_kota');
		$nama_provinsi = $this->input->post('nama_provinsi');
		$nama_wisata = $this->input->post('nama_wisata');
		$jenis_wisata = $this->input->post('jenis_wisata');
		$harga_tiket = $this->input->post('harga_tiket');
		$jam_buka = $this->input->post('jam_buka');
		$jam_tutup = $this->input->post('jam_tutup');
		$alamat = $this->input->post('alamat');
		$no_telp = $this->input->post('no_telp');
		$no_wa = $this->input->post('no_wa');
		$instagram = $this->input->post('instagram');
		$facebook = $this->input->post('facebook');
		$email = $this->input->post('email');
		$website = $this->input->post('website');
		$maps = $this->input->post('maps');
		$foto = $this->input->post('foto');
		$video = $this->input->post('video');
		$keterangan = $this->input->post('keterangan');
		$judul_utama = $this->input->post('judul_utama');
		$url = $this->input->post('url');

		$tanggal = date('d');

		$bulan = date('m');
		if ($bulan == 03) {
			$bulan = "Maret";
		}
		if ($bulan == 04) {
			$bulan = "April";
		}
		if ($bulan == 05) {
			$bulan = "Mei";
		}
		if ($bulan == 06) {
			$bulan = "Juni";
		}
		if ($bulan == 07) {
			$bulan = "Juli";
		}
		$tahun = date("20" . 'y');

		if ($_FILES['filefoto']['name']) {
			if ($this->upload->do_upload('filefoto')) {
				$gbr = $this->upload->data();
				$data = array(
					'nama_kabupaten_kota' => $nama_kabupaten_kota,
					'nama_provinsi' => $nama_provinsi,
					'nama_wisata' => $nama_wisata,
					'jenis_wisata' => $jenis_wisata,
					'harga_tiket' => $harga_tiket,
					'jam_buka' => $jam_buka,
					'jam_tutup' => $jam_tutup,
					'alamat' => $alamat,
					'no_telp' => $no_telp,
					'no_wa' => $no_wa,
					'instagram' => $instagram,
					'facebook' => $facebook,
					'email' => $email,
					'website' => $website,
					'maps' => $maps,
					'foto' => $gbr['file_name'],
					'video' => $video,
					'judul_utama' => $judul_utama,
					'url' => $url,
					'tanggal' => $tanggal,
					'bulan' => $bulan,
					'tahun' => $tahun,
					'keterangan' => $keterangan
				);
				$this->m_wisata->input_wisata($data, 'tb_wisata');
				$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Upload gambar berhasil !!</div></div>");
				redirect('wisata'); //jika berhasil maka akan ditampilkan view vupload
			} else {
				$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Gagal upload gambar !!</div></div>");
				redirect('wisata/input'); //jika gagal maka akan ditampilkan form upload
			}
		}
	}

	// Halaman Wisata Untuk Mengedit data masing masing wisata yang dikategorikan berdasarkan id
	function edit($id)
	{
		$where = array('id' => $id);
		$data['wisata'] = $this->m_wisata->edit_data($where, 'tb_wisata')->result();
		$data['wisata_jenis'] = $this->m_wisata_jenis->tampil_data()->result();
		$data['kabupaten_kota'] = $this->m_kabupaten_kota->tampil_data()->result();
		$data['provinsi'] = $this->m_provinsi->tampil_data()->result();
		$data['nama'] = $this->session->userdata('nama');
		$data['title'] = 'Edit Wisata | SIPIa - Sistem Informasi Pariwisata Indonesia';
		$data["page"] = "Wisata";
		$data["pageTre"] = "none";
		$this->load->view('templates/header_admin', $data);
		$this->load->view('templates/header_main');
		$this->load->view('templates/sidebar_main', $data);
		$this->load->view('wisata/v_wisata_edit', $data);
		$this->load->view('templates/footer_copyright');
		$this->load->view('templates/footer_admin');
	}

	// data Wisata Untuk Mengedit data masing masing wisata yang dikategorikan berdasarkan id
	function edit_action()
	{
		$this->load->library('upload'); // library dapat di load di fungsi , di autoload atau di construc nya tinggal pilih salah satunya
		$nmfile = "zfile_" . time(); //nama file saya beri nama langsung dan diikuti fungsi time
		$path   = './assets/images/wisata/'; //path folder
		$config['upload_path'] = $path; //variabel path untuk config upload
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
		$config['max_size'] = '4048'; //maksimum besar file 2M
		$config['max_width']  = '5288'; //lebar maksimum 1288 px
		$config['max_height']  = '2268'; //tinggi maksimu 768 px
		$config['file_name'] = $nmfile; //nama yang terupload nantinya

		$this->upload->initialize($config);

		$id      = $this->input->post('id'); /* variabel id gambar */
		$nama_kabupaten_kota = $this->input->post('nama_kabupaten_kota');
		$nama_provinsi = $this->input->post('nama_provinsi');
		$nama_wisata = $this->input->post('nama_wisata');
		$jenis_wisata = $this->input->post('jenis_wisata');
		$harga_tiket = $this->input->post('harga_tiket');
		$jam_buka = $this->input->post('jam_buka');
		$jam_tutup = $this->input->post('jam_tutup');
		$alamat = $this->input->post('alamat');
		$no_telp = $this->input->post('no_telp');
		$no_wa = $this->input->post('no_wa');
		$instagram = $this->input->post('instagram');
		$facebook = $this->input->post('facebook');
		$email = $this->input->post('email');
		$website = $this->input->post('website');
		$maps = $this->input->post('maps');
		$foto = $this->input->post('foto');
		$video = $this->input->post('video');
		$url = $this->input->post('url');
		$judul_utama = $this->input->post('judul_utama');
		$keterangan = $this->input->post('keterangan');
		$filelama   = $this->input->post('filelama'); /* variabel file gambar lama */

		$tanggal = date('d');

		$bulan = date('m');
		if ($bulan == 03) {
			$bulan = "Maret";
		}
		if ($bulan == 04) {
			$bulan = "April";
		}
		if ($bulan == 05) {
			$bulan = "Mei";
		}
		if ($bulan == 06) {
			$bulan = "Juni";
		}
		if ($bulan == 07) {
			$bulan = "Juli";
		}
		$tahun = date("20" . 'y');

		if ($_FILES['filefoto']['name']) {
			if ($this->upload->do_upload('filefoto')) {
				$gbr = $this->upload->data();
				$data = array(
					'nama_kabupaten_kota' => $nama_kabupaten_kota,
					'nama_provinsi' => $nama_provinsi,
					'nama_wisata' => $nama_wisata,
					'jenis_wisata' => $jenis_wisata,
					'harga_tiket' => $harga_tiket,
					'jam_buka' => $jam_buka,
					'jam_tutup' => $jam_tutup,
					'alamat' => $alamat,
					'no_telp' => $no_telp,
					'no_wa' => $no_wa,
					'instagram' => $instagram,
					'facebook' => $facebook,
					'email' => $email,
					'website' => $website,
					'maps' => $maps,
					'video' => $video,
					'keterangan' => $keterangan,
					'url' => $url,
					'tanggal' => $tanggal,
					'bulan' => $bulan,
					'tahun' => $tahun,
					'judul_utama' => $judul_utama,
					'foto' => $gbr['file_name']
				);

				@unlink($path . $filelama); //menghapus gambar lama, variabel dibawa dari form

				$where = array('id' => $id); //array where query sebagai identitas pada saat query dijalankan
				$this->m_wisata->get_update($data, $where); //akses model untuk menyimpan ke database

				$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Edit dan Upload gambar berhasil !!</div></div>"); //pesan yang muncul jika berhasil diupload pada session flashdata
				redirect('wisata'); //jika berhasil maka akan ditampilkan view vupload

			} else {  /* jika upload gambar gagal maka akan menjalankan skrip ini */
				$er_upload = $this->upload->display_errors(); /* untuk melihat error uploadnya apa */
				//pesan yang muncul jika terdapat error dimasukkan pada session flashdata
				$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Gagal edit dan upload gambar !! " . $er_upload . "</div></div>");
				redirect('wisata/edit'); //jika gagal maka akan ditampilkan form upload
			}
		} else { /* jika file foto tidak ada maka query yg dijalankan adalah skrip ini  */
			$data = array(
				'nama_kabupaten_kota' => $this->input->post('nama_kabupaten_kota'),
				'nama_provinsi' => $this->input->post('nama_provinsi'),
				'nama_wisata' => $this->input->post('nama_wisata'),
				'jenis_wisata' => $this->input->post('jenis_wisata'),
				'harga_tiket' => $this->input->post('harga_tiket'),
				'jam_buka' => $this->input->post('jam_buka'),
				'jam_tutup' => $this->input->post('jam_tutup'),
				'alamat' => $this->input->post('alamat'),
				'no_telp' => $this->input->post('no_telp'),
				'no_wa' => $this->input->post('no_wa'),
				'instagram' => $this->input->post('instagram'),
				'facebook' => $this->input->post('facebook'),
				'email' => $this->input->post('email'),
				'website' => $this->input->post('website'),
				'maps' => $this->input->post('maps'),
				'video' => $this->input->post('video'),
				'url' => $this->input->post('url'),
				'tanggal' => $tanggal,
				'bulan' => $bulan,
				'tahun' => $tahun,
				'judul_utama' => $this->input->post('judul_utama'),
				'keterangan' => $this->input->post('keterangan')
			);

			$where = array('id' => $id); //array where query sebagai identitas pada saat query dijalankan
			$this->m_wisata->get_update($data, $where); //akses model untuk menyimpan ke database

			$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Berhasil edit, Gambar tidak ada diupload !!</div></div>");
			redirect('wisata'); /* jika berhasil maka akan kembali ke home upload */
		}
	}

	function hapus($id_wisata)
	{
		$where = array('id' => $id_wisata);
		$this->m_wisata->hapus_data($where, 'tb_wisata');
		redirect('wisata');
	}
}
