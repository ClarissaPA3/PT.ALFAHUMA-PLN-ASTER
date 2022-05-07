<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_persetujuan_dm extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_persetujuan');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('M_masterpos_subpos');
        $this->load->model('M_detailajuan');
        $this->load->model('M_ajuananggaran');
    }
    public function index()
    {
        $this->load->view('dashboard/_part/head');
        $this->load->view('persetujuan/persetujuan_dm.php');
        $this->load->view('dashboard/_part/footer');
    }
    public function show_pengajuandm()
    {
        $data['pengajuan'] = $this->M_persetujuan->show_pengajuan_sub();

        print_r($data);
        $this->load->view('dashboard/_part/head');
        $this->load->view('persetujuan/persetujuan_dm.php', $data);
        $this->load->view('dashboard/_part/footer');
    }
    public function reviewdm($id = null)
    {
        $this->form_validation->set_rules('id_pengajuan', 'Id pengajuan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['ajuan'] = $this->M_ajuananggaran->show_pengajuan($id)[0];
            $data['pos'] = $this->M_masterpos_subpos->show_posM();
            $data['subpos'] = $this->M_masterpos_subpos->show_subposM();
            $data['subpos2'] = $this->M_masterpos_subpos->show_subpos2M();
            $data['detailajuan'] = $this->M_detailajuan->showbyid_detailanggaranM($id);
            $data['id'] = $id;
            $this->load->view('persetujuan/review_dm', $data);


        } else {
            
            $this->M_ajuananggaran->update_pengajuanDM();
            $this->M_detailajuan->update_pengajuanDM();
            redirect(site_url('C_persetujuan_dm/show_pengajuandm'));
        }
    }
    
    public function testing()
    {
        $data['pos'] = $this->M_masterpos_subpos->show_posM();
        print_r($_POST);
        $this->load->view('persetujuan/testing', $data);
    }
}
