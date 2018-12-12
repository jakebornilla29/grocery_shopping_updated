<?php include "include/head_admin2.php";?>
<?php include "include/head_admin.php";?>
<br/>
<div class="container">
    <div class="well">

        <?php echo form_open_multipart('Admin/do_upload');

            if(isset($error)){
                echo '<div align="center" class="mainmenu-area"><b>'.$error. '</b></div>';
            }

            if(isset($suc_mess)){
                echo '<div align="center" class="mainmenu-area"><b>'.$suc_mess. '</b></div>';
        }

        ?>

        <div class="form-group">
            <label for="">Product Name:</label>
            <input type="text" name="pro_name" class="form-control" id="email">
        </div>

        <div class="form-group">
            <label for="">Product category:</label>
            <input type="text" name="pro_cat" class="form-control" id="pwd">
        </div>

        <div class="form-group">
            <label for="">Product Price:</label>
            <input type="text" name="pro_price" class="form-control" id="pwd">
        </div>

        <div class="form-group">
            <label for="">Product Description:</label>
            <textarea class="form-control" name="product_des" id="exampleTextarea" rows="5"></textarea>
        </div>

        <div class="form-group">
        <label for="exampleInputFile">Upload File</label>
        <input type="file" class="form-control-file" name="userfile" size="20" />
        </div>

        <br /><br />

        <input  type="submit" value="upload" />

    </div>
</div>
<?php
    form_close();
?>

<?php include "include/footer2.php";?>

