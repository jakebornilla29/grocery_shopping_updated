<?php include "include/head2.php";?>
<?php include "include/head.php";?>

<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>Shop</h2>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="product-content-right">

                    <!--Main Product Area-->

                    <?php
                    if(isset($product)){
                        foreach ($product as $row){
                            ?>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="product-images">
                                        <div class="product-main-img">
                                            <img style="height: 350px; width: 350px" src="<?php echo base_url('/uploads/'.$row->file_name) ?>" alt="">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="product-inner">
                                        <h2 class="product-name"><?php echo $row->product_name ?></h2>
                                        <div class="product-inner-price">
                                            <ins>PHP <?php echo $row->product_price ?></ins>
                                        </div>


                                        <a href="<?php echo base_url()?>index.php/Cart?id=<?php echo $row->p_id ?>" ><button class="add_to_cart_button" type="submit">Add to cart</button></a>
                                        <br/><br/>

                                        <div role="tabpanel">
                                            <ul class="product-tab" role="tablist">
                                                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>

                                            </ul>
                                            <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane fade in active" id="home">
                                                    <h2>Product Description</h2>
                                                    <p>
                                                        <?php echo $row->product_des ?>
                                                    </p>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    }
                    ?>
                    <!--End Main Product Area-->

                    <br/><br/><br/><br/><br/>

                    <!--Start Of Related Product carousel-->

                    <div class="related-products-wrapper">
                        <h2 class="related-products-title">Related Products</h2>
                        <div class="related-products-carousel">
                            <?php
                            if(isset($relpro)){
                                foreach($relpro as $row ){
                                    ?>
                            <div class="single-product">
                            <div class="product-f-image">
                                <img style="height: 300px; width: 300px" src="<?php echo base_url() ?>uploads/<?php echo $row->file_name ?>" alt="">
                                <div class="product-hover">
                                    <a href="<?php echo base_url()?>index.php/Cart?id=<?php echo $row->p_id ?>" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                    <a href="<?php echo base_url() ?>index.php/Welcome/single?id=<?php echo $row->p_id ?>" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                </div>
                            </div>

                            <h2><a href=""><?php echo $row->product_name ?></a></h2>

                            <div class="product-carousel-price">
                                <ins>PHP <?php echo $row->product_price ?></ins>
                            </div>
                        </div>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                    <!--End Related Product Area-->
                </div>
            </div>
        </div>
    </div>
</div>


<?php include "include/footer.php";?>
<?php include "include/footer2.php";?>