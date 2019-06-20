<?php
 include 'conn.php';
	
		$order_date = $_REQUEST['order_date'];
		$delivery_date = $_REQUEST['delivery_date'];
		$quantity = $_REQUEST['quantity'];
		$rpc = $_REQUEST['rpc'];
		$sub_total = $_REQUEST['sub_total'];
		$cgst = $_REQUEST['cgst'];
		$cgst_amount = $_REQUEST['cgst_amount'];
		$sgst = $_REQUEST['sgst'];
		$sgst_amount = $_REQUEST['sgst_amount'];
		$igst = $_REQUEST['igst'];
		$igst_amount = $_REQUEST['igst_amount'];
		$discount = $_REQUEST['discount'];
		$discount_amount = $_REQUEST['discount_amount'];
		$final_amount = $_REQUEST['final_amount'];
		$net_total = $_REQUEST['net_total'];
		$paid = $_REQUEST['paid'];
		$due = $_REQUEST['due'];
		$p_id = $_REQUEST['p_id'];
		$c_id = $_REQUEST['c_id'];
		$sql = "INSERT INTO tbl_order(order_date,delivery_date,quantity,rpc,sub_total,cgst,cgst_amount,sgst,sgst_amount,igst,igst_amount,discount,discount_amount,final_amount,net_total,paid,due,c_id,p_id) VALUES('$order_date','$delivery_date','$quantity','$rpc','$sub_total','$cgst','$cgst_amount','$sgst','$sgst_amount','$igst','$igst_amount','$discount','$discount_amount','$final_amount','$net_total','$paid','$due','$c_id','$p_id')";
		//echo $sql;
		//die();
		if(!mysqli_query($conn,$sql))
		{
			
			 echo ("<script LANGUAGE='JavaScript'>
    window.alert('not inserted....Fill the details Again>');
    window.location.href='order.php';
    </script>");  
		}
	else
	{
	$var3=mysqli_query($conn,"SELECT max(order_id) as 'id' FROM tbl_order;");
	$row=mysqli_fetch_array($var3);
	$id=$row['id'];
	}
			
?>	
	<script language="javascript" type="text/javascript">
    alert('Your details are successfully inserted...'); 
	location.href="b.php?order_no=<?php echo $id; ?>";
	</script>