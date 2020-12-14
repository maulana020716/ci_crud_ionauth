<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('ProductsModel');
    }

	public function index(){
        
        if($this->input->post()) {
            $search = $this->input->post('search');
            $data['data'] = $this->ProductsModel->find_products($search);
            
            $this->load->view('includes/header');       
            $this->load->view('products/find_list',$data);
            $this->load->view('includes/footer');
        }
    }
}