<?php

class Riwayat_model extends CI_Model
{
    public function getAllRiwayat()
    {

        $this->db->order_by('th_jabatan', 'desc');
        return $this->db->get('riwayat')->result_array();
    }

    public function getRiwayatById($id)
    {
        return $this->db->get_where('riwayat', ['id' => $id])->row_array();
    }

    public function uploadketua()
    {
        // cek jika ada gambar yang akan diupload
        $upload_image = $_FILES['fotoketua']['name'];

        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']     = '2048';
            $config['upload_path'] = './assets/img/profile/riwayat';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('fotoketua')) {
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
        $upload_image = $_FILES['fotowakil']['name'];

        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']     = '2048';
            $config['upload_path'] = './assets/img/profile/riwayat';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('fotowakil')) {
                return $this->upload->data('file_name');
            } else {
                echo $this->upload->display_errors();
            }
        }
        return "default.jpg";
    }

    public function tambahDataRiwayat()
    {
        $tahunjabatan = $this->input->post('jabatan', true);
        $data = [
            'th_jabatan' => $tahunjabatan,
            'no_kandidat' => $this->input->post('nokandidat', true),
            'ketua' => $this->input->post('namalengkapketua', true),
            'wakil' => $this->input->post('namalengkapwakil', true),
            'visi' => $this->input->post('visi', true),
            'misi' => $this->input->post('misi', true),
            'fotoketua' => $this->uploadketua(),
            'fotowakil' => $this->uploadwakil(),
        ];

        $this->db->insert('riwayat', $data);
    }

    public function ubahDataRiwayat($riwayat, $id)
    {

        $upload_image = $_FILES['fotoketua']['name'];

        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']     = '2048';
            $config['upload_path'] = './assets/img/profile/riwayat';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('fotoketua')) {

                $old_image = $riwayat['fotoketua'];
                if ($old_image != 'default.jpg') {
                    unlink(FCPATH . 'assets/img/profile/riwayat/' . $old_image);
                }
                $new_image =  $this->upload->data('file_name');
                $this->db->set('fotoketua', $new_image);
            } else {
                echo $this->upload->display_errors();
            }
        }


        $upload_imagewakil = $_FILES['fotowakil']['name'];

        if ($upload_imagewakil) {
            $config2['allowed_types'] = 'gif|jpg|png';
            $config2['max_size']     = '2048';
            $config2['upload_path'] = './assets/img/profile/riwayat';
            $this->load->library('upload', $config2);

            if ($this->upload->do_upload('fotowakil')) {

                $old_imagewakil = $riwayat['fotowakil'];
                if ($old_imagewakil != 'default.jpg') {
                    unlink(FCPATH . 'assets/img/profile/riwayat/' . $old_imagewakil);
                }
                $new_image2 =  $this->upload->data('file_name');
                $this->db->set('fotowakil', $new_image2);
            } else {
                echo $this->upload->display_errors();
            }
        }

        $jabatan =  $this->input->post('jabatan', true);
        $nokandidat =  $this->input->post('nokandidat', true);
        $ketua =  $this->input->post('namalengkapketua', true);
        $wakil =  $this->input->post('namalengkapwakil', true);
        $visi =  $this->input->post('visi', true);
        $misi = $this->input->post('misi', true);



        $data = [
            'th_jabatan' => $jabatan,
            'no_kandidat' => $nokandidat,
            'ketua' => $ketua,
            'wakil' => $wakil,
            'visi' => $visi,
            'misi' => $misi,
        ];
        $this->db->set($data);
        $this->db->where('id', $id);
        $this->db->update('riwayat');
    }




    public function hapusDataRiwayat($id, $riwayat)
    {
        $old_image = $riwayat['fotoketua'];
        $old_image2 = $riwayat['fotowakil'];
        if ($old_image != 'default.jpg') {
            unlink(FCPATH . 'assets/img/profile/riwayat/' . $old_image);
        }
        if ($old_image2 != 'default.jpg') {
            unlink(FCPATH . 'assets/img/profile/riwayat/' . $old_image2);
        }

        //$this->db->where('id', $id);
        $this->db->delete('riwayat', ['id' => $id]);
    }
}
