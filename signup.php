<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Sign up</title>
<link rel="stylesheet" href="css/screen.css" type="text/css" media="screen" title="default" />
<!--  jquery core -->
<script src="js/jquery/jquery-1.4.1.min.js" type="text/javascript"></script>

<!-- Custom jquery scripts -->
<script src="js/jquery/custom_jquery.js" type="text/javascript"></script>

<!-- MUST BE THE LAST SCRIPT IN <HEAD></HEAD></HEAD> png fix -->
<script src="js/jquery/jquery.pngFix.pack.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
$(document).pngFix( );
});
</script>
</head>
<body id="login-bg"> 
 
<!-- Start: login-holder -->
<div id="login-holder">

	<!-- start logo -->
	<div id="logo-login" style=" margin: 80px 0 0 15px;">
		<a href="#"><h1> Sign up</h1>
	</div>
	<!-- end logo -->
	
	<div class="clear"></div>
	
	<!--  start loginbox ................................................................................. -->
	<div id="loginbox">
	
	<!--  start login-inner -->
	<div id="login-inner">
		<table border="0" cellpadding="0" cellspacing="0">
		<form action="insert.php" method="post">
		<tr>
			<th>username</th>
			<td><input type="text" name="username"  placeholder="Enter full name" class="login-inp" required /></td>
		</tr>
		<tr>
			<th>Contact</th>
			<td><input type="text" name="contact"  placeholder="Enter your phone number" class="login-inp" required /></td>
		</tr>
		<tr>
			<th>Password</th>
			<td><input type="password" name="password" placeholder="*********" onfocus="this.value=''" class="login-inp" required /></td>
		</tr>
		<tr>
			<th>Email</th>
			<td><input type="email" name="email" placeholder="Enter your email here"  onfocus="this.value=''" class="login-inp" required /></td>
		</tr>
		<tr>
			<th>Date of Birth</th>
			<td><input type="date"  name="dob"  onfocus="this.value=''" class="login-inp" required /></td>
		</tr>
		<tr>
			<th>Bank Account Number</th>
			<td><input type="text" name="bank_account_number" placeholder="Enter Bank account number"  onfocus="this.value=''" class="login-inp" required /></td>
		</tr>
		<tr>
			<th>IFSC code</th>
			<td><input type="text" name="c_ifsc_code" placeholder="Enter IFSC code"  onfocus="this.value=''" class="login-inp" required /></td>
		</tr>
		<tr>
			<th>GST number</th>
			<td><input type="text" name="c_gst_no" placeholder="Enter GST number"  onfocus="this.value=''" class="login-inp" required /></td>
		</tr>
		<tr>
			<th>PAN card number</th>
			<td><input type="text" name="c_pan_card_no" placeholder="Enter PAN card number"  onfocus="this.value=''" class="login-inp" required /></td>
		</tr>
		<tr>
			<th>Address</th>
			<td><input type="text"  name="address" placeholder="Enter your address" onfocus="this.value=''" class="login-inp" required /></td>
		</tr>
		<tr>
			<th></th>
			
			<td><input type="image" src="images/right_go_button.png" width="80" height="40" align="middle" hspace="100" id="btn" name="submit_btn" value="submit" alt="Submit Form" required /></td>
			
		
		</tr>
		<tr>
		<td><p><strong> <align="center"> Now you can<a style="color: chocolate;" href="login.php"> log in...<strong></p></td>
		<tr/>
		</form>
		</table>
	</div>
 	<!--  end login-inner -->
	<div class="clear"></div>
	
 </div>
 <!--  end loginbox -->
 
	

</div>
<!-- End: login-holder -->
</body>
</html>