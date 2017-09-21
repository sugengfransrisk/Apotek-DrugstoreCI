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
		$data['total'] = $this->apotekmodel->getCount();
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
		$harga = $this->input->post('harga');


 
		$data = array(
			'nama' => $nama,
			'produksi' => $produksi,
			'tahun_pembelian' => $tahun_pembelian,
			'harga' => $harga			
			);
		$this->apotekmodel->input_data($data,'obat');
		redirect('apotek/index');
	}

		function updateview()
	{
	    $data['main_view'] = 'obat_edit';
		$id=$_GET['uid'];
		$this->load->model('apotekmodel');
		$data['nama']=$this->apotekmodel->get_obat_by_id($id,"nama");
		$data['produksi']=$this->apotekmodel->get_obat_by_id($id,"produksi");
		$data['tahun_pembelian']=$this->apotekmodel->get_obat_by_id($id,"tahun_pembelian");
		$data['harga']=$this->apotekmodel->get_obat_by_id($id,"harga");


		$data['id']=$id;
		if(!empty($data['nama']))
		{
			$this->load->view('template',$data);
		}else{
			redirect('apotek');
		}
	}
	

	function update()
	{
		$id=$_GET['uid'];
		$this->load->model('apotekmodel');
		$data=array(
				'nama'=>$this->input->post('nama'),
				'produksi'=>$this->input->post('produksi'),
				'tahun_pembelian'=>$this->input->post('tahun_pembelian'),
				'harga'=>$this->input->post('harga')
				
			);
		if($this->apotekmodel->update_obat($id,$data)==TRUE)
		{
			redirect('apotek');
		}else{
			redirect("obat/updateview?uid=".$id."");
		}
	}
	
	

}