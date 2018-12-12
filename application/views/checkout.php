<?php include "include/head_admin2.php";?>
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
</div>

<br/><br/>

<div class="container">
    <h3 align="center" id="order_review_heading">Your order</h3>

    <div id="order_review" style="position: relative;">
        <table class="shop_table">
            <?php
            if(isset($total)){
            $netTotal= 0;

            ?>
            <thead>
            <tr>
                <th colspan="2" class="product-name">&nbsp;</th>

            </tr>
            </thead>
            <tbody>
            <tr class="cart_item">
                <td class="product-name">
                    Cart Total  </td>
                <td class="product-total">
                    <span class="amount">PHP .<?php echo $total ?>/-</span> </td>
            </tr>
            </tbody>
            <tfoot>

            <tr class="shipping">
                <th>Shipping and Handling</th>
                <td>
                    PHP . 20/-
                </td>
            </tr>


            <tr class="order-total">
                <th>Order Total</th>
                <td><strong><span class="amount">PHP <?php echo $netTotal = $total + 20 ?>/-</span></strong> </td>
            </tr>

            </tfoot>
        </table>
    </div>
    <?php
    }
    ?>
</div>

<div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">

            </div>

            <div class="col-md-12">
                <div class="product-content-right">
                    <div class="woocommerce">
                        <div id="customer_details" class="col2-set">
                            <div class="col-12">
                                <div class="woocommerce-billing-fields">
                                    <h3>Billing Details</h3>

                                    <?php
                                    echo form_open('Checkout/confirmForm','class="checkout"')
                                    ?>
                                    <p id="billing_first_name_field" class="form-row form-row-first validate-required">
                                        <label class="" for="billing_first_name">First Name <abbr title="required" class="required">*</abbr>
                                        </label>
                                        <input type="text" value="" placeholder="" id="billing_first_name" name="fname" class="input-text" required="">
                                        <input type="hidden" value="<?php echo $netTotal?>" placeholder="" id="billing_first_name" name="netTotal">
                                    </p>

                                    <p id="billing_last_name_field" class="form-row form-row-last validate-required">
                                        <label class="" for="billing_last_name">Last Name <abbr title="required" class="required">*</abbr>
                                        </label>
                                        <input type="text" value="" placeholder="" id="billing_last_name" name="lname" class="input-text" required="">
                                    </p>
                                    <div class="clear"></div>

                                    <p id="billing_address_1_field" class="form-row form-row-wide address-field validate-required">
                                        <label class="" for="billing_address_1">Address <abbr title="required" class="required">*</abbr>
                                        </label>
                                        <input type="text" value="" placeholder="Street address" id="billing_address_1" name="address" class="input-text" required="">
                                    </p>

                                    <p id="billing_country_field" class="form-row form-row-wide address-field update_totals_on_change validate-required woocommerce-validated">
                                        <label class="" for="billing_country">City <abbr title="required" class="required">*</abbr>
                                        </label>
                                        <input type="text" value="" placeholder="Enter City" id="billing_country" name="city" class="input-text" required="">
                                    </p>

                                    <div class="clear"></div>

                                    <p id="billing_email_field" class="form-row form-row-first validate-required validate-email">
                                        <label class="" for="billing_email">Email Address <abbr title="required" class="required">*</abbr>
                                        </label>
                                        <input type="text" value="" placeholder="" id="billing_email" name="email" class="input-text" required="">
                                    </p>

                                    <p id="billing_phone_field" class="form-row form-row-last validate-required validate-phone">
                                        <label class="" for="billing_phone">Phone Number<abbr title="required" class="required">*</abbr>
                                        </label>
                                        <input type="text" required="" value="" placeholder="" id="billing_phone" name="phone" class="input-text ">
                                    </p>

                                    <input type="submit" value="submit" class="add_to_cart_button" />


                                    <?php
                                    echo form_close();
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include "include/footer.php";?>
<?php include "include/footer2.php";?>