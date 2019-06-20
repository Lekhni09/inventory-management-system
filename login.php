<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>login page</title>
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
		<h1> Log in:</h1>
	</div>
	<!-- end logo -->
	
	<div class="clear"></div>
	
	<!--  start loginbox ................................................................................. -->
	<div id="loginbox">
	
	<!--  start login-inner -->
	<div id="login-inner">
		<table border="0" cellpadding="0" cellspacing="0">
		<form action="login_user.php" method="post">
		<tr>
			<th>username:</th>
			<td><input type="text" name="username" style="color: #161616;"  placeholder="Enter full name" class="login-inp" required /></td>
		</tr>
		<tr>
			<th>Password:</th>
			<td><input type="password" name="password" style="color: #161616;"  placeholder="******" onfocus="this.value=''" class="login-inp" required /></td>
		</tr>
		<tr>
		<th><p><strong>Role:<strong></p><th/>
			<br>
			<select name="role_type" style="color: #161616; width:220px;" class="login-inp" placeholder="Select the role type"  id="role_type" required>
					<option value="" >Select the role type</option>
					<option value="admin-login">admin-login</option>
					<option value="staff-login">staff-login</option>
			</select>
    	</tr>
		
			<p><strong>WAIT  !!  FIRST YOU NEED TO <a href="signup.php" style="color: chocolate;" > SIGN-UP. </strong></p><br>
			<br><br><br>
			
		
		</th>
		
			<td><input type="image" src="images/log.png" width="150" height="140" align="middle" hspace="100" id="btn" name="submit_btn" value="submit" alt="Submit Form" /></td>
			
		
		</form>
		
		
		</table>
	</div>
 	<!--  end login-inner -->
	<div class="clear"></div>
	
 </div>
 <!--  end loginbox -->
 
	<!--  start forgotbox ................................................................................... -->
	<div id="forgotbox">
		<div id="forgotbox-text">Please send us your email and we'll reset your password.</div>
		<!--  start forgot-inner -->
		<div id="forgot-inner">
		<table border="0" cellpadding="0" cellspacing="0">
		<tr>
			<th>Email address:</th>
			<td><input type="text" value=""   class="login-inp" /></td>
		</tr>
		<tr>
			<th> </th>
			<td><input type="button" class="submit-login"  /></td>
			
		</tr>
		<tr>
			<th> </th>
			<td><button type="button">admin-login</button></td>
			
		</tr>
		</table>
		</div>
		<!--  end forgot-inner -->
		<div class="clear"></div>
		<a href="" class="back-login">Back to login</a>
	</div>
	<!--  end forgotbox -->

</div>
<!-- End: login-holder -->
</body>
</html>