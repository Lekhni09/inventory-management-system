
<?php
	include("conn.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	
	<title>Editable Invoice</title>
	
	<link rel='stylesheet' type='text/css' href='styleinvoice.css' />
	<link rel='stylesheet' type='text/css' href='printinvoice.css' media="print" />
	<script type='text/javascript' src='js/jquery-1.3.2.min.js'></script>
	<script type='text/javascript' src='js/example.js'></script>

</head>

<body>
<?php
    $order_no=$_REQUEST['order_no'];
	$sql=mysqli_query($conn,"SELECT tbl_order.order_id, tbl_order.order_date, tbl_order.delivery_date,tbl_order.quantity,tbl_order.rpc, tbl_order.c_id, tbl_order.p_id, tbl_order.sub_total, tbl_order.cgst,tbl_order.cgst_amount,tbl_order.sgst,tbl_order.sgst_amount,tbl_order.igst,tbl_order.igst_amount, tbl_order.discount,tbl_order.discount_amount,tbl_order.final_amount, tbl_order.net_total, tbl_order.paid, tbl_order.due, signup.username,signup.address, book.book_name, book.book_price, book.book_publisher,book.book_description, book.book_publishing_date, book.book_edition FROM tbl_order INNER JOIN signup ON tbl_order.c_id = signup.id_user INNER JOIN book ON tbl_order.p_id = book.book_id WHERE tbl_order.order_id = '$order_no'");
	//echo "SELECT tbl_order.order_id, tbl_order.order_date, tbl_order.delivery_date,tbl_order.quantity,tbl_order.rpc, tbl_order.c_id, tbl_order.p_id, tbl_order.sub_total, tbl_order.cgst,tbl_order.cgst_amount,tbl_order.sgst,tbl_order.sgst_amount,tbl_order.igst,tbl_order.igst_amount, tbl_order.discount,tbl_order.discount_amount,tbl_order.final_amount, tbl_order.net_total, tbl_order.paid, tbl_order.due, signup.username,signup.address, book.book_name, book.book_price, book.book_publisher,book.book_description, book.book_publishing_date, book.book_edition FROM tbl_order INNER JOIN signup ON tbl_order.c_id = signup.id_user INNER JOIN book ON tbl_order.p_id = book.book_id WHERE tbl_order.order_id = '$order_no'";
		while($row = mysqli_fetch_array($sql))
	{
?>
<form action="order_actionpage.php" method="post">
<table border="2">	

	<div id="page-wrap">

		<div id="header">INVOICE</div>
		
		<div id="identity">
		
            <td id="address"><?php echo $row["address"];?></td>

            
		
		</div>
		
		<div style="clear:both"></div>
		
		<div id="customer">

            <div><td id="customer-title"><?php echo $row["username"];?></td></div>
           <div>
            <table id="meta">
                <tr>
                    <td class="meta-head">Invoice #</td>
                    <td><?php echo $row["order_id"];?></td>
                </tr>
                <tr>

                    <td class="meta-head">Date</td>
                    <td><?php echo $row["order_date"];?></td>
                </tr>
				
				
                <tr>
                    <td class="meta-head">Discount</td>
                    <td><div class="due"><?php echo $row["discount"];?></div></td>
                </tr>
				<tr>
                    <td class="meta-head">Amount Due</td>
                    <td><div class="due"><?php echo $row["due"];?></div></td>
                </tr>

            </table>
		</div>
		</div>
		
		<table id="items">
		
		  <tr>
		      <th>Item</th>
		      <th>Description</th>
		      <th>Unit Cost</th>
		      <th>Quantity</th>
		      <th>Price</th>
		  </tr>
		  
		  <tr class="item-row">
		      <td class="item-name"><div class="delete-wpr">
			  <a class="delete" href="javascript:;" title="Remove row">X</a></div></td>
		      <td class="description"></td>
		      <td><div class="cost"><?php echo $row["sub_total"];?></td>
		      <td><div class="qty"><?php echo $row["quantity"];?></td>
		      <td><span class="price"><?php echo $row["sub_total"];?></span></td>
		  </tr>
		  
		  <tr class="item-row">
		      <td class="item-name"><div class="delete-wpr"><?php echo $row["book_name"];?><a class="delete" href="javascript:;" title="Remove row">X</a></div></td>

		      <td class="description"><?php echo $row["book_description"];?></td>
		      <td><div class="cost"><?php echo $row["rpc"];?></td>
		      <td><div class="qty"><?php echo $row["quantity"];?></td>
		      <td><span class="price"><?php echo $row["sub_total"];?></span></td>
		  </tr>
		  
		  <tr id="hiderow">
		    <td colspan="5"><a id="addrow" href="javascript:;" title="Add a row">Add a row</a></td>
		  </tr>
		  
		  <tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Subtotal</td>
		      <td class="total-value"><div id="subtotal"><?php echo $row["sub_total"];?></div></td>
		  </tr>
		  <tr>

		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">cgst</td>
		      <td class="total-value"><div id="total"><?php echo $row["cgst_amount"];?></div></td>
		  </tr>
		  <tr>

		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">sgst</td>
		      <td class="total-value"><div id="total"><?php echo $row["sgst_amount"];?></div></td>
		  </tr>
		  <tr>

		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">igst</td>
		      <td class="total-value"><div id="total"><?php echo $row["igst_amount"];?></div></td>
		  </tr>
		  <tr>

		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Total</td>
		      <td class="total-value"><div id="total"><?php echo $row["net_total"];?></div></td>
		  </tr>
		  <tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Amount Paid</td>

		      <td class="total-value"><td id="paid"><?php echo $row["paid"];?></td>
		  </tr>
		  <tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line balance">Balance Due</td>
		      <td class="total-value balance"><div class="due"><?php echo $row["due"];?></div></td>
		  </tr>
		
		</table>
		
		<div id="terms">
		  <h5>Terms</h5>
		  <textarea>NET 30 Days. Finance Charge of 1.5% will be made on unpaid balances after 30 days.Thanks for shopping with us.</textarea>
		</div>
	
	</div>
	<?php
	}
	?>
	
</body>

</html>