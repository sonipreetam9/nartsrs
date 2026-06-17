<?php
include 'header.php';
?>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />">
<div class="content">
	<div class="page-header">
		<ol class="breadcrumb">
			<li><a href="index.php">Dashboard</a></li>
			<li class="active">All Record</li>
		</ol>
	</div>
	<div class="container-padding container-widget">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-title">
						All Record
					</div>
					<div class="panel-body table-responsive">
						<table id="example0" class="table display">
							<thead>
								<tr>
									<th>Sr.</th>
									<th>Patient Info</th>
									<th>Diagnose</th>
									<th>Treatment</th>
									<th>Remark</th>
									<th>Next App</th>
									<th>Payment</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$result = mysqli_query($link, "select * from tbl_record order by Id desc");
								if (mysqli_num_rows($result) > 0) {
									$i = 0;
									while ($row = mysqli_fetch_array($result)) {
										$i++;
								?>
										<tr>
											<td><?php echo $i; ?></td>
											<td>
												<?php
												$ccat_id = $row['pid'];
												$auth = "select * from tbl_patient WHERE id='$ccat_id'";
												$au = mysqli_query($link, $auth);
												$o = mysqli_fetch_array($au);
												echo "Name: " . $o['name'] . "<br>";
												echo "Phone: " . $o['phone'] . "<br>";
												echo "Address: " . $o['address'];
												?>
											</td>
											<td><?php echo $row['diagnose']; ?></td>
											<td><?php echo $row['treatment']; ?></td>
											<td><?php echo $row['remark']; ?></td>
											<td>
											<?php 
											echo "Next ".$row['dmcont']." ".$row['mon_day']."<br>";
											echo "Times ".$row['times'];
											?>
											</td>
											<td><?php echo $row['payment']; ?></td>
										</tr>
								<?php
									}
								} else {
								}
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>


		</div>
	</div>
</div>

<?php
include 'footer.php';
?>
<script src="js/datatables/datatables.min.js"></script>
<script>
	$(document).ready(function() {
		$('#example0').DataTable();
	});
</script>