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



    <div class="body-content outer-top-xs" id="top-banner-and-menu">
      <div class='container'>
        <div class='row'>
          <div class='col-md-3 sidebar'> 

           <?php  include_once 'include/v_categories.php'; ?>

            <div class="sidebar-module-container">
              <div class="sidebar-filter"> 
             
              <?php 
                 include_once 'include/v_shop_by.php'; 
                 include_once 'include/v_price_slider.php'; 
                 include_once 'include/v_manufactures.php'; 
                 include_once 'include/v_colors.php'; 
                 include_once 'include/v_compare.php'; 
                 include_once 'include/v_products_tag.php'; 
                 include_once 'include/v_members.php'; 
              ?>
                
              <div class="home-banner"> <img src="assets/images/banners/LHS-banner.jpg" alt="Image"> </div>

            </div>
              <!-- /.sidebar-filter --> 
            </div>
            <!-- /.sidebar-module-container --> 
          </div>
          <!-- /.sidebar -->


          <div class='col-md-9'> 
           
           <?php 
              include_once 'include/v_banner_category.php';
              include_once 'include/v_products_filter.php';
              include_once 'include/v_products.php';         
            ?>
            <!-- /.search-result-container --> 
            
          </div>
          <!-- /.col -->           
        </div>
        <!-- /.row --> 
          <?php  include_once 'include/v_brands_carousel.php'; ?>
          </div>
        <!-- /.container --> 
      </div>
    <?php include_once 'include/v_footer.php'; ?>
</body>
</html>