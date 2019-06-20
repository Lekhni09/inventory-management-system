<html>
<head>
</head>
<body>

<?php
include ("conn.php");
$rn=$_REQUEST['rn'];
//echo $rn;
//echo $rn;
$sql=mysqli_query($conn,"SELECT * FROM book INNER JOIN category ON book.book_category = category.category_id WHERE book.book_id='$rn'");		
	while($row = mysqli_fetch_array($sql))
	{
?>

		<form action ="viewproducts3.php" method="post">
		 <input type="hidden" name="book_id" readonly value="<?php echo $rn;?>" ><br><br>
		
			book_name:
			<input type="text" name="book_name" value="<?php echo $row["book_name"];?>"><br><br>
				
				book_category:
				<input type="text" name="book_category" value="<?php echo $row["category_name"];?>"><br><br>
					
					book_description:
					<input type="text" name="book_description" value="<?php echo $row["book_description"];?>"><br><br>
					
						book_price:
						<input type="text" name="book_price" value="<?php echo $row["book_price"];?>"><br><br>
					
							book_publisher:
							<input type="text" name="book_publisher" value="<?php echo $row["book_publisher"];?>"><br><br>
					
								book_publishing_date:
								<input type="text" name="book_publishing_date" value="<?php echo $row["book_publishing_date"];?>"><br><br>
					
									book_edition:
									<input type="text" name="book_edition" value="<?php echo $row["book_edition"];?>"><br><br>
					
										<input type="submit" name="submit" value="submit">
							<br>
							<br>
							<?php
							}
							?>
							</body>
							<html>