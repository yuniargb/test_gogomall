<?php

defined('BASEPATH') OR exit('No direct script access allowed');

Class ListController extends CI_Controller {
	private $lib;
    public function __construct() {
        parent::__construct();
		// library
		$this->lib = new MyLibrary();
        // model
        $this->load->model('CustomerModel');

    }

	// main page
	public function index() {
        $data['list'] = $this->CustomerModel->get_data_sales()->result();
        $this->lib->views('list',$data);
	}
}

