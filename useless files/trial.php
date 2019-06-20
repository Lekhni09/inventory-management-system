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
	<div id="logo-login">
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
			<td><input type="text" name="username"  placeholder="enter full name" class="login-inp" /></td>
		</tr>
		<tr>
			<th>Contact</th>
			<td><input type="text" name="contact"  placeholder="enter contact" class="login-inp" /></td>
		</tr>
		<tr>
			<th>Password</th>
			<td><input type="password" name="password" placeholder="*********" onfocus="this.value=''" class="login-inp" /></td>
		</tr>
		<tr>
			<th>Email</th>
			<td><input type="email" name="email" placeholder="enter email"  onfocus="this.value=''" class="login-inp" /></td>
		</tr>
		<tr>
			<th>dob</th>
			<td><input type="date"  name="dob"  onfocus="this.value=''" class="login-inp" /></td>
		</tr>
		<tr>
			<th>bank_account_number</th>
			<td><input type="number" name="bank_account_number" placeholder="enter bank account number"  onfocus="this.value=''" class="login-inp" /></td>
		</tr>
		<tr>
			<th>IFSC code</th>
			<td><input type="number" name="c_ifsc_code" placeholder="enter IFSC code"  onfocus="this.value=''" class="login-inp" /></td>
		</tr>
		<tr>
			<th>Gst number</th>
			<td><input type="number" name="c_gst_no" placeholder="enter Gst number"  onfocus="this.value=''" class="login-inp" /></td>
		</tr>
		<tr>
			<th>PAN card number</th>
			<td><input type="number" name="c_pan_card_no" placeholder="enter PAN card number"  onfocus="this.value=''" class="login-inp" /></td>
		</tr>
		<tr>
			<th>Address</th>
			<td><input type="text"  name="address" placeholder="enter your address" onfocus="this.value=''" class="login-inp" /></td>
		</tr>
		<tr>
			<th></th>
			<td><input type="submit" id="btn" name="submit" value="submit"/></td>
		</tr>
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