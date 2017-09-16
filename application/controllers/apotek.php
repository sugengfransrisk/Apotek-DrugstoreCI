<?php 


class apotek extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('apotekmodel');
		$this->load->helper('url');
		if($this->session->userdata('logged_in') == false){
			redirect('login');
		}
	

	}

	function tambah(){

		$data['main_view'] = 'obat_add';
		$this->load->view('template', $data);
	}


	function index(){
		$data['main_view'] = 'obat_view';
		$data['obat'] = $this->apotekmodel->tampil_data()->result();
		$this->load->view('template', $data);
	}

		function hapus($id){
		$where = array('id' => $id);
		$this->apotekmodel->hapus_data($where,'obat');
		redirect('apotek/index');
	}

		function tambah_aksi(){
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
		$this->apotekmodel->input_data($data,'obat');
		redirect('apotek/index');
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