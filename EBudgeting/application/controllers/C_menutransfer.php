<?php

defined('BASEPATH') or exit('No direct script access allowed');

class C_menutransfer extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("M_menutransfer");
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["transfer"] = $this->M_menutransfer->getAll();
        $this->load->view("transfers/menutransfer", $data);
    }

    public function add()
    {


        $this->form_validation->set_rules('nama_pengirim', 'Nama Pengirim', 'required');
        echo $this->form_validation->run();
        if ($this->form_validation->run()) {
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            $this->M_menutransfer->save();
            redirect(site_url('C_menutransfer'));

        } else {
            $this->load->view("transfers/addtransfer");
        }
    }

    public function edit($id = null)
    {


        $transfers = $this->M_menutransfer;
        $validation = $this->form_validation;
        $validation->set_rules('nama_pengirim', 'Nama Pengirim', 'required');

        if ($validation->run()) {
            $transfers->update($id);
          
            redirect(site_url('C_menutransfer'));
        } else {
           
            $data["transfers"] = $transfers->getById($id);
           
            $this->load->view("transfers/updatetransfer", $data);
        }
    }

    public function delete($id = null)
    {

        if (isset($id)) {
            $this->M_menutransfer->delete($id);
    
            redirect(site_url('C_menutransfer'));
        } 
        else {
            show_error('Invalid Action has been detected please back to previous page',404,"Invalid Action Error 404");
        }
    }
}
