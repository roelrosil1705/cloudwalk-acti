<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Work_with_us extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
	}

	function index()
	{
		$data['activeMenu'] = 'workwithus_page';
		$data['title'] = 'Activation Advertising, Inc. - Below the line. Beyond Expectations.';
		$data['header'] = $this->load->view('homepage/header', $data, true); 
		$data['body'] = $this->load->view('workwithus_view', $data, true); 
		$this->load->view('aboutpage', $data);
	}
}


/* End of file work_with_us.php */
/* Location: ./application/controllers/work_with_us.php */