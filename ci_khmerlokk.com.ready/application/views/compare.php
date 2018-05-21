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
	<div class="container">
    <div class="product-comparison">
		<div>
			<h1 class="page-title text-center heading-title">Product Comparison</h1>
			<div class="table-responsive">
				<?php include_once 'include/v_compare_lists.php'; ?>
			</div>
            </div>
		</div>
	</div>
</div>
<?php include_once 'include/v_footer.php'; ?>


</body>
</html>
