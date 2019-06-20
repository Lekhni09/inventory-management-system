<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>order</title>
<link rel="stylesheet" href="css/screen.css" type="text/css" media="screen" title="default" />
<!--[if IE]>
<link rel="stylesheet" media="all" type="text/css" href="css/pro_dropline_ie.css" />
<![endif]-->

<!--  jquery core -->
<script src="js/jquery/jquery-1.4.1.min.js" type="text/javascript"></script>
 
<!--  checkbox styling script -->
<script src="js/jquery/ui.core.js" type="text/javascript"></script>
<script src="js/jquery/ui.checkbox.js" type="text/javascript"></script>
<script src="js/jquery/jquery.bind.js" type="text/javascript"></script>
<script type="text/javascript">
$(function(){
	$('input').checkBox();
	$('#toggle-all').click(function(){
 	$('#toggle-all').toggleClass('toggle-checked');
	$('#mainform input[type=checkbox]').checkBox('toggle');
	return false;
	});
});
</script>  


<![if !IE 7]>

<!--  styled select box script version 1 -->
<script src="js/jquery/jquery.selectbox-0.5.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('.styledselect').selectbox({ inputClass: "selectbox_styled" });
});
</script>
 

<![endif]>


<!--  styled select box script version 2 --> 
<script src="js/jquery/jquery.selectbox-0.5_style_2.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('.styledselect_form_1').selectbox({ inputClass: "styledselect_form_1" });
	$('.styledselect_form_2').selectbox({ inputClass: "styledselect_form_2" });
});
</script>

<!--  styled select box script version 3 --> 
<script src="js/jquery/jquery.selectbox-0.5_style_2.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('.styledselect_pages').selectbox({ inputClass: "styledselect_pages" });
});
</script>

<!--  styled file upload script --> 
<script src="js/jquery/jquery.filestyle.js" type="text/javascript"></script>
<script type="text/javascript" charset="utf-8">
$(function() {
	$("input.file_1").filestyle({ 
	image: "images/forms/upload_file.gif",
	imageheight : 29,
	imagewidth : 78,
	width : 300
	});
});
</script>

<!-- Custom jquery scripts -->
<script src="js/jquery/custom_jquery.js" type="text/javascript"></script>
 
<!-- Tooltips -->
<script src="js/jquery/jquery.tooltip.js" type="text/javascript"></script>
<script src="js/jquery/jquery.dimensions.js" type="text/javascript"></script>
<script type="text/javascript">
$(function() {
	$('a.info-tooltip ').tooltip({
		track: true,
		delay: 0,
		fixPNG: true, 
		showURL: false,
		showBody: " - ",
		top: -35,
		left: 5
	});
});
</script> 

<!--  date picker script -->
<link rel="stylesheet" href="css/datePicker.css" type="text/css" />
<script src="js/jquery/date.js" type="text/javascript"></script>
<script src="js/jquery/jquery.datePicker.js" type="text/javascript"></script>
<script type="text/javascript" charset="utf-8">
        $(function()
{

// initialise the "Select date" link
$('#date-pick')
	.datePicker(
		// associate the link with a date picker
		{
			createButton:false,
			startDate:'01/01/2005',
			endDate:'31/12/2020'
		}
	).bind(
		// when the link is clicked display the date picker
		'click',
		function()
		{
			updateSelects($(this).dpGetSelected()[0]);
			$(this).dpDisplay();
			return false;
		}
	).bind(
		// when a date is selected update the SELECTs
		'dateSelected',
		function(e, selectedDate, $td, state)
		{
			updateSelects(selectedDate);
		}
	).bind(
		'dpClosed',
		function(e, selected)
		{
			updateSelects(selected[0]);
		}
	);
	
var updateSelects = function (selectedDate)
{
	var selectedDate = new Date(selectedDate);
	$('#d option[value=' + selectedDate.getDate() + ']').attr('selected', 'selected');
	$('#m option[value=' + (selectedDate.getMonth()+1) + ']').attr('selected', 'selected');
	$('#y option[value=' + (selectedDate.getFullYear()) + ']').attr('selected', 'selected');
}
// listen for when the selects are changed and update the picker
$('#d, #m, #y')
	.bind(
		'change',
		function()
		{
			var d = new Date(
						$('#y').val(),
						$('#m').val()-1,
						$('#d').val()
					);
			$('#date-pick').dpSetSelected(d.asString());
		}
	);

// default the position of the selects to today
var today = new Date();
updateSelects(today.getTime());

// and update the datePicker to reflect it...
$('#d').trigger('change');
});
</script>

