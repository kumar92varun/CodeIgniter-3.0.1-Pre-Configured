<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
	private $data_head;
	private $data_page;
	private $data_footer;
	private $css_files_array;
	private $js_files_array;
	private $page_title;
	private $meta_info;

	public function __construct()
	{
		parent::__construct();
		$this->data_head = array();
		$this->data_page = array();
		$this->data_footer = array();
		$this->css_files_array = array();
		$this->js_files_array = array();
		$this_page_relative_url = uri_string();
		$this_page_relative_url = "/".$this_page_relative_url;
		$head_code = $this->misc->loadPageHeadCode($this_page_relative_url);
		$this->page_title = $head_code['page_title'];
		$this->meta_info = $head_code['meta_info'];
	}

	public function index()
	{
		$this->loadPage('home/index');
	}



	private function loadPage($view, $load_header = 1)
	{
		$this->setPageData();
		$this->load->view('common/head', $this->data_head);
		if($load_header)
		{
			$this->load->view('common/header');
		}
		$this->load->view($view, $this->data_page);
		if($load_header)
		{
			$this->load->view('common/footer', $this->data_footer);
		}
	}
	private function setPageData()
	{
		$this->data_head['page_title'] = $this->page_title;
		$this->data_head['meta_info'] = $this->meta_info;
		$this->data_head['css_files'] = $this->css_files_array;
		$this->data_footer['js_files'] = $this->js_files_array;
	}

}
?>