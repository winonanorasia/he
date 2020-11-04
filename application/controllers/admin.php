<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model("saw_model");
		$cek = $this->saw_model->log_in();
		if(!$cek){
			header('location:'.base_url('index.php/login'));
	}
}
	public function home(){	
			$this->load->view('Home');	
	}
	public function data_kriteria(){
		$data['data_kriteria'] = $this->saw_model->ambil_data('kriteria');
		$this->load->view('kriteria',$data);
	}
	public function data_subkriteria(){
		$data['data_subkriteria'] = $this->saw_model->ambil_data('subkriteria');
		$this->load->view('subkriteria',$data);
	}
	public function data_alternatif(){
		$data['data_alternatif'] = $this->saw_model->ambil_data('alternatif');
		$this->load->view('alternatif',$data);
	}
	public function hasil_seleksi(){
		$data['data_alternatif'] = $this->saw_model->ambil_data('alternatif');
		$this->load->view('hasil_seleksi',$data);
	}
	public function tambah_kriteria(){
		$this->load->view('tambah_data_kriteria');
	}
	public function tambah_subkriteria(){
		$data['kriteria'] = $this->saw_model->ambil_data('kriteria');
		$this->load->view('tambah_subkriteria',$data);
	}
	public function tambah_alternatif(){
		$data['kriteria'] = $this->saw_model->ambil_data('kriteria');
		$this->load->view('tambah_alternatif',$data);
	}
	public function tambah_kriteria_action(){
		$nama = $this->input->post('kriteria');
		$atribut = $this->input->post('atribut');
		$bobot = $this->input->post('bobot');
		#pengecekan nilai
		$nilai = $this->saw_model->ambil_data('kriteria');
		$kondisi=false;
		foreach ($nilai as $key) {
			if($key->bobot_kriteria==$bobot){
				echo "<script>alert('Nilai Bobot Sudah Ada');window.location='tambah_kriteria'
				</script>";
				$kondisi=true;
			}
		}
		if($kondisi==false){
			$query = array(
			'nama_kriteria' => $nama,
			'tipe_kriteria' => $atribut,
			'bobot_kriteria' => $bobot
			);
			$this->saw_model->input_data($query,'kriteria');
			redirect('admin/tambah_kriteria');
		}
		

	}
	public function tambah_subkriteria_action(){
		$kriteria = $this->input->post('kriteria');
		$subkriteria = $this->input->post('subkriteria');
		$nilai = $this->input->post('nilai');
		$keterangan = $this->input->post('keterangan');
		#pengecekan nilai
		$value = $this->saw_model->ambil_data('subkriteria');
		$kondisi=false;
		foreach ($value as $key) {
			if($key->nilai_sub==$nilai && $kriteria==$key->nm_kriteria){
				echo "<script>alert('Nilai Kriteria Sudah Ada');window.location='tambah_subkriteria'
				</script>";
				$kondisi=true;
			}
		}
		if($kondisi==false){
			$query = array(
			'nm_kriteria' => $kriteria,
			'subkriteria' => $subkriteria,
			'nilai_sub' => $nilai,
			'keterangan' => $keterangan
			);
			$this->saw_model->input_data($query,'subkriteria');
			redirect('admin/tambah_subkriteria');
		}

	}
	public function tambah_alternatif_action(){
		$nama = $this->input->post('nama');
		$gender = $this->input->post('gender');
		$tt = $this->input->post('tt');
		$as = $this->input->post('as');
		$jd = $this->input->post('jd');

		/*$list = array();
		$value = $this->saw_model->ambil_data('kriteria');
		foreach ($value as $key) {
			array_push($list, $key->nama_kriteria);
		}*/
		
		$query = array(
			'nama_alternatif' => $nama,
			'gender' => $gender,
			'TT' => $tt,
			'AS' => $as,
			'JD' => $jd
			);
			$this->saw_model->input_data($query,'alternatif');
			redirect('admin/tambah_alternatif');

	}
	 public function edit_kriteria($id){
		$hasil['data']=$this->saw_model->ambil_data_where('kriteria','id_kriteria',$id);
		$this->load->view('edit_data_kriteria',$hasil);
	
	 }
	 public function edit_kriteria_action($id){
		$nama = $this->input->post('kriteria');
		$atribut = $this->input->post('atribut');
		$bobot = $this->input->post('bobot');
		$value = $this->saw_model->ambil_data('kriteria');
		$kondisi=false;
		foreach ($value as $key) {
			if($key->bobot_kriteria==$bobot){
				echo "<script>alert('Nilai Bobot Kriteria Sudah Ada');window.location='edit_kriteria'
				</script>";
				$kondisi=true;
			}
		}
		if($kondisi==false){
			$query = array(
			'nama_kriteria' => $nama,
			'tipe_kriteria' => $atribut,
			'bobot_kriteria' => $bobot
			);
			$where = array('id_kriteria' => $id);
			$this->saw_model->update_data($where,$query,'kriteria');
			redirect('admin/data_kriteria');
		}
	 }
	 public function hapus_kriteria($id){
	 	$where = array('id_kriteria' => $id);
		$this->saw_model->hapus_data($where,'kriteria');
		redirect('admin/data_kriteria');
	 }
	  public function edit_subkriteria($id){
		$hasil['data']=$this->saw_model->ambil_data_where('subkriteria','id_subkriteria',$id);
		$hasil['kriteria'] = $this->saw_model->ambil_data('kriteria');
		$this->load->view('edit_data_subkriteria',$hasil);
	
	 }
	  public function edit_alternatif($id){
		$hasil['data']=$this->saw_model->ambil_data_where('alternatif','id_alternatif',$id);
		$this->load->view('edit_data_alternatif',$hasil);
	
	 }
	 public function edit_subkriteria_action($id){
	 	$kriteria = $this->input->post('kriteria');
		$subkriteria = $this->input->post('subkriteria');
		$nilai = $this->input->post('nilai');
		$keterangan = $this->input->post('keterangan');
		#pengecekan nilai
		$value = $this->saw_model->ambil_data('subkriteria');
		$kondisi=false;
		foreach ($value as $key) {
			if($key->nilai_sub==$nilai && $kriteria==$key->nm_kriteria){
				echo "<script>alert('Nilai Kriteria Sudah Ada');window.location='edit_subkriteria'
				</script>";
				$kondisi=true;
			}
		}
		if($kondisi==false){
			$query = array(
			'nm_kriteria' => $kriteria,
			'subkriteria' => $subkriteria,
			'nilai_sub' => $nilai,
			'keterangan' => $keterangan
			);
			$where = array('id_subkriteria' => $id);
			$this->saw_model->update_data($where,$query,'subkriteria');
			redirect('admin/data_subkriteria');
		}
	 }
	  public function edit_alternatif_action($id){
	 	$nama = $this->input->post('nama');
		$gender = $this->input->post('gender');
		$tt = $this->input->post('tt');
		$as = $this->input->post('as');
		$jd = $this->input->post('jd');

		/*$list = array();
		$value = $this->saw_model->ambil_data('kriteria');
		foreach ($value as $key) {
			array_push($list, $key->nama_kriteria);
		}*/
		
		$query = array(
			'nama_alternatif' => $nama,
			'gender' => $gender,
			'TT' => $tt,
			'AS' => $as,
			'JD' => $jd
			);
		$where = array('id_alternatif' => $id);
		$this->saw_model->update_data($where,$query,'alternatif');
		redirect('admin/data_alternatif');
	 }
	  public function hapus_subkriteria($id){
	 	$where = array('id_subkriteria' => $id);
		$this->saw_model->hapus_data($where,'subkriteria');
		redirect('admin/data_subkriteria');
	 }
	 public function hapus_alternatif($id){
	 	$where = array('id_alternatif' => $id);
		$this->saw_model->hapus_data($where,'alternatif');
		redirect('admin/data_alternatif');
	 }
}
