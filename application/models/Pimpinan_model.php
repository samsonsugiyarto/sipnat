<?php

class Pimpinan_model extends CI_Model
{
    public function getAllPimpinan()
    {
        return $this->db->get('pimpinan')->result_array();
    }

    public function tambahDataPimpinan()
    {
        $nidn = $this->input->post('nidn', true);
        $data = [
            'nidn' => $nidn,
            'name' => $this->input->post('namalengkap', true),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'jk' => $this->input->post('jk', true),
            'jabatan' => $this->input->post('jabatan', true),
            'email' => $this->input->post('email', true),
            'hp' => $this->input->post('hp', true),
            'is_active' => $this->input->post('aktif', true),
            'image' => 'default.jpg',
            'role_id' => 3

        ];

        $this->db->insert('pimpinan', $data);
    }
}
