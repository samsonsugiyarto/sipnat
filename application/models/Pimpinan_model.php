<?php

class Pimpinan_model extends CI_Model
{
    public function getAllPimpinan()
    {
        return $this->db->get('pimpinan')->result_array();
    }

    public function getPimpinanById($nidn)
    {
        return $this->db->get_where('pimpinan', ['nidn' => $nidn])->row_array();
    }

    public function upload()
    {
        // cek jika ada gambar yang akan diupload
        $upload_image = $_FILES['imagepimpinan']['name'];

        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']     = '2048';
            $config['upload_path'] = './assets/img/profile/pimpinan';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('imagepimpinan')) {
                return $this->upload->data('file_name');
            }
        }
        return "default.jpg";
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
            'image' => $this->upload(),
            'role_id' => 3

        ];

        $this->db->insert('pimpinan', $data);
    }


    public function ubahDataPimpinan($pimpinan, $nidn)
    {
        // cek jika ada gambar yang akan diupload
        $upload_image = $_FILES['imagepimpinan']['name'];

        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']     = '2048';
            $config['upload_path'] = './assets/img/profile/pimpinan';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('imagepimpinan')) {

                $old_image = $pimpinan['image'];
                if ($old_image != 'default.jpg') {
                    unlink(FCPATH . 'assets/img/profile/pimpinan/' . $old_image);
                }
                $new_image =  $this->upload->data('file_name');
                $this->db->set('image', $new_image);
            } else {
                echo $this->upload->display_errors();
            }
        }
        $name = $this->input->post('namalengkap', true);
        $jk = $this->input->post('jk', true);
        $jabatan = $this->input->post('jabatan', true);
        $email = $this->input->post('email', true);
        $hp = $this->input->post('hp', true);
        $password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
        $is_active =  $this->input->post('aktifpimpinan', true);

        $data = [
            'name' => $name,
            'jk' => $jk,
            'jabatan' => $jabatan,
            'email' => $email,
            'hp' => $hp,
            'is_active' => $is_active
        ];
        $this->db->set($data);
        if ($this->input->post('password') != null) {
            $this->db->set('password', $password);
        }
        $this->db->where('nidn', $nidn);
        $this->db->update('pimpinan');
    }


    public function hapusDataPimpinan($nidn, $pimpinan)
    {
        $old_image = $pimpinan['image'];
        if ($old_image != 'default.jpg') {
            unlink(FCPATH . 'assets/img/profile/pimpinan/' . $old_image);
        }
        //$this->db->where('id', $id);
        $this->db->delete('pimpinan', ['nidn' => $nidn]);
    }
}
