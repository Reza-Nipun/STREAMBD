<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->method_call = &get_instance();

        $this->load->helper('cookie');

        $cookie = array(
            'name'   => 'STREAMBD',
            'value'  => 'STREAMBD is using your cookie for your leisure time entertainment!',
            'expire' => '3600',
            'domain' => 'streambd.co',
            'path'   => '/',
            'secure' => TRUE
        );

        $this->input->set_cookie($cookie);

        $this->load->library("pagination");
    }

//    public function index(){
//        $data['title']='STREAMBD';
//
//        $fields = " * ";
//
//        $data['page_description'] = $this->welcome_model->selectTableData($fields, 'tb_page_description', ' AND category_id=0');
//        $data['category'] = $this->welcome_model->selectTableData($fields, 'tb_category', ' AND status=1');
//
//        $data['movies'] = $this->welcome_model->selectTableData(" * ", 'tb_posts', " AND cat_id=1 AND status=1 ORDER BY id DESC LIMIT 20");
//        $data['channels'] = $this->welcome_model->selectTableData(" * ", 'tb_posts', " AND cat_id=2 AND status=1 ORDER BY RAND() LIMIT 20");
//        $data['radios'] = $this->welcome_model->selectTableData(" * ", 'tb_posts', " AND cat_id=3 AND status=1 ORDER BY RAND() LIMIT 20");
//
//        $data['maincontent'] = $this->load->view('home', $data, true);
//        $this->load->view('master', $data);
//    }

    public function index(){
        $data['title']='STREAMBD';
        $page_description = $this->welcome_model->selectTableData(' * ', 'tb_page_description', ' AND category_id=0');
        $data['page_description'] = $page_description[0]['page_description'];
        
        $data['category'] = $this->welcome_model->selectTableData(' * ', 'tb_category', ' AND status=1');

        // init params

        $limit_per_page = 10;
        $start_index = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $total_records = $this->welcome_model->get_total();

        if ($total_records > 0)
        {
            // get current page records
            $data["results"] = $this->welcome_model->get_current_page_records($limit_per_page, $start_index);

//            $config['base_url'] = base_url() . 'welcome/index';
//            $config['total_rows'] = $total_records;
//            $config['per_page'] = $limit_per_page;
//            $config["uri_segment"] = 3;


            // Config setup
            $config['base_url'] = base_url().'welcome/index';
            $config['total_rows'] = $total_records;
            $config['per_page'] = $limit_per_page;
            $config['num_links'] = $total_records;
            $config['use_page_numbers'] = TRUE;
            $config['full_tag_open'] = '<ul class="pagination">';
            $config['full_tag_close'] = '</ul>';
            $config['prev_link'] = '&laquo;';
            $config['prev_tag_open'] = '<li>';
            $config['prev_tag_close'] = '</li>';
            $config['next_tag_open'] = '<li>';
            $config['next_tag_close'] = '</li>';
            $config['cur_tag_open'] = '<li class="active"><a href="#">';
            $config['cur_tag_close'] = '</a></li>';
            $config['num_tag_open'] = '<li>';
            $config['num_tag_close'] = '</li>';

            $config['next_link'] = '&raquo;';


            $this->pagination->initialize($config);

            // build paging links
            $data["links"] = $this->pagination->create_links();
        }

        $data['maincontent'] = $this->load->view('home', $data, true);
        $this->load->view('master', $data);
    }

    public function newUserRequest(){
        $data['email'] = $this->input->post('email');
        $data['title'] = $this->input->post('title');
        $data['description'] = $this->input->post('description');

        $this->welcome_model->insertingData('tb_user_request', $data);

        $data['message'] = 'Dear Visitor, We have got your new request. Hope you will get it soon. Thank you.';
        $this->session->set_userdata($data);
        redirect('welcome/newRequestPage');
    }

    public function categoryWisePage($cat_id, $cat_name){

        $cat_name_title = str_replace('%20', ' ', $cat_name);

        $data['title']=$cat_name_title;

        $data['cat_id']=$cat_id;

        $data['category'] = $this->welcome_model->selectTableData(" * ", 'tb_category', " AND status=1");

        if($cat_id == 1){

            $page_description = $this->welcome_model->selectTableData(" * ", 'tb_page_description', " AND category_id=$cat_id");
            $data['page_description'] = $page_description[0]['page_description'];

            $data['movies'] = $this->welcome_model->selectTableData(" * ", 'tb_posts', " AND cat_id=1 AND status=1 ORDER BY id DESC");
            $data['sub_category'] = $this->getSubCategories($cat_id);

            $data['maincontent'] = $this->load->view('movie_page', $data, true);
            $this->load->view('master', $data);
        }

        if($cat_id == 2){
            $page_description = $this->welcome_model->selectTableData(" * ", 'tb_page_description', " AND category_id=$cat_id");
            $data['page_description'] = $page_description[0]['page_description'];

            $data['channels'] = $this->welcome_model->selectTableData(" * ", 'tb_posts', " AND cat_id=2 AND status=1");
            $data['sub_category'] = $this->getSubCategories($cat_id);

            $data['maincontent'] = $this->load->view('channel_page', $data, true);
            $this->load->view('master', $data);
        }

        if($cat_id == 3){
            $page_description = $this->welcome_model->selectTableData(" * ", 'tb_page_description', " AND category_id=$cat_id");
            $data['page_description'] = $page_description[0]['page_description'];

            $data['radios'] = $this->welcome_model->selectTableData(" * ", 'tb_posts', " AND cat_id=3 AND status=1");
            $data['sub_category'] = $this->getSubCategories($cat_id);

            $data['maincontent'] = $this->load->view('radio_page', $data, true);
            $this->load->view('master', $data);
        }

        if($cat_id == 4){
            $data['maincontent'] = $this->load->view('newspaper_page', $data, true);
            $this->load->view('master', $data);
        }

        if($cat_id == 5){
            $data['page_description'] = $this->welcome_model->selectTableData(" * ", 'tb_page_description', " AND category_id=$cat_id");

            $data['maincontent'] = $this->load->view('sports_page', $data, true);
            $this->load->view('master', $data);
        }
    }

    public function playVideoNewById($id, $cat_id, $sub_cat_id){
        $data['category'] = $this->welcome_model->selectTableData(" * ", 'tb_category', " AND status=1");

        $data['res_info'] = $this->welcome_model->selectTableData(" * ", 'tb_posts', " AND id=$id");

        $data['title'] = $data['res_info'][0]['title'];
        
        $data['keywords'] = $data['res_info'][0]['meta'];
        $data['page_description'] = $data['res_info'][0]['description'];
        
        $data['cat_id'] = $cat_id;
        $data['sub_cat_id'] = $sub_cat_id;

        if($cat_id == 1){
//            $data['page_description'] = $this->welcome_model->selectTableData(" * ", 'tb_page_description', " AND category_id=$cat_id");

            $data['movies'] = $this->welcome_model->selectTableData(" * ", 'tb_posts', " AND cat_id=$cat_id AND sub_cat_id=$sub_cat_id AND status=1 ORDER BY id DESC");
            $data['sub_category'] = $this->getSubCategories($cat_id);


            $data['maincontent'] = $this->load->view('movie_page', $data, true);
            $this->load->view('master', $data);
        }

        if($cat_id == 2){
//            $data['page_description'] = $this->welcome_model->selectTableData(" * ", 'tb_page_description', " AND category_id=$cat_id");

            $data['channels'] = $this->welcome_model->selectTableData(" * ", 'tb_posts', " AND cat_id=$cat_id AND sub_cat_id=$sub_cat_id AND status=1");
            $data['sub_category'] = $this->getSubCategories($cat_id);


            $data['maincontent'] = $this->load->view('channel_page', $data, true);
            $this->load->view('master', $data);
        }

        if($cat_id == 3){
//            $data['page_description'] = $this->welcome_model->selectTableData(" * ", 'tb_page_description', " AND category_id=$cat_id");

            $data['radios'] = $this->welcome_model->selectTableData(" * ", 'tb_posts', " AND cat_id=$cat_id AND sub_cat_id=$sub_cat_id AND status=1");
            $data['sub_category'] = $this->getSubCategories($cat_id);


            $data['maincontent'] = $this->load->view('radio_page', $data, true);
            $this->load->view('master', $data);
        }

    }

    public function subCategoryWisePage($cat_id, $sub_cat_id, $cat_name){

        $cat_name_title = str_replace('%20', ' ', $cat_name);

        $data['title']=$cat_name_title;

        $data['cat_id']=$cat_id;
        $data['sub_cat_id']=$sub_cat_id;

        $data['category'] = $this->welcome_model->selectTableData(" * ", 'tb_category', " AND status=1");

        if($cat_id == 1){
            $page_description = $this->welcome_model->selectTableData(" * ", 'tb_page_description', " AND category_id=$cat_id");
            $data['page_description'] = $page_description[0]['page_description'];
            
            $data['movies'] = $this->welcome_model->selectTableData(" * ", 'tb_posts', " AND cat_id=1 AND sub_cat_id=$sub_cat_id AND status=1 ORDER BY id DESC");
            $data['sub_category'] = $this->getSubCategories($cat_id);

            $data['maincontent'] = $this->load->view('movie_page', $data, true);
            $this->load->view('master', $data);
        }

        if($cat_id == 2){
            $page_description = $this->welcome_model->selectTableData(" * ", 'tb_page_description', " AND category_id=$cat_id");
            $data['page_description'] = $page_description[0]['page_description'];

            $data['channels'] = $this->welcome_model->selectTableData(" * ", 'tb_posts', " AND cat_id=2 AND sub_cat_id=$sub_cat_id AND status=1");
            $data['sub_category'] = $this->getSubCategories($cat_id);

            $data['maincontent'] = $this->load->view('channel_page', $data, true);
            $this->load->view('master', $data);
        }

        if($cat_id == 3){
            $page_description = $this->welcome_model->selectTableData(" * ", 'tb_page_description', " AND category_id=$cat_id");
            $data['page_description'] = $page_description[0]['page_description'];

            $data['radios'] = $this->welcome_model->selectTableData(" * ", 'tb_posts', " AND cat_id=3 AND sub_cat_id=$sub_cat_id AND status=1");
            $data['sub_category'] = $this->getSubCategories($cat_id);

            $data['maincontent'] = $this->load->view('radio_page', $data, true);
            $this->load->view('master', $data);
        }

    }

    public function newspaperPage(){
        $data['title'] = 'Newspaper';
        $data['category'] = $this->welcome_model->selectTableData(" * ", 'tb_category', " AND status=1");

        $data['page_description'] = $this->welcome_model->selectTableData(' * ', 'tb_page_description', ' AND category_id=0');

        // init params

        $limit_per_page = 10;
        $start_index = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $total_records = $this->welcome_model->get_total(4);

        if ($total_records > 0)
        {
            // get current page records
            $data["results"] = $this->welcome_model->get_current_page_records($limit_per_page, $start_index, 4);

//            $config['base_url'] = base_url() . 'welcome/index';
//            $config['total_rows'] = $total_records;
//            $config['per_page'] = $limit_per_page;
//            $config["uri_segment"] = 3;


            // Config setup
            $config['base_url'] = base_url().'welcome/newspaperPage';
            $config['total_rows'] = $total_records;
            $config['per_page'] = $limit_per_page;
            $config['num_links'] = $total_records;
            $config['use_page_numbers'] = TRUE;
            $config['full_tag_open'] = '<ul class="pagination">';
            $config['full_tag_close'] = '</ul>';
            $config['prev_link'] = '&laquo;';
            $config['prev_tag_open'] = '<li>';
            $config['prev_tag_close'] = '</li>';
            $config['next_tag_open'] = '<li>';
            $config['next_tag_close'] = '</li>';
            $config['cur_tag_open'] = '<li class="active"><a href="#">';
            $config['cur_tag_close'] = '</a></li>';
            $config['num_tag_open'] = '<li>';
            $config['num_tag_close'] = '</li>';

            $config['next_link'] = '&raquo;';


            $this->pagination->initialize($config);

            // build paging links
            $data["links"] = $this->pagination->create_links();
        }

        $data['maincontent'] = $this->load->view('newspaper_page', $data, true);
        $this->load->view('master', $data);
    }

    public function newspaperPageById($id){
        $data['title'] = 'Newspaper';

        $data['category'] = $this->welcome_model->selectTableData(" * ", 'tb_category', " AND status=1");

        $data['res_info'] = $this->welcome_model->selectTableData(" * ", 'tb_posts', " AND id=$id");

        $data['keywords'] = $data['res_info'][0]['meta'];

        $data['page_description'] = $data['res_info'][0]['description'];

        $data['maincontent'] = $this->load->view('newspaper_detail', $data, true);
        $this->load->view('master', $data);
    }

    public function aboutPage(){
        $data['title']="About";

        $fields = " * ";
        $where = "";

        $data['page_description'] = $this->welcome_model->selectTableData(" * ", 'tb_page_description', " AND category_id=1000");

        $data['category'] = $this->welcome_model->selectTableData($fields, 'tb_category', ' AND status=1');

        $data['maincontent'] = $this->load->view('about', $data, true);
        $this->load->view('master', $data);
    }

    public function termsConditions(){
        $data['title']="Terms & Conditions";

        $fields = " * ";
        $where = "";

        $data['page_description'] = $this->welcome_model->selectTableData(" * ", 'tb_page_description', " AND category_id=3000");

        $data['category'] = $this->welcome_model->selectTableData($fields, 'tb_category', ' AND status=1');

        $data['maincontent'] = $this->load->view('terms_conditions', $data, true);
        $this->load->view('master', $data);
    }

    public function privacyPolicy(){
        $data['title']="Privacy Policy";

        $fields = " * ";
        $where = "";

        $data['page_description'] = $this->welcome_model->selectTableData(" * ", 'tb_page_description', " AND category_id=4000");

        $data['category'] = $this->welcome_model->selectTableData($fields, 'tb_category', ' AND status=1');

        $data['maincontent'] = $this->load->view('privacy_policy', $data, true);
        $this->load->view('master', $data);
    }

    public function contactUs(){
        $data['title']="Contact Us";

        $fields = " * ";
        $where = "";

        $data['page_description'] = $this->welcome_model->selectTableData(" * ", 'tb_page_description', " AND category_id=2000");

        $data['category'] = $this->welcome_model->selectTableData($fields, 'tb_category', ' AND status=1');

        $data['maincontent'] = $this->load->view('contact_us', $data, true);
        $this->load->view('master', $data);
    }

    public function sendContactUsMessage(){
        $data['email'] = $this->input->post('email');
        $data['title'] = $this->input->post('title');
        $data['description'] = $this->input->post('description');

        $this->welcome_model->insertingData('tb_contact_us_message', $data);

        $data['message'] = 'Dear Visitor, We have got your message. Hope we will get back to you soon. Thank you.';
        $this->session->set_userdata($data);
        redirect('welcome/contactUs');
    }

    public function newRequestPage(){
        $data['title']="New Request";

        $fields = " * ";
        $where = "";

        $data['category'] = $this->welcome_model->selectTableData($fields, 'tb_category', ' AND status=1');

        $data['maincontent'] = $this->load->view('request_page', $data, true);
        $this->load->view('master', $data);
    }

    public function playSingleChannel($id, $cat_id, $cat_name){
        $cat_name_title = str_replace('%20', ' ', $cat_name);

        $data['title']=$cat_name_title;

        $data['category'] = $this->welcome_model->selectTableData(" * ", 'tb_category', " AND status=1");

        if($cat_id == 1){

            $data['movies'] = $this->welcome_model->selectTableData(" * ", 'tb_posts', " AND id=$id AND status=1");
            $data['sub_category'] = $this->getSubCategories($cat_id);

            $data['maincontent'] = $this->load->view('movie_page', $data, true);
            $this->load->view('master', $data);
        }

        if($cat_id == 2){

            $data['channels'] = $this->welcome_model->selectTableData(" * ", 'tb_posts', " AND id=$id AND status=1");
            $data['sub_category'] = $this->getSubCategories($cat_id);

            $data['maincontent'] = $this->load->view('channel_page', $data, true);
            $this->load->view('master', $data);
        }

        if($cat_id == 3){

            $data['radios'] = $this->welcome_model->selectTableData(" * ", 'tb_posts', " AND id=$id AND status=1");
            $data['sub_category'] = $this->getSubCategories($cat_id);

            $data['maincontent'] = $this->load->view('radio_page', $data, true);
            $this->load->view('master', $data);
        }
    }

    public function getSubCategories($parent_cat_id){
        $fields = " * ";
        $where = "";

        if($parent_cat_id != ''){
            $where .= " AND parent_cat_id=$parent_cat_id";
        }

        return $this->welcome_model->selectTableData($fields, 'tb_sub_category', $where);
    }

    public function getMovies(){

        $channel_keyword = $this->input->post("channel_keyword");
        $sub_cats = $this->input->post("sub_categories");
        $cat_id = $this->input->post("cat_id");

        $sub_categories = implode(",", $sub_cats);

        $where = '';

        if($cat_id != ''){
            $where .= " AND cat_id = $cat_id";
        }

        if($sub_categories != ''){
            $where .= " AND sub_cat_id in ($sub_categories)";
        }

        if($channel_keyword != ''){
            $where .= " AND meta LIKE '%$channel_keyword%'";
        }

        $data['channels'] = $this->welcome_model->selectTableData("*", 'tb_posts', $where);

        echo $data['maincontent'] = $this->load->view('filter_channels', $data);
    }

    public function getChannels(){

        $channel_keyword = $this->input->post("channel_keyword");
        $sub_cats = $this->input->post("sub_categories");
        $cat_id = $this->input->post("cat_id");

        $sub_categories = implode(",", $sub_cats);

        $where = '';

        if($cat_id != ''){
            $where .= " AND cat_id = $cat_id";
        }

        if($sub_categories != ''){
            $where .= " AND sub_cat_id in ($sub_categories)";
        }

        if($channel_keyword != ''){
            $where .= " AND meta LIKE '%$channel_keyword%'";
        }

        $data['channels'] = $this->welcome_model->selectTableData("*", 'tb_posts', $where);

        echo $data['maincontent'] = $this->load->view('filter_channels', $data);
    }

    public function getRadios(){

        $channel_keyword = $this->input->post("channel_keyword");
        $sub_cats = $this->input->post("sub_categories");
        $cat_id = $this->input->post("cat_id");

        $sub_categories = implode(",", $sub_cats);

        $where = '';

        if($cat_id != ''){
            $where .= " AND cat_id = $cat_id";
        }

        if($sub_categories != ''){
            $where .= " AND sub_cat_id in ($sub_categories)";
        }

        if($channel_keyword != ''){
            $where .= " AND meta LIKE '%$channel_keyword%'";
        }

        $data['channels'] = $this->welcome_model->selectTableData("*", 'tb_posts', $where);

        echo $data['maincontent'] = $this->load->view('filter_channels', $data);
    }

