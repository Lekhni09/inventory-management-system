<?php
if(!empty ($_POST['submit']))
{
		$customer_name=$_POST['first_name'];
		$customer_name = $_POST['customer_name'];
		$contact = $_POST['contact'];
		$item_name = $_POST['item_name'];
		$address = $_POST['address'];
		$quantity = $_POST['quantity'];
		$gst = $_POST['gst'];
		$discount = $_POST['discount'];
		$total_price = $_POST['total_price'];
		$invoice_date = $_POST['invoice_date'];
	
	
	
	
	
require("fpdf/fpdf.php");
$pdf=new fpdf();
$pdf->AddPage();
$pdf-> setFont("arial","B",16);
$pdf-> cell(10,10,"welcome",1,0,c);
$pdf->output();
?>