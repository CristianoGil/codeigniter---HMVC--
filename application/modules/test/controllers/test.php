<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('test_model');
	}

	public function index()
	{
		$this->load->view('test');
	}

	public function run(){

		for ($i=0; $i < 1 ; $i++) {
			$this->test_model->execute();
		}
	$this->output->enable_profiler(TRUE);

	}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */