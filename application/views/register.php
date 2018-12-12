<?php include "include/head2.php";?>
<?php include "include/head.php";?>
<br/>


<div style="width:100%;" class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
        <?php
        echo form_open('Register','role="form"');
        ?>

        <h2>Please Sign Up <small>You are Free to Sign Up.</small></h2>
        <hr class="colorgraph">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                    <b><?php echo form_error('fname'); ?></b>
                    <input type="text" name="fname" id="first_name" value="<?php echo set_value('fname'); ?>"  class="form-control input-lg" placeholder="First Name" tabindex="1">
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                    <b><?php echo form_error('lname'); ?></b>
                    <input type="text" name="lname" id="last_name" class="form-control input-lg" value="<?php echo set_value('lname'); ?>"  placeholder="Last Name" tabindex="2">
                </div>
            </div>
        </div>
        <div class="form-group">
            <b><?php echo form_error('username'); ?></b>
            <input  value="<?php echo set_value('username'); ?>" type="text" name="username" id="display_name" class="form-control input-lg" placeholder="User Name" tabindex="3">
        </div>
        <div class="form-group">
            <b><?php echo form_error('email'); ?></b>
            <input type="email" name="email" id="email"  value="<?php echo set_value('email'); ?>" class="form-control input-lg" placeholder="Email Address" tabindex="4">
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                    <b><?php echo form_error('password'); ?></b>
                    <input type="password" name="password" id="password" value="<?php echo set_value('password'); ?>"  class="form-control input-lg" placeholder="Password" tabindex="5">
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                    <div><b><?php echo form_error('password_conf'); ?></b></div>
                    <input type="password" name="password_conf" id="password_confirmation" value="<?php echo set_value('password_conf'); ?>"  class="form-control input-lg" placeholder="Confirm Password" tabindex="6">
                </div>
            </div>
        </div>
        <hr class="colorgraph">
        <div class="row">
            <div class="col-md-12"><input type="submit" value="Register" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
        </div>
        <?php echo form_close();?>
        
    </div>
</div>

<br/><br/>
<?php include "include/footer.php";?>
<?php include "include/footer2.php";?>


