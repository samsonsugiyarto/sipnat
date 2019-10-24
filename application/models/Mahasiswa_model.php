<?php

class Mahasiswa_model extends CI_Model
{
    public function getAllMahasiswa()
    {
        return $this->db->get('mahasiswa')->result_array();
    }



    public function upload()
    {
        // cek jika ada gambar yang akan diupload
        $upload_image = $_FILES['imagemhs']['name'];

        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']     = '2048';
            $config['upload_path'] = './assets/img/profile/mahasiswa';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('imagemhs')) {
                return $this->upload->data('file_name');
            } else {
                echo $this->upload->display_errors();
            }
        }
        return "default.jpg";
    }


    public function tambahDataMahasiswa()
    {
        $nim = $this->input->post('nim', true);
        $data = [
            'nim' => $nim,
            'name' => $this->input->post('nama', true),
            'jk' => $this->input->post('jk', true),
            'kode_jurusan' => $this->input->post('jurusan', true),
            'email' => $this->input->post('emailmhs', true),
            'hp' => $this->input->post('hpmhs', true),
            'image' => $this->upload(),
            'password' => password_hash($this->input->post('passwordmhs1'), PASSWORD_DEFAULT),
            'role_id' => 5,
            'is_active' => $this->input->post('aktif', true),


        ];

        $this->db->insert('mahasiswa', $data);
    }

    public function ubahDataMahasiswa($mhs, $nim)
    {

        $upload_image = $_FILES['imagemhs']['name'];

        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']     = '2048';
            $config['upload_path'] = './assets/img/profile/mahasiswa';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('imagemhs')) {

                $old_image = $mhs['image'];
                if ($old_image != 'default.jpg') {
                    unlink(FCPATH . 'assets/img/profile/mahasiswa/' . $old_image);
                }
                $new_image =  $this->upload->data('file_name');
                $this->db->set('image', $new_image);
            } else {
                echo $this->upload->display_errors();
            }
        }

        $name = $this->input->post('namalengkap', true);
        $jk = $this->input->post('jk', true);
        $jurusan = $this->input->post('jurusan', true);
        $email = $this->input->post('email', true);
        $hp = $this->input->post('hp', true);
        $password = password_hash($this->input->post('passwordmhs1'), PASSWORD_DEFAULT);
        $is_active = $this->input->post('aktifmhs', true);

        $data = [
            'name' => $name,
            'jk' => $jk,
            'kode_jurusan' => $jurusan,
            'email' => $email,
            'hp' => $hp,
            'is_active' => $is_active
        ];
        $this->db->set($data);
        if ($this->input->post('passwordmhs1') != null) {
            $this->db->set('password', $password);
        }
        $this->db->where('nim', $nim);
        $this->db->update('mahasiswa');
    }

    public function getMahasiswaById($nim)
    {
        return $this->db->get_where('mahasiswa', ['nim' => $nim])->row_array();
    }


    public function hapusDataMahasiswa($nim, $mhs)
    {
        $old_image = $mhs['image'];
        if ($old_image != 'default.jpg') {
            unlink(FCPATH . 'assets/img/profile/mahasiswa/' . $old_image);
        }

        //$this->db->where('id', $id);
        $this->db->delete('mahasiswa', ['nim' => $nim]);
    }
}
