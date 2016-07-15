<?php
class Miscelaneous_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$connection_information = $this->config->item('connection_information');
		$this->load->database($connection_information);
	}

	public function loadPageHeadCode($slug)
	{
		$query_string = "select page_title, meta_info, meta_enabled from pages_header_code where slug='".$slug."' and enabled = 1";
		$query = $this->db->query($query_string);
		$return_data = array();
		if($query->num_rows() > 0)
		{
			$result = $query->row_array();
			$return_data['page_title'] = $result['page_title'];
			if($result['meta_enabled'])
			{
				$return_data['meta_info'] = $result['meta_info'];
			}
			else
			{
				$return_data['meta_info'] = null;
			}
		}
		else
		{
			$return_data['page_title'] = null;
			$return_data['meta_info'] = null;
		}
		return($return_data);
	}
}
?>