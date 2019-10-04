<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Operation extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Jurusan_model');
        $this->load->model('Mahasiswa_model');
        $this->load->model('Dosen_model');
        $this->load->model('Pimpinan_model');
    }

    public function index()
    {
        $data['title'] = 'Jurusan';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $data['menu'] = $this->db->get('jurusan')->result_array();

        $this->form_validation->set_rules('jurusan', 'Jurusan', 'required');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('operation/jurusan/index', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nama_jurusan' => $this->input->post('jurusan'),
                'jumlah_mhs' => $this->input->post('jumlah'),

            ];
            $this->db->insert('jurusan', $data);
            $this->session->set_flashdata('message', '<div class="alert
            alert-success" role="alert"> Jurusan baru ditambahkan!</div>');
            redirect('operation');
        }
    }

    public function editjurusan($id)
    {
        $data['title'] = 'Edit Jurusan';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['jurusan'] = $this->Jurusan_model->getJurusanById($id);
        $data['menu'] = $this->db->get('jurusan')->result_array();

        $this->form_validation->set_rules('jurusan', 'Jurusan', 'required|trim');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('operation/jurusan/editjurusan', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Jurusan_model->editJurusan();
            $this->session->set_flashdata('message', '<div class="alert
            alert-success" role="alert"> Jurusan telah diubah!</div>');
            redirect('operation');
        }
    }

    public function hapusjurusan($id)
    {

        $this->Jurusan_model->hapusDataJurusan($id);
        $this->session->set_flashdata('message', '<div class="alert
        alert-success" role="alert">Dihapus!</div>');
        redirect('operation');
    }

    public function detailjurusan($id)
    {

        $data['title'] = 'Detail Data Jurusan';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['jurusan'] = $this->Jurusan_model->getJurusanById($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('operation/jurusan/detailjurusan', $data);
        $this->load->view('templates/footer');
    }

    public function mahasiswa()
    {
        $data['title'] = 'Mahasiswa';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('operation/mahasiswa/mahasiswa', $data);
        $this->load->view('templates/footer');
    }
    public function tambahmahasiswa()
    {

        $data['title'] = 'Tambah Mahasiswa';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nim', 'NIM', 'required|trim|is_unique[mahasiswa.nim]', [
            'is_unique' => 'This nim has already registered!'
        ]);
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('passwordmhs1', 'Password', 'required|trim|min_length[3]|matches[passwordmhs2]', [
            'matches' => 'password dont match!',
            'min_length' => 'password too short!'
        ]);
        $this->form_validation->set_rules('passwordmhs2', 'Password', 'required|trim|matches[passwordmhs1]');

        $this->form_validation->set_rules('hpmhs', 'Hpmhs', 'required|trim');

        $this->form_validation->set_rules('emailmhs', 'Email', 'required|trim|valid_email|is_unique[mahasiswa.email]', [
            'is_unique' => 'This email has already registered!'
        ]);


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('operation/mahasiswa/tambahmahasiswa', $data);
            $this->load->view('templates/footer');
        } else {

            $this->Mahasiswa_model->tambahDataMahasiswa();
            $this->session->set_flashdata('message', '<div class="alert
            alert-success" role="alert">Data mahasiswa baru telah ditambahkan!</div>');
            redirect('operation/mahasiswa');
        }
    }
    public function detailmahasiswa()
    {
        $data['title'] = 'Detail Mahasiswa';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('operation/mahasiswa/detailmahasiswa', $data);
        $this->load->view('templates/footer');
    }
    public function editmahasiswa()
    {
        $data['title'] = 'Form Edit Mahasiswa';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('operation/mahasiswa/editmahasiswa', $data);
        $this->load->view('templates/footer');
    }
    public function dosen()
    {
        $data['title'] = 'Dosen';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['dosen'] = $this->Dosen_model->getAllDosen();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('operation/dosen/dosen', $data);
        $this->load->view('templates/footer');
    }

    public function tambahdosen()
    {

        $data['title'] = 'Tambah Dosen';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nidn', 'NIDN', 'required|trim|is_unique[dosen.nidn]', [
            'is_unique' => 'This nidn has already registered!'
        ]);
        $this->form_validation->set_rules('namalengkap', 'Nama Lengkap', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'password dont match!',
            'min_length' => 'password too short!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password]');
        $this->form_validation->set_rules('mengajar', 'Mengajar', 'required|trim');

        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[dosen.email]', [
            'is_unique' => 'This email has already registered!'
        ]);

        $this->form_validation->set_rules('hp', 'Hp', 'required|trim');



        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('operation/dosen/tambahdosen', $data);
            $this->load->view('templates/footer');
        } else {

            $this->Dosen_model->tambahDataDosen();
            $this->session->set_flashdata('message', '<div class="alert
            alert-success" role="alert">Data dosen baru telah ditambahkan!</div>');
            redirect('operation/dosen');
        }
    }

    public function detaildosen()
    {
        $data['title'] = 'Detail Dosen';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('operation/dosen/detaildosen', $data);
        $this->load->view('templates/footer');
    }
    public function editdosen()
    {
        $data['title'] = 'Form Edit Dosen';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('operation/dosen/editdosen', $data);
        $this->load->view('templates/footer');
    }
    public function pimpinan()
    {
        $data['title'] = 'Pimpinan';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['pimpinan'] = $this->Pimpinan_model->getAllPimpinan();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('operation/pimpinan/pimpinan', $data);
        $this->load->view('templates/footer');
    }
    public function tambahpimpinan()
    {

        $data['title'] = 'Pimpinan';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nidn', 'NIDN', 'required|trim|is_unique[dosen.nidn]', [
            'is_unique' => 'This nidn has already registered!'
        ]);
        $this->form_validation->set_rules('namalengkap', 'Nama Lengkap', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'password dont match!',
            'min_length' => 'password too short!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password]');
        $this->form_validation->set_rules('jabatan', 'jabatan', 'required|trim');

        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[dosen.email]', [
            'is_unique' => 'This email has already registered!'
        ]);

        $this->form_validation->set_rules('hp', 'Hp', 'required|trim');



        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('operation/pimpinan/tambahpimpinan', $data);
            $this->load->view('templates/footer');
        } else {

            $this->Pimpinan_model->tambahDataPimpinan();
            $this->session->set_flashdata('message', '<div class="alert
            alert-success" role="alert">Data pimpinan baru telah ditambahkan!</div>');
            redirect('operation/pimpinan');
        }
    }
    public function detailpimpinan()
    {
        $data['title'] = 'Detail Pimpinan STIKOM';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('operation/pimpinan/detailpimpinan', $data);
        $this->load->view('templates/footer');
    }
    public function editpimpinan()
    {
        $data['title'] = 'Form Edit Pimpinan STIKOM';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('operation/pimpinan/editpimpinan', $data);
        $this->load->view('templates/footer');
    }
    public function kandidat()
    {
        $data['title'] = 'Kandidat';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('operation/kandidat/kandidat', $data);
        $this->load->view('templates/footer');
    }
    public function detailkandidat()
    {
        $data['title'] = 'Detail Kandidat';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('operation/kandidat/detailkandidat', $data);
        $this->load->view('templates/footer');
    }
    public function editkandidat()
    {
        $data['title'] = 'Form Edit Kandidat';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('operation/kandidat/editkandidat', $data);
        $this->load->view('templates/footer');
    }
    public function tambahkandidat()
    {
        $data['title'] = 'Tambah Kandidat';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('operation/kandidat/tambahkandidat', $data);
        $this->load->view('templates/footer');
    }

    public function riwayat()
    {
        $data['title'] = 'Riwayat';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kandidat/index', $data);
        $this->load->view('templates/footer');
    }
    public function tambahriwayat()
    {
        $data['title'] = 'Form Tambah Riwayat';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kandidat/tambahriwayat', $data);
        $this->load->view('templates/footer');
    }
    public function detailriwayat()
    {
        $data['title'] = 'Detail Riwayat';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kandidat/detailriwayat', $data);
        $this->load->view('templates/footer');
    }
    public function editriwayat()
    {
        $data['title'] = 'Form Edit Riwayat';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kandidat/editriwayat', $data);
        $this->load->view('templates/footer');
    }

    public function komentar()
    {
        $data['title'] = 'Komentar';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('operation/komentar/komentar', $data);
        $this->load->view('templates/footer');
    }

    public function tambahkomentar()
    {
        $data['title'] = 'Tambah komentar';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('operation/komentar/tambahkomentar', $data);
        $this->load->view('templates/footer');
    }
    public function detailkomentar()
    {
        $data['title'] = 'Detail Komentar';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('operation/komentar/detailkomentar', $data);
        $this->load->view('templates/footer');
    }
}
