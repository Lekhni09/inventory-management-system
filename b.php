<?php
	include("conn.php");
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
.invoice-title h2, .invoice-title h3 {
    display: inline-block;
}

.table > tbody > tr > .no-line {
    border-top: none;
}

.table > thead > tr > .no-line {
    border-bottom: none;
}

.table > tbody > tr > .thick-line {
    border-top: 2px solid;
}
</style>
</head>

<body>
<?php
    $order_no=$_REQUEST['order_no'];
	$sql=mysqli_query($conn,"SELECT * FROM tbl_order INNER JOIN book ON tbl_order.p_id = book.book_id WHERE tbl_order.order_id = '$order_no'");

	//echo "SELECT tbl_order.order_id, tbl_order.order_date, tbl_order.delivery_date,tbl_order.quantity,tbl_order.rpc, tbl_order.c_id, tbl_order.p_id, tbl_order.sub_total, tbl_order.cgst,tbl_order.cgst_amount,tbl_order.sgst,tbl_order.sgst_amount,tbl_order.igst,tbl_order.igst_amount, tbl_order.discount,tbl_order.discount_amount,tbl_order.final_amount, tbl_order.net_total, tbl_order.paid, tbl_order.due, signup.username,signup.address, book.book_name, book.book_price, book.book_publisher,book.book_description, book.book_publishing_date, book.book_edition, signup.email FROM tbl_order INNER JOIN signup ON tbl_order.c_id = signup.id_user INNER JOIN book ON tbl_order.p_id = book.book_id WHERE tbl_order.order_id = '$order_no'";
	//die();
		while($row = mysqli_fetch_array($sql))
	{
?>
<form action="order_actionpage.php" method="post">
<div class="container">
    <div class="row">
        <div class="col-xs-12">
    		<div class="invoice-title" style="background-color: powderblue;">
    			<h2>Invoice</h2><h3 class="pull-right"><?php //echo $row["order_id"];?></h3>
    		</div>
    		<hr>
    		<div class="row">
    			<div class="col-xs-6">
    				<address>
    				<strong>Billed By:</strong><br>
    					Lekhni Bhatnagar<br>
    					Elm Street 16<br>
						Apt. 4B	<br>
    					Springfield, ST 54321<br>
						8003647246
    					
    				</address>
    			</div>
    			<div class="col-xs-6 text-right">
    				<address>
        			<strong>Billed To:</strong><br>
    					<?php echo $row["c_id"];?><br>
    					
    					
    				</address>
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-xs-6">
    				<address>
    					<strong>Payment Method:</strong><br>
    					Cash <br>
    					
    				</address>
    			</div>
    			<div class="col-xs-6 text-right">
    				<address>
    					<strong>Order Date:</strong><br>
    					<?php echo $row["order_date"];?><br><br>
    				</address>
    			</div>
    		</div>
    	</div>
    </div>
    
    <div class="row">
    	<div class="col-md-12">
    		<div class="panel panel-default">
    			<div class="panel-heading">
    				<h3 class="panel-title"><strong>Order summary</strong></h3>
    			</div>
    			<div class="panel-body" style="background-color: #e2f0f7;" >
    				<div class="table-responsive">
    					<table class="table table-condensed">
    						<thead>
                                <tr>
        							<td class="text-center"><strong>S. No.</strong></td>
        							<td class="text-center"><strong>Item</strong></td>
        							<td class="text-center"><strong>Rate per unit</strong></td>
        							<td class="text-center"><strong>Quantity</strong></td>
        							
                                </tr>
    						</thead>
    						<tbody>
    							<!-- foreach ($order->lineItems as $line) or some such thing here -->
    							<tr>
    								<td class="text-center">1</td>
    								<td class="text-center"><?php echo $row["book_name"];?></td>
    								<td class="text-center">&#x20B9; <?php echo $row["rpc"];?></td>
    								<td class="text-center"><?php echo $row["quantity"];?></td>
    								
    							</tr>
                              
    							<tr>
    								<td class="thick-line"></td>
    								<td class="thick-line"></td>
    								<td class="thick-line text-center"><strong>Subtotal</strong></td>
    								<td class="thick-line text-right">&#x20B9; <?php echo $row["sub_total"];?></td>
    							</tr>
    							<tr>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
    								<td class="no-line text-center"><strong>SGST</strong></td>
    								<td class="no-line text-right">&#x20B9; <?php echo $row["sgst_amount"];?></td>
    							</tr>
    							<tr>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
    								<td class="no-line text-center"><strong>CGST</strong></td>
    								<td class="no-line text-right">&#x20B9; <?php echo $row["cgst_amount"];?></td>
    							</tr>
								<tr>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
    								<td class="no-line text-center"><strong>IGST</strong></td>
    								<td class="no-line text-right">&#x20B9; <?php echo $row["igst_amount"];?></td>
    							</tr>
								<tr>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
    								<td class="no-line text-center"><strong>Net Total</strong></td>
    								<td class="no-line text-right">&#x20B9; <?php echo $row["net_total"];?></td>
    							</tr>
								<tr>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
    								<td class="no-line text-center"><strong>Discount</strong></td>
    								<td class="no-line text-right"><?php echo $row["discount"];?> %</td>
    							</tr>
								<tr>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
    								<td class="no-line text-center"><strong>Discount Amount</strong></td>
    								<td class="no-line text-right">&#x20B9; <?php echo $row["discount_amount"];?></td>
    							</tr>
								<tr>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
    								<td class="no-line text-center"><strong>Final Amount</strong></td>
    								<td class="no-line text-right">&#x20B9; <?php echo $row["final_amount"];?></td>
    							</tr>
								<tr>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
    								<td class="no-line text-center"><strong>Amount Paid</strong></td>
    								<td class="no-line text-right">&#x20B9; <?php echo $row["paid"];?></td>
    							</tr>
								<tr>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
    								<td class="no-line text-center"><strong>Balance Due</strong></td>
    								<td class="no-line text-right"><div class="due">&#x20B9; <?php echo $row["due"];?></td>
    							</tr>
								
    						</tbody>
    					</table>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
</div>
<?php
	}
	?>
</body>
</html>