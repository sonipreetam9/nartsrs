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
						<?php
						if (isset($_POST["updatess"])) {
							$bill = $_POST['id'];

							$sqll = "UPDATE tbl_instute SET verify='1' WHERE id=$bill";

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
									<th>Head Info</th>
									<th>Institute Info</th>
									<th>J. Date</th>
									<th>Status</th>
									<th>Password</th>
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
										<td>
											<?php
											echo "Name: " . $row['HeadFullName'] . "<br>";
											echo "F. Name: " . $row['HeadFatherName'] . "<br>";
											echo "M. Name: " . $row['HeadMotherName'] . "<br>";
											echo "Phone: " . $row['HeadPhone'] . "<br>";
											echo "Email: " . $row['HeadEmail'] . "<br>";
											echo "Gender: " . $row['HeadGender'];
											?>
										</td>
										<td>
											<?php
											echo "Name: " . $row['CentreName'] . "<br>";
											echo "State: " . $row['CentreState'] . "<br>";
											echo "City: " . $row['CentreCity'] . "<br>";
											echo "Phone: " . $row['CentrePhone'] . "<br>";
											echo "Email: " . $row['CentreEmail'];
											?>
										</td>
										<td>
											<?php
											$orgDate = $row['addon'];
											$newDate = date("d-M-Y", strtotime($orgDate));
											echo $newDate;
											?>
										</td>
										<td>
											<?php
											if ($row['verify'] == "0") {
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
											echo "Id: " . $row['CentreEmail'] . "<br>";
											$enrypt = $row['Password'];
											$dec = base64_decode(string: base64_decode($enrypt));
											echo "Password: " . $dec;
											?>
										</td>
										<td>
											<a href="institute_details.php?id=<?= $row['id']; ?>"
												class="btn btn-icon btn-xs btn-success mr-1">
												view Details
											</a>
											<a href="all_stu_for_instu.php?id=<?= $row['id']; ?>"
												class="btn btn-icon btn-xs btn-success mr-1">
												View All Students
											</a>
											<?php
											if ($row['verify'] == "0") {
												?>
												<a data-toggle="modal" data-target="#update<?= $row['id']; ?>"
													class="btn btn-icon btn-xs btn-warning mr-1">
													Verify
												</a>
												<?php
											} else {
												?>
												<a class="btn btn-icon btn-xs btn-danger mr-1">
													Verified
												</a>
												<?php
											}
											?>
											<div class="modal fade modalbox" id="update<?= $row['id']; ?>" tabindex="-1"
												role="dialog" style="display: none;">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<button type="button" class="close"
																data-dismiss="modal">&times;</button>
															<h4 class="modal-title">Verify <?= $row['CentreName']; ?></h4>
														</div>
														<div class="modal-body">
															<form method="post" enctype="multipart/form-data">
																<input type="hidden" value="<?php echo $row['id']; ?>"
																	name="id">
																<div class="row">
																	<div class="col-md-12 col-xs-12">
																		<input type="submit" class="btn btn-success"
																			name="updatess" value="Verify">
																		<button type="button" class="btn btn-default"
																			data-dismiss="modal">Close</button>
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
		$(document).ready(function () {
			$('#example0').DataTable();
			$('#example1').DataTable();
		});
	</script>