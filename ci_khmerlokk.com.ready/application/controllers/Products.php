<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Products extends CI_Controller {
	function __construct() 
    { 
        parent::__construct();
        $this->load->helper('form'); 
        $this->load->helper('url');
        $this->load->model('m_crud', '', true);	
 		
    }

	public function index(){
				
		
		$this->load->view('products');
		
		}/*End index*/	
	public function clothing(){
				
		
		$this->load->view('products');
		
		}/*End clothing*/	


	public function electronics(){
					
			
		$this->load->view('products');
			
		}/*End electronics*/

	public function health_beauty(){
					
			
		$this->load->view('products');
			
		}/*End health_beauty*/

	public function detail(){
						
				
			$this->load->view('products_detail');
				
		}/*End detail*/	


	/*=====Tob bar====*/

	public function wishlist(){				
		
			$this->load->view('wishlist');
		
		}/*End cart*/	

	public function compare(){				
		
			$this->load->view('compare');
		
		}/*End cart*/	

	public function cart(){
					
			$this->load->view('shopping_cart');
			
		}/*End cart*/	

	public function checkout(){
						
			$this->load->view('checkout');
				
		}/*End cart*/	

	/*=====End Tob bar====*/


}/*End Class Products*/
?>