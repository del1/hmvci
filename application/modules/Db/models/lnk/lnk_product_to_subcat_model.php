<?php
class Lnk_product_to_subcat_model extends MY_Model{
	public $_table = 'lnk_product_to_subcat';
	public $primary_key = 'pts_id';
	public function __construct()
	{
		parent::__construct();
	}
}