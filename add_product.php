<?php
 include 'conn.php';
	
		$book_name = $_REQUEST['book_name'];
		$book_category = $_REQUEST['book_category'];
		$book_description = $_REQUEST['book_description'];
		$book_price = $_REQUEST['book_price'];
		$book_publisher = $_REQUEST['book_publisher'];
		
		$book_publishing_date = $_REQUEST['book_publishing_date'];
		$book_edition = $_REQUEST['book_edition'];
		//$date = $_REQUEST['date'];
		
		$sql = "INSERT INTO book(book_name,book_category,book_description,book_price,book_publisher,book_publishing_date,book_edition) VALUES('$book_name','$book_category','$book_description','$book_price','$book_publisher','$book_publishing_date','$book_edition')";
		//echo $sql;
		//die();
		if(!mysqli_query($conn,$sql))
		{
			
			 echo ("<script LANGUAGE='JavaScript'>
    window.alert('not inserted....Fill the details Again>');
    window.location.href='form.php';
    </script>");  
		}
	else{
	
		echo ("<script LANGUAGE='JavaScript'>
    window.alert('Your details are successfully inserted...>');
    window.location.href='viewproducts.php';
    </script>");  
	}
	
	