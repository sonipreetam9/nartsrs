<?php
include 'header.php';
?>
<div class="content">
	<div class="page-header">
		<ol class="breadcrumb">
			<li><a href="index.php">Dashboard</a></li>
			<li class="active">All Institute</li>
		</ol>
	</div>
	<div class="container-padding container-widget">

		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-title">
						All Institute
					</div>
					<div class="panel-body table-responsive">
						<table id="example0" class="table display">
							<thead>
								<tr>
									<th>Sr.</th>
									<th>Institute Head Name</th>
									<th>Institute Name</th>
									<th>Date</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$result = mysqli_query($link, "select * from tbl_instute order by id desc");
								$i = 0;
								while ($row = mysqli_fetch_array($result)) {
									$i++;
								?>
									<tr>
										<td><?php echo $i; ?></td>
										<td><?php echo $row['HeadFullName']; ?></td>
										<td><?php echo $row['CentreName']; ?></td>
										<td>
											<?php
											$orgDate = $row['addon'];
											$newDate = date("d-M-Y", strtotime($orgDate));
											echo $newDate;
											?>
										</td>
										<td>
											<a href="institute_details.php?id=<?= $row['id']; ?>" class="btn btn-icon btn-xs btn-success mr-1">
												view Details
											</a>
											<a href="student_details.php?id=<?= $row['id']; ?>" class="btn btn-icon btn-xs btn-warning mr-1">
												Verify Institute
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