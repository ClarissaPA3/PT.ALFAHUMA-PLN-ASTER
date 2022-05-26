<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_login extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_user');
		$this->load->library('session');
		$this->load->model('M_ajuananggaran');
		$this->load->model('M_paguanggaran');
	}


	public function index()
	{



		$id_jabatan = $this->session->userdata('id_jabatan');

		if (isset($id_jabatan)) {
			# code...
			redirect('C_login/login_admin');
		} else {

			$this->load->view('login/login');
		}
	}

	public function authentikasi_admin()
	{



		$this->load->library('form_validation');
		// Form Validation
		$this->form_validation->set_rules('user', 'Username', 'required');
		$this->form_validation->set_rules('pass', 'Password', 'required');


		$user = $this->input->post('user');
		$pass = $this->input->post('pass');





		if ($this->form_validation->run() == FALSE) {
			redirect(base_url("C_login"));
		} else {

			$query = $this->M_user->show_user($pass, $user);
			if (isset($query['status'])) {

				$this->session->set_flashdata($query);
				redirect('C_login');
			} else {
				$id_jabatan = $query['id_jabatan'];
				$nama_anggota = $query['nama_anggota'];
				$id_anggota = $query['id_anggota'];
				$akun = array(
					'id_jabatan' => $id_jabatan,
					'nama_anggota' => $nama_anggota,
					'id_anggota' =>  $id_anggota
				);
				$this->session->set_userdata($akun);
				$d = strtotime("April 2022");
				
				redirect('C_login/login_admin');

			}
		}





		// $status_admin = $_POST['status'];



	}
	public function login_admin()
	{
		$id_anggota = $this->session->userdata('id_anggota');
		
		
		$pagu = $this->M_paguanggaran->updatepagu('May 26 2022');
		







		$id_jabatan = $this->session->userdata('id_jabatan');
		if ($id_jabatan == "3") {
			$pengajuan = $this->M_ajuananggaran->showbyid_pengajuandmpau($id_anggota);

			$datanotifikasi = array(
				'totalnotifikasi' => $pengajuan['totalnotifikasi'],
				'dm' => $pengajuan['dm'],

				'koreksi' => $pengajuan['koreksi'],
				
			);
			$this->session->set_userdata($datanotifikasi);
			$data['pengajuan'] = $pengajuan;
			$data['pagu'] = $pagu;


			$this->load->view('dashboard/dashboard_dmpau', $data);
		} elseif ($id_jabatan == "2") {
			$pengajuan = $this->M_ajuananggaran->showbyid_pengajuandm($id_anggota);

			$datanotifikasi = array(
				'totalnotifikasi' => $pengajuan['totalnotifikasi'],
				'dm' => $pengajuan['sub'],

				'koreksi' => $pengajuan['koreksi'],
				
			);
			$this->session->set_userdata($datanotifikasi);
			$data['pengajuan'] = $pengajuan;
			$data['pagu'] = $pagu;



			$this->load->view('dashboard/dashboard_bidang.php', $data);
		} elseif ($id_jabatan == "1") {
			$pengajuan = $this->M_ajuananggaran->showbyid_pengajuansub($id_anggota);

			$datanotifikasi = array(
				'totalnotifikasi' => $pengajuan['totalnotifikasi'],
				'dm' => $pengajuan['dm'],
				'dmpau' =>  $pengajuan['dmpau'],
				'koreksi' => $pengajuan['koreksi'],
				
			);
			$this->session->set_userdata($datanotifikasi);
			$data['pengajuan'] = $pengajuan;
			$data['pagu'] = $pagu;



			$this->load->view('dashboard/dashboard_subbidang.php', $data);
		} else {
			redirect(base_url("C_login"));
		}
	}
	public function logout_admin()
	{
		$akun = array('id_jabatan', 'nama_anggota', 'id_anggota');


		$this->session->unset_userdata($akun);


		$this->session->sess_destroy();
		redirect(base_url("C_login"));
	}
}
