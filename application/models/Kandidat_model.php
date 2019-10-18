<?php

class Kandidat_model extends CI_Model
{
    public function getAllKandidat()
    {
        return $this->db->get('kandidat')->result_array();
    }

    public function getKandidatById($no_kandidat)
    {
        return $this->db->get_where('kandidat', ['no_kandidat' => $no_kandidat])->row_array();
    }

    public function uploadketua()
    {
        // cek jika ada gambar yang akan diupload
        $upload_image = $_FILES['foto_ketua']['name'];

        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']     = '2048';
            $config['upload_path'] = './assets/img/profile/kandidat';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('foto_ketua')) {
                return $this->upload->data('file_name');
            } else {
                echo $this->upload->display_errors();
            }
        }
        return "default.jpg";
    }

    public function uploadwakil()
    {
        // cek jika ada gambar yang akan diupload
        $upload_image = $_FILES['foto_wakil']['name'];

        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']     = '2048';
            $config['upload_path'] = './assets/img/profile/kandidat';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('foto_wakil')) {
                return $this->upload->data('file_name');
            } else {
                echo $this->upload->display_errors();
            }
        }
        return "default.jpg";
    }

    public function tambahDataKandidat()
    {
        $no_kandidat = $this->input->post('nokandidat', true);
        $data = [
            'no_kandidat' => $no_kandidat,
            'nama' => $this->input->post('namalengkapketua', true),
            'wakil' => $this->input->post('namalengkapwakil', true),
            'jk_ketua' => $this->input->post('jk_ketua', true),
            'jk_wakil' => $this->input->post('jk_wakil', true),
            'email_ketua' => $this->input->post('email_ketua', true),
            'email_wakil' => $this->input->post('email_wakil', true),
            'hp_ketua' => $this->input->post('hp_ketua', true),
            'hp_wakil' => $this->input->post('hp_wakil', true),
            'visi' => $this->input->post('visi', true),
            'misi' => $this->input->post('misi', true),
            'foto_ketua' => $this->uploadketua(),
            'foto_wakil' => $this->uploadwakil(),
            'uraian' => $this->input->post('uraian', true)



        ];

        $this->db->insert('kandidat', $data);
    }
}
