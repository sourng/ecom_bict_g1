<table class="table">
			<thead>
				<tr>
					<th colspan="4" class="heading-title">My Wishlist</th>
				</tr>
			</thead>
			<tbody>
				<?php for ($i=1; $i <=10 ; $i++) {  ?>
				<tr id="wishlist<?php echo $i ?>">
					<td class="col-md-2"><img src="assets/images/products/p<?php echo $i ?>.jpg" alt="imga"></td>
					<td class="col-md-7">
						<div class="product-name"><a href="detail">Floral Print Buttoned</a></div>
						<div class="rating">
							<i class="fa fa-star rate"></i>
							<i class="fa fa-star rate"></i>
							<i class="fa fa-star rate"></i>
							<i class="fa fa-star rate"></i>
							<i class="fa fa-star non-rate"></i>
							<span class="review">( 06 Reviews )</span>
						</div>
						<div class="price">
							$400.00
							<span>$900.00</span>
						</div>
					</td>
					<td class="col-md-2">
						<a href="#" class="btn-upper btn btn-primary">Add to cart</a>
					</td>
					<td class="col-md-1 close-btn">
						<a href="javascript:remove(<?php echo $i ?>)" class=""><i class="fa fa-times"></i></a>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
			<script type="text/javascript">
				function remove(id) {
					var r = confirm("Are you sure?");
				    if (r == true) {
				    	$('tr#wishlist'+id).remove();
				    }	
				}
			</script>