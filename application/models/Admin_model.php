<?php

class Admin_model extends CI_Model
{
    public function getAllAdmin()
    {
        return $this->db->get_where('user', ['role_id' => 2])->result_array();
    }

    public function getAdminById($id)
    {
        return $this->db->get_where('user', ['id' => $id])->row_array();
    }

    public function upload()
    {
        // cek jika ada gambar yang akan diupload
        $upload_image = $_FILES['image']['name'];

        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']     = '2048';
            $config['upload_path'] = './assets/img/profile';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('image')) {
                return $this->upload->data('file_name');
            }
        }
        return "default.jpg";
    }

    public function tambahDataAdmin()
    {
        $data = [
            'name' => $this->input->post('nama', true),
            'jk' => $this->input->post('jk', true),
            'email' => $this->input->post('email', true),
            'hp' => $this->input->post('hp', true),
            'image' => $this->upload(),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'role_id' => 2,
            'is_active' => $this->input->post('aktif', true),
            'date_created' => time()
        ];

        $this->db->insert('user', $data);
    }

    public function ubahDataAdmin($admin, $id)
    {
        // cek jika ada gambar yang akan diupload
        $upload_image = $_FILES['image']['name'];

        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']     = '2048';
            $config['upload_path'] = './assets/img/profile';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('image')) {

                $old_image = $admin['image'];
                if ($old_image != 'default.jpg') {
                    unlink(FCPATH . 'assets/img/profile/' . $old_image);
                }
                $new_image =  $this->upload->data('file_name');
                $this->db->set('image', $new_image);
            } else {
                echo $this->upload->display_errors();
            }
        }

        $name = $this->input->post('nama', true);
        $jk = $this->input->post('jk', true);
        $email = $this->input->post('email', true);
        $hp = $this->input->post('hp', true);
        $password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
        $is_active =  $this->input->post('aktif', true);

        $data = [
            'name' => $name,
            'jk' => $jk,
            'email' => $email,
            'hp' => $hp,
            'is_active' => $is_active
        ];
        $this->db->set($data);
        if ($this->input->post('password') != null) {
            $this->db->set('password', $password);
        }
        $this->db->where('id', $id);
        $this->db->update('user');
    }


    public function hapusDataAdmin($id, $admin)
    {
        $old_image = $admin['image'];
        if ($old_image != 'default.jpg') {
            unlink(FCPATH . 'assets/img/profile/' . $old_image);
        }

        //$this->db->where('id', $id);
        $this->db->delete('user', ['id' => $id]);
    }

    public function updateCountDown()
    {

        $data = [
            'date' => $this->input->post('date', true),
            'time' => $this->input->post('time', true),
        ];

        $query = "SELECT id FROM countdown order by id desc limit 1";
        $id = $this->db->query($query)->row_array();

        $this->db->set($data);
        $this->db->where('id', $id['id']);
        $this->db->update('countdown');
    }
}
