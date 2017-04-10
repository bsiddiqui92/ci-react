<?php 


Class Admin extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('employee_model');  

	}

	public function index() {

		$this->load->view('admin_view'); 
	}

	/*
	 * @method listEmployees
	 * Get List of all company employees
	 * method reserved for admin
	 */

	public function listEmployees() {
		try {
			$employees = $this->employee_model->get_all(); 
			echo json_encode($employees); 
		} catch (Exception $error) {
			//error handling for employees not found
			//will be ajax error code
		}
	}

	/*
	 * @method getReauest
	 * Get request by Employee id
	 * @param int - Employee ID
	 */
	public function getEmployeeRequest($id) {

	}

	/*
	 * @method getAllRequests
	 * List all pending requests
	 *
	 */
	public function getAllRequests() {

	}

}