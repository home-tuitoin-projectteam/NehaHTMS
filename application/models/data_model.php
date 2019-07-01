<?php  
class data_model extends CI_Model {  
function __construct()  
{  
    parent::__construct();  
    $this->load->database();  
}  
  
public function islogin($data){  
    $query=$this->db->get_where('tbluser',array('uname'=>$data['username'],'upwd'=>$data['password']));  
    return $query->num_rows();}
}