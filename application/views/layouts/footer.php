    </div>
	
	</header>

	<!-- footer -->
	<footer>
		<div class="pb-5 bg-dark footer-nav ">
			<div class="container">
			<div class="row justify-content-around">
				<div class="col-lg-8 col-12 ">
					<div class="row justify-content-center text-white mt-3">
						<div class="col-lg-4 ">
							<div class="">
								<h4 class="mb-4 ">Information</h4>
								<p>Branches</p>
								<p>Contact Us</p>
								<p>FAQs</p>
								<p>My Account</p>
								<p>New Articles</p>
								<p>Reviews</p>
							</div>
						</div>
				
						<div class="col-lg-4 ">
							<div class="">
								<h4 class="mb-4 text-info">Customer Service</h4>
								<p>How to Buy</p>
								<p>Warranty</p>
								<p>Return and Refunds</p>
								<p>Terms and Conditions</p>
							</div>
						</div>
				
						<div class="col-lg-4 ">
							<div class="">
								<h4 class="mb-4 text-info">Linkns</h4>
								<p>Branches</p>
								<p>Contact Us</p>
								<p>FAQs</p>
								<p>My Account</p>
								<p>New Articles</p>
								<p>Reviews</p>
							</div>
						</div>
					</div>
				</div>
			
				<div class="col-lg-4 d-flex justify-content-center align-items-center">
					<div>
						<div class="text-white text-center">
							<h2>LOGO</h2>
						</div>
					</div>	
				</div>
			</div>
			</div>
		</div>
	</footer>


	

	<!-- bootstrap js -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
	integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

	<!-- jquery -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>

	<!-- owl carousel js -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

	<script src=" <?php echo base_url('./assets/js/main.js') ?> "></script>
	<script type="text/javascript">
    $(document).ready(function(){
        $('.add_cart').click(function(){
            var product_id    = $(this).data("productid");
            var product_name  = $(this).data("productname");
            var product_price = $(this).data("productprice");
            var quantity      = $('#' + product_id).val();
            $.ajax({
                url : "<?php echo site_url('Cart/add_to_cart');?>",
                method : "POST",
                data : {product_id: product_id, product_name: product_name, product_price: product_price, quantity: quantity},
                success: function(data){
                    
					 
					$('#detail_cart').html(data);
					window.location.href = '<?php echo base_url('Cart') ?>';
                }
            });
        });
 
         
        $('#detail_cart').load("<?php echo site_url('Cart/load_cart');?>");
 
         
        $(document).on('click','.romove_cart',function(){
            var row_id=$(this).attr("id");
			if (confirm("Are you sure want to remove item from cart?")) {
					$.ajax({
						url : "<?php echo site_url('Cart/delete_cart');?>",
						method : "POST",
						data : {row_id : row_id},
						success :function(data){
							$('#detail_cart').html(data);
							location.reload(true)
						}
					});
			}else{
					return false;
			}
           
        });
    });
</script>

</body>
</html>