<?php defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH."third_party/MX/Controller.php";
/*
//using other controller methods
//$data['message1']=modules::load('User/User/')->playSessionValue('unset','message1');

*/
class Del extends MX_Controller
{
	public function __construct() 
	{
		parent::__construct();
		$this->load->model('Db/ref/ref_collection_model','ref_coll');
		$this->load->model('Db/ref/ref_brand_model','ref_brand');
		$this->load->model('Db/ref/ref_catagory_model','ref_cat');
		$this->load->model('Db/ref/ref_subcat_model','ref_subcat');
		$this->load->model('Db/ref/ref_season_model','ref_season');
		$this->load->model('Db/ref/ref_pages_model','ref_pages');

		$this->load->model('Db/lnk/lnk_product_to_subcat_model','lnk_produt_to_subcat');


		$this->load->model('Db/tbl/tbl_stores_model','store');
		$this->load->model('Db/tbl/tbl_page_sections_model','tbl_pages');
		$this->load->model('Db/tbl/tbl_trunkshows_model','tbl_trunkshows');
		$this->load->model('Db/tbl/tbl_jobs_model','tbl_jobs');
		$this->load->model('Db/tbl/tbl_product_model','tbl_product');
		
		$auth_user = $this->session->get_userdata('userdata');
		if(@$auth_user['User_Id']){
			/*$this->userId=$auth_user['User_Id'];
			$this->userTypeId=$auth_user['User_Type_Id'];
			$this->userEmailId=$auth_user['Email_Address'];
			$this->userName=$auth_user['Username'];*/
		}
	}
	public function mprint($variable)
	{
		echo '<PRE>'.htmlspecialchars(print_r($variable, true)).'</PRE><HR>';
		flush();
		die;
	}

	public function playSessionValue($method,$varibleName,$message="")
	{
		//$data['message1']=$this->playSessionValue("unset","message1");
		if($method=="set")
		{
			$input[$varibleName]=$message;
			$this->session->set_userdata($input);
			return true;
		}elseif($method=="unset" || $method=="get" )
		{
			$varibleName1 = $this->session->userdata($varibleName);
			if(@$varibleName1)
			{
				if($method=="unset")
				{
					$this->session->unset_userdata($varibleName);
				}
				return $varibleName1;
			}else
			{
				$varibleName1="";
				return $varibleName1;
			}
		}
	}

	public function adminCheckLogin(){
		$UserId=@$this->userId;

		if(isset($this->userId) && ($this->userTypeId==1))
		{
			return true;
		}else
		{
			redirect('Login');
		}
	}

	public function userCheckLogin(){
		if(isset($this->userId) && (@$this->userTypeId==4 || @$this->userTypeId==3))
		{
			return true;
		}else
		{
			redirect('Login');
		}
	}

	public function updateLog($artcid,$msg){
		// updated by divya 18 july
		$aArt=str_pad($artcid, 6, '0', STR_PAD_LEFT); 
		$artName ="AW".$aArt;

		$newfile = "assets/txt_log/".$artName;
		if (file_exists($newfile)) 
		{
          	$fh = fopen($newfile, 'a');
	        $today=date("Y-m-d H:i:s");	
	     	$content=strtoupper("[".date("F j, Y g:i a", strtotime(date("Y-m-d H:i:s")))."]");
	     	$content.=" ".$msg. " \n"; 
	        fwrite($fh, $content);
	        fclose($fh);
        }
	}


				

	public function checkFilesInFolder1($filepath)
	{//get the list of files in the directory
	 	$filelist=array();
		if(file_exists($filepath))
		{
			if ($handle = opendir($filepath.'/')) {
	    		while (false !== ($entry = readdir($handle))) {
		        	if ($entry != "." && $entry != "..") {
		        	$ib[]=$entry;
		        	}
	    		}
	    		closedir($handle);
			}
			if (isset($ib)) {
				$filelist=@$ib;
			}
		}//end of if file_exist
		return $filelist;
	}

}