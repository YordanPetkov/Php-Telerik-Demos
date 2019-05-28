<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class image extends CI_Controller {

	public function index() {
        echo 'hello from test controler';
    }

    public function get($id = null, $name = null) {
        $view_data = [];
        $view_data['username'] = 'ivan';
        $view_data['age'] = 23;
        $this->load->helper('url');
        $this->load->view('image', $view_data);
    }

    
}
