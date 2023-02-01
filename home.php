<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

	
	public function beranda()
	{
		$this->load->view('beranda');
	}
	public function tambah()
	{
		$this->load->view('tambah');
	}
	public function tampil()
	{
		$data['query'] = $this->db->get('pengaduanmasyarakat')->result_array();
		$this->load->view('tampil',$data);
	}
	public function login()
	{
		$this->load->view('login');
	}
public function isidata()
	{
		$data = array(
			'Nama' => $this->input->post("Nama"),
			'Username' => $this->input->post("Username"),
			'Password' => $this->input->post("Password"),
			
	);
	
	$this->db->insert('pengaduanmasyarakat', $data);
	redirect("home/register");
	}

	public function update()
	{
	$data = array(
        'nama' => '5',
        'username'  => 'NIA',
        'password'  => 'tkr',
); 

$this->db->update('mahasiswa', $data);
redirect("home/tampil");

}
public function register()
	{
		$this->load->view('register');
	}
}
