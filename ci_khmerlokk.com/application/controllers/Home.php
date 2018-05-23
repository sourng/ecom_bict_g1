<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
	function __construct() 
    { 
        parent::__construct();

        $this->load->helper('form'); 
        $this->load->helper('url');
       $this->load->model('m_crud', '', true);	
 		
    }
	public function index(){
	
		$this->load->view('home');

  }

  public function rigister(){
  
    $this->load->view('includes/v_rigister');

  }
  public function test(){
    echo "hello";
  }


}