//	public function login()
//	{
//
//		$data['email'] = $this->input->post('email');
//		$data['password'] = $this->input->post('password');
//
//		$result=$this->welcome_model->login_check($data);
//
//	       if($result)
//               {
//                   $data1['id']=$result->id;
//                   $data1['user_name']=$result->user_name;
//                   $data1['shop']=$result->shop;
//                   $data1['email']=$result->email;
//                   $data1['access_level']=$result->access_level; // 1=super_admin, 2=users
//                   $this->session->set_userdata($data1);
//
//                   redirect('access','refresh');
//               }
//               else{
//                   $data['exception']='Your User Name/Password is Invalid!';
//                   $this->session->set_userdata($data);
//
//                   redirect('welcome', 'refresh');
//               }
//	}
//
//    public function register()
//    {
//        $data['title']='Register';
//        $data['maincontent'] = $this->load->view('register');
//    }
//
//    public function registration(){
//        $datex = new DateTime(date('H:i:s'));
//        $datex->modify('+14500 seconds');
//        $date_time=$datex->format('Y-m-d H:i:s');
//        $date=$datex->format('Y-m-d');
//
//        $m=$datex->format('m');
//        $y=$datex->format('Y');
//
//        if ($m == 12){
//            $mon = 1;
//            $year = $y+1;
//        }else{
//            $mon = $m+1;
//            $year = $y;
//        }
//
//       $data['user_name'] = $this->input->post('user_name');
//       $data['shop'] = $this->input->post('shop');
//       $data['email'] = $this->input->post('email');
//       $data['user_password'] = $this->input->post('password');
//       $data['access_level'] = 2;
//       $data['status'] = 1;
//       $data['create_date'] = $date_time;
//       $data['valid_mon_till'] = $mon;
//       $data['valid_year_till'] = $year;
//       $data['per_month'] = 500;
//
//       $insert_id = $this->welcome_model->insertingData('tb_user', $data);
//       $user_id = $insert_id->id;
//
//
//        echo $user_id;
//
//    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */