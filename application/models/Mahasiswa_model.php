<?php

class Mahasiswa_model extends CI_Model
{
    public function getAllMahasiswa()
    {
        return $this->db->get('mahasiswa')->result_array();
    }

    public function tambahDataMahasiswa()
    {
        $nim = $this->input->post('nim', true);
        $data = [
            'nim' => $nim,
            'name' => $this->input->post('nama', true),
            'jk' => $this->input->post('jk', true),
            'jurusan' => $this->input->post('jurusan', true),
            'email' => $this->input->post('emailmhs', true),
            'hp' => $this->input->post('hpmhs', true),
            'image' => 'default.jpg',
            'password' => password_hash($this->input->post('passwordmhs1'), PASSWORD_DEFAULT),
            'role_id' => 5,
            'is_active' => $this->input->post('aktif', true),
        ];

        $this->db->insert('mahasiswa', $data);
    }
}
