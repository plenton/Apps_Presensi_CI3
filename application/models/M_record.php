<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_record extends CI_Model{

    function getDataMahasiswa() {
        $query = $this->db->get('record_presensi');
        return $query->result();
    }
    
}
?>