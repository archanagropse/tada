<?php

class Admin_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function getUser($condition) {
        $query = $this->db->where($condition)
                ->get('td_users');
       
        return $query->result_array();
    }

    
  public function getLevel($condition){
       $query = $this->db->where($condition)
                ->get('td_level');
       
        return $query->result_array();
  }
  
  public function addLevel($insertArr){
       $query = $this->db->insert('td_level' , $insertArr);
       
        return $query;
  }
   public function updateLevel($condition,$updateArr){
       $query = $this->db->where($condition)
               ->update('td_level' , $updateArr);
       
        return $query;
  }
   public function getCountry($condition){
       $query = $this->db->where($condition)
                ->get('td_country');
       
        return $query->result_array();
  }
  
   public function addCountry($insertArr){
       $query = $this->db->insert('td_country' , $insertArr);
       
        return $query;
  }
  
  public function updateCountry($condition,$updateArr){
       $query = $this->db->where($condition)
               ->update('td_country' , $updateArr);
       
        return $query;
  }
  
  public function getRowData($condition,$table){
       $query = $this->db->where($condition)
                ->get($table);
       
        return $query->row_array();
  }
  
  public function getData($condition,$table, $limit ,$order){
      if($limit){
          $this->db->limit($limit);
      }
       $query = $this->db->where($condition)
                         ->order_by($order,'DESC')
                ->get($table);
       
        return $query->result_array();
  }
  
  public function updateData($condition,$table,$updateArr){
       $this->db->where($condition);
       $query = $this->db->update($table , $updateArr);
       return $query;
  

}

 public function addData($table,$insertArr){
       
       $query = $this->db->insert($table , $insertArr);
       return $query;
  

}

}


?>