
<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('include/v_head'); ?>
</head>

<body class="cnt-home">
    <?php $this->load->view('include/v_header'); ?>

    <div class="body-content outer-top-xs" id="top-banner-and-menu">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-3 sidebar">

                    <?php 
                      $this->load->view('include/v_categories');                     
                      $this->load->view('include/v_hot_deals');
                      $this->load->view('include/v_special_offer');
                      $this->load->view('include/v_products_tag');
                      $this->load->view('include/v_special_deals');
                      $this->load->view('include/v_newsletter');
                      $this->load->view('include/v_members');
                   ?>

                    <div class="home-banner"> <img src="assets/images/banners/LHS-banner.jpg" alt="Image"> </div>

                </div>

                <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">


                    <?php 
                      $this->load->view('include/v_banner_slide'); 
                      $this->load->view('include/v_products_new'); 
                      $this->load->view('include/v_2banner'); 
                      $this->load->view('include/v_banner');                  
            $this->load->view('include/v_banner_category');
                  $this->load->view('include/v_products_filter');
                  $this->load->view('include/v_products');         
           
                     
                    ?>


                </div>

            </div>
            <!-- /.row -->
             <?php  $this->load->view('include/v_brands_carousel'); ?>
          </div>
          <!-- /.container --> 
        </div>
        <!-- /#top-banner-and-menu --> 
          
          <?php $this->load->view('include/v_footer'); ?>
</body>
</html>
