<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class E404 extends CI_Controller {
	function __construct() 
    { 
        parent::__construct();
        $this->load->helper('form'); 
        $this->load->helper('url');
        $this->load->model('m_crud', '', true);	
 		
    }

	public function index(){
				
		
			$this->load->view('404');
		
		}/*End index*/	


}/*End Class Home*/
?>