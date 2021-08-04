<div class="details-section">
    <div class="container"><br/>

    <div class="row product-details-row">
        <div class="col-lg-6 product-details-col text-center">
           
                    <img  src="<?php echo base_url().'uploads/product_images/'.$details->image;?>">
                    <input type="hidden" name="quantity" id="<?php echo $details->id;?>" value="1" class="quantity form-control">
                
                   
               
             
           
        </div>
        <div class="col-lg-6">
            <h4><?php echo $details->name;?></h4>
            <h4 class="text-danger"><?php echo number_format($details->price);?></h4>
            <small> <?php echo $details->description ?> </small>
            <div class="mt-3">
            <button class="add_cart btn btn-info btn-block" data-productid="<?php echo $details->id;?>" data-productname="<?php echo $details->name;?>" data-productprice="<?php echo $details->price;?>">Add To Cart</button>
            <a href=" <?php echo base_url('Welcome') ?> " class="btn border"> Back to Shop </a>
            
            </div>
            
        </div>
      
    </div>
</div>


    
    

