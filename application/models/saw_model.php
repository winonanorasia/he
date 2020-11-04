<?php
class saw_model extends CI_Model{
	function log_in(){
		return $this->session->userdata('user_id');
	}
	function check_login($user,$pass){
		$cek_data = $this->db->get_where('admin',array('username'=>$user,'password'=>$pass));
		if(count($cek_data->result())==1){
			return $cek_data->result();
		}
		else{
			return FALSE;
		}
	}
	function ambil_data($table){
		$data = $this->db->get($table);
		return $data->result();
	}
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	function ambil_data_where($table,$key_db,$key){
		$data = $this->db->get_where($table,array($key_db=>$key));
		return $data->result();
	}
	function ambil_data_where2($table,$key_db1,$key1,$key_db2,$key2){
		$data = $this->db->get_where($table,array($key_db1=>$key1,$key_db2=>$key2));
		return $data->result();
	}
	function update_data($id,$data,$table){
		$this->db->where($id);
		$this->db->update($table,$data);
	}
	function hapus_data($id,$table){
		$this->db->where($id);
		$this->db->delete($table);
	}
}
?>