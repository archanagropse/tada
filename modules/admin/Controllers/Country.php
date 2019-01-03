<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Country Extends CI_Controller {

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
         $this->form_validation->set_rules('country_name','Country Name','required');
         
         if($this->form_validation->run()== False){
            $data['admin_info']=$admin_info;
            $data['country_list']=$this->Admin_model->getCountry(['status'=>'1']);
            $data['view_link']='../country/index';
            $this->load->view('layout/template',$data);
         }
    else{
        $insertArr=[
            'country_name'=>$this->input->post('country_name'),
            'created_at'=>date('Y-m-d h:i:s'),
            'status'=>'1'
        ];
        
        $query=$this->Admin_model->addCountry($insertArr);
        if($query){
             $this->session->set_flashdata('response', '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Country Added successfully</div>');
             redirect('Admin/country');
        }
        else{
             $this->session->set_flashdata('response', '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Error while adding Country</div>');
             redirect('Admin/country');
        }
    }
            
    }
    
    public function delete_country(){
         $id=$this->uri->segment(3);
        $updateArr=[
                
                'status'=>'0'
            ];
            
            $query=$this->Admin_model->updateCountry(['country_id'=>$id],$updateArr);
            if($query){
                $this->session->set_flashdata('response', '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Country Deleted successfully</div>');
                    redirect('Admin/country');
            }
            else{
                $this->session->set_flashdata('response', '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Error while deleting Country</div>');
                    redirect('Admin/country');
            }
        
    }
    
}
?>
