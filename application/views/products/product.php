        <div id="main-section">
			<div class="product-section pt-5 pb-5">
				<div class="container">
					<div class="product-title text-center py-1">
						<h2> PRODUCTS </h2>
						<hr>
					</div>
					
					<div class="owl-carousel owl-theme border">	
					
						<?php foreach ($products as $row) : ?>
							
							<div class="row justify-content-center product-row">
								<div class="col-md-11 col-sm-11 col-8 product-col mt-2">
									<div class="items">
										<div class="card product-card text-center">
											<img src=" <?php echo base_url().'uploads/product_images/'.$row->image;?> " class="card-img-top p-0" alt="...">
											<div class="card-body">
												<h6 class="card-title"><?php echo $row->name;?> </h6>
												<p class="card-text text-danger"> P<?php echo number_format($row->price);?> </p>
												<a href=" <?php echo base_url('Welcome/details/').$row->id?>" class="btn btn-info">VIEW DETAILS</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						
						<?php endforeach;?>

					
					</div>
				</div>
			</div>
		</div>