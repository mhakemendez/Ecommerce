        <div class="d-flex justify-content-end align-item-center px-1 bg-dark header-nav">
			<a class="nav-link" href=" <?php echo base_url('Cart')?> ">
				<i class="fas fa-shopping-cart fs-5 text-info"></i>
				<small class="bg-danger fw-bold"> <?php echo count($this->cart->contents()) ?> </small>
			</a>
			<a class="nav-link text-white" href="">LOGIN</a>
			<a class="nav-link text-white" href="">REGISTER</a>
		</div>
		
		<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="#">Navbar</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav m-auto">
						<li class="nav-item ps-3 py-1">
							<a class="nav-link active" aria-current="page" href=" <?php echo base_url() ?> ">Home</a>
						</li>
						<li class="nav-item ps-3 py-1">
							<a class="nav-link" href="#">Brands</a>
						</li>
						<li class="nav-item ps-3 py-1">
							<a class="nav-link" href="#">Contact-Us</a>
						</li>
						<li class="nav-item ps-3 py-1">
							<a class="nav-link" href="#">Our Company</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>