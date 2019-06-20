<?php
include("conn.php");
$book_id=$_POST['book_id'];
$book_name=$_POST['book_name'];
$book_category=$_POST['book_category'];
$book_description=$_POST['book_description'];
$book_price=$_POST['book_price'];
$book_publisher=$_POST['book_publisher'];
$book_publishing_date=$_POST['book_publishing_date'];
$book_edition=$_POST['book_edition'];

	
 $sql="UPDATE book SET  book_name='$book_name' , book_category='$book_category', book_description='$book_description', book_price='$book_price',book_publisher='$book_publisher',book_publishing_date='$book_publishing_date',book_edition='$book_edition' WHERE book_id='$book_id'";
 echo "UPDATE book SET  book_name='$book_name' , book_category='$book_category', book_description='$book_description', book_price='$book_price',book_publisher='$book_publisher',book_publishing_date='$book_publishing_date',book_edition='$book_edition' WHERE book_id='$book_id'";

 if(!mysqli_query($conn,$sql))
{
	echo "Not Updated";
	
}
else
{
	 header("Location:viewproducts.php?r");
	 echo "updated";
}

?>