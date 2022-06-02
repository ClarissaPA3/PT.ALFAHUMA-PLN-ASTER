<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_rekapanggaran extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_detailajuan');
        $this->load->model('M_ajuananggaran');
    }
    public function show_rekapposanggaran($id)
    {
        $minggu1 = $this->db->query(sprintf("SELECT  SUM(detail_pengajuananggaran.nominal_pengajuan2) as nominal FROM pengajuan_anggaran
        INNER JOIN detail_pengajuananggaran ON pengajuan_anggaran.id_pengajuan=detail_pengajuananggaran.id_pengajuan WHERE pengajuan_anggaran.minggu2 = %s AND detail_pengajuananggaran.id_subpos = %s AND  pengajuan_anggaran.status2=6", '1', $id))->result_array();
        $minggu2 = $this->db->query(sprintf("SELECT  SUM(detail_pengajuananggaran.nominal_pengajuan2) as nominal FROM pengajuan_anggaran
        INNER JOIN detail_pengajuananggaran ON pengajuan_anggaran.id_pengajuan=detail_pengajuananggaran.id_pengajuan WHERE pengajuan_anggaran.minggu2 = %s AND detail_pengajuananggaran.id_subpos = %s AND  pengajuan_anggaran.status2=6", '2', $id))->result_array();
        $minggu3 = $this->db->query(sprintf("SELECT  SUM(detail_pengajuananggaran.nominal_pengajuan2) as nominal FROM pengajuan_anggaran
        INNER JOIN detail_pengajuananggaran ON pengajuan_anggaran.id_pengajuan=detail_pengajuananggaran.id_pengajuan WHERE pengajuan_anggaran.minggu2 = %s AND detail_pengajuananggaran.id_subpos = %s AND  pengajuan_anggaran.status2=6", '3', $id))->result_array();
        $minggu4 = $this->db->query(sprintf("SELECT  SUM(detail_pengajuananggaran.nominal_pengajuan2) as nominal FROM pengajuan_anggaran
        INNER JOIN detail_pengajuananggaran ON pengajuan_anggaran.id_pengajuan=detail_pengajuananggaran.id_pengajuan WHERE pengajuan_anggaran.minggu2 = %s AND detail_pengajuananggaran.id_subpos = %s AND  pengajuan_anggaran.status2=6", '4', $id))->result_array();
        $total = $minggu1[0]['nominal'] + $minggu2[0]['nominal'] + $minggu3[0]['nominal'] + $minggu4[0]['nominal'];

        return array('minggu1' => $minggu1[0], 'minggu2' => $minggu2[0], 'minggu3' => $minggu3[0], 'minggu4' => $minggu4[0], 'total' => $total);
    }
    public function show_rekapanggaran($id)
    {

        $minggu1 = $this->db->query(sprintf("SELECT  SUM(detail_pengajuananggaran.nominal_pengajuan2) as nominal FROM pengajuan_anggaran
        INNER JOIN detail_pengajuananggaran ON pengajuan_anggaran.id_pengajuan=detail_pengajuananggaran.id_pengajuan WHERE pengajuan_anggaran.minggu2 = %s AND detail_pengajuananggaran.id_pos = %s AND  pengajuan_anggaran.status2=6", '1', $id))->result_array();
        $minggu2 = $this->db->query(sprintf("SELECT  SUM(detail_pengajuananggaran.nominal_pengajuan2) as nominal FROM pengajuan_anggaran
        INNER JOIN detail_pengajuananggaran ON pengajuan_anggaran.id_pengajuan=detail_pengajuananggaran.id_pengajuan WHERE pengajuan_anggaran.minggu2 = %s AND detail_pengajuananggaran.id_pos = %s AND  pengajuan_anggaran.status2=6", '2', $id))->result_array();
        $minggu3 = $this->db->query(sprintf("SELECT  SUM(detail_pengajuananggaran.nominal_pengajuan2) as nominal FROM pengajuan_anggaran
        INNER JOIN detail_pengajuananggaran ON pengajuan_anggaran.id_pengajuan=detail_pengajuananggaran.id_pengajuan WHERE pengajuan_anggaran.minggu2 = %s AND detail_pengajuananggaran.id_pos = %s AND  pengajuan_anggaran.status2=6", '3', $id))->result_array();
        $minggu4 = $this->db->query(sprintf("SELECT  SUM(detail_pengajuananggaran.nominal_pengajuan2) as nominal FROM pengajuan_anggaran
        INNER JOIN detail_pengajuananggaran ON pengajuan_anggaran.id_pengajuan=detail_pengajuananggaran.id_pengajuan WHERE pengajuan_anggaran.minggu2 = %s AND detail_pengajuananggaran.id_pos = %s AND  pengajuan_anggaran.status2=6", '4', $id))->result_array();
        $total = $minggu1[0]['nominal'] + $minggu2[0]['nominal'] + $minggu3[0]['nominal'] + $minggu4[0]['nominal'];

        return array('minggu1' => $minggu1[0], 'minggu2' => $minggu2[0], 'minggu3' => $minggu3[0], 'minggu4' => $minggu4[0], 'total' => $total);
    }
}
