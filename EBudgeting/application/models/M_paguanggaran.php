<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_paguanggaran extends CI_Model
{
    

    public function rules()
    {
        return [
            ['field' => 'id_anggota',
            'label' => 'Id_anggota',
            'rules' => 'numeric'],
            
            ['field' => 'nominal_pagu',
            'label' => 'Nominal_pagu',
            'rules' => 'required'],
            
            ['field' => 'nominal_terpakai',
            'label' => 'Nominal_terpakai',
            'rules' => 'required'],

            ['field' => 'bulan',
            'label' => 'Bulan',
            'rules' => 'required'],
            
            ['field' => 'tahun',
            'label' => 'Tahun',
            'rules' => 'required']

        ];
    }

    public function getAll()
    {
        return $this->db->get('pagu_anggaran')->result_array();
    }
    
    public function getById($id)
    {
        return $this->db->get_where('pagu_anggaran', ["id_paguanggaran" => $id])->result_array();
    }

    public function save()
    {
        print_r($_POST);
        $data = array(

            'id_paguanggaran' => '',
            'id_anggota' => '2',
            'nominal_pagu' => $this->input->post('nominal_pagu'),
            'nominal_terpakai' => $this->input->post('nominal_terpakai'),
            'bulan' => $this->input->post('bulan'),
            'tahun' => $this->input->post('tahun')

 
        );
       
        
        $this->db->insert('pagu_anggaran', $data);
    }

    public function update()
    {
        $id = $this->input->post('id_paguanggaran');
        
        
        $data = array(

            'id_paguanggaran' => $id,
            'id_anggota' => $this->input->post('id_anggota'),
            'nominal_pagu' => $this->input->post('nominal_pagu'),
            'nominal_terpakai' => $this->input->post('nominal_terpakai'),
            'bulan' => $this->input->post('bulan'),
            'tahun' => $this->input->post('tahun')

 
        );
       
        $this->db->update('pagu_anggaran', $data, array('id_paguanggaran' => $id));
    }

    public function delete($id)
    {
        $this->db->delete('pagu_anggaran', array("id_paguanggaran" => $id));
    }
}
