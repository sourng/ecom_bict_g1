<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Account extends CI_Controller {
	function __construct() 
    { 
        parent::__construct();
        $this->load->helper('form'); 
        $this->load->helper('url');
        $this->load->model('m_crud', '', true);	
 		
    }

	public function index(){
				
		
			$this->load->view('account');
		
		}/*End index*/	


}/*End Class Home*/
?>