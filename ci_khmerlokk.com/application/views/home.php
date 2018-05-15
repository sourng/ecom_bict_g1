
<!DOCTYPE html>
<html lang="en">
<head>
<!-- Meta -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="description" content="">
<meta name="author" content="">
<meta name="keywords" content="MediaCenter, Template, eCommerce">
<meta name="robots" content="all">
<title>Shopping</title>

<!-- Bootstrap Core CSS -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">

<!-- Customizable CSS -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/main.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/blue.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl.carousel.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl.transitions.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/animate.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/rateit.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-select.min.css">

<!-- Icons/Glyphs -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.css">

<!-- Fonts -->
<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
</head>
<body class="cnt-home">
<!-- ============================================== HEADER ============================================== -->
<header class="header-style-1"> 
  
  <!-- ============================================== TOP MENU ============================================== -->
  <div class="top-bar animate-dropdown">
    <div class="container">
      <div class="header-top-inner">
        <div class="cnt-account">
          <ul class="list-unstyled">
            <li><a href="#"><i class="icon fa fa-user"></i>My Account</a></li>
            <li><a href="#"><i class="icon fa fa-heart"></i>Wishlist</a></li>
            <li><a href="#"><i class="icon fa fa-shopping-cart"></i>My Cart</a></li>
            <li><a href="#"><i class="icon fa fa-check"></i>Checkout</a></li>
            <li><a href="#"><i class="icon fa fa-lock"></i>Login</a></li>
          </ul>
        </div>
        <!-- /.cnt-account -->
        
        <div class="cnt-block">
          <ul class="list-unstyled list-inline">
            <li class="dropdown dropdown-small"> <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"><span class="value">KM </span><b class="caret"></b></a>
              <ul class="dropdown-menu">                
                <li><a href="#">KM</a></li>
                <li><a href="#">USD</a></li>
              </ul>
            </li>
            <li class="dropdown dropdown-small"> <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"><span class="value">English </span><b class="caret"></b></a>
              <ul class="dropdown-menu">
              	<li><a href="#">Khmer</a></li>
                <li><a href="#">English</a></li>              
              </ul>
            </li>
          </ul>
          <!-- /.list-unstyled --> 
        </div>
        <!-- /.cnt-cart -->
        <div class="clearfix"></div>
      </div>
      <!-- /.header-top-inner --> 
    </div>
    <!-- /.container --> 
  </div>
  <!-- /.header-top --> 
  <!-- ============================================== TOP MENU : END ============================================== -->
  <div class="main-header">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-4 logo-holder">       
          <div class="logo"> 
            <a href="<?php echo site_url();?>/home"> <img src="<?php echo base_url();?>assets/images/logo3DKH.png" alt="logo"> </a> 
          </div>
          <!-- /.logo --> 
        </div>
        <!-- /.logo-holder -->
        
        <div class="col-xs-12 col-sm-12 col-md-6 top-search-holder"> 
          <div class="search-area">
            <form>
              <div class="control-group">
                <ul class="categories-filter animate-dropdown">
                  <li class="dropdown"> <a class="dropdown-toggle"  data-toggle="dropdown" href="category.html">Categories <b class="caret"></b></a>
                    <ul class="dropdown-menu" role="menu" >
                      <li class="menu-header">Computer</li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Clothing</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Electronics</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Shoes</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Watches</a></li>
                    </ul>
                  </li>
                </ul>
                <input class="search-field" placeholder="Search here..." />
                <a class="search-button" href="#" ></a> </div>
            </form>
          </div>
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
			 <div class="side-menu animate-dropdown outer-bottom-xs">
                        <div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Categories</div>
                        <nav class="yamm megamenu-horizontal">
                            <ul class="nav">
                                <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-shopping-bag" aria-hidden="true"></i>Clothing</a>
                                    <ul class="dropdown-menu mega-menu">
                                        <li class="yamm-content">
                                            <div class="row">
                                                <div class="col-sm-12 col-md-3">
                                                    <ul class="links list-unstyled">
                                                        <li><a href="#">Dresses</a></li>
                                                        <li><a href="#">Shoes </a></li>
                                                        <li><a href="#">Jackets</a></li>
                                                        <li><a href="#">Sunglasses</a></li>
                                                        <li><a href="#">Sport Wear</a></li>
                                                        <li><a href="#">Blazers</a></li>
                                                        <li><a href="#">Shirts</a></li>
                                                        <li><a href="#">Shorts</a></li>
                                                    </ul>
                                                </div>
                                                <!-- /.col -->
                                                <div class="col-sm-12 col-md-3">
                                                    <ul class="links list-unstyled">
                                                        <li><a href="#">Handbags</a></li>
                                                        <li><a href="#">Jwellery</a></li>
                                                        <li><a href="#">Swimwear </a></li>
                                                        <li><a href="#">Tops</a></li>
                                                        <li><a href="#">Flats</a></li>
                                                        <li><a href="#">Shoes</a></li>
                                                        <li><a href="#">Winter Wear</a></li>
                                                        <li><a href="#">Night Suits</a></li>
                                                    </ul>
                                                </div>
                                                <!-- /.col -->
                                                <div class="col-sm-12 col-md-3">
                                                    <ul class="links list-unstyled">
                                                        <li><a href="#">Toys &amp; Games</a></li>
                                                        <li><a href="#">Jeans</a></li>
                                                        <li><a href="#">Shirts</a></li>
                                                        <li><a href="#">Shoes</a></li>
                                                        <li><a href="#">School Bags</a></li>
                                                        <li><a href="#">Lunch Box</a></li>
                                                        <li><a href="#">Footwear</a></li>
                                                        <li><a href="#">Wipes</a></li>
                                                    </ul>
                                                </div>
                                                <!-- /.col -->
                                                <div class="col-sm-12 col-md-3">
                                                    <ul class="links list-unstyled">
                                                        <li><a href="#">Sandals </a></li>
                                                        <li><a href="#">Shorts</a></li>
                                                        <li><a href="#">Dresses</a></li>
                                                        <li><a href="#">Jwellery</a></li>
                                                        <li><a href="#">Bags</a></li>
                                                        <li><a href="#">Night Dress</a></li>
                                                        <li><a href="#">Swim Wear</a></li>
                                                        <li><a href="#">Toys</a></li>
                                                    </ul>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.row -->
                                        </li>
                                        <!-- /.yamm-content -->
                                    </ul>
                                    <!-- /.dropdown-menu -->
                                </li>
                                <!-- /.menu-item -->

                                <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-laptop" aria-hidden="true"></i>Electronics</a>
                                </li>
                                <!-- /.menu-item -->

                                <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-paw" aria-hidden="true"></i>Shoes</a>
                                   
                                </li>
                                <!-- /.menu-item -->

                                <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-clock-o"></i>Watches</a>
                                   
                                </li>
                                <!-- /.menu-item -->

                                <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-diamond"></i>Jewellery</a>
                                    
                                </li>
                                <!-- /.menu-item -->

                                <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-heartbeat"></i>Health and Beauty</a>
                                    
                                </li>
                                <!-- /.menu-item -->

                                <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-paper-plane"></i>Kids and Babies</a>
                                    <!-- /.dropdown-menu -->
                                </li>
                                <!-- /.menu-item -->

                                <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-futbol-o"></i>Sports</a>
                                   
                                </li>
                                <!-- /.menu-item -->

                                <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-envira"></i>Home and Garden</a>
                                    <!-- /.dropdown-menu -->
                                </li>
                                <!-- /.menu-item -->

                            </ul>
                            <!-- /.nav -->
                        </nav>
                        <!-- /.megamenu-horizontal -->
                    </div>
                    <?php
                      $this->load->view('includes/v_hot_deals');
                      $this->load->view('includes/v_products_tag');
                      $this->load->view('includes/v_special_deals');
                      $this->load->view('includes/v_newsletter.php');
                      $this->load->view('includes/v_members.php');

                      
                    ?>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
			 <?php
           $this->load->view('includes/v_banner_slide.php');
           $this->load->view('includes/v_products_new.php');
           $this->load->view('includes/v_banner.php');
           $this->load->view('includes/v_banner2.php');
           $this->load->view('includes/v_banner_category.php');
           $this->load->view('includes/v_products_filter.php');
           $this->load->view('includes/v_products.php');


           ?>
                    
                     
		</div>
	</div>
</div>

</div>

<?php

$this->load->view('includes/v_brands_carousel');
$this->load->view('includes/v_footer');
?>




<!-- JavaScripts placed at the end of the document so the pages load faster --> 
<script src="<?php echo base_url();?>assets/js/jquery-1.11.1.min.js"></script> 
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script> 
<script src="<?php echo base_url();?>assets/js/bootstrap-hover-dropdown.min.js"></script> 
<script src="<?php echo base_url();?>assets/js/owl.carousel.min.js"></script> 
<script src="<?php echo base_url();?>assets/js/echo.min.js"></script> 
<script src="<?php echo base_url();?>assets/js/jquery.easing-1.3.min.js"></script> 
<script src="<?php echo base_url();?>assets/js/bootstrap-slider.min.js"></script> 
<script src="<?php echo base_url();?>assets/js/jquery.rateit.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url();?>assets/js/lightbox.min.js"></script> 
<script src="<?php echo base_url();?>assets/js/bootstrap-select.min.js"></script> 
<script src="<?php echo base_url();?>assets/js/wow.min.js"></script> 
<script src="<?php echo base_url();?>assets/js/scripts.js"></script>
</body>
</html>