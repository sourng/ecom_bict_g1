
<!DOCTYPE html>
<html lang="en">
  <?php
    $this->load->view('includes/v_header');
  ?>
<body class="cnt-home">
<!-- ============================================== HEADER ============================================== -->
<header class="header-style-1"> 
  
  <!-- ============================================== TOP MENU ============================================== -->
  <?php
    $this->load->view('includes/v_nav_top');
  ?>
  <!-- /.header-top --> 
  <!-- ============================================== TOP MENU : END ============================================== -->
  <div class="main-header">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-4 logo-holder">       
          <div class="logo"> 
 <a href="<?php echo site_url();?>"> <img src="<?php echo base_url();?>assets/images/logo3DKH.png" alt="logo"> </a> 

            
          </div>
          <!-- /.logo --> 
        </div>
        <!-- /.logo-holder -->
        
        <div class="col-xs-12 col-sm-12 col-md-6 top-search-holder"> 
           <?php
              $this->load->view('includes/v_search');
            ?>
          <!-- /.search-area --> 
         </div>
        <!-- /.top-search-holder -->
        
        <div class="col-xs-12 col-sm-12 col-md-2 animate-dropdown top-cart-row">          
          <div class="dropdown dropdown-cart"> <a href="#" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
            <div class="items-cart-inner">
              <div class="basket"> <i class="glyphicon glyphicon-shopping-cart"></i> </div>
              <div class="basket-item-count"><span class="count">2</span></div>
              <div class="total-price-basket"> <span class="lbl">cart -</span> <span class="total-price"> <span class="sign">$</span><span class="value">600.00</span> </span> </div>
            </div>
            </a>
            <ul class="dropdown-menu">
              <li>
                <div class="cart-item product-summary">
                  <div class="row">
                    <div class="col-xs-4">
                      <div class="image"> <a href="detail.html"><img src="<?php echo base_url();?>assets/images/cart.jpg" alt=""></a> </div>
                    </div>
                    <div class="col-xs-7">
                      <h3 class="name"><a href="index.php?page-detail">Simple Product</a></h3>
                      <div class="price">$600.00</div>
                    </div>
                    <div class="col-xs-1 action"> <a href="#"><i class="fa fa-trash"></i></a> </div>
                  </div>
                </div>
                <!-- /.cart-item -->
                <div class="clearfix"></div>
                <hr>
                <div class="clearfix cart-total">
                  <div class="pull-right"> <span class="text">Sub Total :</span><span class='price'>$600.00</span> </div>
                  <div class="clearfix"></div>
                  <a href="checkout.html" class="btn btn-upper btn-primary btn-block m-t-20">Checkout</a> </div>
                <!-- /.cart-total--> 
                
              </li>
            </ul>
            <!-- /.dropdown-menu--> 
          </div>
          <!-- /.dropdown-cart --> 
         </div>

        <!-- /.top-cart-row --> 
      </div>
      <!-- /.row -->       
    </div>
    <!-- /.container --> 
    
  </div>
  <!-- /.main-header --> 
  
  <!-- ============================================== NAVBAR ============================================== -->
  <div class="header-nav animate-dropdown">
    <div class="container">
      <div class="yamm navbar navbar-default" role="navigation">
        <div class="navbar-header">
       <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> 
       <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        <div class="nav-bg-class">
          <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
            <div class="nav-outer">
              <ul class="nav navbar-nav">
                <li class="active dropdown"> <a href="">Home</a> </li>
                <li class="dropdown"> <a href="" >Clothing</a> </li> 
                <li class="dropdown hidden-sm"> <a href="">Watches</a> </li>
                <li class="dropdown"> <a href="">Jewellery</a> </li>
                <li class="dropdown"> <a href="">Shoes</a> </li>
                <li class="dropdown"> <a href="">Kids & Girls</a> </li>
               
                <li class="dropdown  navbar-right special-menu"> <a href="#">Todays offer</a> </li>
              </ul>
              <!-- /.navbar-nav -->
              <div class="clearfix"></div>
            </div>
            <!-- /.nav-outer --> 
          </div>
          <!-- /.navbar-collapse --> 
          
        </div>
        <!-- /.nav-bg-class --> 
      </div>
      <!-- /.navbar-default --> 
    </div>
    <!-- /.container-class --> 
    
  </div>
  <!-- /.header-nav --> 

  <!-- ============================================== NAVBAR : END ============================================== --> 
  
</header>

<div class="body-content outer-top-xs" id="top-banner-and-menu">
<div class="container"> 
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-3 sidebar">
                    <?php
                    
                      $this->load->view('includes/v_categories');
                      $this->load->view('includes/v_hot_deals');
                      $this->load->view('includes/v_products_tag');
                      $this->load->view('includes/v_special_deals');
                      $this->load->view('includes/v_newsletter');
                      $this->load->view('includes/v_members');
                    ?>
                      <div class="home-banner"> <img src="assets/images/banners/LHS-banner.jpg" alt="Image"> </div>
                      <div class="home-banner"> <img src="assets/images/banners/LHS-banner.jpg" alt="Image"> </div>


                      
                    
		</div>
		<div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
			 <?php
           $this->load->view('includes/v_banner_slide');
           $this->load->view('includes/v_products_new');
           $this->load->view('includes/v_banner');
           $this->load->view('includes/v_banner2.php');
           $this->load->view('includes/v_banner_category');
           $this->load->view('includes/v_products_filter');
           $this->load->view('includes/v_products');


           ?>
                    
                     
		</div>
	</div>
</div>

</div>

<?php

$this->load->view('includes/v_brands_carousel');
$this->load->view('includes/v_footer');

?>




</body>
</html>