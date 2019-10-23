<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Submenu_model extends CI_Model
{

    public function ubahDataSubmenu()
    {
        $id =  $this->input->post('id', true);
        $title =  $this->input->post('title', true);
        $menu_id =  $this->input->post('menu_id', true);
        $url =  $this->input->post('url', true);
        $icon =  $this->input->post('icon', true);
        $aktif =  $this->input->post('cek', true);


        $data = [
            'title' => $title,
            'menu_id' => $menu_id,
            'url' => $url,
            'icon' => $icon,
            'is_active' => $aktif,

        ];
        $this->db->set($data);
        $this->db->where('id', $id);
        $this->db->update('user_sub_menu');
    }

    public function hapusSubMenu()
    {
        $id =  $this->input->post('id', true);
        $this->db->delete('user_sub_menu', ['id' => $id]);
    }
}
