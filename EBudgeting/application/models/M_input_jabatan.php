<?php defined('BASEPATH') or exit('NO direct script acces allowed');

class M_input_jabatan extends CI_Model

{
    public function add_jabatanM()
    {
        $data = array (
            'id_jabatan' => '',
            'nama_jabatan' => $this->input->post('nama'),
            'tingkatan_user' => $this->input->post('tingkat')
        );
        $this->db->insert('jabatan', $data);
    }
    public function delete_jabatanM($id)
    {
        $this->db->delete('jabatan', array('id_jabatan' => $id));
    }
    public function update_jabatanM()
    {
        $id = $this->input->post('id_jabatan');
        $data = array (
            'id_jabatan' => $id,
            'nama_jabatan' => $this->input->post('nama'),
            'tingkatan_user' => $this->input->post('tingkat')
        );

        $this->db->update('jabatan', $data, array('id_jabatan' => $id));
    }
    public function show_jabatanM($id = null)
    {
        if (isset($id)) {
            $query = $this->db->get_where('jabatan', array('id_jabatan' => $id));
            return $query->result_array();
            
        }
        else {
            $query = $this->db->get('jabatan');
            return $query->result_array();
        }
        
    }
}
