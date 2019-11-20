<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Riwayat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();

        $this->load->model('Riwayat_model');
    }
    public function riwayat()
    {
        $data['title'] = 'Riwayat';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['riwayat'] = $this->Riwayat_model->getAllRiwayat();
        $data['namarole']  = $this->db->get_where('user_role', ['id' =>
        $this->session->userdata('id')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('riwayat/index', $data);
        $this->load->view('templates/footer');
    }
    public function tambahriwayat()
    {
        $data['title'] = 'Riwayat';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['namarole']  = $this->db->get_where('user_role', ['id' =>
        $this->session->userdata('id')])->row_array();


        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required|trim');
        $this->form_validation->set_rules('nokandidat', 'Nomor Kandidat', 'required|trim');
        $this->form_validation->set_rules('namalengkapketua', 'Nama Ketua', 'required|trim');
        $this->form_validation->set_rules('namalengkapwakil', 'Nama Wakil', 'required|trim');
        $this->form_validation->set_rules('visi', 'Visi', 'required|trim');
        $this->form_validation->set_rules('misi', 'Misi', 'required|trim');


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('riwayat/tambahriwayat', $data);
            $this->load->view('templates/footer');
        } else {

            $this->Riwayat_model->tambahDataRiwayat();

            $this->session->set_flashdata('message', 'Ditambahkan!');
            redirect('riwayat/riwayat');
        }
    }
    public function detailriwayat($id)
    {
        $data['title'] = 'Riwayat';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['namarole']  = $this->db->get_where('user_role', ['id' =>
        $this->session->userdata('id')])->row_array();

        $data['riwayat'] = $this->Riwayat_model->getRiwayatById($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('riwayat/detailriwayat', $data);
        $this->load->view('templates/footer');
    }
    public function editriwayat($id)
    {
        $data['title'] = 'Riwayat';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['namarole']  = $this->db->get_where('user_role', ['id' =>
        $this->session->userdata('id')])->row_array();


        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required|trim');
        $this->form_validation->set_rules('nokandidat', 'Nomor Kandidat', 'required|trim');
        $this->form_validation->set_rules('namalengkapketua', 'Nama Ketua', 'required|trim');
        $this->form_validation->set_rules('namalengkapwakil', 'Nama Wakil', 'required|trim');
        $this->form_validation->set_rules('visi', 'Visi', 'required|trim');
        $this->form_validation->set_rules('misi', 'Misi', 'required|trim');

        $data['riwayat'] = $this->Riwayat_model->getRiwayatById($id);
        $riwayat = $this->Riwayat_model->getRiwayatById($id);



        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('riwayat/editriwayat', $data);
            $this->load->view('templates/footer');
        } else {

            $this->Riwayat_model->ubahDataRiwayat($riwayat, $id);
            $this->session->set_flashdata('message', 'Diubah!');
            redirect('riwayat/riwayat');
        }
    }

    public function hapusriwayat($id)
    {
        $riwayat = $this->Riwayat_model->getRiwayatById($id);

        $this->Riwayat_model->hapusDataRiwayat($id, $riwayat);
        $this->session->set_flashdata('message', 'Dihapus!');
        redirect('riwayat/riwayat');
    }
}
