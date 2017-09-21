<?php 


class pasien extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('pasienmodel');
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

		function updateview()
	{
	    $data['main_view'] = 'pasien_edit';
		$id=$_GET['uid'];
		$this->load->model('pasienmodel');
		$data['nama']=$this->pasienmodel->get_pasien_by_id($id,"nama");
		$data['alamat']=$this->pasienmodel->get_pasien_by_id($id,"alamat");
		$data['id']=$id;
		if(!empty($data['nama']))
		{
			$this->load->view('template',$data);
		}else{
			redirect('pasien');
		}
	}
	

	function update()
	{
		$id=$_GET['uid'];
		$this->load->model('pasienmodel');
		$data=array(
				'nama'=>$this->input->post('nama_pasien'),
				'alamat'=>$this->input->post('alamat')
				
			);
		if($this->pasienmodel->update_pasien($id,$data)==TRUE)
		{
			redirect('pasien');
		}else{
			redirect("pasien/updateview?uid=".$id."");
		}
	}
	

}