<!-- MUST BE THE LAST SCRIPT IN <HEAD></HEAD></HEAD> png fix -->
<script src="js/jquery/jquery.pngFix.pack.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
$(document).pngFix( );
});
</script>
</head>
<body> 
<!-- Start: page-top-outer -->
<div id="page-top-outer">    

<!-- Start: page-top -->
<div id="page-top">

	<!-- start logo -->
	<div id="logo">
	<a href=""><h1>Inventory Management Software<h1/>
	</div>
	<!-- end logo -->
	<div id="panel">
	<h1 align="right">Staff Panel</h1>
	</div>
	<!--  start top-search -->
	
 	<!--  end top-search -->
 	<div class="clear"></div>

</div>
<!-- End: page-top -->

</div>
<!-- End: page-top-outer -->
	
<div class="clear">&nbsp;</div>
 
<!--  start nav-outer-repeat................................................................................................. START -->
<div class="nav-outer-repeat"> 
<!--  start nav-outer -->
<div class="nav-outer"> 

		<!-- start nav-right -->
		<div id="nav-right">
		<script>
	function deleletconfig(){
    var del=confirm("Are you sure you want to log-out ?");
	if (del==true){
	}
	return del;
	}
  </script> 
		
			<div class="nav-divider">&nbsp;</div>
			<a href="logout.php" onclick="return deleletconfig()" id="logout"><img src="images/shared/nav/nav_logout.gif" width="64" height="14" alt="" /></a>
			<div class="clear">&nbsp;</div>
		
			<!--  start account-content -->	
			
			<!--  end account-content -->
		
		</div>
		<!-- end nav-right -->


		<!--  start nav -->
		<div class="nav">
		<div class="table">
		
		<ul class="select"><li><a href="home.php"><b>Home</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		<div class="nav-divider">&nbsp;</div>
		                    
		<ul class="current"><li><a href="#nogo"><b>Products</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub show">
			<ul class="sub">
				<li><a href="viewproducts.php">View all products</a></li>
				<li><a href="stock_dropdown.php">View stock</a></li>
				
				
			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		<div class="nav-divider">&nbsp;</div>
		
		<ul class="select"><li><a href="order.php"><b>order</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub">
			<ul class="sub">
				
				<li><a href="order.php">Place an order</a>
				</li><li><a href="vieworder.php">View all orders</a></li>
				
			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		
		
		
		
		<div class="nav-divider">&nbsp;</div>
		
	
		
		<div class="clear"></div>
		</div>
		<div class="clear"></div>
		</div>
		<!--  start nav -->

</div>
<div class="clear"></div>
<!--  start nav-outer -->
</div>
<!--  start nav-outer-repeat................................................... END -->
 
 <div class="clear"></div>
 
<!-- start content-outer -->
<div id="content-outer">
<!-- start content -->
<div id="content">


<div id="page-heading"><h1>Place your order here...</h1></div>


<table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
<tr>
	<th rowspan="3" class="sized"><img src="images/shared/side_shadowleft.jpg" width="20" height="300" alt="" /></th>
	<th class="topleft"></th>
	<td id="tbl-border-top">&nbsp;</td>
	<th class="topright"></th>
	<th rowspan="3" class="sized"><img src="images/shared/side_shadowright.jpg" width="20" height="300" alt="" /></th>
