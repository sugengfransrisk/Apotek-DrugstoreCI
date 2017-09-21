
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('adminmodel');
		$this->load->helper('url');
		if($this->session->userdata('logged_in') == false){
			redirect('login');
		}
	
	}

	function tambah(){

		$data['main_view'] = 'register';
		$this->load->view('template', $data);

	}

	function changestatus()
	{
		$id=$_GET['uid'];
		$r=$_GET['r'];
		$this->load->model('adminmodel');
		if($this->adminmodel->change_status_user($id,$r)==TRUE)
		{
			redirect('admin/index');
		}else{
			redirect('admin/index');
		}
	}

	function changeakses()
	{
		$id=$_GET['uid'];
		$r=$_GET['r'];
		$this->load->model('adminmodel');
		if($this->adminmodel->change_role_user($id,$r)==TRUE)
		{
			redirect('admin/index');
		}else{
			redirect('admin/index');
		}
	}


	function index(){
		$data['main_view'] = 'admin_view';
		$data['admin'] = $this->adminmodel->tampil_data()->result();
		$this->load->view('template', $data);
	}

		function hapus($id){
		$where = array('ID_ADMIN' => $id);
		$this->adminmodel->hapus_data($where,'admin');
		redirect('admin/index');
	}

		function tambah_aksi(){
		$fullname = $this->input->post('fullname');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$role     = $this->input->post('role');
		$status   = $this->input->post('status');

 
		$data = array(
			'FULLNAME' => $fullname,
			'USERNAME' => $username,
			'PASSWORD' => $password,
			'ROLE' 	   => $role,
			'status'   => $status


			);
		$this->adminmodel->input_data($data,'admin');
		redirect('admin/index');
	}

		function edit($id){
		$data['main_view'] = 'obat_edit';
		$where = array('id' => $id);
		$data['obat'] = $this->apotekmodel->edit_data($where,'obat')->result();
		$this->load->view('template',$data);
		}

		function update(){
		$nama = $this->input->post('nama');
		$produksi = $this->input->post('produksi');
		$tahun_pembelian = $this->input->post('tahun_pembelian');
		$harga_beli = $this->input->post('harga_beli');
		$harga_jual = $this->input->post('harga_jual');


 
		$data = array(
			'nama' => $nama,
			'produksi' => $produksi,
			'tahun_pembelian' => $tahun_pembelian,
			'harga_beli' => $harga_beli,
			'harga_jual' => $harga_jual
			);
		$where = array(
		'id' => $id
		);

		$this->apotekmodel->update_data($where,$data,'obat');
		redirect('apotek/index');
}

	

}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */