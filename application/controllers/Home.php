<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class Home extends CI_Controller {
    function __construct(){
        parent::__construct();
        if($this->session->userdata('logged') !=TRUE){
            $url=base_url('index.php/login');
            redirect($url);
        }
    }

    public function index()
    {
        $this->load->view('view-home');
    }
}
?>