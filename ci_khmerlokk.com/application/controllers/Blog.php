<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Blog extends CI_Controller {
	function __construct() 
    { 
        parent::__construct();
        $this->load->helper('form'); 
        $this->load->helper('url');
        $this->load->model('m_crud', '', true);	
 		
    }

	public function index(){
				
		
			$this->load->view('blog');
		
		}/*End index*/	

	public function detail(){
				
		
			$this->load->view('blog_detail');
		
		}/*End index*/		


}/*End Class Home*/
?>