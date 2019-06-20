<html>
	<head>
	<title>add table</table>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
	<div class="container">
	<br/>
	<br/>
	<h2 align="center">Dynamically adding table</h2>
	<div class="form-group">
		<form name="add name" id="add_name">
			<table class="table table-bordered" id="dynamic_field">
			<tr>
				<td><input type="text" name="name[]" id="name" placeholder="enter name" </td>
				<td><button type="button "name="add" id="add" class="btn btn-success" ><button/></td>
				</tr>
				</table>
				<input type="button" name="submit" id="submit" value="submit">
				</form>
				</div>
				</div>
				<body/>
				</html>
			<script>
			$(document).ready(function)(){
				var i=1;
				$('#add').click(function)(){
				i++;
					$('$dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="name[]" id="name" placeholder="enter name" class="form-control name_list"/></td><td><button name="add" id="add" class="btn btn-success"> addmore</button> name="remove" id="'i+'" class="btn btn-danger btn_remove">x<button/></td></tr>');				
					
				});
				
				$(document).on('click','.btn_remove',function(){
					var button_id=$(this).attr("id");
					$("#row"+button_id+"").remove()
			});
			$('#submit').click(function(){
				$.ajax({
					url: "name.php",
					method="post",
					date:$('#add_name').serialize();
					success: function(data)
					$('#add_name')[0].reset();
				}					
			});
			});
			</script>