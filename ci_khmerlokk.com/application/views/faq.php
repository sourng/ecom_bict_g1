
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

<div class="body-content">
	<div class="container">
		<div class="checkout-box faq-page">
			<div class="row">
				<div class="col-md-12">
					<h2 class="heading-title">Frequently Asked Questions</h2>
					<span class="title-tag">Last Updated on November 02, 2014</span>
					<div class="panel-group checkout-steps" id="accordion">
					
					<?php for ($i=1; $i <=10 ; $i++) { 
						if ($i==1) { ?>
						<div class="panel panel-default checkout-step-0<?php echo $i ?>">

					<!-- panel-heading -->
						<div class="panel-heading">
				    	<h4 class="unicase-checkout-title">
					        <a data-toggle="collapse" class="" data-parent="#accordion" href="#collapse<?php echo $i ?>">
					          <span><?php echo $i ?></span>Do you Ship Internationally ?
					        </a>
					     </h4>
				    </div>
				    <!-- panel-heading -->

					<div id="collapse<?php echo $i ?>" class="panel-collapse collapse in">

						<!-- panel-body  -->
					    <div class="panel-body">
					    	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis diam erat. Duis velit lectus, posuere a blandit sit amet, tempor at lorem. Donec ultricies, lorem sed ultrices interdum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis diam erat. Duis velit lectus, posuere a blandit sit amet, tempor at lorem. Donec ultricies, lorem sed ultrices interdum. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis diam erat. Duis velit lectus, posuere a blandit sit amet, tempor at lorem. Donec ultricies, lorem sed ultrices interdum. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis diam erat. Duis velit lectus, posuere a blandit sit amet, tempor at lorem.			
						</div>
						<!-- panel-body  -->

					</div><!-- row -->
				</div>
				<?php }else{ ?>
					    <!-- checkout-step-02  -->
					  	<div class="panel panel-default checkout-step-0<?php echo $i ?>">
						    <div class="panel-heading">
						      <h4 class="unicase-checkout-title">
						        <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapse<?php echo $i ?>">
						          <span><?php echo $i ?></span>Who should I to contact if I have any queries?	
						        </a>
						      </h4>
						    </div>
						    <div id="collapse<?php echo $i ?>" class="panel-collapse collapse">
						      <div class="panel-body">
						        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
						      </div>
						    </div>
					  	</div>
					<?php } }?>
					  	
					</div><!-- /.checkout-steps -->
				</div>
			</div><!-- /.row -->
			 <?php  //include_once 'include/v_brands_carousel.php'; ?>
		</div><!-- /.checkout-box -->
		</div><!-- /.container -->
</div><!-- /.body-content -->
	<?php include_once 'include/v_footer.php'; ?>

</body>
</html>
