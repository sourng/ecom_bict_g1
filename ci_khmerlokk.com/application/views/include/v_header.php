<header class="header-style-1"> 
   <?php include_once 'v_bar_top.php'; ?>
  <div class="main-header">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-3 logo-holder"> 
          
          <div class="logo"> <a href="<?php echo site_url() ?>home"> <img src="<?php echo base_url() ?>assets/images/logo3DKH.png" alt="logo"> </a> </div>
          <!-- /.logo --> 
          </div>
        <!-- /.logo-holder -->
        
        <div class="col-xs-12 col-sm-12 col-md-7 top-search-holder"> 
          <!-- /.contact-row --> 
          
          <?php include_once 'v_bar_search.php'; ?>
          <!-- /.search-area --> 
          </div>
        <!-- /.top-search-holder -->
        
        <div class="col-xs-12 col-sm-12 col-md-2 animate-dropdown top-cart-row"> 
          
          <?php include_once 'v_bar_cart.php'; ?>
         
          <!-- /.dropdown-cart --> 
          
        </div>
        <!-- /.top-cart-row --> 
      </div>
      <!-- /.row --> 
      
    </div>
    <!-- /.container --> 
    
  </div>
  <!-- /.main-header --> 
   
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
                                    <li class="active dropdown yamm-fw"> <a href="<?php echo site_url() ?>home">Home</a> </li>
                                    <li class="dropdown yamm mega-menu"> <a href="<?php echo site_url() ?>products/clothing">Clothing</a> </li>
                                    <li class="dropdown mega-menu"> <a href="<?php echo site_url() ?>products/electronics">Electronics</a></li>
                                    <li class="dropdown hidden-sm"> <a href="<?php echo site_url() ?>products/health_beauty">Health & Beauty </a> </li>                                    
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