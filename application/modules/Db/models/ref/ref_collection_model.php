<?php
class Ref_collection_model extends MY_Model{
	public $_table = 'ref_collection';
	public $primary_key = 'collection_id';
	public function __construct()
	{
		parent::__construct();
	}
}