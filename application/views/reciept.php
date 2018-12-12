<?php include "include/head2.php";?>
<?php
//include "include/head.php";
?>

<br/><br/>

<div class="container well">
    <div id="print">
        <div class="">
            <span style="float: left;">
                <b>Grocery Shopping</b><br/>
                <i># 123 <br/>4<sup>th</sup> Floor West Tower II, Pasay City.</i>
            </span>
            <span style="float: right;">
                <b>Contact Number:</b><br/>

                <span>
                    <b> Jake Bornilla </b> 09569064136
                <br/>
                    <b> Jericho Bornilla </b> 09199462969
                </span>

            </span>
            <br/><br/><br/>
            <div>
                <div>
                    <center>
                        <h1><span style="color: gray;">Grocery</span> <span style="color:#1abc9c;">Shopping</span></h1>
                        <br/>
                        <span> <b>Customer Name :</b> <?php echo $_SESSION['dis_name'] ?> </span>
                    </center>
                    <span style="float: right;"><h4>Bill #<?php echo $_GET['oh']?></h4></span>

                </div>
                <br/>
                <div class="table ">
                    <table align="center" class="table table-hover table-responsive col-md-12">
                        <thead>
                        <tr>
                            <th>qty</th>
                            <th colspan="3">product name</th>
                            <th>product price</th>
                            <th>total</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        if(isset($order)){
                            foreach ($order as $row){
                                ?>
                                <tr>
                                    <td><?php echo $row->p_qty ?></td>
                                    <td colspan="3" ><?php echo $row->p_name ?></td>
                                    <td><?php echo $row->p_price ?></td>
                                    <td><?php echo $row->p_qty * $row->p_price ?></td>
                                </tr>
                                <?php
                            }
                        }
                        if(isset($order)){
                            $pro_totals = 0;
                            foreach($order as $row){
                                $pro_totals += $row->p_qty * $row->p_price;
                            }

                            $pro_totals += 15;

                        }
                        ?>

                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td colspan="2"><b>Delivery Charges :</b></td>
                            <td><b>15/-</b></td>
                        </tr>

                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td colspan="2"><b>Net Bill:</b></td>
                            <td><?php echo $pro_totals ?></td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
                <button onclick="printDiv('print')" id="printpagebutton1" class="btn btn-link"><span><i class="fa fa-print"></i> Print</span></button>

                <center><a href="<?php echo base_url() ?>index.php/Welcome"><button class="btn btn-primary" id="printpagebutton" >Back to Home</button></a></center>



</div>

<script>
    function myFunc(){
        var printButton = document.getElementById("printpagebutton");
        var printButton1 = document.getElementById("printpagebutton1");
        //Set the print button visibility to 'hidden'
        printButton.style.visibility = 'hidden';
        printButton1.style.visibility = 'hidden';

        window.print();

        printButton.style.visibility = 'visible';
        printButton1.style.visibility = 'visible';
    }
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;
    }
</script>

<?php
//include "include/footer.php";
?>
<?php include "include/footer2.php";?>
