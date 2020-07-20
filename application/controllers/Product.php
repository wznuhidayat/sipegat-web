<?php 

class Product extends CI_Controller{

	public function __construct()
    {
        parent::__construct();
        // check_not_login();
        $this->load->model(['m_Product']);
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['Product'] = $this->m_Product->getAll();
        $this->template->load('admin/template','admin/Product/Product_view',$data);
    }


    public function add()
    {
        $Product = $this->m_Product;
        // $query_vendor = $this->m_vendor->getAll();
        $validation = $this->form_validation;
        $validation->set_rules($Product->rules());

        if ($validation->run()) {
            $Product->save();
            $this->session->set_flashdata('success', 'Data Successfully Added');
            redirect('Product');
        }
        // $vendor[null] = '- Select -';
        // foreach ($query_vendor as $ven) {
        //      $vendor[$ven->id_vendor] = $ven->id_vendor;
        // }
        // $data['vendor'] = $vendor; 
        // $data['selected'] = null;

        $this->template->load('admin/template','admin/Product/add_Product');
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('Product');
       
        $Product = $this->m_Product;
        // $query_vendor = $this->m_vendor->getAll();
        $validation = $this->form_validation;
        $validation->set_rules($Product->rules());

        if ($validation->run()) {
            $Product->update();
            if($this->db->affected_rows() > 0){
            $this->session->set_flashdata('success', 'Data Successfully Added');
            }
            redirect('Product');
        }
        // $vendor[null] = '- Select -';
        // foreach ($query_vendor as $ven) {
        //      $vendor[$ven->id_vendor] = $ven->id_vendor;
        // }
        $mk = $Product->getById($id);
        // $data['vendor'] = $vendor; 
        // $data['selected'] = $mk->id_vendor;
        $data['product'] = $mk;
        if (!$data['product']) show_404();
        
        $this->template->load('admin/template','admin/Product/edit_Product',$data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        if ($this->m_Product->delete($id)) {
            if($this->db->affected_rows() > 0){
                $this->session->set_flashdata('deleted', 'Deleted Successfully');
            }
            redirect(site_url('Product'));
        }
    }
   

}