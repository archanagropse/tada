<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Users Extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model(array('Admin_model'));
        $this->load->library('form_validation');
         if (!$this->session->userdata('admin_logged_in')) {
            redirect('Admin');
        }
        
    }

    public function index() {
       $admin_info=$this->session->userdata('admin_logged_in');
            $data['admin_info']=$admin_info;
            $data['user_list']=$this->Admin_model->getUser([]);
            $data['view_link']='../user/index';
            $this->load->view('layout/template',$data);
            
    }
      
     public function user_detail() {
         $id=$this->uri->segment(3);
            $admin_info=$this->session->userdata('admin_logged_in');
            $user=$this->Admin_model->getUser(['user_id'=>$id]);
            $data['user_info']=$user[0];
            $data['admin_info']=$admin_info;
            $data['user_list']=$this->Admin_model->getUser([]);
            $data['view_link']='../user/user_detail';
            $this->load->view('layout/template',$data);
            
    }
      
    public function ajax(){
   
    if($_POST['method']== 'checkStatus'){
        $id=$_POST['id'];
        $updateArray['status']=$_POST['status'];
        $data = $this->Admin_model->updateUser(['user_id'=>$id],$updateArray);
            if ($data) {
                $error = false;
                $code = 100;
                $msg = 'Update Successfully';
                $data = array();
            } else {
                $error = false;
                $code = 101;
                $msg = 'Error';
                $data = array();
            }
            echo json_encode(array('error' => $error, 'error_code' => $code, 'message' => $msg, 'data' => $data));
    }
    }
        
   
}
?>
