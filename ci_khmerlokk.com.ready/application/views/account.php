<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once 'include/v_head.php'; ?>
</head>

<body class="cnt-home">
    <?php 
		include_once 'include/v_header.php'; 
		//include_once 'include/v_breadcrumb.php'; 
	?>


<div class="body-content">
	<div class="container">
		<div class="my-wishlist-page">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-3 sidebar">

                    <?php $this->load->view('include/v_account'); ?>
                    

                </div>
                <div id="tab-products" class="col-md-9 my-wishlist">
					<div class="table-responsive">
						<?php $this->load->view('include/v_wishlist_lists'); ?>
					</div>
				</div>	
							
			</div><!-- /.row -->
		</div><!-- /.sigin-in-->
	</div><!-- /.container -->
</div><!-- /.body-content -->
<br>
      <?php include_once 'include/v_footer.php'; ?>
     <script type="text/javascript">
        function tab_products(string) {

            switch(string) {
                case 'wishlist':
                      alert(string);
                    $('#tab_products').load('include/v_wishlist_lists.php');                  
                    break;
                case 'compare':
                    $('#tab_products').load('include/v_compare_lists.php');    
                    break;
                case 'cart':
                    $('#tab_products').load('include/v_shopping_carts.php');   
                    break;
                case 'checkout':
                    $('#tab_products').load('include/v_wishlist_lists.php');   
                    break;
                case 'settings':
                    $('#tab_products').load('include/v_wishlist_lists.php');   
                    break;
            }
        }
    </script>
 
</body>
</html>
