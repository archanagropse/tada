<?php
class Quiz_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function getQuiz($condition) {
        $query = $this->db->where($condition)
                ->get('td_quiz');
       
        return $query->result_array();
    }
    
    public function addQuestion($insertArray)
       {
           $query = $this->db->insert('td_quiz',$insertArray);
           return $query;
       }

    public function updateQuestion($condition,$updateArray)
       {
           $query = $this->db->where($condition)
                   ->update('td_quiz',$updateArray);

           return $query;
       }

  

}

?>