<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class CustomerValidation {

    public function rules() {
        $set =  array(
            array(
                    'field' => 'nama',
                    'label' => 'Nama',
                    'rules' => 'required'
            ),
            array(
                    'field' => 'no_telpon',
                    'label' => 'Nomor Telepon',
                    'rules' => 'required|numeric'
            ),
            array(
                    'field' => 'id_sales',
                    'label' => 'Sales',
                    'rules' => 'required|numeric'
            ),
        );

        return $set;
    }
}