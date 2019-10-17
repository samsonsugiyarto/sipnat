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
}
