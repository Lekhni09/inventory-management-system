<?php
 include 'conn.php';
	
		$customer_name = $_REQUEST['customer_name'];
		$contact = $_REQUEST['contact'];
		$item_name = $_REQUEST['item_name'];
		$address = $_REQUEST['address'];
		$quantity = $_REQUEST['quantity'];
		$gst = $_REQUEST['gst'];
		$discount = $_REQUEST['discount'];
		$total_price = $_REQUEST['total_price'];
		$invoice_date = $_REQUEST['invoice_date'];
		

		
		$sql = "INSERT INTO invoice(customer_name,item_name,address,quantity,gst,discount,total_price,invoice_date) VALUES('$customer_name','$item_name','$address','$quantity','$gst','$discount','$total_price','$invoice_date')";
		echo $sql;
		//die();
		if(!mysqli_query($conn,$sql))
		{
			
			 echo ("<script LANGUAGE='JavaScript'>
    window.alert('not inserted....Fill the details Again>');
    window.location.href='invoice.php';
    </script>");  
		}
	else{
	
		echo ("<script LANGUAGE='JavaScript'>
    window.alert('Your details are successfully inserted...>');
    window.location.href='home.php';
    </script>");  
	}
	
	