</tr>
<tr>
	<td id="tbl-border-left"></td>
	<td>
	<!--  start content-table-inner -->
	<div id="content-table-inner">
	
	<table border="0" width="100%" cellpadding="0" cellspacing="0">
	<tr valign="top">
	<td>
	
	
		<!--  start step-holder -->
		<div id="step-holder">
			<div class="step-no">1</div>
			<div class="step-dark-left"><a href="">Add order details</a></div>
			<div class="step-dark-right">&nbsp;</div>
			<div class="step-no-off"></div>
			
			
			<div class="clear"></div>
		</div>
		<!--  end step-holder -->
	
		<!-- start id-form -->
		<table border="0" cellpadding="0" cellspacing="0"  id="id-form">
		<form action="order_actionpage.php" method="post"  >
		<tr>
			<tr>
			<th valign="top">Customer Name:</th>	
			<td><input type="text" name="c_id" class="inp-form" /></td>
		
			
			
			
		</tr>
		<tr>
			<th valign="top">Book Name:</th>
			
		<td><select name="p_id" class="inp-form-error" id="book_id">
							<option value="" >Select the book</option>
							<?php 
                            include 'conn.php';
							$res = mysqli_query($conn,"select * from book");
							
							$i=0;
							while($row=mysqli_fetch_array($res))
							{ 
							?>
						    <option value="<?php echo $row["book_id"];?>"><?php echo $row["book_name"];?></option>
							<?php  
							} 
							?>
							</select>	</td>
			
			<td></td>
		</tr>
		
			<tr>
			<th valign="top">order date:</th>
			<td><input type="date" name="order_date" class="inp-form" /></td>
			<td></td>
		</tr>
		<tr>
			<th valign="top">Delivery date:</th>
			<td><input type="date" name="delivery_date" class="inp-form" /></td>
			<td></td>
		</tr>
		<tr>
			<th valign="top">Quantity:</th>
			<td><input type="number" id="quantity" name="quantity" class="inp-form" /></td>
			<td></td>
		</tr>
		<script type="text/javascript">
					function calculate(){
						
					var quan=document.getElementById("quantity").value;
					var rpc=document.getElementById("rpc").value;
					var total=(quan*rpc);
					document.getElementById("totalshow").value=total;
					}
					</script>
		<tr>
			<th valign="top">Rate per unit:</th>
			<td><input type="text" id="rpc" name="rpc" onKeyup="calculate();"class="inp-form" /></td>
			<td></td>
		</tr>
		
			
		<tr>
			<th valign="top">sub total:</th>
			<td><input type="text" id="totalshow" name="sub_total" class="inp-form-error" readonly /></td>
			<td></td>
		</tr>
		<script type="text/javascript">
					function sgst12(){
						
					var totalshow=document.getElementById("totalshow").value;
					var sgst=document.getElementById("sgst").value;
					//alert(totalshow);
					var sgsttotal=((totalshow*sgst)/100);
					
					document.getElementById("sgst_amount").value=sgsttotal;
					
					document.getElementById("sgst1").value=sgst;
					
					}
					
					function cgst12(){
						
					var totalshow=document.getElementById("totalshow").value;
					var cgst=document.getElementById("cgst").value;
					var cgsttotal=(totalshow*cgst/100);
					document.getElementById("cgst_amount").value=cgsttotal;
					document.getElementById("cgst1").value=cgst;
					}
					
					function igst12()
					{	
					var totalshow=document.getElementById("totalshow").value;
					var igst=document.getElementById("igst").value;
					var igsttotal=(totalshow*igst/100);
					
					document.getElementById("igst_amount").value=igsttotal;
					document.getElementById("igst1").value=igst;
					}
					
					function ttlamt()
					{
					var totalshow=document.getElementById("totalshow").value;
					var sgst_amt=document.getElementById("sgst_amount").value;
					var cgst_amt=document.getElementById("cgst_amount").value;
					var igst_amt=document.getElementById("igst_amount").value;
                    var tax=Number(sgst_amt) + Number(cgst_amt) + Number(igst_amt);
				    var netamt2=Number(totalshow) + Number(tax) ;
					
					document.getElementById("net_total").value=netamt2;
					}
					
					function dis()
					{
					var totalshow=document.getElementById("totalshow").value;
					var discount=document.getElementById("discount").value;
					
				    var dis_amt=(totalshow*discount/100);
					document.getElementById("discount_amount").value=dis_amt;
					
					}
					function fin(){
						
					var net_total=document.getElementById("net_total").value;
					var discount_amount=document.getElementById("discount").value;
					var fa=Number(net_total) - Number(discount_amount) ;
					
					document.getElementById("final_amount").value=fa;
					}
					
					function calcu(){
						
					var final_amount=document.getElementById("final_amount").value;
					var paid=document.getElementById("paid").value;
					var du=Number(final_amount) - Number(paid) ;
					document.getElementById("due").value=du;
					}
					
				    </script>
					
					
					
		<tr>
			<th valign="top">SGST:</th>
			
			<td><select onChange="sgst12();" id="sgst" name="sgst" class="inp-form-error"/>
				<option value="">Select SGST % </option>
				<option value="8">8%</option>
				<option value="10">10%</option>
				<option value="12">12%</option>
				<option value="18">18%</option>
			<td/></select>
			<td></td>
		</tr>
		<tr>
			<th valign="top">SGST amount:</th>
			<td><input type="text" id="sgst_amount" name="sgst_amount" class="inp-form-error"/></td>
			<input type="hidden" id="sgst1" name="sgst1" placeholder="Total SGST Amount(in Rs.)" class="form-control"  readonly>
				
			<td></td>
		</tr>
		
		<tr>
			<th valign="top">CGST :</th>
			
			<td><select onChange="cgst12();" id="cgst" name="cgst" class="inp-form-error"/>
				<option value="">Select GST % </option>
				<option value="8">8%</option>
				<option value="10">10%</option>
				<option value="12">12%</option>
				<option value="18">18%</option>
			<td/></select>
			<td></td>
		</tr>
		<tr>
			<th valign="top">CGST amount:</th>
			<td><input type="text" id="cgst_amount" name="cgst_amount" class="inp-form-error"/></td>
			<td></td>
		</tr>
		
		<tr>
			<th valign="top">IGST:</th>
			
			<td><select onChange="igst12();" id="igst" name="igst" class="inp-form-error"/>
				<option value="">Select IGST % </option>
				<option value="8">8%</option>
				<option value="10">10%</option>
				<option value="12">12%</option>
				<option value="18">18%</option>
			<td/></select>
			<td></td>
		</tr>
		<tr>
			<th valign="top">IGST amount:</th>
			<td><input type="text" id="igst_amount" name="igst_amount" onKeyup="ttlamt();" class="inp-form-error"/></td>
			<td></td>
		</tr>
		
		<tr>
			<th valign="top">Net total:</th>
			<td><input type="text" id="net_total" name="net_total" class="inp-form-error"/></td>
			<td></td>
		</tr>
		
		<tr>
			<th valign="top">Discount (in %):</th>
			<td><input type="text" id="discount" name="discount" onKeyup="dis();"  class="inp-form-error"/></td>
			<td></td>
		</tr>
		
		<tr>
			<th valign="top">Discount amount:</th>
			<td><input type="text" id="discount_amount" onKeyup="fin();"  name="discount_amount" class="inp-form-error"/></td>
			<td></td>
		</tr>
		<tr>
			<th valign="top">Final amount:</th>
			<td><input type="text" id="final_amount" name="final_amount" class="inp-form-error"/></td>
			<td></td>
		</tr>
		
		
		<tr>
			<th valign="top">Paid:</th>
			<td><input type="text" id="paid" name="paid" onKeyup="calcu();" class="inp-form-error"/></td>
			<td></td>
		</tr>
		
		<tr>
			<th valign="top">Due(in Rs.):</th>
			<td><input type="text"  id="due" name="due" class="inp-form-error"/></td>
			<td></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit"  name="submit" value="Submit"/>
			<input type="reset" name="reset"  value="Reset"></td>
			<td></td>
		</tr>
		
	 <tr>		
	 <tr/>	
		
	
	</div>
	
	</div>
	</form>
	</table>
	<!-- end id-form  -->

	</td>
	
		
	<td>

	<!--  start related-activities -->
	
	<!-- end related-activities -->

</td>
</tr>
<tr>
<td><img src="images/shared/blank.gif" width="695" height="1" alt="blank" /></td>
<td></td>
</tr>
</table>
 
<div class="clear"></div>
 

</div>
<!--  end content-table-inner  -->
</td>
<td id="tbl-border-right"></td>
</tr>
<tr>
	<th class="sized bottomleft"></th>
	<td id="tbl-border-bottom">&nbsp;</td>
	<th class="sized bottomright"></th>
</tr>
</table>









 





<div class="clear">&nbsp;</div>

</div>
<!--  end content -->
<div class="clear">&nbsp;</div>
</div>
<!--  end content-outer -->

 

<div class="clear">&nbsp;</div>
    
<!-- start footer -->         
<div id="footer">
	<!--  start footer-left -->
	<div id="footer-left">
	 Designed and Developed by Lekhni Bhatngar. <a href="">www.inventorysoftware.com</a>.</div>
	<!--  end footer-left -->
	<div class="clear">&nbsp;</div>
</div>
<!-- end footer -->
 
</body>
</html>