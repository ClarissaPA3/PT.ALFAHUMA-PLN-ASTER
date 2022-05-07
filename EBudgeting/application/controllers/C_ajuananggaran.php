<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_ajuananggaran extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_ajuananggaran');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->model('M_masterpos_subpos');
		$this->load->model('M_detailajuan');
	}

	public function add_datapengajuan()
	{

		$this->M_ajuananggaran->add_pengajuan();

		redirect(site_url('C_ajuananggaran/show_datapengajuan'));
	}
	public function delete_datapengajuan($id)
	{
		$this->M_ajuananggaran->delete_pengajuan($id);
		redirect(site_url('C_ajuananggaran/show_datapengajuan'));
	}
	public function update_datapengajuan($id = null)
	{
		$this->form_validation->set_rules('id_pengajuan', 'Id pengajuan', 'required');


		if ($this->form_validation->run() == FALSE) {
			$data['ajuan'] = $this->M_ajuananggaran->show_pengajuan($id)[0];
			$data['pos'] = $this->M_masterpos_subpos->show_posM();
			$data['subpos'] = $this->M_masterpos_subpos->show_subposM();
			$data['subpos2'] = $this->M_masterpos_subpos->show_subpos2M();
			$data['detailajuan'] = $this->M_detailajuan->showbyid_detailanggaranM($id);
			$data['id'] = $id;
			$data['bulan'] = array('01' => 'Januari', '02' => 'Februari', '03' => 'Maret', '04' => 'April', '05' => 'Mei', '06' => 'Juni', '07' => 'Juli', '08' => 'Agustus', '09' => 'September', '10' => 'Oktober', '11' => 'November', '12' => 'Desember');
			$data['minggu'] = array('1', '2', '3', '4');





			$this->load->view('anggaran/addajuananggaran', $data);
		} else {
			print_r($_POST);

			$this->M_ajuananggaran->update_pengajuan();
			redirect(site_url('C_ajuananggaran/show_datapengajuan'));
		}
	}
	public function show_datapengajuan()
	{
		$data['pengajuan_anggaran'] = $this->M_ajuananggaran->show_pengajuan();
		$data['bulan'] = array('01' => 'Januari', '02' => 'Februari', '03' => 'Maret', '04' => 'April', '05' => 'Mei', '06' => 'Juni', '07' => 'Juli', '08' => 'Agustus', '09' => 'September', '10' => 'Oktober', '11' => 'November', '12' => 'Desember');
		$data['minggu'] = array('1', '2', '3', '4');

		$this->load->view('anggaran/ajuananggaran', $data);
	}

	public function show_koreksidata()
	{
	}
	public function show_rekapanggaran($id)
	{
		$data['ajuan'] = $this->M_ajuananggaran->show_pengajuan($id)[0];
		$data['pos'] = $this->M_masterpos_subpos->show_posM();
		$data['subpos'] = $this->M_masterpos_subpos->show_subposM();
		$data['subpos2'] = $this->M_masterpos_subpos->show_subpos2M();
		$data['detailajuan'] = $this->M_detailajuan->showbyid_detailanggaranM($id);
		$data['id'] = $id;
		$data['total'] = $this->M_detailajuan->hitunganggaran($id)[0];




		$this->load->view('anggaran/rekapdraftanggaran', $data);
	}
	public function show_rekapposanggaran()
	{
	}


	// Baru Persetujuan DM
	
}
