<?php

class Dosen_model extends CI_Model
{
    public function getAllDosen()
    {
        return $this->db->get('dosen')->result_array();
    }

    public function tambahDataDosen()
    {
        $nidn = $this->input->post('nidn', true);
        $data = [
            'nidn' => $nidn,
            'name' => $this->input->post('namalengkap', true),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'jk' => $this->input->post('jk', true),
            'mengajar' => $this->input->post('mengajar', true),
            'email' => $this->input->post('email', true),
            'hp' => $this->input->post('hp', true),
            'is_active' => $this->input->post('aktif', true),
            'image' => 'default.jpg',
            'role_id' => 4

        ];

        $this->db->insert('dosen', $data);
    }
}
