<?php 

Class Request extends CI_Controller {

	public function __construct () {
		parent::__construct(); 
		$this->load->model('request_model');
		$this->load->model('employee_model'); 
	}

	/*
	 * @method index 
	 * Will load Requst view 
	 */

	public function index() {
		try {

			$this->load->view('request_view'); 
		} catch ( Exception $error) {

		}
	}

	/*
	 * 
	 * @method submitRequest
	 * Use POST data to submit and save request
	 *
	 */

	public function submitRequest() {
		try {
			$this->request_model->insert($_POST); 
		} catch (Exception $error) {
			//ajax error return 
			echo $error; 

		}
		
	}
}