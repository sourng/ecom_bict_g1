<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
<<<<<<< HEAD
  function __construct() 
    { 
        parent::__construct();
=======
    
  function __construct() {
      parent::__construct();      
   
      // $this->load->database();
      //$this->perPage = 5;
     // $this->starOrder=4;

      // $this->load->model('Crud_model','m_crud',True);    

      date_default_timezone_set('Asia/Phnom_Penh');
>>>>>>> cbdf876c6443c4ebc97851d1b624462d92a353be

        $this->load->helper('form'); 
        $this->load->helper('url');
       $this->load->model('m_crud', '', true);  
    
    }
	public function index()
	{
<<<<<<< HEAD
		$this->load->view('home');
=======
    
		$this->load->view('home');
    // echo "Hello";
>>>>>>> cbdf876c6443c4ebc97851d1b624462d92a353be
		
	}
  public function rigister()
  {
    $this->load->view('includes/v_rigister');

  
  }

  public function testing(){
    echo "Testing";
  }

}

