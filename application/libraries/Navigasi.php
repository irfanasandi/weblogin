<?php
class Navigasi
{
	var $CI = '';
	public function __construct()
	{
		$this->CI = &get_instance();
	}

	public function set_active_menu($param = null)
	{
		if ($param == 'dashboard') {
			$this->CI->session->set_userdata('active_menu', '<script>$("#dashboard").addClass("active");</script>');
		}
		if ($param == 'applications') {
			$this->CI->session->set_userdata('active_menu', '<script>$("#applications").addClass("active");</script>');
		}
	}
}
