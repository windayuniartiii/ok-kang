<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paket extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data['judul'] = 'Daftar Paket';
		$data['users'] = $this->db->get_where('users', ['email' =>
		$this->session->userdata('email')])->row_array();
		$data['paket'] = $this->db->get_where('paket', ['id' =>
		$this->session->userdata('id')]);
		$data['transaksi'] = $this->db->get_where('tabel_transaksi', ['id' =>
		$this->session->userdata('id')]);
		$data['no'] = 1;
		$this->load->view('templates/header',$data);
		$this->load->view('paket/index',$data);
		$this->load->view('templates/footer');
	}
	public function paketkecil()
	{
		$data['users'] = $this->db->get_where('users', ['email' =>
		$this->session->userdata('email')])->row_array();		
		$data['tanggal'] = date("Y-m-d H:i:s");
		$data['judul'] = 'Form Paket Kecil';
		$data['harga'] = 200000;
		$data['jumlah'] = $this->db->count_all_results('tabel_transaksi')+1;

		$this->form_validation->set_rules('permintaan', 'permintaan', 'required|trim');

		if ( $this->form_validation->run() == false) {
			$this->load->view('templates/header', $data);
			$this->load->view('paket/paketkecil/index', $data);
			$this->load->view('templates/footer');
		} else {
			$data = [
				'id' => $this->input->post('id'),
				'id_paket' => $this->input->post('id_paket'),
				'id_jenis_paket' => $this->input->post('id_jenis_paket'),
				'jumlah_tukang' => $this->input->post('jumlah_tukang'),
				'harga' => $this->input->post('harga'),
				'permintaan' => $this->input->post('permintaan'),
			];

			$dataa = [
				'kode_transaksi' => $this->input->post('kode_transaksi'),
				'id' => $this->input->post('id'),
				'id_paket' => $this->input->post('id_paket'),
				'tgl_transaksi' => $this->input->post('tgl_transaksi'),
			];

			$this->db->insert('paket', $data);
			$this->db->insert('tabel_transaksi', $dataa);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
  			Pemesanan Berhasil Dilakukan!
			</div>');
			redirect('users');
		}
	}
	public function paketsedang()
	{
		$data['users'] = $this->db->get_where('users', ['email' =>
		$this->session->userdata('email')])->row_array();
		$data['judul'] = 'Form Paket Sedang';
		$data['harga'] = 600000;
		$data['tanggal'] = date("Y-m-d H:i:s");
		$data['jumlah'] = $this->db->count_all_results('tabel_transaksi')+1;

		$this->form_validation->set_rules('permintaan', 'permintaan', 'required|trim');

		if ( $this->form_validation->run() == false) {
			$this->load->view('templates/header', $data);
			$this->load->view('paket/paketsedang/index', $data);
			$this->load->view('templates/footer');
		} else {
			$data = [
				'id' => $this->input->post('id'),
				'id_paket' => $this->input->post('id_paket'),
				'id_jenis_paket' => $this->input->post('id_jenis_paket'),
				'jumlah_tukang' => $this->input->post('jumlah_tukang'),
				'harga' => $this->input->post('harga'),
				'permintaan' => $this->input->post('permintaan')
			];

			$dataa = [
				'kode_transaksi' => $this->input->post('kode_transaksi'),
				'id' => $this->input->post('id'),
				'id_paket' => $this->input->post('id_paket'),
				'tgl_transaksi' => $this->input->post('tgl_transaksi'),
			];			

			$this->db->insert('paket', $data);
			$this->db->insert('tabel_transaksi', $dataa);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
  			Pemesanan Berhasil Dilakukan!
			</div>');
			redirect('users');
		}
	}
	public function paketbesar()
	{
		$data['users'] = $this->db->get_where('users', ['email' =>
		$this->session->userdata('email')])->row_array();
		$data['judul'] = 'Form Paket Besar';
		$data['harga'] = 1000000;
		$data['tanggal'] = date("Y-m-d H:i:s");
		$data['jumlah'] = $this->db->count_all_results('tabel_transaksi')+1;

		$this->form_validation->set_rules('permintaan', 'permintaan', 'required|trim');

		if ( $this->form_validation->run() == false) {
			$this->load->view('templates/header', $data);
			$this->load->view('paket/paketbesar/index', $data);
			$this->load->view('templates/footer');
		} else {
			$data = [
				'id' => $this->input->post('id'),
				'id_paket' => $this->input->post('id_paket'),
				'id_jenis_paket' => $this->input->post('id_jenis_paket'),
				'jumlah_tukang' => $this->input->post('jumlah_tukang'),
				'harga' => $this->input->post('harga'),
				'permintaan' => $this->input->post('permintaan')
			];

			$dataa = [
				'kode_transaksi' => $this->input->post('kode_transaksi'),
				'id' => $this->input->post('id'),
				'id_paket' => $this->input->post('id_paket'),
				'tgl_transaksi' => $this->input->post('tgl_transaksi'),
			];		

			$this->db->insert('paket', $data);
			$this->db->insert('tabel_transaksi', $dataa);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
  			Pemesanan Berhasil Dilakukan!
			</div>');
			redirect('users');
		}
	}



}