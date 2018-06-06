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
	
     $data=array();
     //echo json_encode($result);
      $SQL="SELECT * FROM tbl_categories";

      $data['cats']=$this->m_crud->get_by_sql($SQL);
  
		$this->load->view('home',$data);

  }

  public function rigister(){
  
    $this->load->view('includes/v_rigister');

  }
  public function test(){
    echo "hello";
  }


}

