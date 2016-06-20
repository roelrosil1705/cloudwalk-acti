<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
	}

	function index()
	{
		$data['activeMenu'] = 'about_page';
		$data['title'] = 'Activation Advertising, Inc. - Below the line. Beyond Expectations.';
		$data['header'] = $this->load->view('homepage/header', $data, true); 
		$data['body'] = $this->load->view('about_view', $data, true); 
		$this->load->view('aboutpage', $data);
	}
}


/* End of file about.php */
/* Location: ./application/controllers/about.php */