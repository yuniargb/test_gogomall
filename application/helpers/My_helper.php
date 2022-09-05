<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MyHelper{
    public static function validate_error_message($field){
        $CI =& get_instance();
        $error_message = null;

        if($CI->session->flashdata('error')){
            $error_message = $CI->session->flashdata('error');

            if(!empty($error_message[$field])){
                return '<span class="text-danger">'. $error_message[$field] . '</span>';
            }  
        }
      
        return '';
    }
    public static function validate_error_value($field,$row_data = [], $as = null){
        $CI =& get_instance();
        $error_value = null;

        if($CI->session->flashdata('field_error')){
            $error_value = $CI->session->flashdata('field_error');

            return  $error_value[$field];
        }

        if($row_data != null){
            return $row_data[$as ?? $field];
        }

        return $error_value;
    }

    public static function alert_info(){
        $CI =& get_instance();
        if($CI->session->flashdata('success_alert')){
            echo '<div class="alert alert-success my-3" role="alert">'.$CI->session->flashdata('success_alert').'</div>';
        }

        if($CI->session->flashdata('error_alert')){
            echo '<div class="alert alert-danger my-3" role="alert">'.$CI->session->flashdata('error_alert').'</div>';
        }
    }
}