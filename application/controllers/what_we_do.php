<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class What_we_do extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
	}

	function index()
	{
		$data['activeMenu'] = 'whatwedo_page';
		$data['title'] = 'Activation Advertising, Inc. - Below the line. Beyond Expectations.';
		$data['header'] = $this->load->view('homepage/header', $data, true); 
		$data['body'] = $this->load->view('whatwedo_view', $data, true); 
		$this->load->view('whatwedopage', $data);
	}
}


/* End of file what_we_do.php */
/* Location: ./application/controllers/what_we_do.php */