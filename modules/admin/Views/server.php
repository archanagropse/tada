<?php
if($_POST['method'] == 'delete_country'){
    $id=$this->input->post('id');
    $updateArr=[
                'status'=>'0'
            ];
    $query=$this->Admin_model->updateCountry(['country_id'=>$id],$updateArr);
        if($query){
                 $error      = false;
                 $code       = 100;
                 $msg        = 'Country Deleted Successfully.';
                 $data       = array();
            }
            else{
                $error      = false;
                $code       = 101;
                $msg        = 'Error';
                $data       = array();
            }
            echo json_encode(array('error'=>$error,'error_code'=>$code,'message'=>$msg,'data'=>$data));
}

if($_POST['method'] == 'delete_level'){
    $id=$this->input->post('id');
    $updateArr=[
                'status'=>'0'
            ];
    $query=$this->Admin_model->updateLevel(['level_id'=>$id],$updateArr);
        if($query){
                 $error      = false;
                 $code       = 100;
                 $msg        = 'Level Deleted Successfully.';
                 $data       = array();
            }
            else{
                $error      = false;
                $code       = 101;
                $msg        = 'Error';
                $data       = array();
            }
            echo json_encode(array('error'=>$error,'error_code'=>$code,'message'=>$msg,'data'=>$data));
}

?>

