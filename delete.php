<?php
include ("conn.php");
$rn = $_REQUEST['rn'];
$delete_query = "DELETE FROM book WHERE book_id='$rn'";
echo $delete_query;

if(!mysqli_query($conn,$delete_query))
{
	echo ("<script LANGUAGE='JavaScript'>
    window.alert('Something went wrong..!');
   window.location.href='viewproducts.php';
    </script>");
	
}
else
{
	echo ("<script LANGUAGE='JavaScript'>
    window.alert('Product Record is deleted successfully !');
   window.location.href='viewproducts.php';
    </script>");
}
?>
