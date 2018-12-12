<?php include "include/head2.php";?>
<?php include "include/head.php";?>

<br/>
<div class="container">

    <div class="row" style="margin-top:20px">
<div class="col-lg-4 col-lg-offset-4">
    
    <center>
      <h2>Forgot Password</h2>
    </center>
    <center>
      <p>Please enter your email address and we'll send you instructions on how to reset your password</p>
    </center>

    <?php $fattr = array('class' => 'form-signin');
         echo form_open(site_url().'welcome/forgot_password', $fattr); ?>
    <div class="form-group">
      <?php echo form_input(array(
          'name'=>'email', 
          'id'=> 'email', 
          'placeholder'=>'Email', 
          'class'=>'form-control', 
          'value'=> set_value('email'))); ?>
      <?php echo form_error('email') ?>
    </div>
     <?php
          if(isset($forgot_error)){
            echo '<b style="color:red">'.$forgot_error.'</b>';
             }
     ?>
    <?php echo form_submit(array('value'=>'Submit', 'class'=>'btn btn-lg btn-primary btn-block')); ?>
    <?php echo form_close(); ?>    
</div>
</div>
</div>
<br/>
<br/>

<?php include "include/footer.php";?>
<?php include "include/footer2.php";?>