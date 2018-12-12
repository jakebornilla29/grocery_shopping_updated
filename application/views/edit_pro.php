<?php include "include/head_admin2.php";?>
<?php include "include/head_admin.php";?>
<br/>
<div class="container">
    <div class="well">

        <?php echo form_open_multipart('Admin/updatePro');

        if(isset($suc_mess)){
            echo '<div align="center" class="mainmenu-area"><b>'.$suc_mess. '</b></div>';
        }

        if(isset($edPro)){
        foreach ($edPro as $row){
        ?>

        <div class="form-group">
            <label for="">Product Name:</label>
            <input type="text" value="<?php echo set_value('pro_name', $row->product_name); ?>" name="pro_name" class="form-control" id="email">
            <input type="hidden" value="<?php echo $_GET['id']?>" name="id">
        </div>

        <div class="form-group">
            <label for="">Product category:</label>
            <input type="text" name="pro_cat" class="form-control" value="<?php echo set_value('pro_name', $row->product_category); ?>" id="pwd">
        </div>

        <div class="form-group">
            <label for="">Product Price:</label>
            <input type="text" name="pro_price" class="form-control" value="<?php echo set_value('pro_name', $row->product_price); ?>" id="pwd">
        </div>

        <div class="form-group">
            <label for="">Product Description:</label>
            <textarea class="form-control" name="product_des" id="exampleTextarea" rows="5"><?php echo set_value('pro_name', $row->product_des); ?></textarea>
        </div>

        <label for="">Previous Picture:</label><br/>
        <img height="350px" width="350px" src="<?php echo base_url() ?>uploads/<?php echo $row->file_name ?>">

        <br /><br />

        <input  type="submit" value="update" />

    </div>
</div>
<?php
form_close();
?>
<?php
}
}

?>


<?php include "include/footer2.php";?>


