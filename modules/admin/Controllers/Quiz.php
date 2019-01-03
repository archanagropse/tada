<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Quiz Extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model(array('Quiz_model', 'Admin_model'));
        $this->load->library('form_validation');
        if (!$this->session->userdata('admin_logged_in')) {
            redirect('Admin');
        }
    }

    public function index() {
        $admin_info = $this->session->userdata('admin_logged_in');
        $levels = $this->Admin_model->getlevel(['status' => '1']);
        $countries = $this->Admin_model->getCountry(['status' => '1']);

        if (isset($_POST['searchBtn'])) {
            $level = $this->input->post('level');
        $country = $this->input->post('country');
        if (empty($level) && empty($country)) {
            $this->session->set_flashdata('response', '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Atleast one parameter required</div>');
            redirect('Admin/question-list');
        } else {
            if (!empty($level) && !empty($country)) {
                $condition = [
                    'level_id' => $level,
                    'country_id' => $country,
                   
                ];
                $questionlist = $this->Quiz_model->getQuiz($condition);
            } else {
                if (!empty($level)) {
                    $condition = [
                        'level_id' => $level,
                        
                    ];
                    $questionlist = $this->Quiz_model->getQuiz($condition);
                } else {
                    $condition = [
                        'country_id' => $country,
                       
                    ];
                    $questionlist = $this->Quiz_model->getQuiz($condition);
                }
            }
        }
        }
        else {
            $questionlist = $this->Quiz_model->getQuiz([]);
        }

        $data['admin_info'] = $admin_info;
        $data['level_list'] = $levels;
        $data['country_list'] = $countries;
        $data['questions'] = $questionlist;
        $data['view_link'] = '../quiz/index';
        $this->load->view('layout/template', $data);
    }

    public function add_question() {
        $admin_info = $this->session->userdata('admin_logged_in');
        $levels = $this->Admin_model->getlevel(['status' => '1']);
        $countries = $this->Admin_model->getCountry(['status' => '1']);
        $this->form_validation->set_error_delimiters('<p style="color:#a94442;">', '</p>');
        $this->form_validation->set_rules('level', 'Level', 'required');
        $this->form_validation->set_rules('country', 'Country', 'required');
        $this->form_validation->set_rules('question', 'Question', 'required');
        $this->form_validation->set_rules('correct_answer', 'Level', 'required');

        if ($this->form_validation->run() == False) {
            $data['admin_info'] = $admin_info;
            $data['level_list'] = $levels;
            $data['country_list'] = $countries;
            $data['view_link'] = '../quiz/add_question';
            $this->load->view('layout/template', $data);
        } else {

            $insertArr = [
                'level_id' => $this->input->post('level'),
                'country_id' => $this->input->post('country'),
                'type' => $this->input->post('type'),
                'question' => $this->input->post('question'),
                'answer' => $this->input->post('correct_answer'),
                'created_at' => date('Y-m-d h:i:s'),
                'status' => '1'
            ];

            if ($this->input->post('type') == '1') {
                $option = $this->input->post('option');
                $insertArr['option_1'] = $option[0];
                $insertArr['option_2'] = $option[1];
                $insertArr['option_3'] = $option[2];
                $insertArr['option_4'] = $option[3];
            } else {
                $images = $_FILES['file-upload'];
                $length = count($images['name']);
                $k = 1;
                for ($i = 0; $i < $length; $i++) {
                    $extArr = explode('/', $images['type'][$i]);
                    $ext = $extArr[1];

                    $uploadPath = 'uploads/option/';
                    $uploadFile = 'Option' . $k . '_' . time() . '.' . $ext;

                    move_uploaded_file($images['tmp_name'][$i], $uploadPath . $uploadFile);
                    $insertArr['option_' . $k] = base_url() . $uploadPath . $uploadFile;
                    $k++;
                }
            }

            $query = $this->Quiz_model->addQuestion($insertArr);
            if ($query) {
                $this->session->set_flashdata('response', '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Question Added successfully</div>');
                redirect('Admin/question-list');
            } else {
                $this->session->set_flashdata('response', '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Error while adding Question</div>');
                redirect('Admin/question-list');
            }
        }
    }

    public function edit_question() {
        $id = $this->uri->segment(3);

        $admin_info = $this->session->userdata('admin_logged_in');
        $quiz = $this->Quiz_model->getQuiz(['id' => $id]);


        $this->form_validation->set_error_delimiters('<p style="color:#a94442;">', '</p>');
        $this->form_validation->set_rules('level', 'Level', 'required');
        $this->form_validation->set_rules('country', 'Country', 'required');
        $this->form_validation->set_rules('question', 'Question', 'required');
        $this->form_validation->set_rules('correct_answer', 'Level', 'required');

        if ($this->form_validation->run() == False) {
            $data['quiz'] = $quiz[0];
            $data['admin_info'] = $admin_info;
            $data['level_list'] = $this->Admin_model->getlevel(['status' => '1']);
            $data['country_list'] = $this->Admin_model->getCountry(['status' => '1']);
            $data['view_link'] = '../quiz/edit_question';
            $this->load->view('layout/template', $data);
        } else {

            $updateArr = [
                'level_id' => $this->input->post('level'),
                'country_id' => $this->input->post('country'),
                'modified_at' => date('Y-m-d h:i:s'),
                'question' => $this->input->post('question'),
                'answer' => $this->input->post('correct_answer'),
            ];

            if ($this->input->post('type') == '1') {
                $option = $this->input->post('option');
                $updateArr['option_1'] = $option[0];
                $updateArr['option_2'] = $option[1];
                $updateArr['option_3'] = $option[2];
                $updateArr['option_4'] = $option[3];
            } else {
                $images = $_FILES['file-upload'];
                $length = count($images['name']);
                $k = 1;
                for ($i = 0; $i < $length; $i++) {
                    if (!empty($images['name'][$i])) {
                        $extArr = explode('/', $images['type'][$i]);
                        $ext = $extArr[1];

                        $uploadPath = 'uploads/option/';
                        $uploadFile = 'Option' . $k . '_' . time() . '.' . $ext;

                        move_uploaded_file($images['tmp_name'][$i], $uploadPath . $uploadFile);
                        $updateArr['option_' . $k] = base_url() . $uploadPath . $uploadFile;
                    }
                    $k++;
                }
            }
            //print_r($updateArr);
            $query = $this->Quiz_model->updateQuestion(['id' => $id], $updateArr);
            if ($query) {
                $this->session->set_flashdata('response', '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Question updated successfully</div>');
                redirect('Admin/question-list');
            } else {
                $this->session->set_flashdata('response', '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Error while updating Question</div>');
                redirect('Admin/question-list');
            }
        }
    }

    public function question_detail() {
        $id = $this->uri->segment(3);
        $admin_info = $this->session->userdata('admin_logged_in');
        $data['admin_info'] = $admin_info;
        $quiz = $this->Quiz_model->getQuiz(['id' => $id]);
        $data['quiz'] = $quiz[0];
        $data['view_link'] = '../quiz/question_detail';
        $this->load->view('layout/template', $data);
    }

    public function change_status() {
        $id=$_POST['id'];
        $updateArray['status']=$_POST['status'];
        $query = $this->Quiz_model->updateQuestion(['id' => $id], $updateArray);
            if ($query) {
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

?>
