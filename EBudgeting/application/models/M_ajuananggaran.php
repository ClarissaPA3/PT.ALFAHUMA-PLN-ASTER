<?php defined('BASEPATH') or exit('NO direct script acces allowed');

class M_ajuananggaran extends CI_Model

{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_detailajuan');
    }
    // Sub bidang
    public function add_pengajuan()
    {
        
        print_r($_POST);
        $data = array(
            'id_pengajuan' => '',
            'id_anggota' => $this->session->userdata('id_anggota'),
            'catatan_dm2' => '',
            'total_pengajuan2' => '',
            'minggu2' => $this->input->post('minggu2'),
            'bulan2' => $this->input->post('bulan2'),
            'catatan_dmpau2' => '',
            'status2' => '0',
            'tanggal_mulai2' => $this->input->post('tanggal_mulai2'),
            'tanggal_sampai2' => $this->input->post('tanggal_sampai2'),
            'tgl_pengajuan2' => date("Y-m-d")
        );
        $this->db->insert('pengajuan_anggaran', $data);
    }
    public function delete_pengajuan($id)
    {
        $this->db->delete('pengajuan_anggaran', array('id_pengajuan' => $id));
    }
    public function show_pengajuan($id = null)
    {
        if (isset($id)) {
            $query = $this->db->get_where('pengajuan_anggaran', array('id_pengajuan' => $id));
            return $query->result_array();
        } else {
            $query = $this->db->get('pengajuan_anggaran');
            return $query->result();
        }
    }

    public function update_pengajuan()
    {
        
        $id = $this->input->post('id_pengajuan');
        $nominalpengajuan = $this->M_detailajuan->hitunganggaran($id)[0]['nominal_pengajuan2'];
        $data = array(
            'id_pengajuan' => $id,
            'id_anggota' => $this->input->post('id_anggota'),
            'catatan_dm2' => '',
            'total_pengajuan2' => $nominalpengajuan,
            'minggu2' => $this->input->post('minggu2'),
            'bulan2' => $this->input->post('bulan2'),
            'catatan_dmpau2' => '',
            'status2' => $this->input->post('status2'),
            'tanggal_mulai2' => $this->input->post('tanggal_mulai2'),
            'tanggal_sampai2' => $this->input->post('tanggal_sampai2'),
            'tgl_pengajuan2' => $this->input->post('tgl_pengajuan2')
        );

        $this->db->update('pengajuan_anggaran', $data, array('id_pengajuan' => $id));
    }
    public function showbyid_pengajuan($id)
    {
        $query = $this->db->get_where('pengajuan_anggaran', array('id_anggota ' => $id, 'status2' => '1'));

        return array('nomor' => $query->num_rows(), 'pengajuan' => $query->result_array());
    }
    // DM
    // New persetujuan DM
    public function show_pengajuan_sub()
    {
        $query = $this->db->get_where('pengajuan_anggaran', array('status2' => '1'));
        return $query->result_array();
    }
    // New persetujuan DMPAU
    public function show_persetujuanDMPAU()
    {
        $query = $this->db->get_where('pengajuan_anggaran', array('status2' => '2'));
        return $query->result_array();
    }

    public function update_pengajuanDM()
    {
        
        $id = $this->input->post('id_pengajuan');
        $nominalpengajuan = $this->M_detailajuan->hitunganggaran($id)[0]['nominal_pengajuan2'];
        $data = array(
            'id_pengajuan' => $id,
            'id_anggota' => $this->input->post('id_anggota'),
            'catatan_dm2' => $this->input->post('catatan_dm2'),
            'total_pengajuan2' => $nominalpengajuan,
            'minggu2' => $this->input->post('minggu2'),
            'bulan2' => $this->input->post('bulan2'),
            'catatan_dmpau2' => '',
            'status2' => $this->input->post('status2'),
            'tanggal_mulai2' => $this->input->post('tanggal_mulai2'),
            'tanggal_sampai2' => $this->input->post('tanggal_sampai2'),
            'tgl_pengajuan2' => $this->input->post('tgl_pengajuan2')
        );
       

        $this->db->update('pengajuan_anggaran', $data, array('id_pengajuan' => $id));
    }
    public function update_pengajuanDMPAU()
    {
        
        $id = $this->input->post('id_pengajuan');
        $nominalpengajuan = $this->M_detailajuan->hitunganggaran($id)[0]['nominal_pengajuan2'];
        $data = array(
            'id_pengajuan' => $id,
            'id_anggota' => $this->input->post('id_anggota'),
            'catatan_dm2' => $this->input->post('catatan_dm2'),
            'total_pengajuan2' => $nominalpengajuan,
            'minggu2' => $this->input->post('minggu2'),
            'bulan2' => $this->input->post('bulan2'),
            'catatan_dmpau2' => $this->input->post('catatan_dmpau2'),
            'status2' => $this->input->post('status2'),
            'tanggal_mulai2' => $this->input->post('tanggal_mulai2'),
            'tanggal_sampai2' => $this->input->post('tanggal_sampai2'),
            'tgl_pengajuan2' => $this->input->post('tgl_pengajuan2')
        );
       

        $this->db->update('pengajuan_anggaran', $data, array('id_pengajuan' => $id));
    }
}
