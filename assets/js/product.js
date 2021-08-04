$(document).ready(function(){
    $('.add_cart').click(function(){
        var product_id    = $(this).data("productid");
        var product_name  = $(this).data("productname");
        var product_price = $(this).data("productprice");
        var quantity      = $('#' + product_id).val();
        $.ajax({
            url : "http://localhost/cartshop/Cart/add_to_cart",
            method : "POST",
            data : {product_id: product_id, product_name: product_name, product_price: product_price, quantity: quantity},
            success: function(data){
                
                alert('Item Inserted to cart');
                $('#detail_cart').html(data);
                // window.location.href = 'http://localhost/cartshop/cart';
            }
        });
    });

     
    $('#detail_cart').load("<?php echo site_url('Cart/load_cart');?>");

     
    $(document).on('click','.romove_cart',function(){
        var row_id=$(this).attr("id"); 
        $.ajax({
            url : "http://localhost/cartshop/Cart/delete_cart",
            method : "POST",
            data : {row_id : row_id},
            success :function(data){
                alert('Are you sure want to delete item');
                if (confirm) {
                    $('#detail_cart').html(data);
                }else{
                    return false;
                }
                
            }
        });
    });
});