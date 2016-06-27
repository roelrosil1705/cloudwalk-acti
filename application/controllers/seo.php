<?php
/**
 * Created by PhpStorm.
 * User: Cloudwalk 2
 * Date: 6/27/2016
 * Time: 6:43 PM
 */
Class Seo extends CI_Controller {

    function index()
    {

        $data = array('http://activationsadvertising.com/', 'http://activationsadvertising.com/index.php/newspage');//select urls from DB to Array
        header("Content-Type: text/xml;charset=iso-8859-1");
        $this->load->view("sitemap",$data);
    }
}