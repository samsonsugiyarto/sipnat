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
    public function getKampanyeById($no_kandidat)
    {
        return $this->db->get_where('kampanye', ['no_kandidat' => $no_kandidat])->result_array();
    }
    public function getKampanyeByfile_name($file_name)
    {
        return $this->db->get_where('kampanye', ['file_name' => $file_name])->row_array();
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

    public function getRows($id = '')
    {
        $this->db->select('id,file_name,created');
        $this->db->from('kampanye');
        if ($id) {
            $this->db->where('id', $id);
            $query = $this->db->get();
            $result = $query->row_array();
        } else {
            $this->db->order_by('created', 'desc');
            $query = $this->db->get();
            $result = $query->result_array();
        }
        return !empty($result) ? $result : false;
    }
    public function insert($data = array())
    {
        $insert = $this->db->insert_batch('kampanye', $data);
        return $insert ? true : false;
    }
    public function insertvideo($data = array())
    {
        $insert = $this->db->insert_batch('kampanyevideo', $data);
        return $insert ? true : false;
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
            'uraian' => $this->input->post('uraian', true),
            'jumlah_suara' => 0
        ];

        $this->db->insert('kandidat', $data);
    }
    public function ubahDataKandidat($kandidat, $no_kandidat)
    {

        $upload_image = $_FILES['foto_ketua']['name'];

        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']     = '2048';
            $config['upload_path'] = './assets/img/profile/kandidat';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('foto_ketua')) {

                $old_image = $kandidat['foto_ketua'];
                if ($old_image != 'default.jpg') {
                    unlink(FCPATH . 'assets/img/profile/kandidat/' . $old_image);
                }
                $new_image =  $this->upload->data('file_name');
                $this->db->set('foto_ketua', $new_image);
            } else {
                echo $this->upload->display_errors();
            }
        }


        $upload_imagewakil = $_FILES['foto_wakil']['name'];

        if ($upload_imagewakil) {
            $config2['allowed_types'] = 'gif|jpg|png';
            $config2['max_size']     = '2048';
            $config2['upload_path'] = './assets/img/profile/kandidat';
            $this->load->library('upload', $config2);

            if ($this->upload->do_upload('foto_wakil')) {

                $old_imagewakil = $kandidat['foto_wakil'];
                if ($old_imagewakil != 'default.jpg') {
                    unlink(FCPATH . 'assets/img/profile/kandidat/' . $old_imagewakil);
                }
                $new_image2 =  $this->upload->data('file_name');
                $this->db->set('foto_wakil', $new_image2);
            } else {
                echo $this->upload->display_errors();
            }
        }

        $name =  $this->input->post('namalengkapketua', true);
        $wakil =  $this->input->post('namalengkapwakil', true);
        $jk_ketua = $this->input->post('jk_ket', true);
        $jk_wakil =  $this->input->post('jk_wak', true);
        $email_ketua =  $this->input->post('email_ketua', true);
        $email_wakil = $this->input->post('email_wakil', true);
        $hp_ketua =  $this->input->post('hp_ketua', true);
        $hp_wakil =  $this->input->post('hp_wakil', true);
        $visi =  $this->input->post('visi', true);
        $misi = $this->input->post('misi', true);
        $uraian = $this->input->post('uraian', true);


        $data = [
            'nama' => $name,
            'wakil' => $wakil,
            'jk_ketua' => $jk_ketua,
            'jk_wakil' => $jk_wakil,
            'email_ketua' => $email_ketua,
            'email_wakil' => $email_wakil,
            'hp_ketua' => $hp_ketua,
            'hp_wakil' => $hp_wakil,
            'visi' => $visi,
            'misi' => $misi,
            'uraian' => $uraian
        ];
        $this->db->set($data);
        $this->db->where('no_kandidat', $no_kandidat);
        $this->db->update('kandidat');
    }

    public function hapusDataKampanye($file_name, $kampanye)
    {
        $this->db->delete('kampanye', ['file_name' => $file_name]);
        $old_image = $kampanye['file_name'];
        unlink(FCPATH . 'assets/img/kampanye/' . $old_image);
    }

    public function hapusDataKandidat($no_kandidat, $kandidat, $kampanye)
    {
        foreach ($kampanye as $kamp) {

            $old_image3 = $kamp['file_name'];
            unlink(FCPATH . 'assets/img/kampanye/' . $old_image3);
        }

        $old_image = $kandidat['foto_ketua'];
        $old_image2 = $kandidat['foto_wakil'];
        if ($old_image != 'default.jpg') {
            unlink(FCPATH . 'assets/img/profile/kandidat/' . $old_image);
        }
        if ($old_image2 != 'default.jpg') {
            unlink(FCPATH . 'assets/img/profile/kandidat/' . $old_image2);
        }


        //$this->db->where('id', $id);
        $this->db->delete('kandidat', ['no_kandidat' => $no_kandidat]);
        $this->db->delete('kampanye', ['no_kandidat' => $no_kandidat]);
    }
}
