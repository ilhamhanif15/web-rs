<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Error_Controller extends CI_Controller {

	public function notFound()
	{
		$this->load->view('errors/err_404.html');
	}

}
