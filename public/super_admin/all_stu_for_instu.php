<?php
include 'header.php';
$id = $_GET['id'];
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

							$sqll = "UPDATE tbl_student SET verify='1' WHERE id=$bill";

							$result = mysqli_query($link, $sqll);
							if (mysqli_affected_rows($link)) {
						?>
								<div class="alert alert-success bg-success text-white" role="alert">Verified successfully.</div>
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
									<th>Student Info</th>
									<th>Centre Info</th>
									<th>Contact Info</th>
									<th>Status</th>
									<th>J. Date</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$result = mysqli_query($link, "select * from tbl_student where instu_id='$id' order by id desc");
								$i = 0;
								while ($row = mysqli_fetch_array($result)) {
									$i++;
								?>
									<tr>
										<td><?= $i; ?></td>
										<td>
											<?php
											echo "Reg: " . $row['REGISTRATION'] . "<br>";
											echo "Name: " . $row['Name'] . "<br>";
											echo "Fa/HU. Name: " . $row['FaHuName'] . "<br>";
											echo "MO. Name: " . $row['FaHuName'] . "<br>";
											echo "DOB: " . $row['DOB'] . "<br>";
											echo "CAT.: " . $row['Category'];
											?>
										</td>
										<td>
											<?php
											$instu_id = $row['instu_id'];
											$instusel = mysqli_query($link, "SELECT * FROM tbl_instute WHERE id='$instu_id'");
											$instu_data = mysqli_fetch_array($instusel);

											echo "Refno.: " . $instu_data['RefrenceNo'] . "<br>";
											echo "Name: " . $instu_data['CentreName'] . "<br>";
											echo "State: " . $instu_data['CentreState'] . "<br>";
											echo "Address: " . $instu_data['CentreAddress'] . "<br>";
											echo "Head: " . $instu_data['HeadFullName'];
											?>
										</td>
										<td>
											<?php
											echo "Mobile: " . $row['Mobile'] . "<br>";
											echo "Phone: " . $row['Phone'] . "<br>";
											echo "Email: " . $row['Emails'];
											?>
										</td>
										<td>
											<?php
											if ($row['Verify'] == "0") {
											?>
												Pending
											<?php
											} else {
											?>
												Verified
											<?php
											}
											?>
										</td>
										<td>
											<?php
											$orgDate = $row['jdate'];
											$newDate = date("d-M-Y", strtotime($orgDate));
											echo  $newDate;
											?>
										</td>
										<td>
											<a href="student_details.php?id=<?= $row['id']; ?>" class="btn btn-icon btn-xs btn-success mr-1">
												view Details
											</a>
											<?php
											if ($row['Verify'] == "0") {
											?>
												<a data-toggle="modal" data-target="#update<?= $row['id']; ?>" class="btn btn-icon btn-xs btn-warning mr-1">
													Verify Student
												</a>
											<?php
											} else {
											?>
												<a class="btn btn-icon btn-xs btn-danger mr-1">
													Student Verified
												</a>
											<?php
											}
											?>
											<div class="modal fade modalbox" id="update<?= $row['id']; ?>" tabindex="-1" role="dialog" style="display: none;">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<button type="button" class="close" data-dismiss="modal">&times;</button>
															<h4 class="modal-title">Verify <?= $row['Name']; ?></h4>
														</div>
														<div class="modal-body">
															<form method="post" enctype="multipart/form-data">
																<input type="hidden" value="<?php echo $row['id']; ?>" name="id">
																<div class="row">
																	<div class="col-md-12 col-xs-12">
																		<input type="submit" class="btn btn-success" name="updatess" value="Verify">
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