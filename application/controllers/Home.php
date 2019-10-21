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

        $this->load->view('home', $data);
    }

    public function kampanye()
    {
        $this->load->view('kampanye');
    }
    public function riwayatsenat()
    {
        $this->load->view('riwayatsenat');
    }
}
