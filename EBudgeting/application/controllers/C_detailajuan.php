<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_detailajuan extends CI_Controller {
	
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


		if ($this->form_validation->run() == FALSE) {
			$data['ajuan'] = $this->M_detailajuan->show_pengajuan($id)[0];
			$data['pos'] = $this->M_masterpos_subpos->show_posM();
			$data['subpos'] =$this->M_masterpos_subpos->show_subposM();
			$data['subpos2'] =$this->M_masterpos_subpos->show_subpos2M();

			


			$this->load->view('anggaran/addajuananggaran', $data);
		} else {

			$this->M_detailajuan->update_pengajuan();
			
		}
		
	}
    public function show_detailanggaran()
	{
		$data['pengajuan_anggaran'] = $this->M_detailajuan->show_pengajuan();


		$this->load->view('anggaran/ajuananggaran',$data);
		
	}
    
}
