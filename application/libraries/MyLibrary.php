<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class MyLibrary {

    protected $CI;

    public function __construct(){

        $this->CI =& get_instance();

    }

    // view globals
    function views($view, $data = []) {
        $this->CI->load->view('layout/header',$data);
        $this->CI->load->view('layout/navbar',$data);
        // dynamic view
        $this->CI->load->view('content/'. $view,$data);
         // end dynamic view
        $this->CI->load->view('layout/footer',$data);
    }

    // view custom validations
    function validation($validations,$_redirect) {
        // call library custom validations
        $this->CI->load->library('validation/'.$validations,null,'validation_custom');
        
        // make request value form error variable 
        $post_data = $this->CI->input->post();
        $form_error = [];
        foreach($post_data as $i => $pd){
            $form_error[$i] = $pd;
        }

        // set to flashdata old values
        $this->CI->session->set_flashdata('field_error', $form_error);
        
        // set rules field
        $get_rules = $this->CI->validation_custom->rules();
        $this->CI->form_validation->set_rules($get_rules);

		if($this->CI->form_validation->run() == FALSE){
            // set to flashdata error messages
			$this->CI->session->set_flashdata('error', $this->CI->form_validation->error_array());
           
			redirect(base_url($_redirect));
		}
    }

    // get all data post
    function post_form() {
        $post_data = $this->CI->input->post();
        foreach($post_data as $i => $pd){
            $data[$i] = $pd;
        }
        return $data;
    }

    // response action
    function response($response,$_redirect,$act) {
        if($act == 'store'){
            $alert = 'Ditambahkan!';
        }else if($act == 'update'){
            $alert = 'Diubah!';
        }else if($act == 'delete'){
            $alert = 'Dihapus!';
        }else if($act == 'find'){
            $alert = 'Ditemukan!';
        }else{
            $alert = 'Tidak diketahui!';
        }

        if($act != 'find'){
            if($response==true){
                $this->CI->session->set_flashdata('success_alert','Data Berhasil '. $alert);
            }else{
                $this->CI->session->set_flashdata('error_alert','Data Gagal '. $alert);
            }
            redirect(base_url($_redirect));
        }else{
            if($response==false){
                $this->CI->session->set_flashdata('error_alert','Data Gagal '. $alert);
                redirect(base_url($_redirect));
            }
        }   
    }

}