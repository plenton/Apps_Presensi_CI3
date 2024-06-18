<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Presensi extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_record');
    }
	
    public function index()
    {
        $queryMahasiswa = $this->M_record->getDataMahasiswa();
        $DATA = array('queryALLMhs' => $queryMahasiswa);
        $this->load->view('home_presensi', $DATA);
    }

    public function fungsitambah()
    {
        $NIM = $this->input->post('NIM');

        $Arrinsert = array(
            'NIM => $NIM'
        );
    }
}