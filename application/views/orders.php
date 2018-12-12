<?php include "include/head2.php";?>
<?php include "include/head_admin.php";?>

<br/><br/><br/>
<div class=" container">
    <table class="table table-hover table-bordered table-responsive">
        <thead>
        <tr>
            <th>#</th>
            <th>Delivery Person name</th>
            <th>Delivery Address</th>
            <th>Delivery Net Total</th>
            <th>Delivery City</th>
            <th>Delivery email</th>
            <th>Delivery Person phone</th>
            <th>Order Day</th>
            <th>status</th>
        </tr>
        </thead>
        <tbody>
        <?php
        if(isset($order1)){
            foreach ($order1 as $row){
                ?>
                <tr>
                    <th scope="row"><?php echo $row->po_id ?></th>
                    <td><?php echo $row->bill_fname . '' . $row->bill_lname ?></td>
                    <td><?php echo $row->bill_add ?></td>
                    <td><?php echo $row->cart_total ?></td>
                    <td><?php echo $row->bill_city ?></td>
                    <td><?php echo $row->bill_email ?></td>
                    <td><?php echo $row->bill_phone ?></td>
                    <td><?php echo $row->date ?></td>

                    <td><a href="<?php echo base_url() ?>Admin/changeStatus?po_id=<?php echo $row->po_id ?>">
                            <?php
                            if($row->status == 'delivered') {
                                ?>
                                <i style="color:green; font-size: 30px" class="fa fa-truck"></i>
                                <?php
                            }
                            else{
                                ?>
                                <i style="color:red; font-size: 30px" class="fa fa-truck"></i>
                                <?php
                            }
                            ?>
                        </a></td>
                </tr>
                <?php
            }
        }
        ?>
        </tbody>
    </table>
</div>
<?php include "include/footer2.php";?>
