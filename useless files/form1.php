<?php
session_start();

if(isset($_GET['key']))
{
	unset($_SESSION["table_ajax"][$_REQUEST['key']]);

}
else  if(isset($_POST['item_description'])||$_POST['item_description']!=null)
{

	            $_SESSION["table_ajax"][]=array
				(
				"book_name"=>$_POST['book_name'],
				"book_category"=>$_POST['book_category'],
				"book_price"=>$_POST['book_price'],
				"book_publisher"=>$_POST['book_publisher'],
				"book_published"=>$_POST['book_published'],
				"book_edition"=>$_POST['book_edition'],
				
				);
}
?>
				 <div class="box-body">
			<div style="overflow-x:auto;">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
            
                <tr >
                  <th> S. No.</th>
                  <th> book name</th>
				  <th> book category</th>
                  <th> book price</th>
                  <th> book publisher</th>
                  <th> book published</th>
                  <th> book edition </th>
                </tr>
                </thead>
                <tbody>
			<?php		
				$counter = 1;
				foreach($_SESSION["table_ajax"] as $key=>$data)
				{
					//print_r($data);
				?>
                <tr>
				   <td><?php echo $counter; ?></td>
				   <td><?php echo $data["book name"];?></td>
				   <td><?php echo $data["book category"];?></td>
				   <td><?php echo $data["book price"];?></td>
				   <td><?php echo $data["book publisher"];?></td>
				   <td><?php echo $data["book published"];?></td>
				   <td><?php echo $data["book edition "];?></td> 
				 </tr>
				<?php 
				$counter++; 
				}
				?>
				</tbody>
                <tfoot>
                </tfoot>
              </table>
			  </div>
			  </div>
			   <a href="form2.php" class="btn btn-metis-2"> Submit </a>
            <!-- /.box-body -->
          