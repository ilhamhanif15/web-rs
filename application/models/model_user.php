<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_user extends CI_Model 
{
	private $created_at; 
	private $updated_at;
	private $table;

	function __construct()
    {
		parent::__construct();
        $this->created_at = date("Y-m-d H:i:s");
		$this->updated_at = $this->created_at;
		$this->table = 'user_admin';
    }

	public function insert($data)
	{
		$data2 = [
			'created_at'=>$this->created_at,
			'updated_at'=>$this->updated_at
		];
		$data = array_merge($data,$data2);

		if ($this->db->insert($this->table, $data))
		{
			$insert_id = $this->db->insert_id();
		}
		else
		{
			$insert_id = NULL;
		}
		return $insert_id;
	}

	public function get($dataCondition = NULL,$limit = NULL,$offset = NULL)
	{
		if($offset != NULL && $limit != NULL){
			$this->db->limit($limit,$offset);
		}
		else if($limit != NULL){
			$this->db->limit($limit);
		}

		if($dataCondition != NULL){
			$this->db->where($dataCondition);
		}
		$this->db->order_by('id', 'ASC');
		$res = $this->db->get($this->table);
		return $res;
	}

	public function update($dataCondition,$dataSet)
	{
		$this->db->where($dataCondition);
		if($this->db->update($this->table, $dataSet)){
			return true;
		}else{
			return false;
		}
	}
}