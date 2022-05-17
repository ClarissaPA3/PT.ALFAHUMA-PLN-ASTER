<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_detailajuan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_detailajuan');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->library('user_agent');
	}

	public function add_detailanggaran()
	{


		$this->form_validation->set_rules('id_subpos2', 'Sub pos 2', 'required');
		$this->form_validation->set_rules('id_subpos', 'Sub pos', 'required');
		$this->form_validation->set_rules('id_pos', 'Pos', 'required');
		$this->form_validation->set_rules('nominal', 'Nominal Pengajuan', 'required');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
		$this->form_validation->set_rules('kegiatan', 'Kegiatan', 'required');
		if ($this->form_validation->run() == FALSE) {
			

		} else {
			$this->M_detailajuan->add_detailanggaranM();
			redirect($_SERVER['HTTP_REFERER']);
		}


		$this->M_detailajuan->add_detailanggaranM();
		redirect($_SERVER['HTTP_REFERER']);
	}
	public function delete_detailanggaran($id)
	{
		$this->M_detailajuan->delete_detailanggaranM($id);
		redirect($_SERVER['HTTP_REFERER']);
	}
	public function update_detailanggaran($id = null)
	{
		$this->form_validation->set_rules('id_pengajuan', 'Id pengajuan', 'required');



		$this->M_detailajuan->update_detailanggaranM();
		redirect($_SERVER['HTTP_REFERER']);
	}
	public function show_detailanggaran()
	{
		$data['pengajuan_anggaran'] = $this->M_detailajuan->show_pengajuan();


		$this->load->view('anggaran/ajuananggaran', $data);
	}
}
