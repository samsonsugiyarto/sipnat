<?php

class Pilih_model extends CI_Model
{

    public function pilihDataKandidat($id, $user)
    {

        date_default_timezone_set('Asia/Jakarta');
        $data = [
            'id_pemilih' => $user['nim'],
            'id_kandidat' => $id,
            'waktu' => time()
        ];

        $this->db->insert('data_pemilihan', $data);
    }

    public function pilihDataKandidatDosen($id, $user)
    {
        date_default_timezone_set('Asia/Jakarta');
        $data = [

            'id_pemilih' => $user['nik'],
            'id_kandidat' => $id,
            'waktu' => time()
        ];

        $this->db->insert('data_pemilihan', $data);
    }
    public function pilihDataKandidatPimpinan($id, $user)
    {
        date_default_timezone_set('Asia/Jakarta');
        $data = [
            'id_pemilih' => $user['nidn'],
            'id_kandidat' => $id,
            'waktu' => time()
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

    public function hapusDataPemilih()
    {
        $this->db->empty_table('data_pemilihan');

        $kandidat =  $this->db->get('kandidat')->result_array();

        foreach ($kandidat as $kan) {

            $data = [
                'jumlah_suara' => $kan['jumlah_suara'] -  $kan['jumlah_suara']
            ];
            $this->db->where('no_kandidat', $kan['no_kandidat']);
            $this->db->update('kandidat', $data);
        };
    }
}
