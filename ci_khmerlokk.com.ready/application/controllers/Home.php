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
<<<<<<< HEAD:ci_khmerlokk.com/application/controllers/Home.php
  public function rigister(){
  
    $this->load->view('includes/v_rigister');

  }
  public function test(){
    echo "hello";
  }
=======
>>>>>>> 849daa503fe5ddfb6f5874bb4c54ecee75e34f5b:ci_khmerlokk.com.ready/application/controllers/Home.php

}

