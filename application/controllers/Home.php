<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {

        $query = "SELECT * 
            FROM komentar INNER JOIN konfir_komentar
              ON komentar.id = konfir_komentar.id_komentar 
              ORDER BY komentar.waktu ASC";
        $data['komentar'] = $this->db->query($query)->result_array();

        $data['kandidat'] = $this->db->get('kandidat')->result_array();
        $query = "SELECT sum(jumlah_suara) as jsuara FROM kandidat";
        $data['js'] = $this->db->query($query)->row_array();

        $this->load->view('home', $data);
    }

    public function kampanye()

    {


        $data['kandidat'] = $this->db->get('kandidat')->result_array();
        $this->load->view('kampanye', $data);
    }
    public function riwayatsenat()
    {
        $data['riwayat'] = $this->db->get('riwayat')->result_array();
        $this->load->view('riwayatsenat', $data);
    }
}
