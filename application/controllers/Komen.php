<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Komen extends CI_Controller
{


    public function index()
    {
        $role_id = $this->session->userdata('role_id');
        $usermhs = $this->db->get_where('mahasiswa', ['role_id' => $role_id])->row_array();
        $userdsn = $this->db->get_where('dosen', ['role_id' => $role_id])->row_array();
        $data['title'] = 'Tambah komentar';


        if ($userdsn['role_id'] == 4) {
            is_logged_indsn();
            $data['user'] = $this->db->get_where('dosen', ['nidn' =>
            $this->session->userdata('nidn')])->row_array();
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('coblos/komen/tambahkomen', $data);
            $this->load->view('templates/footer');
        }
        if ($usermhs['role_id'] == 5) {
            is_logged_inmhs();
            $data['user'] = $this->db->get_where('mahasiswa', ['nim' =>
            $this->session->userdata('nim')])->row_array();
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('coblos/komen/tambahkomen', $data);
            $this->load->view('templates/footer');
        }
    }
}
