<?php include "include/head2.php";?>
<?php include "include/head.php";?>

<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>Shopping Cart</h2>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End Page title area -->


<div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-content-right">
                    <div class="woocommerce">
                        <form method="post" action="#">
                            <table cellspacing="0" class="shop_table cart">
                                <thead>
                                <tr>
                                    <th class="product-remove">&nbsp;</th>
                                    <th class="product-thumbnail">&nbsp;</th>
                                    <th class="product-name">Product</th>
                                    <th class="product-price">Price</th>
                                    <th class="product-quantity">Quantity</th>
                                    <th class="product-subtotal">Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                if(isset($message)){
                                    echo $message;
                                }

                                $pro_total = 0;

                                if(isset($v_cart)){
                                    foreach($v_cart as $row){
                                        $pro_total = $row->quantity * $row->product_price;
                                        $row->proTotal = $pro_total;
                                        ?>
                                        <tr class="cart_item">
                                            <td class="product-remove">
                                                <a title="Remove this item" class="btn remove" href="<?php echo base_url() ?>index.php/Cart/delItem?id=<?php echo $row->p_id ?>">×</a>
                                            </td>

                                            <td class="product-thumbnail">
                                                <a href=""><img width="145" height="145" alt="poster_1_up" class="shop_thumbnail" src="<?php echo base_url() ?>uploads/<?php echo $row->file_name ?>" ></a>
                                            </td>

                                            <td class="product-name">
                                                <a href=""><?php echo $row->product_name ?></a>
                                            </td>

                                            <td class="product-price">
                                                <span class="amount">PHP <?php echo $row->product_price ?></span>
                                            </td>

                                            <td class="product-quantity">
                                                <div class="quantity buttons_added">

                                                    <a href='<?php echo base_url() ?>Cart/editQty?todo=-&p_id=<?php echo $row->p_id ?>' class='btn'>-</a>
                                                    <span ><?php echo $row->quantity ?></span>
                                                    <a  href='<?php echo base_url() ?>index.php/Cart/editQty?todo=--&p_id=<?php echo $row->p_id ?>' class='btn' >+</a>
                                                </div>

                                            <td class="product-subtotal">
                                                <span id="total" class="amount">PHP <?php echo $pro_total ?></span>
                                            </td>
                                        </tr>


                                        <?php
                                    }
                                }
                                ?>
                                <?php
                                if(isset($v_cart)){
                                    $pro_totals = 0;
                                    foreach($v_cart as $row){
                                        $pro_totals += $row->proTotal;
                                    }
                                }

                                ?>
                                <tr>
                                    <td class="actions" colspan="5">
                                        <a href='<?php echo base_url() ?>index.php/Checkout?tot=<?php echo $pro_totals?>' class="btn btn-lg add_to_cart_button ">
                                            Proceed To Checkout
                                        </a>
                                    </td>
                                    <td><?php if(isset($pro_totals)){ echo 'PHP '.$pro_totals.'/-';} ?></td>

                                </tr>
                                </tbody>
                            </table>
                        </form>

                        <div class="cart-collaterals">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include "include/footer.php";?>
<?php include "include/footer2.php";?>