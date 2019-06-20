<?php
 include 'conn.php';
	
		$username = $_REQUEST['username'];
		$contact = $_REQUEST['contact'];
		$password = $_REQUEST['password'];
		$email = $_REQUEST['email'];
		$dob = $_REQUEST['dob'];
		$bank_account_number = $_REQUEST['bank_account_number'];
		$c_ifsc_code = $_REQUEST['c_ifsc_code'];
		$c_gst_no = $_REQUEST['c_gst_no'];
		$c_pan_card_no = $_REQUEST['c_pan_card_no'];
		$address = $_REQUEST['address'];
		$sql = "INSERT INTO signup(username,contact,password,email,dob,bank_account_number,c_ifsc_code,c_gst_no,c_pan_card_no,address) VALUES('$username','$contact','$password','$email','$dob','$bank_account_number','$c_ifsc_code','$c_gst_no','$c_pan_card_no','$address')";
		//echo $sql;
		if(!mysqli_query($conn,$sql))
		{
			//echo "not inserted";
			echo ("<script LANGUAGE='JavaScript'>
    window.alert('Could not sign in... try again');
   window.location.href='signup.php';
    </script>");
			
		}
	else{
		//echo "inserted";
		echo ("<script LANGUAGE='JavaScript'>
    window.alert('successfully signed in');
    window.location.href='login.php';
    </script>");  

	}
	
	header("refresh:10; url=login.php");
	