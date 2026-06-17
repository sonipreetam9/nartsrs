<?php
include 'header.php';
?>
<div class="content">
	<div class="page-header">
		<ol class="breadcrumb">
			<li><a href="index.php">Dashboard</a></li>
			<li class="active">All Students</li>
		</ol>
	</div>
	<div class="container-padding container-widget">

		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-title">
						All Students
					</div>
					<div class="panel-body table-responsive">
						<?php
						if (isset($_POST["updatess"])) {
							$bill = $_POST['id'];
							
							$sqll = "UPDATE tbl_student SET Verify='1' WHERE id=$bill"; 
							
							$result = mysqli_query($link, $sqll);
							if (mysqli_affected_rows($link)) {
							?>
								<div class="alert alert-success bg-success text-white" role="alert">Payment Received successfully.</div>
							<?php
								header('Location: ' . $_SERVER['PHP_SELF']);
							} else {
							?>
								<div class="alert alert-danger bg-danger text-white mb-0" role="alert">try again.</div>
							<?php
							}
						}
						?>
						<table id="example0" class="table display">
							<thead>
								<tr>
									<th>Sr.</th>
									<th>Student Name</th>
									<th>Date</th>
									<th>Status</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$result = mysqli_query($link, "select * from tbl_student order by id desc");
								$i = 0;
								while ($row = mysqli_fetch_array($result)) {
									$i++;
								?>
									<tr>
										<td><?php echo $i; ?></td>
										<td><?php echo $row['Name']; ?></td>
										<td>
											<?php
											$orgDate = $row['addon'];
											$newDate = date("d-M-Y", strtotime($orgDate));
											echo $newDate;
											?>
										</td>
										<td>
										<?php
										if($row['Verify']=="1"){
											echo "Verified";
										}else{
											echo "Verify Panding";
										}
										?>
										</td>
										<td>
											<a href="student_details.php?id=<?= $row['id']; ?>" class="btn btn-icon btn-xs btn-success mr-1">
												view Details
											</a>
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
	</div>
	<?php
	include 'footer.php';
	?>
	<script src="js/datatables/datatables.min.js"></script>
	<script>
		$(document).ready(function() {
			$('#example0').DataTable();
			$('#example1').DataTable();
		});
	</script>