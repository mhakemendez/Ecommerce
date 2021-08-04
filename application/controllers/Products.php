<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller{
    
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
        $this->load->view('products/index', $data);
        $this->load->view('layouts/footer');
    }
    
}