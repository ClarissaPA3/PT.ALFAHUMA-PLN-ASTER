<?php defined('BASEPATH') or exit('NO direct script acces allowed');

class M_user extends CI_Model

{ 
    
    public function add_user()
    { 
        $data = array (
            'id_anggota' => '',
            'id_jabatan' => $this->input->post('id_jabatan'),
            'nama_anggota' => $this->input->post('nama_anggota'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'alamat' => $this->input->post('alamat'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password')
        );
        $this->db->insert('pegawai', $data);

    }
    public function delete_user($id)
    { 
        $this->db->delete('pegawai', array('id_anggota' => $id));

    }
    public function update_user()
    { 
        $id = $this->input->post('id_anggota');
        $data = array (
            'id_anggota' => $id,
            'id_jabatan' => $this->input->post('id_jabatan'),
            'nama_anggota' => $this->input->post('nama_anggota'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'alamat' => $this->input->post('alamat'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password')
        );

        $this->db->update('pegawai', $data, array('id_anggota' => $id));


    }
    public function show_user($passw = null, $user = null)
    { 
        if (isset($passw) && isset($user)) {
            $query = $this->db->get_where('pegawai', array('username' => $user,'password' => $passw), 1);
  
            return $query->result_array()[0];
        }
        
        else {
            $query = $this->db->get('pegawai');
            
            return $query->result();

        }


    }
    // tambahan
    public function show_user_id($id)
    {
        $query = $this->db->get_where('pegawai', array('id_anggota' => $id), 1);
     
        return $query->result();

    }
    
    
}
