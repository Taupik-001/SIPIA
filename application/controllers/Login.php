<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_login');
	}

	function index()
	{
		$data['title'] = 'Login Administrator | SIPIa - Sistem Informasi Pariwisata Indonesia';
		$this->load->view('login/v_login', $data);
	}

	function login()
	{
		// Get the username and password from the login form
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		// Get the user's data from the database
		$user = $this->m_login->get_admin_by_username($username);

		// Check if the user exists in the database
		if ($user) {
			// Verify the password against the stored hash and salt
			if (password_verify($password . $user['salt'], $user['password'])) {
				// Password is correct, so set up the user's session data
				$data_session = array(
					'nama' 	=>  $user['name'],
					'status' => "login"
				);
				$this->session->set_userdata($data_session);

				// Redirect to the dashboard
				redirect('dashboard');
			} else {
				// Password is incorrect, so show an error message
				echo "Password salah !";
			}
		} else {
			// User doesn't exist, so show an error message
			echo "Username tidak ditemukan !";
			redirect('home');
		}
	}



	function register()
	{
		// Get the username and password from the registration form
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		// Generate a salt for the bcrypt hash
		$salt = password_hash($username, PASSWORD_DEFAULT);

		// Hash the password using bcrypt with the generated salt
		$hashed_password = password_hash($password . $salt, PASSWORD_BCRYPT);

		// Set up the data array with the username, hashed password, and salt
		$data = array(
			'username' => $username,
			'password' => $hashed_password,
			'salt' => $salt
		);

		// Insert the user's data into the database
		$this->m_login->input_admin($data, 'tb_admin');

		// Redirect to the login page
		redirect('login');
	}
}
