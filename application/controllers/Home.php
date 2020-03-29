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
        $data['countdown'] = $this->db->get('countdown')->row_array();


        $data['hitungkomen'] = $this->db->count_all('konfir_komentar');

        $data['countdown'] = $this->db->get('countdown')->row_array();

        // statistik
        $data['kandidat'] = $this->db->get('kandidat')->result_array();
        $query = "SELECT sum(jumlah_suara) as jsuara FROM kandidat";
        $data['js'] = $this->db->query($query)->row_array();


        $data['role'] = $this->db->get('user_role')->result_array();

        $query = "SELECT  COUNT(id_pemilih) AS coblos
        FROM mahasiswa m 
        JOIN  data_pemilihan dp on dp.id_pemilih = m.nim
        ";
        $data['coblosmhs'] = $this->db->query($query)->row_array();

        $query = "SELECT  COUNT(id_pemilih) AS coblos
        FROM pimpinan p 
        JOIN  data_pemilihan dp on dp.id_pemilih = p.nidn
        ";
        $data['coblospimp'] = $this->db->query($query)->row_array();

        $query = "SELECT  COUNT(id_pemilih) AS coblos
        FROM dosen d
        JOIN  data_pemilihan dp on dp.id_pemilih = d.nik
        ";
        $data['coblosdsn'] = $this->db->query($query)->row_array();



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
        //  akhir statistik


        $this->load->view('home', $data);
    }

    public function kampanye()

    {


        $data['kandidat'] = $this->db->get('kandidat')->result_array();
        $this->load->view('kampanye', $data);
    }
    public function riwayatsenat()
    {
        $this->db->order_by('th_jabatan', 'desc');
        $data['riwayat'] = $this->db->get('riwayat')->result_array();
        $this->load->view('riwayatsenat', $data);
    }
}
