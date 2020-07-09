<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
session_start();

class Access extends CI_Controller {

    public function __construct() {
        parent::__construct();

//        $user_id = $this->session->userdata('id');
//        $user_name = $this->session->userdata('user_name');
//        $email = $this->session->userdata('email');
//        $access_level = $this->session->userdata('access_level');
//
//        if ($user_id == NULL && $email == NULL && $email == '' && $user_name == NULL && $access_level == 0 && $access_level == '' && $access_level == NULL) {
//            redirect('welcome', 'refresh');
//        }
        $this->method_call = &get_instance();
        
    }

    public function index() {
        $data['title'] = 'Dashboard';
//        $user_id = $this->session->userdata('id');
//        $data['user_name'] = $this->session->userdata('user_name');
//        $data['access_level'] = $this->session->userdata('access_level');

        $data['maincontent'] = $this->load->view('admin/login', $data);
    }

    public function login(){
        $data['title'] = 'Login';

        $email_address = $this->input->post('email_address');
        $password = $this->input->post('password');

        if($email_address == 'nipunsarker56@gmail.com' && $password=='1212'){

            redirect('access/home');

        }else{
            $this->load->view('admin/404', $data);
        }

    }

    public function home(){
        $data['title'] = 'Home';

        $data['maincontent'] = $this->load->view('admin/dashboard', $data, true);
        $this->load->view('admin/master', $data);
    }

    public function posts(){
        $data['title'] = 'Posts';

        $data['posts'] = $this->access_model->getPosts();

        $data['maincontent'] = $this->load->view('admin/posts', $data, true);
        $this->load->view('admin/master', $data);
    }

    public function newPost(){
        $data['title'] = 'New Post';

        $data['category'] = $this->access_model->selectTableData('*', 'tb_category', ' AND status=1');

        $data['maincontent'] = $this->load->view('admin/new_post', $data, true);
        $this->load->view('admin/master', $data);
    }

    public function getSubCategory(){
        $category_id = $this->input->post('category_id');

        $res = $this->access_model->selectTableData('*', 'tb_sub_category', " AND parent_cat_id=$category_id AND status=1");

        $select_option = '<option value="">Select Sub-Category</option>';

        if(sizeof($res) > 0){

            foreach ($res as $v){
                $select_option .= '<option value="'.$v['id'].'">'.$v['name'].'</option>';
            }

        }

        echo $select_option;
    }

    public function saveNewPost(){
        $datex = new DateTime('now', new DateTimeZone('Asia/Dhaka'));

        $date_time=$datex->format('Y-m-d H:i:s');
        $date=$datex->format('Y-m-d');

        $data['title'] = $this->input->post('title');
        $data['description'] = $this->input->post('description');
        $data['source_name'] = $this->input->post('source_name');
        $data['detail_url'] = $this->input->post('detail_url');
        $data['meta'] = $this->input->post('meta');
        $data['image'] = $this->input->post('image');
        $data['url'] = $this->input->post('url');
        $data['player_type'] = $this->input->post('player_type');
        $data['file_type'] =  $this->input->post('file_type');
        $data['download_url'] = $this->input->post('download_url');
        $data['cat_id'] = $this->input->post('category');
        $data['sub_cat_id'] = $this->input->post('sub_category');
        $data['upload_date'] = $date;
        $data['status'] = 1;

        $this->access_model->insertingData('tb_posts', $data);

        $data['message'] = 'Successfully Saved!';
        $this->session->set_userdata($data);
        redirect('access/newPost');
    }

    public function offlineMovies(){
        $data['title'] = 'Offline Movies';

        $data['res'] = $this->access_model->selectTableData('*', 'tb_posts', " AND cat_id=1 AND status=1");

        $data['maincontent'] = $this->load->view('admin/offline_movies', $data, true);
        $this->load->view('admin/master', $data);

    }

    public function logout() {
        $user_name = $this->session->unset_userdata('user_name');
        $access_level = $this->session->unset_userdata('access_level');

        session_destroy();
        $data['message'] = 'Successfully Logged out!';
        $this->session->set_userdata($data);
        redirect('welcome');
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */