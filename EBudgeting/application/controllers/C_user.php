<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_user extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_user');
		$this->load->library('form_validation');
		$this->load->helper(array('form', 'url'));
		$this->load->model('M_input_jabatan');
	}


	public function add_user()
	{
		$this->form_validation->set_rules('nama_anggota', 'Nama Anggota', 'required');
		if ($this->form_validation->run() == FALSE) {
			$data['jabatan'] = $this->M_input_jabatan->show_jabatanM();
			
			$this->load->view('user/input_pegawai.php', $data);
		} else {

			$this->M_user->add_user();
			redirect(site_url('C_user/show_user'));
		}
	}
	public function delete_user($id)
	{
		$this->M_user->delete_user($id);
		redirect(site_url('C_user/show_user'));
	}
	public function update_user($id = null)
	{

		$this->form_validation->set_rules('nama_anggota', 'Nama Anggota', 'required');
		if ($this->form_validation->run() == FALSE) {
			$data['pegawai'] = $this->M_user->show_user_id($id);
			$data['jabatan'] = $this->M_input_jabatan->show_jabatanM();

			$this->load->view('user/update_pegawai', $data);
		} else {
			$this->M_user->update_user();
			redirect(site_url('C_user/show_user'));
		}
	}
	public function show_user()
	{
		$data['pegawai'] = $this->M_user->show_user();
		$this->load->view('user/rekap_pegawai.php', $data);
	}
}
