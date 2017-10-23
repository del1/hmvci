<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends Del {

	public function __construct() 
	{
		parent::__construct();
	}

	public function index()
	{
		$data['page']='Dashboard';
		$view = 'Admin/Admin_home_view';
		echo Modules::run('Template/admin_template', $view, $data);	
	}




	public function show_stores_list($section='')
	{
		switch ($section) {
			case 'Events':
						$data['page']='Event And Trunk Shows';
						$data['next_action']='store_trunkshows_list';
						break;
			case 'Career':
						$data['page']='Career/Jobs';
						$data['next_action']='Store_jobs_list';
						break;
			default:
						$data['page']='Event And Trunk Shows';
						$data['next_action']='store_trunkshows_list';
						break;
		}
		$data['store_list']=$this->store->select('store_id,store_name')->get_many_by('is_active',true);
		$view = 'Admin/Admin_show_stores_list_for_action';
		echo Modules::run('Template/admin_template', $view, $data);	
	} 
	/*Store
	/*Store Methods*/

	public function stores_list()
	{
		$data['store_list']=$this->store->get_all();
		$data['page']='Store List';
		$view = 'Admin/stores/Admin_store_list_view';
		echo Modules::run('Template/admin_template', $view, $data);	
	}

	public function manage_store($store_id='')
	{
		$data['store_details']='';
		if($store_id)
		{
			$data['store_details']=$this->store->get($store_id);
		}
		$data['page']='Store List';
		$view = 'Admin/stores/Admin_manage_store_view';
		echo Modules::run('Template/admin_template', $view, $data);
	}

	public function changeStoreStatus()
	{
		$this->store->update($this->input->post('store_id',TRUE), array( 'is_active' => $this->input->post('is_active',TRUE) ));
	}

	public function delete_stores()
	{
		if(isset($_POST['store_id']) && isset($_POST['is_secure_request']) && $this->input->post('is_secure_request',TRUE)=='uKrt)6')
		{
			$this->store->delete($this->input->post('store_id',TRUE));
		}
	}

	public function add_update_store()
	{
		$posted_data=$this->security->xss_clean($this->input->post());
		$required_array = elements(array('store_name', 'email_id', 'city','state','pincode', 'contact_number','address','store_desc'), $posted_data);
		if(isset($posted_data['store_id']))
		{
			$this->store->update($posted_data['store_id'], $required_array);
		}else{
			$this->store->insert($required_array);
		}
		redirect('Admin/stores_list');
	}
	/*end of store pages*/




	/*About us
	/*About us Methods*/
	public function manage_about_us()
	{
		$data['page']='Manage About-us';
        $data['about_us']=$this->ref_pages->get_section_by_pageId(1);
		$view = 'Admin/admin_manage_about_us';
		echo Modules::run('Template/admin_template', $view, $data);	
	}

	public function update_about_us(){
		$posted_data=$this->security->xss_clean($this->input->post());
		$required_array = elements(array('About_us_Title', 'Section-1', 'Section-2','Quote'), $posted_data);
		$data['about_us']=$this->tbl_pages->update_about_us($required_array);
	}
	/*end of store pages*/




	/*Event and trunk shows
	/*Event and trunk shows Methods*/

	public function store_trunkshows_list($store_id)
	{
		$data['event_list']=$this->tbl_trunkshows->get_many_by('store_id',$store_id);
		$data['store_details']=$this->store->select('store_name')->get($store_id);
		$data['page']='Event And Trunk Shows';
		$view = 'Admin/trunkshows/Admin_storewise_trunkshows_list';
		echo Modules::run('Template/admin_template', $view, $data);	
	}

	public function changeEventStatus()
	{
		$this->tbl_trunkshows->update($this->input->post('event_id',TRUE), array( 'is_active' => $this->input->post('is_active',TRUE) ));
	}

	public function manage_event($event_id='')
	{
		$data['event_details']='';
		$data['store_list']=$this->store->select('store_id,store_name')->get_many_by('is_active',true);
		if($event_id)
		{
			$data['event_details']=$this->tbl_trunkshows->get($event_id);
		}
		$data['page']='Event And Trunk Shows';
		$view = 'Admin/trunkshows/Admin_manage_event_view';
		echo Modules::run('Template/admin_template', $view, $data);	
	}

	public function add_update_events()
	{
		$posted_data=$this->security->xss_clean($this->input->post());
		$required_array = elements(array('event_name', 'store_id', 'start_date','end_date','event_desc'), $posted_data);
		if(isset($posted_data['event_id']))
		{
			$this->tbl_trunkshows->update($posted_data['event_id'], $required_array);
		}else{
			$this->tbl_trunkshows->insert($required_array);
		}
		redirect('Admin/store_trunkshows_list/'.$posted_data['store_id']);
	}

	public function delete_events()
	{
		if(isset($_POST['event_id']) && isset($_POST['is_secure_request']) && $this->input->post('is_secure_request',TRUE)=='uKrt)6')
		{
			$this->tbl_trunkshows->delete($this->input->post('event_id',TRUE));
		}
	}
	/*end of event pages*/







	/*Career Pages
	/*Career pages*/
	public function store_jobs_list($store_id)
	{
		$data['jobs_list']=$this->tbl_jobs->get_many_by('store_id',$store_id);
		$data['store_details']=$this->store->select('store_name')->get($store_id);
		$data['page']='Jobs list';
		$view = 'Admin/careers/Admin_storewise_job_list';
		echo Modules::run('Template/admin_template', $view, $data);	
	}

	public function manage_job($job_id="")
	{
		$data['job_details']='';
		$data['store_list']=$this->store->select('store_id,store_name')->get_many_by('is_active',true);
		if($job_id)
		{
			$data['job_details']=$this->tbl_jobs->get($job_id);
		}
		$data['page']='Jobs list';
		$view = 'Admin/careers/Admin_manage_job_view';
		echo Modules::run('Template/admin_template', $view, $data);	
	}

	public function add_update_job()
	{
		$posted_data=$this->security->xss_clean($this->input->post());
		$required_array = elements(array('job_title','job_desc','job_responsibility', 'store_id', 'job_requirements','job_benifit'), $posted_data);
		if(isset($posted_data['job_id']))
		{
			$this->tbl_jobs->update($posted_data['job_id'], $required_array);
		}else{
			$this->tbl_jobs->insert($required_array);
		}
		redirect('Admin/Store_jobs_list/'.$posted_data['store_id']);
	}

	public function changeJobStatus()
	{
		$this->tbl_jobs->update($this->input->post('job_id',TRUE), array( 'is_active' => $this->input->post('is_active',TRUE) ));
	}

	public function delete_job()
	{
		if(isset($_POST['job_id']) && isset($_POST['is_secure_request']) && $this->input->post('is_secure_request',TRUE)=='uKrt)6')
		{
			$this->tbl_jobs->delete($this->input->post('job_id',TRUE));
		}
	}
	/*end of career pages*/

	public function changeAllStatus()
	{
		$model_name=$this->input->post('type',TRUE);
		$pk_id=$this->input->post('pk_id',TRUE);
		$status=$this->input->post('is_active',TRUE);
		$this->$model_name->update($pk_id, array( 'is_active' => $status));
	}


	/*
	/*Career Pages
	/*Career pages*/

	public function all_products()
	{
		$data['product_list']=$this->tbl_product->get_all_product();
		$data['page']='All Products';
		$view = 'Admin/collection/admin_all_product_list';
		echo Modules::run('Template/admin_template', $view, $data);	
	}


	public function manage_product($product_id='')
	{
		$data['product_details']='';
		if($product_id)
		{
			$data['product_details']=$this->tbl_product->get($product_id);
			$data['product_subcat_list']=$this->lnk_produt_to_subcat->get_many_by('product_id',$product_id);
		}
		$data['brands_list']=$this->ref_brand->select('brand_id,brand_name')->get_many_by('is_active',true);
		$data['catagory_list']=$this->ref_cat->select('cat_id,cat_name')->get_many_by('is_active',true);
		$data['sub_catlist']=$this->ref_subcat->select('sub_cat_id,sub_cat_name,cat_id')->get_many_by('is_active',true);
		$data['collection_list']=$this->ref_coll->select('collection_id,collection_name')->get_many_by('is_active',true);
		$data['season_list']=$this->ref_season->select('season_id,season')->get_many_by('is_active',true);
		$data['page']='All Products';
		$view = 'Admin/collection/admin_manage_product_view';
		echo Modules::run('Template/admin_template', $view, $data);	
	}

	public function add_update_product()
	{
		$posted_data=$this->security->xss_clean($this->input->post());
		$required_array = elements(array('product_name', 'collection_id', 'brand_id','season_id','product_desc'), $posted_data);
		
		

		if(isset($posted_data['product_id']))
		{
			$this->tbl_product->update($posted_data['product_id'], $required_array);
			$product_id=$posted_data['product_id'];
		}else{
			$this->tbl_product->insert($required_array);
			$product_id=$this->db->insert_id();
		}

		$subcat_array=$this->input->post('sub_cat_id');
				//array for delete update
		if(!empty($subcat_array)) //to avoid work later
		{
			foreach ($subcat_array as $key => $value) {
				$row['product_id']=$product_id;
				$row['sub_cat_id']=$value;
				$final_subcat_array[]=$row;
			}
		}
		$this->lnk_produt_to_subcat->delete_by(array('product_id'=>$product_id));
		if(isset($final_subcat_array))
		{
			$this->lnk_produt_to_subcat->insert_many($final_subcat_array);	
		}
		
		redirect($_SERVER['HTTP_REFERER']);
		//redirect('Admin/store_trunkshows_list/'.$posted_data['store_id']);
	}
	/*end of product page */






	public function collection_list()
	{
		$data['collection_list']=$this->ref_coll->get_all();
		$data['brands_list']=$this->ref_brand->get_all();
		$data['catagory_list']=$this->ref_cat->get_all();
		$data['season_list']=$this->ref_season->get_all();
		$data['page']='Collection List';
		$view = 'Admin/collection/admin_collection_list_view';
		echo Modules::run('Template/admin_template', $view, $data);	
	}
}
