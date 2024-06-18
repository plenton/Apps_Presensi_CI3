<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_rps extends CI_Model{

    function getDatamatkul() {
        $query = $this->db->get('table_matkul');
        return $query->result();
    }

    function insertrps($data) {
        $this->db->insert('table_matkul', $data);
    }

    function getmatkuldetail($kode) {
        $this->db->where('kode_matkul', $kode);
        $query = $this->db->get('table_matkul');
        return $query->row();
    }

    function updatematkul($kode, $data) {
        $this->db->where('kode_matkul', $kode);
        $this->db->update('table_matkul', $data);
    }

    function updatedata($id, $data) {
        //$this->db->where('id_doS', $id);
        $this->db->update('data_login', $data);
    }

    function deletematkul($kode) {
        $this->db->where('kode_matkul', $kode);
        $this->db->delete('table_matkul');
    }

    function getDatauser() {
        $query = $this->db->get('data_login');
        return $query->result();
    }

    function cek_login($where){
        return $this->db->get_where('data_login', $where);
    }
    
}
?>