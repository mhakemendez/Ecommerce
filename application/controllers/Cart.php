<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller{
    
    function  __construct(){
        parent::__construct();
        
        // Load cart library
        $this->load->library('cart');
        
        // Load product model
        $this->load->model('product');
    }
    
    function index(){
        $this->load->view('layouts/header');
        $this->load->view('templates/navbar');
        $this->load->view('Cart/index');
        $this->load->view('layouts/footer');
    }

    function add_to_cart(){ 
        $data = array(
            'id' => $this->input->post('product_id'), 
            'name' => $this->input->post('product_name'), 
            'price' => $this->input->post('product_price'), 
            'qty' => $this->input->post('quantity'), 
        );
        $this->cart->insert($data);
        echo $this->show_cart(); 
    }

    function show_cart(){ 
        $output = '';
        $no = 0;
        foreach ($this->cart->contents() as $items) {
            $no++;
            $output .='
                <tr>
                    <td>'.$items['name'].'</td>
                    <td>'.number_format($items['price']).'</td>
                    <td> <input type="number" value="'.$items['qty'].'"> <a href = "" class="btn btn-primary btn-sm" >update</a> </td>
                    <td>'.number_format($items['subtotal']).'</td>
                    <td><button type="button" id="'.$items['rowid'].'" class="romove_cart btn btn-danger btn-sm">Cancel</button></td>
                </tr>
            ';
        }
        $output .= '
            <tr>
                <th colspan="3">Total</th>
                <th colspan="2">'.'Rp '.number_format($this->cart->total()).'</th>
            </tr>
        ';
        return $output;
        
    }

    function load_cart(){
        echo $this->show_cart(); 
    }

    function delete_cart(){ 
        $data = array(
            'rowid' => $this->input->post('row_id'), 
            'qty' => 0, 
        );
        $this->cart->update($data);
        echo $this->show_cart();
    }

    
  
    
}