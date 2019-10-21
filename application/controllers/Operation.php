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
        $this->load->model('Kandidat_model');
        $this->load->model('Komentar_model');
    }

    public function index()
    {
        $data['title'] = 'Jurusan';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('jurusan', 'Jurusan', 'required');


        $data['namarole']  = $this->db->get_where('user_role', ['id' =>
        $this->session->userdata('id')])->row_array();



        $query = "SELECT nama_jurusan, COUNT( nama_jurusan ) as total  
            FROM mahasiswa INNER JOIN jurusan
        ON mahasiswa.kode_jurusan = jurusan.id 
        GROUP BY nama_jurusan";

        $data['jumlah_mhs'] = $this->db->query($query)->result_array();

        $data['menu'] = $this->db->get('jurusan')->result_array();

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('operation/jurusan/index', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nama_jurusan' => $this->input->post('jurusan')
            ];
            $this->db->insert('jurusan', $data);
            $this->session->set_flashdata('message', 'Ditambahkan!');
            redirect('operation');
        }
    }

    public function detailjurusan($id)
    {
        $data['title'] = 'Detail Jurusan';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['namarole']  = $this->db->get_where('user_role', ['id' =>
        $this->session->userdata('id')])->row_array();

        $data['jurusan'] = $this->Jurusan_model->detailJurusanById($id);




        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('operation/jurusan/detailjurusan', $data);
        $this->load->view('templates/footer');
    }

    public function editjurusan($id)
    {

        $data['title'] = 'Edit Jurusan';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['jurusan'] = $this->Jurusan_model->getJurusanById($id);

        $this->form_validation->set_rules('jurusan', 'Jurusan', 'required|trim');


        $data['namarole']  = $this->db->get_where('user_role', ['id' =>
        $this->session->userdata('id')])->row_array();


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('operation/jurusan/editjurusan', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Jurusan_model->editJurusan();
            $this->session->set_flashdata('message', 'Diubah!');
            redirect('operation');
        }
    }


    public function hapusjurusan($id)
    {

        $this->Jurusan_model->hapusDataJurusan($id);
        $this->session->set_flashdata('message', 'Dihapus!');
        redirect('operation');
    }

    public function mahasiswa()
    {
        $data['title'] = 'Mahasiswa';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $data['namarole']  = $this->db->get_where('user_role', ['id' =>
        $this->session->userdata('id')])->row_array();



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

        $this->form_validation->set_rules('hpmhs', 'Hp', 'required|trim');

        $this->form_validation->set_rules('emailmhs', 'Email', 'required|trim|valid_email|is_unique[mahasiswa.email]', [
            'is_unique' => 'This email has already registered!'
        ]);

        $data['namarole']  = $this->db->get_where('user_role', ['id' =>
        $this->session->userdata('id')])->row_array();
        $data['jurusan'] = $this->db->get('jurusan')->result_array();

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('operation/mahasiswa/tambahmahasiswa', $data);
            $this->load->view('templates/footer');
        } else {

            $this->Mahasiswa_model->tambahDataMahasiswa();




            $this->session->set_flashdata('message', 'Ditambahkan!');
            redirect('operation/mahasiswa');
        }
    }
    public function detailmahasiswa($nim)
    {
        $data['title'] = 'Detail Mahasiswa';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['namarole']  = $this->db->get_where('user_role', ['id' =>
        $this->session->userdata('id')])->row_array();

        $data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($nim);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('operation/mahasiswa/detailmahasiswa', $data);
        $this->load->view('templates/footer');
    }
    public function editmahasiswa($nim)
    {
        $data['title'] = 'Form Edit Mahasiswa';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['namarole']  = $this->db->get_where('user_role', ['id' =>
        $this->session->userdata('id')])->row_array();

        $data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($nim);
        $mhs = $this->Mahasiswa_model->getMahasiswaById($nim);

        $data['jurusan'] = $this->db->get('jurusan')->result_array();



        $this->form_validation->set_rules('namalengkap', 'NamaLengkap', 'required|trim');
        $this->form_validation->set_rules('passwordmhs1', 'Password', 'trim|min_length[3]|matches[passwordmhs2]', [
            'matches' => 'password dont match!',
            'min_length' => 'password too short!'
        ]);
        $this->form_validation->set_rules('passwordmhs2', 'Password', 'trim|matches[passwordmhs1]');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('hp', 'Hp', 'required');


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('operation/mahasiswa/editmahasiswa', $data);
            $this->load->view('templates/footer');
        } else {

            $this->Mahasiswa_model->ubahDataMahasiswa($mhs, $nim);

            $this->session->set_flashdata('message', 'Diubah!');
            redirect('operation/mahasiswa');
        }
    }
    public function hapusmahasiswa($nim)
    {
        $mhs = $this->Mahasiswa_model->getMahasiswaById($nim);

        $this->Mahasiswa_model->hapusDataMahasiswa($nim, $mhs);
        $this->session->set_flashdata('message', 'Dihapus!');
        redirect('operation/mahasiswa');
    }
    public function dosen()
    {
        $data['title'] = 'Dosen';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['dosen'] = $this->Dosen_model->getAllDosen();

        $data['namarole']  = $this->db->get_where('user_role', ['id' =>
        $this->session->userdata('id')])->row_array();

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

        $data['namarole']  = $this->db->get_where('user_role', ['id' =>
        $this->session->userdata('id')])->row_array();

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('operation/dosen/tambahdosen', $data);
            $this->load->view('templates/footer');
        } else {

            $this->Dosen_model->tambahDataDosen();
            $this->session->set_flashdata('message', 'Ditambahkan!');
            redirect('operation/dosen');
        }
    }

    public function detaildosen($nidn)
    {
        $data['title'] = 'Detail Dosen';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['namarole']  = $this->db->get_where('user_role', ['id' =>
        $this->session->userdata('id')])->row_array();

        $data['dosen'] = $this->Dosen_model->getDosenById($nidn);


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('operation/dosen/detaildosen', $data);
        $this->load->view('templates/footer');
    }
    public function editdosen($nidn)
    {
        $data['title'] = 'Form Edit Dosen';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['namarole']  = $this->db->get_where('user_role', ['id' =>
        $this->session->userdata('id')])->row_array();

        $data['dosen'] = $this->Dosen_model->getDosenById($nidn);
        $dosen = $this->Dosen_model->getDosenById($nidn);


        $this->form_validation->set_rules('namalengkap', 'NamaLengkap', 'required|trim');
        $this->form_validation->set_rules('passworddosen1', 'Password', 'trim|min_length[3]|matches[passworddosen2]', [
            'matches' => 'password dont match!',
            'min_length' => 'password too short!'
        ]);
        $this->form_validation->set_rules('passworddosen2', 'Password', 'trim|matches[passworddosen1]');
        $this->form_validation->set_rules('mengajar', 'Mengajar', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('hp', 'Hp', 'required');


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('operation/dosen/editdosen', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Dosen_model->ubahDataDosen($dosen, $nidn);

            $this->session->set_flashdata('message', 'Diubah!');
            redirect('operation/dosen');
        }
    }
    public function hapusdosen($nidn)
    {
        $dosen = $this->Dosen_model->getDosenById($nidn);

        $this->Dosen_model->hapusDataDosen($nidn, $dosen);
        $this->session->set_flashdata('message', 'Dihapus!');
        redirect('operation/dosen');
    }
    public function pimpinan()
    {
        $data['title'] = 'Pimpinan';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['pimpinan'] = $this->Pimpinan_model->getAllPimpinan();
        $data['namarole']  = $this->db->get_where('user_role', ['id' =>
        $this->session->userdata('id')])->row_array();

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

        $data['namarole']  = $this->db->get_where('user_role', ['id' =>
        $this->session->userdata('id')])->row_array();

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('operation/pimpinan/tambahpimpinan', $data);
            $this->load->view('templates/footer');
        } else {

            $this->Pimpinan_model->tambahDataPimpinan();
            $this->session->set_flashdata('message', 'Ditambahkan!');
            redirect('operation/pimpinan');
        }
    }
    public function detailpimpinan($nidn)
    {
        $data['title'] = 'Detail Pimpinan STIKOM';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['namarole']  = $this->db->get_where('user_role', ['id' =>
        $this->session->userdata('id')])->row_array();

        $data['pimpinan'] = $this->Pimpinan_model->getPimpinanById($nidn);


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('operation/pimpinan/detailpimpinan', $data);
        $this->load->view('templates/footer');
    }
    public function editpimpinan($nidn)
    {
        $data['title'] = 'Form Edit Pimpinan STIKOM';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['namarole']  = $this->db->get_where('user_role', ['id' =>
        $this->session->userdata('id')])->row_array();

        $this->form_validation->set_rules('namalengkap', 'Nama Lengkap', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'trim|min_length[3]|matches[password2]', [
            'matches' => 'password dont match!',
            'min_length' => 'password too short!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'trim|matches[password]');
        $this->form_validation->set_rules('jabatan', 'jabatan', 'required|trim');

        $this->form_validation->set_rules('email', 'Email', 'required|trim');

        $this->form_validation->set_rules('hp', 'Hp', 'required|trim');

        $data['pimpinan'] = $this->Pimpinan_model->getPimpinanById($nidn);
        $pimpinan = $this->Pimpinan_model->getPimpinanById($nidn);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('operation/pimpinan/editpimpinan', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Pimpinan_model->ubahDataPimpinan($pimpinan, $nidn);

            $this->session->set_flashdata('message', 'Diubah!');
            redirect('operation/pimpinan');
        }
    }
    public function hapuspimpinan($nidn)
    {
        $pimpinan = $this->Pimpinan_model->getPimpinanById($nidn);

        $this->Pimpinan_model->hapusDataPimpinan($nidn, $pimpinan);
        $this->session->set_flashdata('message', 'Dihapus!');
        redirect('operation/pimpinan');
    }
    public function kandidat()
    {
        $data['title'] = 'Kandidat';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['kandidat'] = $this->Kandidat_model->getAllKandidat();
        $data['namarole']  = $this->db->get_where('user_role', ['id' =>
        $this->session->userdata('id')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('operation/kandidat/kandidat', $data);
        $this->load->view('templates/footer');
    }
    public function detailkandidat($no_kandidat)
    {
        $data['title'] = 'Detail Kandidat';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['kandidat'] = $this->Kandidat_model->getKandidatById($no_kandidat);


        $data['namarole']  = $this->db->get_where('user_role', ['id' =>
        $this->session->userdata('id')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('operation/kandidat/detailkandidat', $data);
        $this->load->view('templates/footer');
    }
    public function editkandidat($no_kandidat)
    {
        $data['title'] = 'Form Edit Kandidat';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $this->form_validation->set_rules('namalengkapketua', 'Nama Lengkap Ketua', 'required|trim');
        $this->form_validation->set_rules('namalengkapwakil', 'Nama Lengkap Wakil', 'required|trim');
        $this->form_validation->set_rules('email_ketua', 'Email Ketua', 'required|trim|valid_email');
        $this->form_validation->set_rules('email_wakil', 'Email Ketua', 'required|trim|valid_email');
        $this->form_validation->set_rules('hp_ketua', 'HP Ketua', 'required|trim');
        $this->form_validation->set_rules('hp_wakil', 'HP Wakil', 'required|trim');
        $this->form_validation->set_rules('visi', 'Visi', 'required|trim');
        $this->form_validation->set_rules('misi', 'Misi', 'required|trim');
        $this->form_validation->set_rules('uraian', 'Uraian', 'required|trim');


        $data['namarole']  = $this->db->get_where('user_role', ['id' =>
        $this->session->userdata('id')])->row_array();

        $data['kandidat'] = $this->Kandidat_model->getKandidatById($no_kandidat);
        $kandidat = $this->Kandidat_model->getKandidatById($no_kandidat);


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('operation/kandidat/editkandidat', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Kandidat_model->ubahDataKandidat($kandidat, $no_kandidat);
            $this->session->set_flashdata('message', 'Diubah!');
            redirect('operation/kandidat');
        }
    }
    public function tambahkandidat()
    {
        $data['title'] = 'Tambah Kandidat';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nokandidat', 'No Kandidat', 'required|trim|is_unique[kandidat.no_kandidat]', [
            'is_unique' => 'This no kandidat has already registered!'
        ]);
        $this->form_validation->set_rules('namalengkapketua', 'Nama Lengkap Ketua', 'required|trim');
        $this->form_validation->set_rules('namalengkapwakil', 'Nama Lengkap Wakil', 'required|trim');
        $this->form_validation->set_rules('email_ketua', 'Email Ketua', 'required|trim|valid_email|is_unique[kandidat.email_ketua]', [
            'is_unique' => 'This email ketua has already registered!'
        ]);
        $this->form_validation->set_rules('email_wakil', 'Email Ketua', 'required|trim|valid_email|is_unique[kandidat.email_wakil]', [
            'is_unique' => 'This email wakil has already registered!'
        ]);
        $this->form_validation->set_rules('hp_ketua', 'HP Ketua', 'required|trim');
        $this->form_validation->set_rules('hp_wakil', 'HP Wakil', 'required|trim');
        $this->form_validation->set_rules('visi', 'Visi', 'required|trim');
        $this->form_validation->set_rules('misi', 'Misi', 'required|trim');
        $this->form_validation->set_rules('uraian', 'Uraian', 'required|trim');


        $data['namarole']  = $this->db->get_where('user_role', ['id' =>
        $this->session->userdata('id')])->row_array();

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('operation/kandidat/tambahkandidat', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Kandidat_model->tambahDataKandidat();
            $this->session->set_flashdata('message', 'Ditambahkan!');
            redirect('operation/kandidat');
        }
    }

    public function hapuskandidat($no_kandidat)
    {
        $kandidat = $this->Kandidat_model->getKandidatById($no_kandidat);

        $this->Kandidat_model->hapusDataKandidat($no_kandidat, $kandidat);
        $this->session->set_flashdata('message', 'Dihapus!');
        redirect('operation/Kandidat');
    }

    public function riwayat()
    {
        $data['title'] = 'Riwayat';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['namarole']  = $this->db->get_where('user_role', ['id' =>
        $this->session->userdata('id')])->row_array();

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

        $data['namarole']  = $this->db->get_where('user_role', ['id' =>
        $this->session->userdata('id')])->row_array();

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

        $data['namarole']  = $this->db->get_where('user_role', ['id' =>
        $this->session->userdata('id')])->row_array();

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

        $data['namarole']  = $this->db->get_where('user_role', ['id' =>
        $this->session->userdata('id')])->row_array();

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

        $data['namarole']  = $this->db->get_where('user_role', ['id' =>
        $this->session->userdata('id')])->row_array();

        $data['komentar'] = $this->Komentar_model->getAllKomentar();
        $data['konfir'] = $this->Komentar_model->getDatakonfir();



        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('operation/komentar/komentar', $data);
        $this->load->view('templates/footer');
    }

    public function tambahkomentar()
    {
        $data['title'] = 'Komentar';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $user = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['namarole']  = $this->db->get_where('user_role', ['id' =>
        $this->session->userdata('id')])->row_array();

        $this->form_validation->set_rules('komentar', 'Komentar', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('operation/komentar/tambahkomentar', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Komentar_model->tambahKomentar($user);
            $this->session->set_flashdata('message', 'Ditambahkan!');
            redirect('operation/komentar');
        }
    }
    public function detailkomentar($id)
    {
        $data['title'] = 'Komentar';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['namarole']  = $this->db->get_where('user_role', ['id' =>
        $this->session->userdata('id')])->row_array();

        $data['komen'] = $this->Komentar_model->detailkomen($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('operation/komentar/detailkomentar', $data);
        $this->load->view('templates/footer');
    }

    public function konfirkomen($id)
    {

        $komen = $this->Komentar_model->getKomentarById($id);
        $this->Komentar_model->konfirKomentar($id, $komen);


        $this->session->set_flashdata('message', 'Post!');
        redirect('operation/komentar');
    }

    public function hapuskomentar($id)
    {
        $this->Komentar_model->hapusDataKomentar($id);
        $this->session->set_flashdata('message', 'Dihapus!');
        redirect('operation/komentar');
    }
}
