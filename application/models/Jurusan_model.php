<?php
class Jurusan_model extends CI_model
{


    public function hapusDataJurusan($id)
    {
        //$this->db->where('id', $id);
        $this->db->delete('jurusan', ['id' => $id]);
    }

    public function getJurusanById($id)
    {
        return $this->db->get_where('jurusan', ['id' => $id])->row_array();
    }

    public function editJurusan()
    {
        $data = [
            "nama_jurusan" => $this->input->post('jurusan', true),
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('jurusan', $data);
    }
}
