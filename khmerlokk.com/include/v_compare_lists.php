<table class="table compare-table inner-top-vs">
					<tr>
						<th>Products</th>
						<?php for ($i=1; $i <=4 ; $i++) { ?>
						<td  id="compare<?php echo $i ?>">
							<div class="product">
								<div class="product-image">
									<div class="image">
										<a href="detail">
										    <img alt="" src="assets/images/products/p<?php echo $i ?>.jpg">
										</a>
									</div>

									<div class="product-info text-left">
										<h3 class="name"><a href="detail">Floral Print Buttoned</a></h3>
										<div class="action">
										    <a class="lnk btn btn-primary" href="#">Add To Cart</a>
										</div>

									</div>
								</div>
							</div>
						</td>

							<?php } ?>

					</tr>

					<tr>
						<th>Price</th>

						<?php for ($i=1; $i <=4 ; $i++) { ?>
						<td id="compare<?php echo $i ?>">
							<div class="product-price">
								<span class="price"> $300.00 </span>
								<span class="price-before-discount">$500.00</span>
							</div>
						</td>
						<?php } ?>
						

					</tr>

					<tr>
						<th>Description</th>

						<?php for ($i=1; $i <=4 ; $i++) { ?>
						<td id="compare<?php echo $i ?>">
							<p class="text">Proin semper eros ac posuere ultrices. Nulla quis mi in risus volutpat blandit vestibulum in lorem. In euismod laoreet sapien vel gravida.  Proin sem per eros ac posuere ultrices. Nulla quis mi in risus.<p>
							</td>
							<?php } ?>
						
					</tr>

					<tr>
						 <th>Availability</th>

	                     <?php for ($i=1; $i <=4 ; $i++) { ?>
	                     <td id="compare<?php echo $i ?>">
	                     	<p class="in-stock">In Stock</p>
	                     </td>
	                     
	                     <?php } ?>
					</tr>

					<tr >
						<th>Remove</th>
						
						<?php for ($i=1; $i <=4 ; $i++) { ?>
						<td class='text-center' id="compare<?php echo $i ?>">
							<a href="javascript:remove(<?php echo $i ?>)" class="remove-icon"><i class="fa fa-times"></i></a>
						</td>
						<?php } ?>
					</tr>
				</table>
				<script type="text/javascript">
					function remove(id) {
						var r = confirm("Are you sure?");
					    if (r == true) {
					    	$('td#compare'+id).remove();
					    }	
					}
				</script>