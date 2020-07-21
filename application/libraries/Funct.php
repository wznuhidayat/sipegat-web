<?php 

class Funct{

	protected $ci;

	function __construct(){
		$this->ci =& get_instance();

	}
	function admin_login(){
		$username = $this->ci->session->userdata('username');
		$user_data = $this->ci->m_admin->get($username)->row();
		return $user_data;
	}
}