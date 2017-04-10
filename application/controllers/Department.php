<?php 

Class Department extends CI_Controller {

	public function __construct () {
		parent::__construct(); 
		$this->load->model('department_model'); 
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
			$employees = $this->department_model->get_all();
			echo json_encode($employees);  
		} catch (Exception $error) {
			//ajax error return 
			echo $error; 

		}
		
	}
}