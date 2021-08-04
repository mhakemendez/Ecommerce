        <div class="new-product-section pt-5 pb-5">
			<div class="container">
				<div class="product-title text-center py-1">
					<h2> NEW PRODUCTS </h2>
					<hr>
				</div>
				<div class="d-flex justify-content-center align-item-center pb-3">
				
					<a class="nav-link ms-1 border" href="">ALL</a>
					<a class="nav-link ms-1 border" href="">LENOVO</a>
					<a class="nav-link ms-1 border" href="">ASUS</a>
					<a class="nav-link ms-1 border" href="">HP</a>
					<a class="nav-link ms-1 border" href="">DELL</a>
					<a class="nav-link ms-1 border" href="">ACER</a>
					
				</div>
				<div class="row new-product-row border pb-2">
				
				<?php foreach ($products as $row) : ?>
					
					
						<div class="col-md-3 new-product-col mt-2">
							<div class="card product-card text-center">
								<img src=" <?php echo base_url().'uploads/product_images/'.$row->image;?>" class="card-img-top p-0" alt="...">
								<div class="card-body">
									<h5 class="card-title"><?php echo $row->name;?></h5>
									<p class="card-text text-danger">P<?php echo number_format($row->price);?></p>
									<a href="#" class="btn btn-info">VIEW DETAILS</a>
								</div>
							</div>
						</div>
					
				
				<?php endforeach;?>	
				</div>
			</div>
		</div>