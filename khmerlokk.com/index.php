<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once 'include/v_head.php'; ?>
</head>

<body class="cnt-home">
    <?php include_once 'include/v_header.php'; ?>

    <div class="body-content outer-top-xs" id="top-banner-and-menu">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-3 sidebar">

                    <?php 
                      include_once 'include/v_categories.php'; 
                      include_once 'include/v_hot_deals.php';
                      include_once 'include/v_special_offer.php';
                      include_once 'include/v_products_tag.php';
                      include_once 'include/v_special_deals.php';
                      include_once 'include/v_newsletter.php';
                      include_once 'include/v_members.php';
                   ?>

                    <div class="home-banner"> <img src="assets/images/banners/LHS-banner.jpg" alt="Image"> </div>

                </div>

                <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">


                    <?php 
                      include_once 'include/v_banner_slide.php'; 
                      include_once 'include/v_products_new.php'; 
                      include_once 'include/v_2banner.php'; 
                      //include_once 'include/v_products_featured.php'; 
                      include_once 'include/v_banner.php';
                      //include_once 'include/v_best_seller.php';
                      //include_once 'include/v_blog_latest.php';
                      //include_once 'include/v_new_arriavls.php';
                  	  include_once 'include/v_banner_category.php';
		              include_once 'include/v_products_filter.php';
		              include_once 'include/v_products.php';
                    ?>


                </div>

            </div>
            <!-- /.row -->
             <?php  include_once 'include/v_brands_carousel.php'; ?>
          </div>
          <!-- /.container --> 
        </div>
        <!-- /#top-banner-and-menu --> 
          
          <?php include_once 'include/v_footer.php'; ?>
</body>
</html>