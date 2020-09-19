<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    //loads page
	public function register()
	{
        $this->load->view('templates/header');//loads header
        $this->load->view('private/register');//loads page
        $this->load->view('templates/footer');//load footer
	}

	public function login()
	{
		$this->load->view('templates/header');//loads header
        $this->load->view('private/login');//loads page
        $this->load->view('templates/footer');//load footer
	}
}