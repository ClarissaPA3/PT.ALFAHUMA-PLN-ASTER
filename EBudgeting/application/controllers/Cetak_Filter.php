 
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak_Filter extends CI_Controller {

 public function index()
 {
  $data['title'] = "filter data berdasarkan minggu";
  $data['filterb'] = $this->db->get('filterb')->result();
  $this->load->view('filterbl/filter', $data);  
 }

 public function filter($id)
 {
  if ($id == 0) {
   $data = $this->db->get('pengajuan_anggaran')->result();
  }
  else
  {
   $data = $this->db->get_where('pengajuan_anggaran', ['minggu2'=>$id])->result();
  }
  $dt['mahasiswa'] = $data;
  $dt['minggu2'] = $id;
  $this->load->view('filterbl/result', $dt);
 }



}

/* End of file Cetak_Filter.php */
/* Location: ./application/controllers/Cetak_Filter.php */
