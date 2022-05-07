<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_persetujuan_dmpau extends CI_Controller
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
        redirect('C_persetujuan_dmpau/show_pengajuandmpau');
        
    }
    public function show_pengajuandmpau()
    {
        $data['pengajuan'] = $this->M_ajuananggaran->show_persetujuanDMPAU();


        $this->load->view('dashboard/_part/head');
        $this->load->view('persetujuan/persetujuan_dmpau.php', $data);
        
        $this->load->view('dashboard/_part/footer');
    }
    public function reviewdmpau($id = null)
    {
        $this->form_validation->set_rules('id_pengajuan', 'Id pengajuan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['ajuan'] = $this->M_ajuananggaran->show_pengajuan($id)[0];
            $data['pos'] = $this->M_masterpos_subpos->show_posM();
            $data['subpos'] = $this->M_masterpos_subpos->show_subposM();
            $data['subpos2'] = $this->M_masterpos_subpos->show_subpos2M();
            $data['detailajuan'] = $this->M_detailajuan->showbyid_detailanggaranM($id);
            $data['id'] = $id;
            $this->load->view('persetujuan/review_dmpau', $data);
        } else {

            $this->M_ajuananggaran->update_pengajuanDMPAU();
            $this->M_detailajuan->update_pengajuanDM();
            redirect(site_url('C_persetujuan_dmpau/show_pengajuandmpau'));
        }
    }

    
}
