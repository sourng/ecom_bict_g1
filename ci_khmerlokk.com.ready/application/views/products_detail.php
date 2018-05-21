<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once 'include/v_head.php'; ?>
   
</head>
<body class="cnt-home">
    <?php 
    	include_once 'include/v_header.php'; 
    	include_once 'include/v_breadcrumb.php'; 
	?>

    <div class="body-content outer-top-xs">
        <div class='container'>
            <div class='row single-product'>
                <div class='col-md-3 sidebar'>
                    <div class="sidebar-module-container">
                        <div class="home-banner outer-top-n">
                            <img src="assets/images/banners/LHS-banner.jpg" alt="Image">
                        </div>

                        <?php 
						 	include_once 'include/v_hot_deals.php'; 
						 	include_once 'include/v_newsletter.php'; 
						 	include_once 'include/v_members.php'; 
						 ?>

                    </div>
                </div>
                <!-- /.sidebar -->
                <div class='col-md-9'>
                    <div class="detail-block">
                        <div class="row  wow fadeInUp">
                            <?php include_once 'include/v_products_gallery.php'; ?>

                            <div class='col-sm-6 col-md-7 product-info-block'>
                                <?php include_once 'include/v_products_detail.php'; ?>
                            </div>
                            <!-- /.col-sm-7 -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <?php 
				 	include_once 'include/v_products_description.php'; 
 				  	include_once 'include/v_products_upsell.php';  
				    ?>


                </div>
                <!-- /.col -->
                <div class="clearfix"></div>
            </div>
            <!-- /.row -->
            <?php include_once 'include/v_brands_carousel.php'; ?>
    </div>
    <!-- /.container -->
    </div>
    <!-- /.body-content -->


    <?php include_once 'include/v_footer.php'; ?>
</body>

</html>