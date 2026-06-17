<?php
include 'header.php';
?>
<div class="content">
	<div class="page-header">
		<ol class="breadcrumb">
			<li><a href="index.php">Dashboard</a></li>
			<li class="active">All News</li>
		</ol>
	</div>
	<div class="container-padding container-widget">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-title">
						All News
					</div>
					<div class="panel-body table-responsive">
						<?php
						if (isset($_POST["complete"])) {
							$bill = $_POST['id'];
							$result = mysqli_query($link, "delete from tbl_news where id=$bill ");
							if ($result) {
						?>
								<div class="alert alert-success bg-success text-white" role="alert">Deleted Data</div>
							<?php
							} else {
							?>
								<p class="label label-danger"> Error. </p>
						<?php
							}
						}
						?>
						<table id="example0" class="table display">
							<thead>
								<tr>
									<th>Sr.</th>
									<th>Title</th>
									<th>Photo</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$result = mysqli_query($link, "select * from tbl_news order by id desc");
								$i = 0;
								while ($row = mysqli_fetch_array($result)) {
									$i++;
								?>
									<tr>
										<td><?= $i; ?></td>
										<td><?= $row['title']; ?></td>
										<td>
											<img src="<?= $row['file']; ?>" width="30px" height="30px">
										</td>
										<td>

											<a href="edit_blog.php?id=<?= $row['id']; ?>" class="btn btn-icon btn-xs btn-success mr-1">
												Edit
											</a>

											<a data-toggle="modal" data-target="#Confirm<?= $row['id']; ?>" class="btn btn-icon btn-xs btn-danger mr-1">
												Delete
											</a>

											<div class="modal fade modalbox" id="Confirm<?= $row['id']; ?>" tabindex="-1" role="dialog" style="display: none;">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<button type="button" class="close" data-dismiss="modal">&times;</button>
															<h4 class="modal-title">Are you sure for delete</h4>
														</div>
														<div class="modal-body">
															<form method="post" enctype="multipart/form-data">
																<input type="hidden" value="<?php echo $row['id']; ?>" name="id">
																<input type="hidden" value="<?php echo $row['user_id']; ?>" name="user_id">
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
		});
	</script>