<?php


if (!defined('BASEPATH'))
  exit('No direct script access allowed');
	
	class Database extends CI_Model{ 
	
	   function __construct()
    {
        parent::__construct();
		$this->load->database();
    }
	public function Insert_Data($data){
	 
	 $this->db->insert('orders',$data);
	
	}
	

	
	public function Order_view(){
			
			/* $this->db->select('title, content, date'); */

			$query = $this->db->get('orders');
			return $query->result();
	}
	public function Order_delete($data){
		$id = $data['Data_ID'];
		$this->db->delete('orders', array('UiD' => $id));

	}
	
}
?>