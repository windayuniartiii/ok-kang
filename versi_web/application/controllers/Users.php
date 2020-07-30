<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller 
{
	public function index(){
		$data['judul'] = "OKE+KANG | Halaman Utama";
		$data['users'] = $this->db->get_where('users', ['email' =>
		$this->session->userdata('email')])->row_array();
		
		$this->load->view('templates/header', $data);
		$this->load->view('users/index', $data);
		$this->load->view('templates/footer');
	}
	public function profile(){
		$data['judul'] = "OKE+KANG | My Profile";
		$data['users'] = $this->db->get_where('users', ['email' =>
		$this->session->userdata('email')])->row_array();
		$data['user_role'] = $this->db->get_where('user_role', ['id' =>
		$this->session->userdata('role_id')])->row_array();
		
		$this->load->view('templates/header', $data);
		$this->load->view('users/profile', $data);
		$this->load->view('templates/footer');
	}

}