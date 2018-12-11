<?php include "include/head2.php";?>
<?php include "include/head.php";?>
<?php include "include/istyle.php" ;?>
<br/>
<div class="container">

    <div class="row" style="margin-top:20px">
        <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
            <?php
                echo form_open('Login','role="form"');
            ?>
                <fieldset>
                    <h2>Login Account</h2>
                    <hr class="colorgraph">
                    <div class="form-group">
                        <?php
                            if(isset($login_error)){
                                echo '<b>'.$login_error.'</b>';
                            }
                        ?>
                        <input type="text" name="username" id="username" class="form-control input-lg" placeholder="Enter Username">
                    </div>
                    <?php echo form_error('username');?>

                    <div class="form-group">
                        <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password">
                    </div>
                    <?php echo form_error('password');?>
                    
                    <br/>
                    <hr class="colorgraph">
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <input type="submit" class="btn btn-lg btn-success btn-block" value="Sign In">
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <a href="<?php echo base_url('Welcome/register') ?>" class="btn btn-lg btn-primary btn-block">Register</a>
                        </div>
                        <div>
                            <center>
                                 <a href="<?php echo base_url('Welcome/forgot_password') ?>" class="btn btn-lg btn-btn-link">Forgot Password</a>
                            </center>
                        </div>
                    </div>
                </fieldset>
            <?php
            form_close();
            ?>
        </div>
    </div>

</div>
<br/><br/>

<?php include "include/footer.php";?>
<?php include "include/footer2.php";?>
