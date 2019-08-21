<?php
    class Overview extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model('M_product');
        }
        public function index(){
            $data['product']=$this->M_product->getAll();
            $this->load->view('admin/overview', $data);
        }
    }
?>