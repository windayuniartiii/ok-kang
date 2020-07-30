<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}
	public function index()
	{
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		$data['judul'] = "OKE+KANG | User Login";
		if ($this->form_validation->run() == false) {
		$this->load->view('templates/header_login',$data);
		$this->load->view('auth/login');
		$this->load->view('templates/footer_user');
		} else {
			//validasi sukse
			$this->_login();
		}
		
		
	}

	private function _login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$users = $this->db->get_where('users', ['email' => $email])->row_array();
		//jika usernya ada
		if($users) {
			if($users['is_active'] == 1) {
				//cek password
				if(password_verify($password, $users['password'])) {
					$data = [
						'email' => $users['email'],
						'role_id' => $users['role_id'],
						'id' => $users['id']
					];
					$this->session->set_userdata($data);
					redirect('users');
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
  					Password anda salah!
					</div>');
					redirect('auth');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
  				Email anda belum diaktifkan!
				</div>');
				redirect('auth');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
  			Email anda belum terdaftar!
			</div>');
			redirect('auth');
		}
	}

	public function register()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[users.email]', [
			'is_unique' => 'This email has already registered!'
		]);

		$data['judul'] = "OKE+KANG | User Registration";
		if ( $this->form_validation->run() == false) {
		$this->load->view('templates/header_login',$data);
		$this->load->view('auth/register');
		$this->load->view('templates/footer_user');
		} else {
			$data = [
				'nama' => htmlspecialchars($this->input->post('nama', true)),
				'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
				'email' => htmlspecialchars($this->input->post('email', true)),
				'role_id' => 2,
				'is_active' => 1,
				'date_created' => time(),
				'image' => 'default.jpg'
			];

			$this->db->insert('users', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
  			Selamat! Akun anda telah dibuat. Silahkan Login terlebih dahulu
			</div>');
			redirect('auth');
		}
		
	}

	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role_id');

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
  			Anda telah logout!
			</div>');
			redirect('auth');
	}
}