<?php
include 'header.php';
?>
<div class="content">
    <div class="page-header">
        <ol class="breadcrumb">
            <li><a href="index.php">Dashboard</a></li>
            <li class="active">All Payments</li>
        </ol>
    </div>
    <div class="container-padding container-widget">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-title">
                        All Payments
                    </div>
                    <div class="panel-body table-responsive">
                    <?php
					if (isset($_POST["updatess"])) {
						$bill = $_POST['id'];
                        $rec = mysqli_real_escape_string($link, $_REQUEST['rec']);
                        
						$queryy = "insert into tbl_payment (pt_id,rec) values('$bill','$rec')";
                        //echo $queryy;
                        $result = mysqli_query($link, $queryy);
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
                                    <th>Patient Info</th>
                                    <th>Total Payment</th>
                                    <th>Total Received</th>
                                    <th>Balance</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $result = mysqli_query($link, "SELECT *, 
					(SELECT IFNULL(SUM(payment),0)Total FROM tbl_record WHERE pid=c.id)'Total',
					(SELECT IFNULL(SUM(rec),0)Paid FROM tbl_payment WHERE pt_id=c.id)'Paid',
					(
					(SELECT IFNULL(SUM(payment),0)Total FROM tbl_record WHERE pid=c.id)-
					(SELECT IFNULL(SUM(rec),0)Paid FROM tbl_payment WHERE pt_id=c.id)
					)'Balance'
					FROM tbl_patient c");
                                $i = 0;
                                while ($row = mysqli_fetch_array($result)) {
                                    $i++;
                                ?>
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td>
                                            <?= $row['name']; ?>
                                            <br>
                                            <?= $row['phone']; ?>
                                        </td>
                                        <td><?php echo $row['Total']; ?></td>
                                        <td><?php echo $row['Paid']; ?></td>
                                        <td><?php echo $row['Balance']; ?></td>
                                        <th>
                                            <a data-toggle="modal" data-target="#update<?= $row['id']; ?>" class="btn btn-icon btn-xs btn-success mr-1">
												Received
											</a>

											<div class="modal fade modalbox" id="update<?= $row['id']; ?>" tabindex="-1" role="dialog" style="display: none;">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<button type="button" class="close" data-dismiss="modal">&times;</button>
															<h4 class="modal-title">Received From <?= $row['name']; ?></h4>
														</div>
														<div class="modal-body">
															<form method="post" enctype="multipart/form-data">
																<input type="hidden" value="<?php echo $row['id']; ?>" name="id">
																<div class="row">
																	<div class="col-md-12 col-xs-12">
																		<div class="form-group">
																			<label for="input1" class="form-label">Name</label>
																			<input type="text" class="form-control" name="rec">
																		</div>
																	</div>
																	<div class="col-md-12 col-xs-12">
																		<input type="submit" class="btn btn-success" name="updatess" value="Recevied">
																		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
																	</div>
																</div>
															</form>
														</div>
													</div>
												</div>
											</div>
                                        </th>
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