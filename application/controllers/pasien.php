<?php 


class pasien extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('pasienmodel');
		$this->load->helper('url');
		if($this->session->userdata('logged_in') == false){
			redirect('login');
		}
	

	}

	function tambah(){

		$data['main_view'] = 'pasien_add';
		$this->load->view('template', $data);
	}


	function index(){
		$data['main_view'] = 'pasien_view';
		$data['pasien'] = $this->pasienmodel->tampil_data()->result();
		$this->load->view('template', $data);
	}

		function hapus($id){
		$where = array('id' => $id);
		$this->pasienmodel->hapus_data($where,'pasien');
		redirect('pasien/index');
	}

		function tambah_aksi(){
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$this->load->model('pasienmodel');
		

 
		$data = array(
			'nama' => $nama,
			'alamat' => $alamat
			);
		$this->pasienmodel->input_data($data,'pasien');
		redirect('pasien/index');
	}

		function edit($id){
		$data['main_view'] = 'pasien_edit';
		$where = array('id' => $id);
		$data['pasien'] = $this->pasienmodel->edit_data($where,'pasien')->result();
		$this->load->view('template',$data);
		}

	function update(){
	$id = $this->input->post('id');
	$nama = $this->input->post('nama');
	$alamat = $this->input->post('alamat');


	$data = array(
		'nama' => $nama,
		'alamat' => $alamat
		
	);

	$where = array(
		'id' => $id
	);

	$this->pasienmodel->update_data($where,$data,'pasien');
	redirect('pasien/index');
}

	

}