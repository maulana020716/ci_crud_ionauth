<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Products extends CI_Controller {

       public function __construct() {
          parent::__construct(); 
          $this->load->model('ProductsModel');    
          $this->load->database();
          $this->load->library(['ion_auth', 'form_validation']);
          $this->load->helper(['url', 'language']);
          $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
          $this->lang->load('auth');     
       }
       public function index()
       {
           $data['data']=$this->ProductsModel->get_products();
           $this->load->view('includes/header');       
           $this->load->view('products/list',$data);
           $this->load->view('includes/footer');
       }
       public function create()
       {
          $this->load->view('includes/header');
          $this->load->view('products/create');
          $this->load->view('includes/footer');      
       }
       /**
        * Store Data from this method.
        *
        * @return Response
       */
       public function store()
       {
           if($this->input->post()) {
            $data = array(
                'title' => $this->input->post('title'),
                'description' => $this->input->post('description')
            );
            $this->ProductsModel->insert_product($data);
            redirect(base_url('products'));

           }
        }
       /**
        * Edit Data from this method.
        *
        * @return Response
       */
       public function edit($id)
       {
           $product = $this->db->get_where('products', array('id' => $id))->row();
           $this->load->view('includes/header');
           $this->load->view('products/edit',array('product'=>$product));
           $this->load->view('includes/footer');   
       }
       /**
        * Update Data from this method.
        *
        * @return Response
       */
       public function update($id)
       {
        $data=array(
            'title' => $this->input->post('title'),
            'description'=> $this->input->post('description')
        );
           $this->ProductsModel->update_product($id, $data);
           redirect(base_url('products'));
       }
       /**
        * Delete Data from this method.
        *
        * @return Response
       */
       public function delete($id)
       {
           $this->db->where('id', $id);
           $this->db->delete('products');
           redirect(base_url('products'));
       }
    }