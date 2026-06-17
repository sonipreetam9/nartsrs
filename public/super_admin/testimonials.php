<?php
include 'header.php';
?>
<div class="content">
  <div class="page-header">
      <ol class="breadcrumb">
        <li><a href="index.php">Dashboard</a></li>
        <li class="active">All Testimonials</li>
      </ol>
  </div>
<div class="container-padding container-widget">
  <div class="row">
  	
  	<div class="col-md-12">
    	<div class="panel panel-default">
    		<div class="panel-title">
	          	Add Testimonials
	        </div>
	        <div class="panel-body">
	        	<?php
		        	if(isset($_POST["btnsave"])){
					$name=mysqli_real_escape_string($link,$_REQUEST['name']);
					$position=mysqli_real_escape_string($link,$_REQUEST['position']);
					$text=mysqli_real_escape_string($link,$_REQUEST['text']);
					
					if(empty($_FILES['file']['tmp_name']) || !is_uploaded_file($_FILES['file']['tmp_name']))
					{
						$filepath2=null;
					}
					else
					{
					 $filename1=$_FILES['file']['name'];
					 $targetfile="uploads/";
					 $filetmp1=$_FILES['file']['tmp_name'];
					 $imageFileType1 = pathinfo($filename1);
					 
					 $ran=rand(999, 99999999);
					 if($imageFileType1["extension"]!="jpg" && $imageFileType1["extension"]!="png" && $imageFileType1["extension"]!="jpeg" && $imageFileType1["extension"]!="gif" && $imageFileType1["extension"]!="JPG")
					 {	
				 		?>
				    	<p class="alert alert-success"> Only jpg,png,jpeg and gif's are allowed.  </p>
				    	<?php
					 }
					 else
					   {
					   @move_uploaded_file($filetmp1,"uploads/".$ran.date("Y-m-d").'.'.$imageFileType1["extension"]);
					   $filepath2="uploads/".$ran.date("Y-m-d").'.'.$imageFileType1["extension"];
					   }
					}
					
					$queryy="insert into tbl_testi (name,position,text,file) values('$name','$position','$text','$filepath2')";
					//echo $queryy;
					$result=mysqli_query($link,$queryy);
					if(mysqli_affected_rows($link)){
								
					?>
					<div class="alert alert-success bg-success text-white" role="alert">Testimonials Added successfully.</div>
					<?php
						
					}
					else{		
					?>
					<div class="alert alert-danger bg-danger text-white mb-0" role="alert">Not successfully try submitting again.</div>
					<?php
					}
					
		        	}
		        ?>
		        
		        <?php
		        	if(isset($_POST["complete"])){
				 	$bill=$_POST['id'];
					$result=mysqli_query($link,"delete from tbl_testi where id=$bill ");
					if($result){
						?>
						<div class="alert alert-success bg-success text-white" role="alert">Deleted Data</div>
						<?php
					}
					else{
						?> 
						<p class="label label-danger"> Error.  </p>
			    		<?php
					}
		        	}
				?>
		        
	        	<form method="post" enctype="multipart/form-data">
	        		<div class="col-md-4 col-xs-12">
	              		<div class="form-group">
		                  <label for="input1" class="form-label">Name</label>
		                  <input type="text" class="form-control" name="name" required="">
		                </div>
	              	</div>
	              	<div class="col-md-4 col-xs-12">
	              		<div class="form-group">
		                  <label for="input1" class="form-label">Position</label>
		                  <input type="text" class="form-control" name="position" required="">
		                </div>
	              	</div>
	              	<div class="col-md-4 col-xs-12">
	              		<div class="form-group">
		                  <label for="input1" class="form-label">File</label>
		                  <input type="file" class="form-control" name="file" required="">
		                </div>
	              	</div>
	              	<div class="col-md-12 col-xs-12">
	              		<div class="form-group">
		                  <label for="input1" class="form-label">Discription</label>
		                  <textarea class="form-control" name="text" rows="4" required=""></textarea>
		                </div>
	              	</div>
	              	<div class="col-md-12 col-xs-12">
		          		<input type="submit" class="btn btn-default" name="btnsave" value="Save">
		          	</div>
	        	</form>
	        </div>
    	</div>
    </div>
  	
  	
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-title">
          All Testimonials
        </div>
        <div class="panel-body table-responsive">
            <table id="example0" class="table display">
                <thead>
                    <tr>
                    	<th>Sr.</th>
                    	<th>Name</th>
                        <th>Position</th>
                        <th>Pohto</th>
                        <th>Text</th>
                        <th>Action</th>
                    </tr>
                </thead> 
                <tbody>
                	<?php
				    $result=mysqli_query($link,"select * from tbl_testi order by id desc");
				    $i=0;
			        while($row=mysqli_fetch_array($result)){
			     	$i++;					
					?>
                    <tr>
                    	<td><?= $i;?></td>
                    	<td><?= $row['name'];?></td>
                        <td><?= $row['position'];?></td>
                        <td>
                        	<img src="<?=$row['file'];?>" width="50px" height="50px">
                    	</td>
                        <td>
                        	<div style="width: 250px; height: 100px; overflow-y: scroll;">
                        		<?= $row['text'];?>	
                        	</div>
                        </td>
                        <td>
                        	<a data-toggle="modal" data-target="#Confirm<?= $row['id'];?>" class="btn btn-icon btn-md btn-success mr-1">
			                    Delete
			                </a>
			                <div class="modal fade modalbox" id="Confirm<?= $row['id'];?>" tabindex="-1" role="dialog" style="display: none;">
							  <div class="modal-dialog">
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal">&times;</button>
							        <h4 class="modal-title">Are you sure for delete</h4>
							      </div>
							      <div class="modal-body">
							      	<form method="post" enctype="multipart/form-data">
							      		<input type="hidden" value="<?php echo $row['id'];?>" name="id">
							      		<input type="hidden" value="<?php echo $row['user_id'];?>" name="user_id">
						        		<div class="row">
							              	<div class="col-md-6 col-xs-12">
								          		<input type="submit" class="btn btn-success" name="complete" value="Delete">
								          	</div>
								          	<div class="col-md-6 col-xs-12">
								          		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								          	</div>
						        		</div>
						        	</form>
							      </div>
							    </div>
							  </div>
							</div>
                        </td>
                    </tr>
                    <?php
					}
				    ?>
                </tbody>
            </table>
        </div>
      </div>
    </div>
    <!-- End Panel -->
  </div>
  <!-- End Row -->
  
</div>
<!-- Start Footer -->
<?php
include 'footer.php';
?>
<script src="js/datatables/datatables.min.js"></script>
<script>
$(document).ready(function() {
    $('#example0').DataTable();
} );
</script>