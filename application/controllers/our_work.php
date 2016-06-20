<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Our_work extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
	}

	function index()
	{
		$data['activeMenu'] = 'ourwork_page';
		$data['title'] = 'Activation Advertising, Inc. - Below the line. Beyond Expectations.';
		$data['header'] = $this->load->view('homepage/header', $data, true); 
		$data['body'] = $this->load->view('ourwork_view', $data, true); 
		$this->load->view('ourworkpage', $data);
	}
}


/* End of file our_work.php */
/* Location: ./application/controllers/our_work.php */