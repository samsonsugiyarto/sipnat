<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Role_model');
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['namarole']  = $this->db->get_where('user_role', ['id' =>
        $this->session->userdata('id')])->row_array();

        $data['jurusan'] = $this->db->count_all_results('jurusan');


        $data['pimp'] = $this->db->count_all('pimpinan');
        $data['dsn'] = $this->db->count_all('dosen');
        $data['mhs'] = $this->db->count_all('mahasiswa');

        $this->db->like('is_active', 1);
        $this->db->from('pimpinan');
        $data['pimpinan'] = $this->db->count_all_results();

        $this->db->like('is_active', 1);
        $this->db->from('dosen');
        $data['dosen'] = $this->db->count_all_results();

        $this->db->like('is_active', 1);
        $this->db->from('mahasiswa');
        $data['mahasiswa'] = $this->db->count_all_results();


        $this->db->from('kandidat');
        $data['kandidat'] = $this->db->count_all_results();


        $this->db->from('konfir_komentar');
        $data['kon_komentar'] = $this->db->count_all_results();

        $this->db->from('komentar');
        $data['komentar'] = $this->db->count_all_results();

        $this->db->from('riwayat');
        $data['riwayat'] = $this->db->count_all_results();

        $this->db->like('role_id', 2);
        $this->db->from('user');
        $data['admin'] = $this->db->count_all_results();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }

    public function votelist()
    {
        $data['title'] = 'VOTE List';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['kandidat'] = $this->db->get('kandidat')->result_array();
        $data['datapemilih'] = $this->db->get('data_pemilihan')->result_array();



        $data['namarole']  = $this->db->get_where('user_role', ['id' =>
        $this->session->userdata('id')])->row_array();

        $query = "SELECT sum(jumlah_suara) as jsuara FROM kandidat";
        $data['js'] = $this->db->query($query)->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/votelist', $data);
        $this->load->view('templates/footer');
    }


    public function statistik()
    {
        $data['title'] = 'Statistik';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['namarole']  = $this->db->get_where('user_role', ['id' =>
        $this->session->userdata('id')])->row_array();

        $data['kandidat'] = $this->db->get('kandidat')->result_array();
        $query = "SELECT sum(jumlah_suara) as jsuara FROM kandidat";
        $data['js'] = $this->db->query($query)->row_array();


        $data['role'] = $this->db->get('user_role')->result_array();

        $query = "SELECT 
        SUM(tipe LIKE 'Dosen') AS dosen,
        SUM(tipe LIKE 'Mahasiswa') AS mahasiswa,
        SUM(tipe LIKE 'Pimpinan') AS pimpinan
        FROM data_pemilihan ";
        $data['tipe'] = $this->db->query($query)->row_array();

        $this->db->like('is_active', 1);
        $this->db->from('pimpinan');
        $data['pimpinan'] = $this->db->count_all_results();

        $this->db->from('pimpinan');
        $data['totalpimp'] = $this->db->count_all_results();

        $data['tdkpimp'] =  $data['totalpimp'] - $data['pimpinan'];


        $this->db->like('is_active', 1);
        $this->db->from('dosen');
        $data['dosen'] = $this->db->count_all_results();

        $this->db->from('dosen');
        $data['totaldsn'] = $this->db->count_all_results();

        $data['tdkdsn'] =  $data['totaldsn'] - $data['dosen'];

        $this->db->like('is_active', 1);
        $this->db->from('mahasiswa');
        $data['mahasiswa'] = $this->db->count_all_results();

        $this->db->from('mahasiswa');
        $data['totalmhs'] = $this->db->count_all_results();

        $data['tdkmhs'] =  $data['totalmhs'] - $data['mahasiswa'];

        $this->db->from('data_pemilihan');
        $data['totalpilih'] = $this->db->count_all_results();

        $data['totalaktif'] =   $data['pimpinan'] + $data['dosen'] + $data['mahasiswa'];

        $data['tdkaktif'] =    $data['tdkpimp'] +  $data['tdkdsn']  +  $data['tdkmhs'];

        $data['total'] =  $data['totalpimp'] + $data['totaldsn'] + $data['totalmhs'];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/statistik', $data);
        $this->load->view('templates/footer');
    }



    // SuperAdmin Punya
    public function role()
    {
        $data['title'] = 'Role';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get('user_role')->result_array();


        $data['namarole']   = $this->db->get_where('user_role', ['id' =>
        $this->session->userdata('id')])->row_array();

        $this->form_validation->set_rules('role', 'Role', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/role', $data);
            $this->load->view('templates/footer');
        } else {
            $this->db->insert('user_role', ['role' => $this->input->post('role')]);
            $this->session->set_flashdata('message', '<div class="alert
        alert-success" role="alert"> New role added!</div>');
            redirect('admin/role');
        }
    }

    public function editrole()
    {

        $this->Role_model->ubahDataRole();
        $this->session->set_flashdata('message', '<div class="alert
        alert-success" role="alert"> Role Berhasil Diubah!</div>');
        redirect('admin/role');
    }
    public function hapusrole()
    {

        $this->Role_model->hapusDataRole();
        $this->session->set_flashdata('message', '<div class="alert
        alert-success" role="alert"> Role Berhasil Dihapus!</div>');
        redirect('admin/role');
    }


    public function roleAccess($role_id)
    {
        $data['title'] = 'Role';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();

        $this->db->where('id !=', 1);
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $data['namarole']   = $this->db->get_where('user_role', ['id' =>
        $this->session->userdata('id')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/role-access', $data);
        $this->load->view('templates/footer');
    }


    public function changeAccess()
    {
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');

        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];

        $result = $this->db->get_where('user_access_menu', $data);

        if ($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
        }
        $this->session->set_flashdata('message', '<div class="alert
        alert-success" role="alert">Access Changed!</div>');
    }
}
