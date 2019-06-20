<?php
 include 'conn.php';
	
		$stock_items = $_REQUEST['stock_items'];
		$stock_category = $_REQUEST['stock_category'];
		$stock_quantity = $_REQUEST['stock_quantity'];
		$stock_name = $_REQUEST['stock_name'];
		

		
		$sql = "INSERT INTO stock(stock_items,stock_category,stock_quantity,stock_name) VALUES('$stock_items','$stock_category','$stock_quantity','$stock_name')";
		//echo $sql;
		//die();
		if(!mysqli_query($conn,$sql))
		{
			
			 echo ("<script LANGUAGE='JavaScript'>
    window.alert('not inserted....Fill the details Again>');
    window.location.href='stock_control.php';
    </script>");  
		}
	else{
	
		echo ("<script LANGUAGE='JavaScript'>
    window.alert('Your details are successfully inserted...>');
    window.location.href='order.php';
    </script>");  
	}
	
	