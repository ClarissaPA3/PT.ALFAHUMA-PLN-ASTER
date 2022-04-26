<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_ajuananggaran extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_ajuananggaran');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
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
			print_r($data['ajuan']);


			$this->load->view('anggaran/addajuananggaran', $data);
		} else {

			$this->M_ajuananggaran->update_pengajuan();
			redirect(site_url('C_ajuananggaran/show_datapengajuan'));
		}
		
	}
    public function show_datapengajuan()
	{
		$data['pengajuan_anggaran'] = $this->M_ajuananggaran->show_pengajuan();


		$this->load->view('anggaran/ajuananggaran',$data);
		
	}
    public function show_koreksidata()
	{
		
	}
    public function show_rekapanggaran()
	{
		
	}
    public function show_rekapposanggaran()
	{
		
	}

}
