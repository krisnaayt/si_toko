<?php defined('BASEPATH') OR exit('No direct script access alowed');

    class Product extends CI_Controller{
        
        public function __construct(){
            parent::__construct();
            $this->load->model('M_product');
            $this->load->library('form_validation');
        }
        
        public function index(){
            $data['product']=$this->M_product->getAll();
            $this->load->view('admin/product/list', $data);
        }

        public function add(){
            $product=$this->M_product;
            $validation=$this->form_validation;
            $validation->set_rules($product->rules());

            if($validation->run()){
                $product->save();
                $this->session->set_flashdata('success', 'Berhasil disimpan');
            }

            $this->load->view('admin/product/new_form');
        }

        public function edit($id=null){
            if(!isset($id)) redirect('admin/product');

            $product=$this->M_product;
            $validation=$this->form_validation;
            $validation->set_rules($product->rules());

            if($validation->run()){
                $product->update();
                $this->session->set_flashdata('success', 'Berhasil disimpan');
            }

            $data['product']=$product->getById($id);
            if(!$data['product']) show_404();

            $this->load->view('admin/product/edit_form', $data);
        }

        public function delete($id=null){
            if (!isset($id)) show_404();

            if($this->M_product->delete($id)){
                redirect(site_url('admin/product'));
            }
        }
    }

?>