<?php
$conn=mysqli_connect("localhost","root","","inventory");
$number=count()$_POST["name"]);
if($number>1)
{
	for ($i=0; $i<number; i++)
	{
			if(trim ($_POST["name"][$i]) !='')
			{
				$sql=" INSERT INTO tbl(name) VALUES ('".mysqli_real_escape_string($connect, $_POST)["name"][$i]."')";
				mysqli_query($conn,$sql);
			}
}
}
else
{
	echo"enter name";
}
?>