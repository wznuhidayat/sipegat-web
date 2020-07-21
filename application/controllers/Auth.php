<?php 
 
class Auth extends CI_Controller{
	public function __construct()
    {
        parent::__construct();
        // check_not_login();
       	$this->load->model('m_admin');
        $this->load->library('form_validation');
    }
	public function login(){
		check_already_login();
		$this->template->load('admin/template-auth','admin/login');

	}
	
	public function logout(){
		$params = array('username','name');
		$this->session->unset_userdata($params);
		redirect('auth/login');
	}
	public function process_admin(){
		$post = $this->input->post(null,TRUE);
		if(isset($post['login'])){
			
			$query = $this->m_admin->login($post);
			if($query->num_rows()>0){
				$row = $query->row();
				$params = array(
					'username' => $row->username,
					'name' => $row->name,
					'img' => $row->img
				);
				$this->session->set_userdata($params);
				redirect('admin/dashboard');
			}else{
				echo "<script>alert(' Login failed');
					window.location='".site_url('auth/login')."';
				</script>";
			}
		}
	}
}