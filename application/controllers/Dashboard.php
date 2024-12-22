<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function index()
    {
        // Load database table setting
        $data_setting = $this->db->get("setting")->row();
        
        if (!$data_setting) {
            // Handle the case where the setting is not found
            show_error('Settings not found.');
            return;
        }

        $nama = $data_setting->nama;
        $logo = $data_setting->logo;
        $no_hp = $data_setting->no_hp;
        $alamat = $data_setting->alamat;
        $map = $data_setting->map;

        // Load slider
        $data_slider = $this->db->get("slider")->result();

        // Send data to view
        $data = [
            "nama" => $nama,
            "logo" => $logo,
            "no_hp" => $no_hp,
            "map" => $map,
            "alamat" => $alamat,
            "slider" => $data_slider
        ];

        $this->load->view('dashboard', $data);
    }
    
    public function siswa()
    {
        $this->load->view('partial/header');
        $this->load->view('siswa');
        $this->load->view('partial/footer');
    }

    public function guru()
    {
        $this->load->view('partial/header');
        $this->load->view('guru');
        $this->load->view('partial/footer');
    }
}