<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Coblos extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $role_id = $this->session->userdata('role_id');
        $data['title'] = 'Tentukan Pilihanmu!';
        $user = $this->db->get_where('user', ['role_id' => $role_id])->row_array();
        $usermhs = $this->db->get_where('mahasiswa', ['role_id' => $role_id])->row_array();
        $userdsn = $this->db->get_where('dosen', ['role_id' => $role_id])->row_array();
        $userpimp = $this->db->get_where('pimpinan', ['role_id' => $role_id])->row_array();

        if ($user['role_id'] == 1) {
            is_logged_in();
            $data['user'] = $this->db->get_where('user', ['email' =>
            $this->session->userdata('email')])->row_array();
            $data['namarole'] = $this->db->get('user_role')->row_array();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('coblos/index', $data);
            $this->load->view('templates/footer');
        }
        if ($user['role_id'] == 2) {
            is_logged_in();
            $data['user'] = $this->db->get_where('user', ['email' =>
            $this->session->userdata('email')])->row_array();
            $data['namarole'] = $this->db->get('user_role')->row_array();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('coblos/index', $data);
            $this->load->view('templates/footer');
        }

        if ($userpimp['role_id'] == 3) {
            $role = 3;
            $data['namarole']  = $this->db->get_where('user_role', ['id' => $role])->row_array();
            is_logged_inpimp();
            $data['user'] = $this->db->get_where('pimpinan', ['nidn' =>
            $this->session->userdata('nidn')])->row_array();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('coblos/index', $data);
            $this->load->view('templates/footer');
        }


        if ($userdsn['role_id'] == 4) {
            $role = 4;
            $data['namarole']  = $this->db->get_where('user_role', ['id' => $role])->row_array();
            is_logged_indsn();
            $data['user'] = $this->db->get_where('dosen', ['nidn' =>
            $this->session->userdata('nidn')])->row_array();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('coblos/index', $data);
            $this->load->view('templates/footer');
        }

        if ($usermhs['role_id'] == 5) {
            $role = 5;
            $data['namarole']  = $this->db->get_where('user_role', ['id' => $role])->row_array();
            is_logged_inmhs();
            $data['user'] = $this->db->get_where('mahasiswa', ['nim' =>
            $this->session->userdata('nim')])->row_array();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('coblos/index', $data);
            $this->load->view('templates/footer');
        }
    }
}
