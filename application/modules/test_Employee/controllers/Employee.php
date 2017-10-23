<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends MX_Controller {

	
	public function __construct()
	{
		parent::__construct();	
		$this->load->model('Employee_model');
	}

	public function index()
	{
		$data=$this->Employee_model->get_data_index();
		//$this->load->view('employee_interface',$data);
		$this->load->view('emp_interface',$data);
	}
	
	public function get_department_employee()
	{
		$input['dept_id']=$this->input->post('dept_id');
		$data['emp_list']=$this->Employee_model->get_department_employee($input);
		//$data['emp_list']=$this->Employee_model->get_employee_without_grade($data);
		
		$data['flag']='dept_emp';
		$this->load->view('emp_list',$data);
	}
	
	public function get_employee_under_grade()
	{
		$input['grade_id']=$this->input->post('grade_id');
		$data['emp_list']=$this->Employee_model->get_employee_under_grade($input);
		$data['flag']='grade_emp';
		$this->load->view('emp_list',$data);
	}
	
	public function add_employee_to_grade()
	{
		$data=$this->Employee_model->add_employee_to_grade($this->input->post());
		print_r($data);
	}

}
