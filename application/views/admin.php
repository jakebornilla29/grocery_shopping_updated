<?php include "include/head_admin2.php";?>
<?php include "include/head_admin.php";?>

    <br/><br/>

    <table class="table table-hover">
        <thead>
        <tr>
            <th>#</th>
            <th>Product Image</th>
            <th>Product Name</th>
            <th>Product Category</th>
            <th>Product Price</th>
            <th>Product description</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        <?php
            if(isset($prods)){
                foreach ($prods as $row){
                    ?>
                    <tr>
                        <th scope="row"><?php echo $row->p_id ?></th>
                        <td><img height="250px" width="250px" src="<?php echo base_url() ?>uploads/<?php echo $row->file_name ?>"></td>
                        <td><?php echo $row->product_name ?></td>
                        <td><?php echo $row->product_category ?></td>
                        <td><?php echo $row->product_price ?></td>
                        <td><?php echo $row->product_des ?></td>
                        <td><a href="<?php echo base_url('Admin/editPro?id='.$row->p_id) ?>"><span style="color: green;" class="fa fa-pencil"></span></a></td>
                        <td><a href="<?php echo base_url('Admin/delPro?id='.$row->p_id) ?>"><span style="color: red;" class="fa fa-trash"></span></a></td>
                    </tr>
                    <?php
                }
            }
        ?>

        </tbody>
    </table>

    <?php include "include/footer2.php";?>