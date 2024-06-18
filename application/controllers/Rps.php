<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rps extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('M_rps');
		//$this->load->library('form_validation');
    }

	public function hlm_reg()
	{
		$this->load->view('form_register');
	}

	public function index()
	{
		$this->load->view('form_login');
	}

	public function fungsi_login()
	{
		$user = $this->input->post('username',true);
		$pass = $this->input->post('password', true);

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if($this->form_validation->run() !=FALSE){
			$where = array(
				'username' => $user,
				'password' => $pass
			);

			$ceklogin = $this->M_rps->cek_login($where)->num_rows();

			if($ceklogin > 0){
				$sess_data = array(
					'username' => $user,
					'login' => 'OK'
				);

				$this->session->set_userdata($sess_data);

				redirect(base_url('/rps/dashboard'));
			}else{
				redirect(base_url(''));
			}
		}else{
			$this->load->view('form_login');
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url(''));
	}

	public function dashboard()
	{
		$queryrps = $this->M_rps->getDatamatkul();
		$DATA = array('querymatkul' => $queryrps);

		$queryus = $this->M_rps->getDatauser();
		$User = array('lihat' => $queryus);

		$data_to_view = array_merge($DATA, $User);

		$this->load->view('navbar');
		$this->load->view('side_bar'); 
		$this->load->view('dashboard', $data_to_view);
	}

	public function halaman_tambah()
	{
		$this->load->view('tambah_rps');
	}

	public function halaman_edit($kode)
	{
		$querydetail = $this->M_rps->getmatkuldetail($kode);
		$DATA = array('querymtl' => $querydetail);
		$this->load->view('edit_rps', $DATA);
	}

	public function fungsitambah()
	{
		$kode = $this->input->post('kode_matkul');
		$matkul = $this->input->post('matkul');
		$smtr = $this->input->post('semester');
		$prodi = $this->input->post('prodi');
		$desc = $this->input->post('deskripsi');
		$materi1 = $this->input->post('materi_per1');
		$materi2 = $this->input->post('materi_per2');
		$materi3 = $this->input->post('materi_per3');
		$materi4 = $this->input->post('materi_per4');
		$materi5 = $this->input->post('materi_per5');
		$materi6 = $this->input->post('materi_per6');
		$materi7 = $this->input->post('materi_per7');
		$materi8 = $this->input->post('materi_per8');
		$materi9 = $this->input->post('materi_per9');
		$materi10 = $this->input->post('materi_per10');
		$materi11 = $this->input->post('materi_per11');
		$materi12 = $this->input->post('materi_per12');
		$materi13 = $this->input->post('materi_per13');
		$materi14 = $this->input->post('materi_per14');

		$Arrinsert = array(
			'kode_matkul' => $kode,
			'matkul' => $matkul,
			'semester' => $smtr,
			'prodi' => $prodi,
			'deskripsi' => $desc,
			'materi_per1' => $materi1,
			'materi_per2' => $materi2,
			'materi_per3' => $materi3,
			'materi_per4' => $materi4,
			'materi_per5' => $materi5,
			'materi_per6' => $materi6,
			'materi_per7' => $materi7,
			'materi_per8' => $materi8,
			'materi_per9' => $materi9,
			'materi_per10' => $materi10,
			'materi_per11' => $materi11,
			'materi_per12' => $materi12,
			'materi_per13' => $materi13,
			'materi_per14' => $materi14
		);
		$this->M_rps->insertrps($Arrinsert);
		redirect(base_url('/rps/dashboard'));
	}

	public function profil()
	{
		$this->load->view('profil_dosen');
	}

	public function infoto()
	{
		$foto = $_FILES['foto'];
		if ($foto=''){}else{
			$config['upload_path']		='./assets/foto';
			$config['allowed_types'] = 'jpg|png|gif';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('foto')){
				echo "upload gagal"; die();
			}else{
				$foto=$this->upload->data('file_name');
			}
		}

		$data = array(
			'foto' => $foto
		);

		$this->M_rps->updatedata($id, $data);
		redirect(base_url('/rps/dashboard'));
	}

	public function fungsiedit()
	{
		$kode = $this->input->post('kode_matkul');
		$matkul = $this->input->post('matkul');
		$smtr = $this->input->post('semester');
		$prodi = $this->input->post('prodi');
		$desc = $this->input->post('deskripsi');
		$materi1 = $this->input->post('materi_per1');
		$materi2 = $this->input->post('materi_per2');
		$materi3 = $this->input->post('materi_per3');
		$materi4 = $this->input->post('materi_per4');
		$materi5 = $this->input->post('materi_per5');
		$materi6 = $this->input->post('materi_per6');
		$materi7 = $this->input->post('materi_per7');
		$materi8 = $this->input->post('materi_per8');
		$materi9 = $this->input->post('materi_per9');
		$materi10 = $this->input->post('materi_per10');
		$materi11 = $this->input->post('materi_per11');
		$materi12 = $this->input->post('materi_per12');
		$materi13 = $this->input->post('materi_per13');
		$materi14 = $this->input->post('materi_per14');

		$Arrupdate =  array(
			'deskripsi' => $desc,
			'materi_per1' => $materi1,
			'materi_per2' => $materi2,
			'materi_per3' => $materi3,
			'materi_per4' => $materi4,
			'materi_per5' => $materi5,
			'materi_per6' => $materi6,
			'materi_per7' => $materi7,
			'materi_per8' => $materi8,
			'materi_per9' => $materi9,
			'materi_per10' => $materi10,
			'materi_per11' => $materi11,
			'materi_per12' => $materi12,
			'materi_per13' => $materi13,
			'materi_per14' => $materi14
		);

		$this->M_rps->updatematkul($kode, $Arrupdate);
		redirect(base_url('/rps/dashboard'));

	}

	public function fungsidelete($kode)
	{
		$this->M_rps->deletematkul($kode);
		redirect(base_url('/rps/dashboard'));
	}

	public function view($kode)
	{
		$viewquery = $this->M_rps->getmatkuldetail($kode);
		$DATA = array('view' => $viewquery);
		$this->load->view('viewsmtr', $DATA);
	}

	public function iprint($kode)
	{
		$querydetail = $this->M_rps->getmatkuldetail($kode);
		$DATA = array('querymtl' => $querydetail);
		$this->load->view('lihat_resmi', $DATA);
	}

	public function semua()
	{
		$queryrps = $this->M_rps->getDatamatkul();
		$DATA = array('delok' => $queryrps);
		$this->load->view ('semuarps', $DATA);
	}


}