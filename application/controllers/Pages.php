<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {
    //loads page
	public function view($page = 'home')
	{
		if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter
		$data['day'] = date("l");
        $data['date'] = date("jS \of F  ");
		
		
        $this->load->view('templates/header', $data);//loads header
        $this->load->view('pages/'.$page, $data);//loads page
        $this->load->view('templates/footer', $data);//load footer
	}
}