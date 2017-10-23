<?php
class Employee_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

	public function fetch_user_data_by_attr($attr_array){
		//dEL 
		//input as $data=array('Email',$email) OR $data = array('User_id' => $user_id);;
		  //returns reultant array->check empty array in caller
		$attr1=key($attr_array);
 		$this->db->select('UserId, 	password, Email, Name, UserTypeId');
     	$this->db->from('usertable');
     	$this->db->where($attr1,$attr_array[$attr1]);
		$query=$this->db->get();
		return $query;
	}

	public function updatesubids($data)
	{
		foreach ($data['lotwork'] as $value) {
			$input['sub_id']=$value['sub_id'];
			$this->db->where('userid',$value['userid']); 
        	$this->db->update('ufoms',$input);
		}
	}

	public function clrsn($data)
	{
		$input['session_id']=NULL;
		$this->db->where('userid',$data['userid']); 
        $this->db->update('profiles',$input); 
	}

	public function payee()
	{
		$today=date('Y-m-d');
		return $this->db->select('subscription.*,profiles.fname,profiles.lname,profiles.username')
			->join('profiles','subscription.userid = profiles.userid')
			->get_where('subscription',array("from_date <" => $today,"to_date <"=>$today,'is_paid'=>'No','profiles.system_type' =>1))->result_array();
	}


	public function getCandidateByBranch($candidates)
	{
		if(is_array($candidates) && !empty($candidates))
		{
			$branch=array();
			foreach ($candidates as $key => $value) {
				$result=$this->db->select('branch_id')->get_where('lnk_student_to_branch',array("userid" => $value))->result_array();
				if(!empty($result))
				{
					$branch[$value]=$result[0]['branch_id'];
				}
			}
			//$branch=array_filter($branch, function($var){return !is_null($var);} );
			return $branch;
		}
	}

	public function UpdateTimeCat($data)
	{
		$this->db->insert('timecatagory',$data); 
	}

	public function TotalFormCountOfSubscriptions()
	{
		return $this->db->select('COUNT(ufoms.formid) AS form_count,ufoms.sub_id')
			->group_by('ufoms.sub_id')->get('ufoms')->result_array();
	}

	public function ApprovedFormCountOfSubscriptions()
	{
		return $this->db->select('COUNT(ufoms.formid) AS form_count,ufoms.sub_id')
			->group_by('ufoms.sub_id')
			->get_where('ufoms',array("ufoms.is_approved"=>'Yes'))->result_array();
	}

	public function studentBranchSave($data)
	{
        $q=$this->db->get_where('lnk_student_to_branch',array('userid' => $data['userid']));
        if ( $q->num_rows() > 0 )  { 
        	$this->db->where(array('userid' => $data['userid'])); 
        	$this->db->update('lnk_student_to_branch',$data); 
    	} 
    	else { 
			$this->db->insert('lnk_student_to_branch',$data); 
		}
	}

	public function RejectedFormCountOfSubscriptions()
	{
		return $this->db->select('COUNT(ufoms.formid) AS form_count,ufoms.sub_id')
			->group_by('ufoms.sub_id')
			->get_where('ufoms',array("ufoms.is_approved"=>'No'))->result_array();
	}



	

    public function formTypesList(){ //shashi //type of forms available in the system
		return $this->db->select('*')->get('formtypes')->result_array();	
    }

    public function deleteTime($deleteid)
    {
		$this->db->where('tm_cat_id',$deleteid)->delete('timecatagory');
    }

    public function updateTimeData($data){
		$tm_cat_id=$data['pk'];
		$input[$data['name']]=$data['value'];
		$this->db->where('tm_cat_id',$tm_cat_id); 
        $this->db->update('timecatagory',$input); 
    }

	public function createLot($data) //shashi
	{ //creating lot and returning lot_id
		$input['formtypeid']=$data['formtypeid'];
		$input['lot_name']=$data['abr'];
		$input['instructions']=$data['instructions'];
		$input['created_date']=date('Y-m-d H:i:s');
		$input['userid']=$data['User_Id'];
		$this->db->insert('lot',$input); 
		return $this->db->insert_id();
	}

	public function addFormsToLot($data)//shashi
	{ //adding images/form into database table-form
		foreach ($data['form_name'] as $row) {
			$input['form_name']=$row;
			$input['lot_id']=$data['lot_id'];
			$rowArray[]=$input;
		}
		$this->db->insert_batch('form', $rowArray);
	}

	public function checkLotName($data) //shashi
	{ //check if lot name existe
		return $this->db->select('lot_name')
		->get_where('lot',array("lot_name"=>$data['lotName']))
		->result_array();	
	}

	public function ApproveAll($data)
	{
		$upDate['is_approved']='Yes';
		$upDate['reason']='Accepted';
		$upDate['edited_by']=$data['edited_by'];
		$this->db->where(array('is_approved'=> NULL,'userid'=>$data['userid']));
        $this->db->update('ufoms',$upDate); 
	}

	public function ApproveSngl($data)
	{
		$upDate['is_approved']='Yes';
		$upDate['edited_by']=$data['edited_by'];
		$upDate['reason']='Accepted';
		$this->db->where(array('formid'=>$data['formid'])); 
        $this->db->update('ufoms',$upDate); 
	}

	function timeCatList()
	{
		return $this->db->select('*')->get('timecatagory')->result_array();
	}

	public function fromsReport()//shashi
	{ //give lot details to show it on lotdetails page
		return $this->db->select('COUNT(form.form_name) AS form_count,lot.lot_id,lot.lot_name, lot.created_date,formtypes.fromtype,lot.userid,profiles.username')
			->join('form','lot.lot_id = form.lot_id')
			->join('formtypes','lot.formtypeid = formtypes.formtypeid')
			->join('profiles','lot.userid = profiles.userid')
			->group_by('form.lot_id')
			->get_where('lot',array('profiles.system_type' =>1))->result_array();
			

	}

	public function getLotList() //shashi
	{ //get lot name with its id
		return $this->db->select('lot.lot_id,lot.lot_name,COUNT(form_id) as ct')
		->join('form','lot.lot_id = form.lot_id')
		->group_by('form.lot_id')
		->get('lot')->result_array();
	}

	public function getCandiadteList() //shashi
	{ //list of all candidate
		return $this->db->select('userid,fname,lname,username,email,sign_up_date,is_active,system_isactive')->get_where('profiles',array("userlevel"=>2,'profiles.system_type' =>1))
		
		->result_array();	
	}

	public function getSystemActiveCandiadteList() //shashi
	{ //list of all candidate
		return $this->db->select('userid,fname,lname,username,email,sign_up_date,is_active,system_isactive')->get_where('profiles',array("userlevel"=>2,'profiles.system_type' =>1,"profiles.system_isactive"=>1))
		
		->result_array();	
	}

	public function changeUserActiveState($data)//shashi
	{ //change user activate state
		$UserId=$data['userid'];
		$this->db->where('userid',$UserId); 
        $this->db->update('profiles',$data); 
	}

	public function createOrDisableSubscription($data)//shashi
	{
		$is_subscribed=$this->CheckUserSubscription($data['userid']);
		if(!empty($is_subscribed))
		{//checkstatus
			$this->db->where('sub_id',$is_subscribed[0]['sub_id']); 
	        $this->db->update('subscription',$data); 
		}
		if(empty($is_subscribed)){
			//create the subscription with active subscription mode
			unset($data['is_subscribed']);
			$data['from_date']=date('Y-m-d');
			$data['to_date']=date('Y-m-d', strtotime("+30 days"));
			$data['is_subscribed']=1;
			$this->db->insert('subscription',$data);
		}
	}
	public function SibscribedCandidateList()//shashi
	{ //all subscribed candidate list from subscription table
		$today=date('Y-m-d');
 		return $this->db->select('userid')
 		->get_where('subscription',array("from_date <=" => $today,"to_date >="=>$today,"is_subscribed"=>1))
 		->result_array();
	}

	public function PastSibscribedCandidateList()//shashi
	{ //all subscribed candidate list from subscription table
		$today=date('Y-m-d');
 		return $this->db->select('userid')
 		->get_where('subscription',array("from_date <" => $today,"to_date <"=>$today))
 		->result_array();
	}


	public function CheckUserSubscription($userid)//shashi
	{ 
		$today=date('Y-m-d');
 		return $this->db->select('*')
 		->get_where('subscription',array("from_date <=" => $today,"userid"=>$userid,
 			"to_date >="=>$today))
 		->result_array();
	}

	public function PastCheckUserSubscription($userid)//shashi
	{ 
		$today=date('Y-m-d');
 		return $this->db->select('*')
 		->get_where('subscription',array("from_date <" => $today,"userid"=>$userid,
 			"to_date <"=>$today))
 		->result_array();
	}


	public function getFormsCountOfUser($userid) //shashi
	{ // get subscription details and find forms by lot for user
		if(is_array($userid) && !empty($userid))
		{
			foreach ($userid as $key => $value) {
				$subDetails=$this->CheckUserSubscription($value);
				if (!empty($subDetails) && @$subDetails[0]['is_subscribed']==1) {
					$subDetails=$subDetails[0];
					$input['userid']=$value;
					$input['from_date']=$subDetails['from_date'];
					$input['to_date']=$subDetails['to_date'];
					$data['lotAssigned']=$subDetails['lotassigned'];
					$data['formsDoneByUser']=$this->getFormsCountByLotOfUser($input);
					$returnData[$value]=$data;
				}
			}
			return $returnData;
		}else
		{
			$subDetails=$this->CheckUserSubscription($userid);
			if (!empty($subDetails) && @$subDetails[0]['is_subscribed']==1) {
				$subDetails=$subDetails[0];
				$input['userid']=$userid;
				$input['from_date']=$subDetails['from_date'];
				$input['to_date']=$subDetails['to_date'];
				$data['lotAssigned']=$subDetails['lotassigned'];
				$data['formsDoneByUser']=$this->getFormsCountByLotOfUser($input);
				return $data;
			}
		}

	}

	public function getFormsCountByLotOfUser($data) //shashi
	{ //forms count by lot of user
		return $this->db->select('COUNT(ufoms.ufid) AS form_count,form.lot_id')
			->join('form','ufoms.formid = form.form_id')
			->group_by('form.lot_id')
 			->get_where('ufoms',array("ufoms.submitedate >=" => $data['from_date'],"ufoms.userid"=>$data['userid'],"ufoms.submitedate <="=>$data['to_date']))
 			->result_array();
	}

	public function assignLotToUser($data) //shashi
	{
		$userid=$data['userid'];
		$lotid=$data['lotid'];
		$subDetails=$this->CheckUserSubscription($userid);
		if (!empty($subDetails) && @$subDetails[0]['is_subscribed']==1) {
			$subDetails=$subDetails[0];
			$sub_id=$subDetails['sub_id'];
			$lotassigned=$subDetails['lotassigned'];
			if($lotassigned)
			{
				$input['lotassigned']=$lotassigned.",".$lotid;
			}else{
				$input['lotassigned']=$lotid;
			}
        	$this->db->where(array('sub_id' => $sub_id)); 
        	$this->db->update('subscription',$input); 
		}
	}

	public function userProfileDetails($UserId)
	{
		$data['profile']=$this->db->select('*')
 		->get_where('profiles',array("userid" => $UserId,'profiles.system_type' =>1))
 		->result_array();
 		$data['default_phone']=$this->db->select('*')
 		->get_where('contacts_phone',array("userid" => $UserId,"is_default"=>"yes"))
 		->result_array();
 		return $data;
	}

	function formNumbers($data)
	{
		foreach ($data as $subrow) {
		$subDetails=$this->CheckUserSubscription($subrow['userid']);
			if (!empty($subDetails) && @$subDetails[0]['is_subscribed']==1) 
			{
				$subDetails=$subDetails[0];
				$rc=$this->db->select('COUNT(ufoms.ufid) AS form_count')
				->group_by('ufoms.userid')
	 			->get_where('ufoms',array("ufoms.submitedate >=" => $subDetails['from_date'],"ufoms.userid"=>$subrow['userid'],"ufoms.submitedate <="=>$subDetails['to_date']))
	 			->result_array();
	 			if(!empty($rc))
	 			{
	 				$TotalForms[$subrow['userid']]=$rc[0]['form_count'];
	 			}

	 			$rc1=$this->db->select('COUNT(ufid) AS form_count')
				->group_by('ufoms.userid')
	 			->get_where('ufoms',array("submitedate >=" => $subDetails['from_date'],"userid"=>$subrow['userid'],"submitedate <="=>$subDetails['to_date'],'is_approved'=>NULL))
	 			->result_array();
	 			if(!empty($rc1))
	 			{
	 				$TotalRemaining[$subrow['userid']]=$rc1[0]['form_count'];
	 			}
			}
		}
		$datareturn['TotalRemaining']=$TotalRemaining;
		$datareturn['TotalForms']=$TotalForms;
		return $datareturn;//total count of forms
	}

	function pastformNumbers($data)
	{
		foreach ($data as $subrow) {
		$subDetails=$this->PastCheckUserSubscription($subrow['userid']);
			if (!empty($subDetails)) 
			{
				$subDetails=$subDetails[0];
				$rc=$this->db->select('COUNT(ufoms.ufid) AS form_count')
				->group_by('ufoms.userid')
	 			->get_where('ufoms',array("ufoms.submitedate >=" => $subDetails['from_date'],"ufoms.userid"=>$subrow['userid'],"ufoms.submitedate <="=>$subDetails['to_date']))
	 			->result_array();
	 			if(!empty($rc))
	 			{
	 				$TotalForms[$subrow['userid']]=$rc[0]['form_count'];
	 			}

	 			$rc1=$this->db->select('COUNT(ufid) AS form_count')
				->group_by('ufoms.userid')
	 			->get_where('ufoms',array("submitedate >=" => $subDetails['from_date'],"userid"=>$subrow['userid'],"submitedate <="=>$subDetails['to_date'],'is_approved'=>NULL))
	 			->result_array();
	 			if(!empty($rc1))
	 			{
	 				$TotalRemaining[$subrow['userid']]=$rc1[0]['form_count'];
	 			}
			}
		}
		$datareturn['TotalRemaining']=$TotalRemaining;
		$datareturn['TotalForms']=$TotalForms;
		return $datareturn;//total count of forms
	}

	public function userFormsList($UserId)
	{
		$subDetails=$this->CheckUserSubscription($UserId);
		if (!empty($subDetails) && @$subDetails[0]['is_subscribed']==1) 
		{
			$subDetails=$subDetails[0];
 			$rc=$this->db->select('ufoms.ufid,ufoms.formid,ufoms.submitedate,form.lot_id')
 			->join('form','ufoms.formid = form.form_id')
 			->get_where('ufoms',array("ufoms.submitedate >=" => $subDetails['from_date'],"ufoms.userid"=>$UserId,"ufoms.submitedate <="=>$subDetails['to_date'],'ufoms.is_approved'=>NULL))
 			->result_array();
 			return $rc;
		}
	}

	public function PastuserFormsList($UserId)
	{
		$subDetails=$this->PastCheckUserSubscription($UserId);
		if (!empty($subDetails)) 
		{
			$subDetails=$subDetails[0];
 			$rc=$this->db->select('ufoms.ufid,ufoms.formid,ufoms.submitedate,form.lot_id')
 			->join('form','ufoms.formid = form.form_id')
 			->get_where('ufoms',array("ufoms.submitedate >=" => $subDetails['from_date'],"ufoms.userid"=>$UserId,"ufoms.submitedate <="=>$subDetails['to_date'],'ufoms.is_approved'=>NULL))
 			->result_array();
 			return $rc;
		}
	}

	public function ufidDetails($ufid)
	{
		return $this->db->select('ufoms.*,form.*')
		->join('form','ufoms.formid = form.form_id')
		->get_where('ufoms',array("ufoms.ufid"=> $ufid))->result_array();
	}

	public function submitform($data)
	{
		if(isset($data['ufid']) && $data['ufid']!='')
		{
			if(isset($data['approve']))
			{
				unset($data['approve']);
				$data['is_approved']='Yes';
			}else{
				unset($data['reject']);
				$data['is_approved']='No';
			}
			$this->db->where('ufid',$data['ufid']); 
        	$this->db->update('ufoms',$data); 
		}
	}




/*copied from sparkinwords*/

		public function createLotAssignments($data)
		{
			$this->db->insert('lotassignment',$data); 
		}

		function deleteUser($data)
		{
			$this->db->delete('usertable', $data); 
			$this->db->where($data);
			$this->db->delete('useropportunity', $data); 
		}

//count(DISTINCT(QuestionId))

    }