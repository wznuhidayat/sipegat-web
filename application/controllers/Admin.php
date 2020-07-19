<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index(){
		$this->template->load('admin/template','admin/main');
	}
	public function adminview(){
		$data['admin'] = $this->m_admin->getAll();
		$this->template->load('admin/template','admin/admin_view',$data);
	}
	public function addAdmin(){
		$admin = $this->m_admin;
        $validation = $this->form_validation;
        $validation->set_rules($admin->rules_add());

        if ($validation->run()) {
            $admin->save();
            $this->session->set_flashdata('success', 'Data Successfully Added');
            redirect('admin/adminview');
        }
		$this->template->load('admin/template', 'admin/add_admin');	
	}
	public function editadmin($username = null)
    {
        if (!isset($username)) redirect('admin/adminview');
       
        $admin = $this->m_admin;
        $validation = $this->form_validation;
        $validation->set_rules($admin->rules_edit());

        if ($validation->run()) {
            $admin->update();
            if($this->db->affected_rows() > 0){
            $this->session->set_flashdata('success', 'Data Successfully Added');
            }
            redirect('admin/adminview');
        }

        $data['admin'] = $admin->getById($username);
        if (!$data['admin']) show_404();
        
        $this->template->load('admin/template','admin/edit_admin',$data);
    }
     public function deleteadmin($username=null)
    {
        if (!isset($username)) show_404();
        if ($this->m_admin->delete($username)) {
            if($this->db->affected_rows() > 0){
                $this->session->set_flashdata('deleted', 'Deleted Successfully');
            }
            redirect(site_url('admin/adminview'));
        }
    }

}