<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu_model extends CI_Model
{
    public function getSubMenu()
    {
        $query = "SELECT user_sub_menu.*, user_menu.menu
                 FROM user_sub_menu JOIN user_menu
                 ON user_sub_menu.menu_id = user_menu.id           
                ";
        return $this->db->query($query)->result_array();
    }


    public function ubahDatamenu()
    {

        $menu =  $this->input->post('menuedit', true);
        $id =  $this->input->post('id', true);

        $data = [
            'menu' => $menu
        ];
        $this->db->set($data);
        $this->db->where('id', $id);
        $this->db->update('user_menu');
    }

    public function hapusDataMenu()
    {
        $id =  $this->input->post('id', true);
        $this->db->delete('user_menu', ['id' => $id]);
    }
}
