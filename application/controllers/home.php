
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Home extends CI_Controller {
	
	function __construct(){
		parent::__construct();

		$this->load->helper('url');
		$this->load->model('m_data');
		  if (empty($this->session->userdata('login'))) {
            redirect('login');
		}
 	}
	public function index(){		
		
		$data=array(
			'header' => 'List Aktifitas Pegawai Witel Telkom Pangkalpinang',
			'isi' 	 => 'home',
		);
		$this->load->view('_header',$data);
	
		
	}

	function user($nama_karyawan, $username=null){
				if (!empty($_GET['tanggal'])){ 
		$tanggal=$_GET['tanggal'];
		}
		else {
			$tanggal ='';
		}
		 $data=array(
          'nama_karyawan' => $this->m_data->sto_select(),
          'tabelkegiatan' => $this->m_data->ambil_data($nama_karyawan,$tanggal,$username),
          'header'        => 'List Aktifitas',
          'isi'           => 'v_user',
        );
   
		$this->load->view('_header', $data);
		
		
	}
	function userwitel($username=null) {
			if (!empty($_GET['nama_karyawan'])){ 
		$nama_karyawan=$_GET['nama_karyawan'];
			$st1=$this->m_data->ambil_data2($nama_karyawan);
		}
		else {
			$st1=$this->m_data->ambil_data2();
		}

		 $data=array(
          'nama_karyawan' => $this->m_data->sto_select(),
          'tabelkegiatan' => $st1,
          'header'        => 'List Aktifitas',
          'isi'           => 'v_tampil_nama',
        );
       
	$where = array(
		'username' => $username
 );    
		$this->load->view('_header', $data);	
	}

	function tambah(){
		$data=array(
          'header'        => 'Input Kegiatan',
          'isi'           => 'v_input'
        );

		$this->load->view('_header',$data);
		
	}
 

	function tambah_aksi(){
		$username		= $this->session->userdata("username");
		$nama_karyawan 	= $this->session->userdata("nama_karyawan");
		$job_desk 		= $this->input->post('job_desk');
		$jam_mulai 		= $this->input->post('jam_mulai');
		$jam_akhir 		= $this->input->post('jam_akhir');
		$tanggal		= $this->input->post('tanggal');
		$jumlah_order	= $this->input->post('jumlah_order');
		$keterangan		= $this->input->post('keterangan');
		$progress		= $this->input->post('progress');
		if ($progress < 100){
			  $status="Open Job";
		}else{
			 $status="Close Job";
		}
 
		$data = array(
			
			'job_desk' 		=> $job_desk,
			'jam_mulai' 	=> $jam_mulai,
			'jam_akhir' 	=> $jam_akhir,
			'tanggal'		=> $tanggal,
			'jumlah_order' 	=> $jumlah_order,
			'keterangan' 	=> $keterangan,
			'username' 		=> $username,
			'nama_karyawan' => $nama_karyawan,
			'progress'		=> $progress,
			'status'		=> $status,
	);
			
		$this->m_data->input_data($data,'tabelkegiatan');
		redirect('home/userwitel');
	}
	function hapus($id){
		$where = array('id' => $id);
		$this->m_data->hapus_data($where,'tabelkegiatan');
		redirect('home/userwitel/');
	}
	function edit($id=null){
		$where = array('id' => $id);
		$data=array(
		  'tabelkegiatan' => $this->m_data->edit($where,'tabelkegiatan')->result(),
          'title'        => 'Edit Aktifitas',
          'isi'          => 'v_update',
        );
		$this->load->view('_header', $data);
		
		
	}	
 	function update(){
	$id = $this->input->post('id');

	$job_desk 	= $this->input->post('job_desk');
		$jam_mulai 	= $this->input->post('jam_mulai');
		$jam_akhir 	= $this->input->post('jam_akhir');
		$tanggal	= $this->input->post('tanggal');
		$jumlah_order	= $this->input->post('jumlah_order');
		$keterangan	= $this->input->post('keterangan');
		$progress	= $this->input->post('progress');
			if ($progress < 100){
			  $status="Open Job";
		}else{
			 $status="Close Job";
		} 
	$data = array(
		'job_desk' => $job_desk,
			'jam_mulai' => $jam_mulai,
			'jam_akhir' => $jam_akhir,
			'tanggal'	=> $tanggal,
			'jumlah_order' => $jumlah_order,
			'keterangan' => $keterangan,
			'progress' => $progress,
			'status'	=> $status
 
	);
	$where = array(
		'id' => $id
 );
	$this->m_data->update_data($where,$data,'tabelkegiatan');
	redirect('home/userwitel/');
	}
	
}