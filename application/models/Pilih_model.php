<?php

class Pilih_model extends CI_Model
{

    public function pilihDataKandidat($id, $user)
    {
        $tipe = 'Mahasiswa';

        date_default_timezone_set('Asia/Jakarta');
        $data = [
            'tipe' => $tipe,
            'id_pemilih' => $user['nim'],
            'name' => $user['name'],
            'id_kandidat' => $id,
            'waktu' => date("d-m-Y H:i:s")
        ];

        $this->db->insert('data_pemilihan', $data);
    }

    public function pilihDataKandidatDosen($id, $user)
    {
        $tipe = 'Dosen';

        date_default_timezone_set('Asia/Jakarta');
        $data = [
            'tipe' => $tipe,
            'id_pemilih' => $user['nidn'],
            'name' => $user['name'],
            'id_kandidat' => $id,
            'waktu' => date("d-m-Y H:i:s")
        ];

        $this->db->insert('data_pemilihan', $data);
    }
    public function pilihDataKandidatPimpinan($id, $user)
    {
        $tipe = 'Pimpinan';

        date_default_timezone_set('Asia/Jakarta');
        $data = [
            'tipe' => $tipe,
            'id_pemilih' => $user['nidn'],
            'name' => $user['name'],
            'id_kandidat' => $id,
            'waktu' => date("d-m-Y H:i:s")
        ];

        $this->db->insert('data_pemilihan', $data);
    }
    public function tambahJumlahSuara($id)
    {
        $kandidat = $this->db->get_where('kandidat', ['no_kandidat' => $id])->row_array();


        $data = [
            'jumlah_suara' => $kandidat['jumlah_suara'] + 1
        ];
        $this->db->set($data);
        $this->db->where('no_kandidat', $id);
        $this->db->update('kandidat');
    }
}
