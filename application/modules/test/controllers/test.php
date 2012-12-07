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
		$start = microtime(true);
   		echo "<pre>Start: $start<br>";

		$data = $this->test_model->execute();
		echo json_encode($data);

		$end = microtime(true);
	    echo "End: $end <br><hr>";
    	$parseTime = $end-$start;
    	echo 'Took: '.$parseTime.' seconds';
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */