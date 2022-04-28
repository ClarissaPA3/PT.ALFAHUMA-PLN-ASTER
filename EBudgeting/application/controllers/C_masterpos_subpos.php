<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_masterpos_subpos extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_masterpos_subpos');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
	}
	public function add_pos()
	{
		$this->form_validation->set_rules('nama', 'Nama Pos', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('masterpos/addpos');
		} else {

			$this->M_masterpos_subpos->add_posM();
			redirect(site_url('C_masterpos_subpos/show_pos'));
		}



	}
	public function delete_pos($id)
	{
		$this->M_masterpos_subpos->delete_posM($id);
		redirect(site_url('C_masterpos_subpos/show_pos'));
	}
	public function update_pos($id)
	{
		$this->form_validation->set_rules('nama', 'Nama Pos', 'required');


		if ($this->form_validation->run() == FALSE) {
			$data['pos'] = $this->M_masterpos_subpos->show_posM($id)[0];


			$this->load->view('masterpos/updatepos', $data);
		} else {

			$this->M_masterpos_subpos->update_posM();
			redirect(site_url('C_masterpos_subpos/show_pos'));
		}
	}
	public function show_pos()
	{

		$data['pos'] = $this->M_masterpos_subpos->show_posM();
		
		$this->load->view('masterpos/pos', $data);
	}

	// sub Pos
	public function add_subpos()
	{
		$this->form_validation->set_rules('nama', 'Nama Pos', 'required');
		if ($this->form_validation->run() == FALSE) {
			
			$this->load->view('masterpos/addsubpos');
		} else {

			$this->M_masterpos_subpos->addsubposM();
			redirect(site_url('C_masterpos_subpos/show_subpos'));
		}


	
	}
	public function delete_subpos($id)
	{
		$this->M_masterpos_subpos->delete_subposM($id);
		redirect(site_url('C_masterpos_subpos/show_subpos'));
	}
	public function update_subpos($id = null)
	{
		$this->form_validation->set_rules('nama', 'Nama Pos', 'required');


		if ($this->form_validation->run() == FALSE) {
			$data['sub_pos'] = $this->M_masterpos_subpos->show_subposM($id)[0];


			$this->load->view('masterpos/updatesubpos', $data);
		} else {

			$this->M_masterpos_subpos->update_subposM();
			redirect(site_url('C_masterpos_subpos/show_subpos'));
		}
	}
	public function show_subpos()
	{
		$data['sub_pos'] = $this->M_masterpos_subpos->show_subposM();
		
		$this->load->view('masterpos/subpos', $data);
		
	}

	// sub pos 2

	public function add_subpos2()
	{
		$this->form_validation->set_rules('nama', 'Nama Pos', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('masterpos/addsubpos2');
		} else {

			$this->M_masterpos_subpos->addsubpos2M();
			redirect(site_url('C_masterpos_subpos/show_subpos2'));
		}

	}
	public function delete_subpos2($id)
	{
		$this->M_masterpos_subpos->delete_subpos2M($id);
		redirect(site_url('C_masterpos_subpos/show_subpos2'));
	}
	public function update_subpos2($id = null)
	{
		$this->form_validation->set_rules('nama', 'Nama Pos', 'required');


		if ($this->form_validation->run() == FALSE) {
			$data['sub_pos2'] = $this->M_masterpos_subpos->show_subpos2M($id)[0];


			$this->load->view('masterpos/updatesubpos2', $data);
		} else {

			$this->M_masterpos_subpos->update_subpos2M();
			redirect(site_url('C_masterpos_subpos/show_subpos2'));
		}
	}
	public function show_subpos2()
	{
		$data['sub_pos2'] = $this->M_masterpos_subpos->show_subpos2M();
		
		$this->load->view('masterpos/subpos2', $data);
		
	}
}
