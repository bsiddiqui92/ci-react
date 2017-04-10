<?php 

Class Employee extends CI_Controller {

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

		} catch ( Exception $error) {

		}
	}

	/*
	 * 
	 * @method submitRequest
	 * Use POST data to submit and save request
	 *
	 */

	public function getAll() {
		try {
			$employees = $this->employee_model->get_all();
			echo json_encode($employees);  
		} catch (Exception $error) {
			//ajax error return 
			echo $error; 

		}
		
	}
}