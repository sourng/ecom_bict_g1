
<?php
  include_once './db/dbconfig.php';


?>

<div class="product-info">
							<?php
							      $query = "SELECT * FROM tbl_products";       
							      $records_per_page=3;
							      $newquery = $crud->paging($query,$records_per_page);
							      $crud->get_product_detail($newquery);
							     ?>
							
							

							

							

							
						</div><!-- /.product-info -->
