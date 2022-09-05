<?php

defined('BASEPATH') OR exit('No direct script access allowed');

Class SalesController extends CI_Controller {
	private $lib;
	private $current_url;

    public function __construct() {
        parent::__construct();
		// library
		$this->lib = new MyLibrary();
        // helper
        $this->load->helper("My");
        // model
        $this->load->model('SalesModel');

        $this->current_url = '/'. $this->uri->segment(1);
    }

	// main page
	public function index() {
        $data['list'] = $this->SalesModel->get_data()->result();
        $this->lib->views('sales/list_sales',$data);
	}


	// form page (create / edit)
	public function form($id = null) {
       
        if($id != null){
            $data['row_data'] = $this->SalesModel->find_data($id)->row_array();
            $this->current_url .= '/update/'. $id;           
        }else{
            $this->current_url .= '/store';
            $data['row_data'] = [];
        }

        $data['action_url'] = base_url($this->current_url);

        $this->lib->views('sales/form_sales',$data);
	}


	// store action
	public function store() {
        $this->lib->validation('SalesValidation',$this->current_url .'/create');
        $data = $this->lib->post_form();
        $response = $this->SalesModel->store_data($data);
        $this->lib->response($response,$this->current_url,'store');
	}

	// update action
	public function update($id) {
        $change_url = $this->current_url . '/edit/'. $id;
        $find = $this->SalesModel->find_data($id)->row();
        $this->lib->response($find,$change_url,'find');

        $this->lib->validation('SalesValidation',$change_url);

        $data = $this->lib->post_form();
        $response = $this->SalesModel->update_data($id,$data);
       
        $this->lib->response($response,$this->current_url,'update');
	}

    // delete data
	public function delete($id){
        $find = $this->SalesModel->find_data($id)->row();
        $this->lib->response($find,$this->current_url,'find');

        $response = $this->SalesModel->delete_data($id);
        $this->lib->response($response,$this->current_url,'delete');
	}

    
}

