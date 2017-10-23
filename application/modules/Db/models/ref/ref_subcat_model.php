<?php
class Ref_subcat_model extends MY_Model{
	public $_table = 'ref_subcat_to_cat';
	public $primary_key = 'sub_cat_id';
	public $belongs_to = array('cat' => array( 'model' => 'Db/ref/ref_catagory_model','primary_key' => 'cat_id' ) );
	public function __construct()
	{
		parent::__construct();
	}
}