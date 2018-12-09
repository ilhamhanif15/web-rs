<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_registrasi extends CI_Model 
{
	private $created_at; 
	private $updated_at;
	private $table;

	function __construct()
    {
		parent::__construct();
        $this->created_at = date("Y-m-d H:i:s");
		$this->updated_at = $this->created_at;
		$this->table = 'registrasi';
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

}