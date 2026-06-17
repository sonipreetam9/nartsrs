<?php
include 'header.php';

	$lnnnk="SELECT * FROM tbl_noti limit 1";
	//echo $lnnnk;
	$sel=mysqli_query($link,$lnnnk);
	$dataq=mysqli_fetch_array($sel);
	
	$di = $dataq['id'];
?>
<div class="content">
  <div class="page-header">
      <ol class="breadcrumb">
        <li><a href="index.php">Dashboard</a></li>
        <li class="active">Notification</li>
      </ol>
  </div>
<div class="container-padding container-widget">

  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-title">
          Notification
        </div>
        <div class="panel-body table-responsive">

				<?php
		        	if(isset($_POST["submit"])){
		        		$text=mysqli_real_escape_string($link,$_POST['text']);
						$result=mysqli_query($link,"update tbl_noti set text='$text' where id='$di' ");
						if($result){
							?>
							<div class="alert alert-success bg-success text-white" role="alert">Updated successfully.</div>
							<?php
							header("Refresh:1; url=notification.php");
						}
						else{
							?> 
								<p class="label label-danger">Error.</p>
				    		<?php
						}
				
		        	}
				?>
        	<div class="col-md-12">
        		<form role="form" method="post" enctype="multipart/form-data">
        			<label>Update Notification</label>
                    <textarea name="text" class="form-control" placeholder="Enter Msg for user"><?= $dataq['text']; ?></textarea>
                    <br>
                    <input type="submit" name="submit" value="Update" class="btn btn-success">
        		</form>
        	</div>
            
        </div>
      </div>
    </div>
    <!-- End Panel -->
  </div>
</div>
<?php
include 'footer.php';
?>
<script src="js/datatables/datatables.min.js"></script>
<script>
$(document).ready(function() {
    $('#example0').DataTable();
} );
</script>