<?php

class Komentar_model extends CI_Model
{
    public function getAllKomentar()
    {
        return $this->db->get('komentar')->result_array();
    }

    public function getDatakonfir()
    {

        return $this->db->get('konfir_komentar')->result_array();
    }

    public  function detailkomen($id)
    {
        $query = "SELECT * 
        FROM komentar LEFT JOIN konfir_komentar
          ON komentar.id = konfir_komentar.id_komentar 
          WHERE komentar.id = $id";
        return $this->db->query($query)->row_array();
    }


    public function getKomentarById($id)
    {
        return $this->db->get_where('komentar', ['id' => $id])->row_array();
    }
    public function konfirKomentar($id, $komen)
    {
        $user = $this->db->get_where('komentar', ['id' => $id])->row_array();

        $data = [

            'id_komentar' => $user['id']

        ];

        $this->db->insert('konfir_komentar', $data);
    }

    public function tambahKomentar($user)

    {
        if ($user['role_id'] == 1 || $user['role_id'] == 2) {
            date_default_timezone_set('Asia/Jakarta');
            $data = [
                'nama' => $user['name'],
                'user_id' => $user['id'],
                'waktu' => time(),
                'uraian' => $this->input->post('komentar', true),
                'image' => $user['image'],
                'role_id' => $user['role_id']
            ];
        } elseif ($user['role_id'] == 3) { {
                date_default_timezone_set('Asia/Jakarta');
                $data = [
                    'nama' => $user['name'],
                    'user_id' => $user['nidn'],
                    'waktu' => time(),
                    'uraian' => $this->input->post('komentar', true),
                    'image' => $user['image'],
                    'role_id' => $user['role_id']
                ];
            }
        } elseif ($user['role_id'] == 4) { {
                date_default_timezone_set('Asia/Jakarta');
                $data = [
                    'nama' => $user['name'],
                    'user_id' => $user['nik'],
                    'waktu' => time(),
                    'uraian' => $this->input->post('komentar', true),
                    'image' => $user['image'],
                    'role_id' => $user['role_id']
                ];
            }
        } elseif ($user['role_id'] == 5) { {
                date_default_timezone_set('Asia/Jakarta');
                $data = [
                    'nama' => $user['name'],
                    'user_id' => $user['nim'],
                    'waktu' => time(),
                    'uraian' => $this->input->post('komentar', true),
                    'image' => $user['image'],
                    'role_id' => $user['role_id']
                ];
            }
        }


        $this->db->insert('komentar', $data);
    }

    public function hapusDataKomentar($id)
    {

        $this->db->delete('konfir_komentar', ['id_komentar' => $id]);
        //$this->db->where('id', $id);
        $this->db->delete('komentar', ['id' => $id]);
    }
}
