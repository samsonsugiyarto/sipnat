<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Coblos extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pilih_model', 'Pilih');
    }

    public function index()
    {

        $data['title'] = 'Tentukan Pilihanmu!';

        $role_id = $this->session->userdata('role_id');

        $data['namarole']  = $this->db->get_where('user_role', ['id' =>
        $this->session->userdata('id')])->row_array();

        if ($role_id == 1) {
            is_logged_in();
            $data['user'] = $this->db->get_where('user', ['email' =>
            $this->session->userdata('email')])->row_array();
            $data['pilih'] = $this->db->get_where('data_pemilihan', ['id_pemilih' =>
            $this->session->userdata('nim')])->row_array();
            $data['kandidat'] = $this->db->get('kandidat')->result_array();
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('coblos/index', $data);
            $this->load->view('templates/footer');
        } elseif ($role_id == 2) {
            is_logged_in();
            $data['user'] = $this->db->get_where('user', ['email' =>
            $this->session->userdata('email')])->row_array();
            $data['kandidat'] = $this->db->get('kandidat')->result_array();
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('coblos/index', $data);
            $this->load->view('templates/footer');
        } elseif ($role_id == 3) {

            is_logged_inpimp();
            $data['user'] = $this->db->get_where('pimpinan', ['nidn' =>
            $this->session->userdata('nidn')])->row_array();
            $data['kandidat'] = $this->db->get('kandidat')->result_array();
            $data['pilih'] = $this->db->get_where('data_pemilihan', ['id_pemilih' =>
            $this->session->userdata('nidn')])->row_array();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('coblos/index', $data);
            $this->load->view('templates/footer');
        } elseif ($role_id == 4) {
            is_logged_indsn();
            $data['user'] = $this->db->get_where('dosen', ['nik' =>
            $this->session->userdata('nik')])->row_array();


            $data['kandidat'] = $this->db->get('kandidat')->result_array();
            $data['pilih'] = $this->db->get_where('data_pemilihan', ['id_pemilih' =>
            $this->session->userdata('nik')])->row_array();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('coblos/index', $data);
            $this->load->view('templates/footer');
        } elseif ($role_id == 5) {
            is_logged_inmhs();
            $data['user'] = $this->db->get_where('mahasiswa', ['nim' =>
            $this->session->userdata('nim')])->row_array();

            $data['kandidat'] = $this->db->get('kandidat')->result_array();

            $data['pilih'] = $this->db->get_where('data_pemilihan', ['id_pemilih' =>
            $this->session->userdata('nim')])->row_array();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('coblos/index', $data);
            $this->load->view('templates/footer');
        } else {
            if ($role_id == 1 || $role_id == 2) {
                redirect('auth/blocked');
            } else {
                redirect('home');
            }
        }
    }
    public function pilih($id)
    {

        $data['title'] = 'Tentukan Pilihanmu!';

        $role_id = $this->session->userdata('role_id');

        $data['namarole']  = $this->db->get_where('user_role', ['id' =>
        $this->session->userdata('id')])->row_array();

        if ($role_id == 1) {
            is_logged_in();
            $data['user'] = $this->db->get_where('user', ['email' =>
            $this->session->userdata('email')])->row_array();

            $data['kandidat'] = $this->db->get('kandidat')->result_array();
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('coblos/index', $data);
            $this->load->view('templates/footer');
        } elseif ($role_id == 2) {
            is_logged_in();
            $data['user'] = $this->db->get_where('user', ['email' =>
            $this->session->userdata('email')])->row_array();
            $data['kandidat'] = $this->db->get('kandidat')->result_array();
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('coblos/index', $data);
            $this->load->view('templates/footer');
        } elseif ($role_id == 3) {

            is_logged_inpimp();
            $data['user'] = $this->db->get_where('pimpinan', ['nidn' =>
            $this->session->userdata('nidn')])->row_array();
            $user = $this->db->get_where('pimpinan', ['nidn' =>
            $this->session->userdata('nidn')])->row_array();
            $data['kandidat'] = $this->db->get('kandidat')->result_array();
            $pilih = $this->db->get_where('data_pemilihan', ['id_pemilih' =>
            $this->session->userdata('nidn')])->row_array();
            if ($pilih) {
                $this->load->view('templates/header', $data);
                $this->load->view('templates/sidebar', $data);
                $this->load->view('templates/topbar', $data);
                $this->load->view('coblos/index', $data);
                $this->load->view('templates/footer');
            } else {

                $this->Pilih->pilihDataKandidatPimpinan($id, $user);
                $this->Pilih->tambahJumlahSuara($id);
                $this->session->set_flashdata('message', 'Memilih!');
                redirect('coblos');
            }
        } elseif ($role_id == 4) {
            is_logged_indsn();
            $data['user'] = $this->db->get_where('dosen', ['nik' =>
            $this->session->userdata('nik')])->row_array();
            $user = $this->db->get_where('dosen', ['nik' =>
            $this->session->userdata('nik')])->row_array();
            $pilih = $this->db->get_where('data_pemilihan', ['id_pemilih' =>
            $this->session->userdata('nik')])->row_array();

            $data['kandidat'] = $this->db->get('kandidat')->result_array();
            if ($pilih) {
                $this->load->view('templates/header', $data);
                $this->load->view('templates/sidebar', $data);
                $this->load->view('templates/topbar', $data);
                $this->load->view('coblos/index', $data);
                $this->load->view('templates/footer');
            } else {

                $this->Pilih->pilihDataKandidatDosen($id, $user);
                $this->Pilih->tambahJumlahSuara($id);
                $this->session->set_flashdata('message', 'Memilih!');
                redirect('coblos');
            }
        } elseif ($role_id == 5) {
            is_logged_inmhs();
            $data['user'] = $this->db->get_where('mahasiswa', ['nim' =>
            $this->session->userdata('nim')])->row_array();

            $data['kandidat'] = $this->db->get('kandidat')->result_array();

            $user = $this->db->get_where('mahasiswa', ['nim' =>
            $this->session->userdata('nim')])->row_array();

            $pilih = $this->db->get_where('data_pemilihan', ['id_pemilih' =>
            $this->session->userdata('nim')])->row_array();


            if ($pilih) {
                $this->load->view('templates/header', $data);
                $this->load->view('templates/sidebar', $data);
                $this->load->view('templates/topbar', $data);
                $this->load->view('coblos/index', $data);
                $this->load->view('templates/footer');
            } else {

                $this->Pilih->pilihDataKandidat($id, $user);
                $this->Pilih->tambahJumlahSuara($id);
                $this->session->set_flashdata('message', 'Memilih!');
                redirect('coblos');
            }
        } else {
            if ($role_id == 1 || $role_id == 2) {
                redirect('auth/blocked');
            } else {
                redirect('home');
            }
        }
    }
}
