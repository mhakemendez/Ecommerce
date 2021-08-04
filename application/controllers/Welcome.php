<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function  __construct(){
        parent::__construct();
        
        // Load cart library
        $this->load->library('cart');
        
        // Load product model
        $this->load->model('product');
    }
    
    function index(){
        $data = array();
        
        // Fetch products from the database
        $data['products'] = $this->product->getRows();
        
        // Load the product list view
        $this->load->view('layouts/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/banner');
        $this->load->view('products/product',$data);
        $this->load->view('products/newproduct',$data);
        $this->load->view('layouts/footer');
    }

	public function details($id){

       
        
        // Fetch products from the database by row
		$data['products'] = $this->product->getRows();
        $data['details'] = $this->product->getRows($id);
		
		$this->load->view('layouts/header');
        $this->load->view('templates/navbar');
		$this->load->view('products/productdetails',$data);
		$this->load->view('products/newproduct',$data);
        $this->load->view('layouts/footer');
    }
}

		

		