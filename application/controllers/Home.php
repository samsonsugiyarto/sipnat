<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $this->load->view('home');
    }

    public function kampanye()
    {
        $this->load->view('kampanye');
    }
    public function riwayatsenat()
    {
        $this->load->view('riwayatsenat');
    }
}
