<?php defined('BASEPATH') or exit('NO direct script acces allowed');

class M_ajuananggaran extends CI_Model

{
    public function add_pengajuan()
    {
        $data = array(
            'id_pengajuan' => '',
            'id_anggota' => $this->session->userdata('id_anggota'),
            'catatan_dm2' => '',
            'total_pengajuan2' => '',
            'minggu2' => '',
            'bulan2' => '',
            'catatan_dmpau2' => '',
            'status2' => '',
            'tanggal_mulai2' => '',
            'tanggal_sampai2' => '',
            'tgl_pengajuan2' => ''
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
        print_r($_POST);
        $data = array(
            'id_pengajuan' => $id,
            'id_anggota' => $this->input->post('id_anggota'),
            'catatan_dm2' => '',
            'total_pengajuan2' => $this->input->post('total_pengajuan2'),
            'minggu2' => $this->input->post('minggu2'),
            'bulan2' => $this->input->post('bulan2'),
            'catatan_dmpau2' => '',
            'status2' => '',
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
}
