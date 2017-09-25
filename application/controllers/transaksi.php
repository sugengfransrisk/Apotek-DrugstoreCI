<?php 


class transaksi extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('transaksimodel');
		$this->load->helper('url');
		if($this->session->userdata('logged_in') == false){
			redirect('login');
		}
	

	}


	function tambah(){
	
		$this->load->model('transaksimodel');
		$data['main_view'] = 'transaksi_add';
		$data['pasien']=$this->transaksimodel->tampil_data_pasien()->result();
		$data['obat']=$this->transaksimodel->tampil_data_obat()->result();
		$data['pegawai']=$this->transaksimodel->tampil_data_pegawai()->result();
		$this->load->view('template', $data);
		
		
	}


	function index(){
		$data['total'] = $this->transaksimodel->getCount();
		$data['main_view'] = 'transaksi_view';
		$data['transaksi'] = $this->transaksimodel->tampil_data()->result();
		$this->load->view('template', $data);
	
	}

		function tambah_aksi(){
		$pasien = $this->input->post('pasien');
		$obat = $this->input->post('obat');
		$pegawai = $this->input->post('pegawai');
		$harga = $this->input->post('harga');
		$tanggal = $this->input->post('tanggal');


 
		$data = array(
			'nama_pasien' => $pasien,
			'nama_obat' => $obat,
			'nama_pegawai' => $pegawai,
			'total_harga' => $harga,			
			'tgl_pembelian' => $tanggal
			);
		$this->transaksimodel->input_data($data,'transaksi');
		redirect('transaksi/index');
	}
	function hapus($id){
		$where = array('id' => $id);
		$this->transaksimodel->hapus_data($where,'transaksi');
		redirect('transaksi/index');
	}
		function updateview()
	{
	    $data['main_view'] = 'transaksi_edit';
		$id=$_GET['uid'];
		$this->load->model('transaksimodel');
		$data['nama']=$this->pegawaimodel->get_pegawai_by_id($id,"nama");
		$data['alamat']=$this->pegawaimodel->get_pegawai_by_id($id,"alamat");
		$data['id']=$id;
		if(!empty($data['nama']))
		{
			$this->load->view('template',$data);
		}else{
			redirect('pegawai');
		}
	}
	

	function update()
	{
		$id=$_GET['uid'];
		$this->load->model('pegawaimodel');
		$data=array(
				'nama'=>$this->input->post('nama_pegawai'),
				'alamat'=>$this->input->post('alamat')
				
			);
		if($this->pegawaimodel->update_pegawai($id,$data)==TRUE)
		{
			redirect('pegawai');
		}else{
			redirect("pegawai/updateview?uid=".$id."");
		}
	}
	
	

}