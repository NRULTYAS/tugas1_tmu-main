<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->database();
    }

    public function index() {
        // Load new registration page
        $this->load->view('frontend/pendaftaran');
    }

    public function form($jadwal_id = null) {
        // Load simple registration form for now
        $data['jadwal_id'] = $jadwal_id;
        $this->load->view('pendaftaran/form', $data);
    }

    public function get_diklat_info($diklat_id) {
        // Direct database query for now
        $diklat = $this->db->get_where('scre_diklat', ['id' => $diklat_id])->row();
        if ($diklat) {
            // Get jenis diklat information
            $jenis = $this->db->get_where('scre_jenis_diklat', ['id' => $diklat->jenis_diklat_id])->row();
            
            $response = array(
                'success' => true,
                'kategori_diklat' => $jenis ? $jenis->jenis_diklat : 'SIPENCATAR DIKLAT PELAUT - PEMBENTUKAN III',
                'nama_diklat' => $diklat->nama_diklat,
                'kode_diklat' => $diklat->kode_diklat
            );
        } else {
            $response = array(
                'success' => false,
                'message' => 'Diklat tidak ditemukan'
            );
        }
        
        header('Content-Type: application/json');
        echo json_encode($response);
    }

    public function get_periode_list($diklat_id) {
        // Get all jadwal/periode for specific diklat
        $this->db->select('j.*, t.tahun');
        $this->db->from('scre_diklat_jadwal j');
        $this->db->join('scre_diklat_tahun t', 'j.diklat_tahun_id = t.id');
        $this->db->where('j.diklat_id', $diklat_id);
        $this->db->where('j.is_exist', 1);
        $this->db->order_by('j.periode', 'ASC');
        
        $jadwal = $this->db->get()->result();
        
        header('Content-Type: application/json');
        echo json_encode($jadwal);
    }

    public function get_tahun($diklat_id) {
        $tahun = $this->db->get_where('scre_diklat_tahun', ['diklat_id' => $diklat_id, 'is_exist' => 1])->result();
        header('Content-Type: application/json');
        echo json_encode($tahun);
    }

    public function get_schedule($tahun_id) {
        $jadwal = $this->db->get_where('scre_diklat_jadwal', ['diklat_tahun_id' => $tahun_id, 'is_exist' => 1])->result();
        header('Content-Type: application/json');
        echo json_encode($jadwal);
    }

    public function simpan() {
        // Proses simpan pendaftaran di sini
        // ...
        $this->session->set_flashdata('success', 'Pendaftaran berhasil!');
        redirect('pendaftaran');
    }
}
