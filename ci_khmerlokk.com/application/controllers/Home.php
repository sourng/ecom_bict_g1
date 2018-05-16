<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller {
    
  function __construct() {
      parent::__construct();      
      $this->load->helper('url');
      //$this->load->database();
      //$this->perPage = 5;
     // $this->starOrder=4;

      // $this->load->model('Crud_model','m_crud',True);    

      date_default_timezone_set('Asia/Phnom_Penh');

	}
	public function index()
	{
    
		$this->load->view('home');
		
	}
  public function rigister()
  {
    $this->load->view('includes/v_rigister');

  
  }

}

