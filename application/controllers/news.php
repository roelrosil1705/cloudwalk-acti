<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
	}

	function index()
	{
		$data['activeMenu'] = 'news_page';
		$data['title'] = 'Activation Advertising, Inc. - Below the line. Beyond Expectations.';
		$data['header'] = $this->load->view('homepage/header', $data, true); 
		$data['body'] = $this->load->view('news_view', $data, true); 
		$this->load->view('newspage', $data);
	}
}


/* End of file news.php */
/* Location: ./application/controllers/news.php */