<?php
class Employee_model extends CI_Model {

		public function __construct()
		{
			parent::__construct();
		}
		
		public function get_data_index(){
			$data['department_list']=$this->get_department_list();
			//$data['employee_list']=$this->get_employee_list();
			$data['grade_list']=$this->get_grtade_list();
			return $data;
		}
		
		private function get_department_list()
		{
			$arr=array('department_list'=>array('dept_id' => 1, 'dept_desc'=>"b" ));
			return $arr;
			//return $this->db->get('tbl_department')->result_array();
		}
		private function get_employee_list()
		{
			return $this->db->get('tbl_employee')->result_array();
		}
		
		private function get_grtade_list()
		{
			$arr=array('grade_list'=>array('grade_id' => 1, 'grade'=>"b" ));
			return $arr;
			//return $this->db->get('ref_grade')->result_array();
		}
		
		public function get_department_employee($data)
		{
			if(isset($data['dept_id']))
			{
				return $this->db->select('tbl_employee.*')
				->join('tbl_employee','lnk_employee_to_departments.emp_id = tbl_employee.emp_id')
				->get_where('lnk_employee_to_departments',array("lnk_employee_to_departments.dept_id" => $data['dept_id']))->result_array();
			}
		}
		
		public function get_employee_without_grade($data)
		{
			foreach($data['All_emp_list'] as $emp)
			{
				$available_employee_under_department[]=$emp['emp_id'];
			}
		}
		
		public function get_employee_under_grade($data)
		{
			if(isset($data['grade_id']))
			{
				return $this->db->select('tbl_employee.*')
				->join('tbl_employee','lnk_employee_to_grades.emp_id = tbl_employee.emp_id')
				->get_where('lnk_employee_to_grades',array("lnk_employee_to_grades.grade_id" => $data['grade_id']))->result_array();
			}
		}
		
		public function add_employee_to_grade($data)
		{
 			$emp=$data['dept_emp_id'];
			foreach($emp as $e)
			{
				$a['emp_id']=$e;
				$a['grade_id']=$data['grade'];
				$this->db->where('emp_id',$e)->delete('lnk_employee_to_departments');
				$row[]=$a;
			}
			$this->db->insert_batch('lnk_employee_to_grades',$row);
		}
    }