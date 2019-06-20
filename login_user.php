<?php
session_start();
?>
<?php 
	require 'conn.php';
	if(isset($_POST['submit_btn']))
{
		$username = $_POST['username'];
		$password = $_POST['password'];
		$role_type = $_POST['role_type'];
		$query = "SELECT * FROM signup WHERE username = '$username' and password = '$password' ";
	 //echo $query;
	 //die();
		$response = mysqli_query($conn,$query);
		$row = mysqli_fetch_array($response);

		$u_name=$row['username'];
		$pwd=$row['password'];

if($u_name == 'Admin' && $pwd == 'Admin' && $role_type="admin-login")
{
			$_SESSION["id_user"]=$row["id_user"];
			$_SESSION["username"]=$row["username"];
			$_SESSION["Email"]=$row["Email"];
			$_SESSION["dob"]=$row["dob"];

	echo ("<script LANGUAGE='JavaScript'>
    window.alert('You are now logged in as admin...');
    window.location.href='viewusers.php';
    </script>");  

}
else
{
if($pwd == $password && $u_name == $username && $role_type="staff-login")
{
	
	
			$_SESSION["id_user"]=$row["id_user"];
			$_SESSION["username"]=$row["username"];
			$_SESSION["Email"]=$row["Email"];
			$_SESSION["dob"]=$row["dob"];
  
  echo ("<script LANGUAGE='JavaScript'>
    window.alert('You are now logged in as staff ! >');
    window.location.href='home.php';
  </script>");
}
else
{ 

	echo ("<script LANGUAGE='JavaScript'>
    window.alert('Could not log in... username or password is wrong or you have not signed up');
   window.location.href='login.php';
    </script>");
}
}
}
?>

