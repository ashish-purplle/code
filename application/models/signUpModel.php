<?php
class signUpModel extends CI_Model{

public function save(){
	$data = array(
	'name' => $this->input->get('name'),
	'email' => $this->input->get('email'),
	'mobile' => $this->input->get('mobile'),
	'password' => $this->input->get('password')
	);
	
	 $this->db->insert('user',$data);
	 
	 return $this->db->insert_id();
}	
public function update(){
	$this->Name = $this->input->Get('name');
	$this->Email = $this->input->Get('email');
	$this->Mobile = $this->input->Get('mobile');
	$this->Password =$this->input->Get('password');
	$query = $this->db->update('purplle',$this);
}	
}
?>