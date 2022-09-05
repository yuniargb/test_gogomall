<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class SalesValidation {

    public function rules() {
        $set =  array(
            array(
                    'field' => 'nama',
                    'label' => 'Nama',
                    'rules' => 'required'
            ),
        );

        return $set;
    }
}