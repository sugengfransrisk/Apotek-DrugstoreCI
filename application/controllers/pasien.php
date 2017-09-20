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

		public function edit(){
		$id = $this->input->get('id');
		//CHECK : Data Availability
		$data['main_view'] = 'pasien_edit';
		$data['detail'] = $this->pasienmodel->getDetail($id);
		$this->load->view('template', $data);
	}

	public function update(){
		if($this->input->post('submit')){
			$this->form_validation->set_rules('nama_pasien', 'Nama', 'trim|required');
			$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');

			if ($this->form_validation->run() == true) {
				if($this->pasienmodel->update($this->input->post('id')) == true){
					$this->session->set_flashdata('announce', 'Berhasil menyimpan data');
					redirect('pasien/edit?id='.$this->input->post('id'));
				}else{
					$this->session->set_flashdata('announce', 'Gagal menyimpan data');
					redirect('pasien/edit?id='.$this->input->post('id'));
				}
			} else {
				$this->session->set_flashdata('announce', validation_errors());
				redirect('pasien/edit?id='.$this->input->post('id'));
			}
		}
	}
	

}