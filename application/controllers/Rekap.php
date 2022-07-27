<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekap extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('absensi_m', 'absensi');
    }

    public function index()
    {
        $data['title'] = 'Absensi Page';

        $this->load->view('parsial/header');
        $this->load->view('rekap/tampil', $data);
        $this->load->view('parsial/header');
    }

    public function cetak()
    {
        if (isset($_POST['cetak']))
        {
            $filter = array(
                'dari' => $this->input->post('dari'),
                'sampai' => $this->input->post('sampai')
            );

            $data = array(
                'rekap' => $this->absensi->rekap($filter),
                'dari' => $this->input->post('dari'),
                'sampai' => $this->input->post('sampai'),
            );

            $this->load->view('rekap/cetak', $data);
        }
    }
    public function report()
    {
        $awal = $this->input->post('tanggalAwal');
        $data['report'] = $this->absensi->report($awal);

        $data['title'] = 'Laporan Page';
        $data['subtitle'] = 'Laporan kehadiran pada tanggal ' . $awal;

        $this->load->view('parsial/header', $data);
        $this->load->view('rekap/report', $data);
        $this->load->view('parsial/footer');
    }

}