<?php 


class pegawai extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('pegawaimodel');
		if($this->session->userdata('role') == 'admin'){
			redirect('login');
		}
	

	}

	function tambah(){

		$data['main_view'] = 'pegawai_add';
		$this->load->view('template', $data);
	}


	function index(){
		$data['main_view'] = 'pegawai_view';
		$data['pegawai'] = $this->pegawaimodel->tampil_data()->result();
		$this->load->view('template', $data);
	}

		function hapus($id){
		$where = array('id' => $id);
		$this->pegawaimodel->hapus_data($where,'pegawai');
		redirect('pegawai/index');
	}

		function tambah_aksi(){
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$this->load->model('pegawaimodel');
		

 
		$data = array(
			'nama' => $nama,
			'alamat' => $alamat
			);
		$this->pegawaimodel->input_data($data,'pegawai');
		redirect('pegawai/index');
	}

		function updateview()
	{
	    $data['main_view'] = 'pegawai_edit';
		$id=$_GET['uid'];
		$this->load->model('pegawaimodel');
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