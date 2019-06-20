<?php
session_start();
include_once 'dbconfig.php';
$conn= getDBConnected();	
foreach($_SESSION["table_ajax"] as $key=>$data)
{	
    $sql=mysqli_query($conn,"INSERT INTO book(book_published(book_name,book_category,book_price,book_publisher,book_edition) VALUES ('$data[book_name]','$data[book_category]','$data[book_price]','$data[book_publisher]','$data[book_published]','$data[book_edition]','Now());");
    
	
	
}
$r1=$data['order_no'];
//echo $r1;
//die();
	?>		
    <script language="javascript" type="text/javascript">
    alert('item details are successfully submitted'); 
	location.href="project.php?var1=<?php echo $r1; ?>";
	</script>