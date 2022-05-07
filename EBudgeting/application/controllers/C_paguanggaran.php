<?php

defined('BASEPATH') or exit('No direct script access allowed');

class C_paguanggaran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("M_paguanggaran");
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["pagu_anggaran"] = $this->M_paguanggaran->getAll();
        $this->load->view("paguanggaran/menupagu", $data);
    }

    public function add()
    {


        $this->form_validation->set_rules('nominal_pagu', 'Nominal Pagu', 'required');
        echo $this->form_validation->run();
        if ($this->form_validation->run()) {
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            $this->M_paguanggaran->save();
            redirect(site_url('C_paguanggaran'));
        } else {
            $this->load->view("paguanggaran/addpagu");
        }
    }

    public function edit($id = null)
    {


        $paguanggaran = $this->M_paguanggaran;
        $validation = $this->form_validation;
        $validation->set_rules('nominal_pagu', 'Nominal Pagu', 'required');

        if ($validation->run()) {
            $paguanggaran->update($id);

            redirect(site_url('C_paguanggaran'));
        } else {

            $data["paguanggaran"] = $paguanggaran->getById($id);

            $this->load->view("paguanggaran/updatepagu", $data);
        }
    }

    public function delete($id = null)
    {

        if (isset($id)) {
            $this->M_paguanggaran->delete($id);

            redirect(site_url('C_paguanggaran'));
        } else {
            show_error('Invalid Action has been detected please back to previous page', 404, "Invalid Action Error 404");
        }
    }
}
