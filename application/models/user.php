<?php

/* 
 * Good Parts Engineered by Samurai.
 * Bad Parts Autogenerated by IDE
 * .
 */

class User extends CI_Model{
    function login($username,$password){
        $this -> db -> select('u_id,u_name,password,user_type,rf_id');
        $this->db->from('tblUsers');
        $this->db->where('u_name',$username);
        $this->db->where('password',  md5($password));
        $this->db->limit(1);
        
        $query = $this->db->get();
        
        if($query->num_rows()==1){
            return $query->result();
        }  else {
            return false;
        }
    }
}

