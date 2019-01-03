<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Level Extends CI_Controller {

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
         $this->form_validation->set_error_delimiters('<p style="color:#a94442;">', '</p>');
         $this->form_validation->set_rules('level','Level','required');
         
         if($this->form_validation->run()== False){
            $data['admin_info']=$admin_info;
            $data['level_list']=$this->Admin_model->getlevel(['status'=>'1']);
            $data['view_link']='../level/index';
            $this->load->view('layout/template',$data);
         }
    else{
        $insertArr=[
            'level'=>$this->input->post('level'),
            'created_at'=>date('Y-m-d h:i:s'),
            'status'=>'1'
        ];
        
        $query=$this->Admin_model->addLevel($insertArr);
        if($query){
             $this->session->set_flashdata('response', '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Level Added successfully</div>');
             redirect('Admin/level');
        }
        else{
             $this->session->set_flashdata('response', '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Error while adding Level</div>');
             redirect('Admin/level');
        }
    }
            
    }
    
    public function delete_level(){
         $id=$this->uri->segment(3);
        $updateArr=[
                
                'status'=>'0'
            ];
            
            $query=$this->Admin_model->updateLevel(['level_id'=>$id],$updateArr);
            if($query){
                $this->session->set_flashdata('response', '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Level Deleted successfully</div>');
                    redirect('Admin/level');
            }
            else{
                $this->session->set_flashdata('response', '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Error while deleting Level</div>');
                    redirect('Admin/level');
            }
    }
    
}
?>