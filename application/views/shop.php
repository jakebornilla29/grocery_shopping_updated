<?php include "include/head2.php";?>
<?php include "include/head.php";?>

<div class="product-big-title-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>Shop</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<br/><br/>

<span style="float:right;font-size: 20px; padding: 10px;">
    <b>Filter Products</b>
    <?php
    echo form_open('Shop/catFilter');
    ?>
    <select class=' add_to_cart_button' name="cat" id="">
        <option value="Fruits">Fruits</option>
        <option value="Vegetables">Vegetables</option>
    </select>
    <button class="add_to_cart_button" >Submit</button>
    <?php
    echo form_close();
    ?>
</span>
<br/><br/><br/><br/><br/><br/>
<?php
if(isset($prods)){
    foreach ($prods as $row){
        ?>

        <div class="col-md-3 col-sm-6">
            <div class="single-shop-product">
                <div class="product-upper">
                    <img style='height:300px; width:300px' src="<?php echo base_url() ?>uploads/<?php echo $row->file_name ?>" alt="">
                </div>
                <h2><a href=""><?php echo $row->product_name ?></a></h2>
                <div class="product-carousel-price">
                    <ins>PHP <?php echo $row->product_price ?></ins>
                </div>
                <div class="product-option-shop">
                    <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="<?php echo base_url()?>index.php/Cart?id=<?php echo $row->p_id ?>">Add to cart</a>
                    <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="<?php echo base_url()?>index.php/Welcome/single?id=<?php echo $row->p_id ?>">Description</a>
                </div>
            </div>
        </div>
        <?php
    }
}

?>

<?php
if(isset($catData)){
    foreach ($catData as $row){
        ?>
        <div class="col-md-3 col-sm-6">
            <div class="single-shop-product">
                <div class="product-upper">
                    <img style='height:300px; width:300px' src="<?php echo base_url() ?>uploads/<?php echo $row->file_name ?>" alt="">
                </div>
                <h2><a href=""><?php echo $row->product_name ?></a></h2>
                <div class="product-carousel-price">
                    <ins>PHP <?php echo $row->product_price ?></ins>
                </div>
                <div class="product-option-shop">
                    <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="<?php echo base_url('Cart?id='.'$row->p_id')?>">Add to cart</a>
                    <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="<?php echo base_url('Welcome/single?id='.'$row->p_id')?>">Description</a>
                </div>
            </div>
        </div>
        <?php
    }
}
?>

<div style="width: 100%" class="row">
    <div class="col-md-12">

    </div>
</div>


<?php include "include/footer.php";?>
<?php include "include/footer2.php";?>