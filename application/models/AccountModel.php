<?php

class AccountModel extends CI_model
{
	public function addAkun(){
		//use query builder to insert $data to table "account"
		$data = [
			"username" => $this->input->post('username', true),
			"password" => $this->input->post('password', true),
			"fullname" => $this->input->post('fullname', true),
			"email" => $this->input->post('email', true),
		];
		$this->db->insert('account',$data);
	}

	public function getUserByUsername($uname)
	{
		//get data account based on username 
		$query = $this->db->query("SELECT username,fullname,email FROM account WHERE username = '".$uname."'");
		return $query->result_array()[0];
	}

	public function getUserByLogin($uname,$pass)
	{
		$query = $this->db->query("SELECT username,fullname,email FROM account WHERE username = '".$uname."' AND password = '".$pass."'");
		return $query->result_array();
	}
}