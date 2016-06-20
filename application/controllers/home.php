<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
	}
	
	function index()
	{
	
		$data['title'] = 'Activation Advertising, Inc. - Below the line. Beyond Expectations.';
		

		$data['header'] = $this->load->view('homepage/header', $data, true);	
		
		$data['home_content'] = $this->load->view('home_view', $data, true);
		$data['body'] = $this->load->view('activation_content', $data, true); 
		
		$this->load->view('homepage', $data);
	
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */