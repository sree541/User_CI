<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

    public $USER_ID;
    public $USER_NAME;
    public $USER_TYPE;
    public $USER_ACCESSID;
            
    function __construct() {
        parent::__construct();
               
        $this->load->library('session');
        $this->load->helper('url');
        $this->data = array();
        $this->data['resouce_path'] = base_url()."resources/";
        $this->data['BASE_URL'] = base_url();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('validation_model');

        
        $current_class = $this->router->fetch_class();
        $current_method = $this->router->fetch_method();
        
        if($current_class!='login' && !$this->session->userdata('logged_in')){
            redirect('login');
        }elseif($current_class!='login' && $this->session->userdata('logged_in')){
            
            $this->setLoggedUserdata();
            $this->setMenu();
            $this->addRestriction();
            $this->setHeaderData();

        }
            
        
        
        
    }
    
    function setLoggedUserdata(){
        $logged_user_details = $this->session->userdata('logged_user_details');
        $this->USER_ID = $logged_user_details['user_id'];
        $this->USER_NAME = $logged_user_details['user_name'];
        $this->USER_TYPE = $logged_user_details['user_type'];
        $this->USER_ACCESSID = $logged_user_details['access_id'];
    }
    
    function setMenu(){
                   
            if($this->USER_TYPE=='upa_admin'){
                $this->data['navigate'] = base_url().'navigate/house/'.$this->USER_ACCESSID;
            }elseif($this->USER_TYPE=='dist_admin'){
                $this->data['navigate'] = base_url().'navigate/upasabha/'.$this->USER_ACCESSID;
            }
    }
    
    function setHeaderData(){
        $this->data['user_name']  = $this->USER_NAME;
        $this->data['user_type']  = $this->USER_TYPE;
    }
            
    function addRestriction(){
        
        $current_class = $this->router->fetch_class();
        $current_method = $this->router->fetch_method();
        //print_r($this->uri->segment(3));die();
        if($this->USER_TYPE=='upa_admin'){
            if($current_class=='navigate'){
                if($current_method !='house'){
                    redirect(base_url().'navigate/house/'.$this->USER_ACCESSID);
                }elseif($current_method =='house' && $this->uri->segment(3)!=$this->USER_ACCESSID){
                    redirect(base_url().'navigate/house/'.$this->USER_ACCESSID);
                }
            }elseif($current_class=='add_details'){
                if($current_method !='new_house'){
                    redirect(base_url().'add_details/new_house');
                }
            }
        }elseif($this->USER_TYPE=='dist_admin'){
//            if($current_class=='navigate'){
//                if($current_method !='house'){
//                    redirect(base_url().'navigate/house/'.$this->USER_ACCESSID);
//                }
//            }elseif($current_class=='add_details'){
//                if($current_method !='index'){
//                    redirect(base_url().'add_details');
//                }
//            }
        }
    }

}