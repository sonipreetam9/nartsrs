<?php
include 'header.php';
$today = date("Y-m-d"); 
?>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />">
<div class="content">
	<div class="page-header">
		<ol class="breadcrumb">
			<li><a href="index.php">Dashboard</a></li>
			<li class="active">Add Record</li>
		</ol>
	</div>
	<div class="container-padding container-widget">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-title">
						Add Record
					</div>
					<div class="panel-body">
						<?php
						if (isset($_POST["btnsave"])) {
							$pid = mysqli_real_escape_string($link, $_REQUEST['pid']);
							$diagnose = mysqli_real_escape_string($link, $_REQUEST['diagnose']);
							$treatment = mysqli_real_escape_string($link, $_REQUEST['treatment']);
							$remark = mysqli_real_escape_string($link, $_REQUEST['remark']);
							$dmcont = mysqli_real_escape_string($link, $_REQUEST['dmcont']);
							$payment = mysqli_real_escape_string($link, $_REQUEST['payment']);
							$rec = mysqli_real_escape_string($link, $_REQUEST['rec']);
							$mon_day = mysqli_real_escape_string($link, $_REQUEST['mon_day']);
							$times = mysqli_real_escape_string($link, $_REQUEST['times']);
							
							$queryy = "insert into tbl_record (pid,diagnose,treatment,remark,dmcont,mon_day,times,payment) values('$pid','$diagnose','$treatment','$remark','$dmcont','$mon_day','$times','$payment')";
							//echo $queryy;
							$result = mysqli_query($link, $queryy);
							$last_id = mysqli_insert_id($link);
							if (mysqli_affected_rows($link)) {
								$quer = "insert into tbl_payment (pt_id,rid,rec) values('$pid','$last_id','$rec')";
								//echo $queryy;
								$resulttt = mysqli_query($link, $quer);
								if($mon_day=='Days'){
									$quers = "insert into tbl_next (pt_id,rid,date,next_date) values('$pid','$last_id','$today',DATE_ADD('$today', INTERVAL '$dmcont' day))";
									//echo $quers; 
									$resulssttt = mysqli_query($link, $quers);
								}else{
									$quers = "insert into tbl_next (pt_id,rid,date,next_date) values('$pid','$last_id','$today',DATE_ADD('$today', INTERVAL '$dmcont' month))";
									//echo $quers; 
									$resulssttt = mysqli_query($link, $quers);
								}
								
								
								header('Location: ' . $_SERVER['PHP_SELF']);
						?>
								<div class="alert alert-success bg-success text-white" role="alert">Record Added successfully.</div>
							<?php

							} else {
							?>
								<div class="alert alert-danger bg-danger text-white mb-0" role="alert">Not successfully try submitting again.</div>
						<?php
							}
						}
						?>
						<form method="post" enctype="multipart/form-data">
							<div class="col-md-12 col-xs-12">
								<div class="form-group">
									<label for="input1" class="form-label">Select Patient</label>
									<select class="form-control js-example-basic-single" name="pid" required="">
										<option value="">Select Patient</option>
										<?php
										$category = mysqli_query($link, "select * from tbl_patient");
										while ($cat = mysqli_fetch_array($category)) {
										?>
											<option value="<?= $cat['id']; ?>"><?= $cat['name']; ?> (<?= $cat['phone']; ?>,<?= $cat['address']; ?>)</option>
										<?php
										}
										?>
									</select>
								</div>
							</div>
							<div class="col-md-12 col-xs-12">
								<div class="form-group">
									<label for="input1" class="form-label">Diagnose</label>
									<textarea class="form-control" name="diagnose" rows="2"></textarea>
								</div>
							</div>
							<div class="col-md-12 col-xs-12">
								<div class="form-group">
									<label for="input1" class="form-label">Treatment</label>
									<textarea class="form-control" name="treatment" rows="2"></textarea>
								</div>
							</div>
							<div class="col-md-12 col-xs-12">
								<div class="form-group">
									<label for="input1" class="form-label">Remark</label>
									<textarea class="form-control" name="remark" rows="2"></textarea>
								</div>
							</div>
							<div class="col-md-4 col-xs-12">
								<div class="form-group">
									<label for="input1" class="form-label" style="font-weight: bold;">Next App.(Ex: After 15 Days Or 1 Month - 3 Times)</label>
									<div class="" style="margin: 0;">
										<div class="col-md-4 col-xs-4">
											<select class="form-control" name="dmcont" required="">
												<option value="">Select</option>
												<?php
												for($s=1;$s<32;$s++){
													?>
													<option value="<?= $s; ?>"><?= $s; ?></option>
													<?php
												}
												?>
												
											</select>
										</div>
										<div class="col-md-8 col-xs-8">
											<select class="form-control" name="mon_day" required="">
												<option value="">Select</option>
												<option value="Day">Days</option>
												<option value="Month">Month</option>
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-2 col-xs-12">
								<div class="form-group">
									<label for="input1" class="form-label">How Many Times</label>
									<input type="number" class="form-control" name="times">
								</div>
							</div>
							<div class="col-md-2 col-xs-12">
								<div class="form-group">
									<label for="input1" class="form-label">Complete Payment</label>
									<input type="text" class="form-control fat" id="num1" name="payment">
								</div>
							</div>
							<div class="col-md-2 col-xs-12">
								<div class="form-group">
									<label for="input1" class="form-label">Paid</label>
									<input type="text" class="form-control fat" id="num2" name="rec">
								</div>
							</div>
							<div class="col-md-2 col-xs-12">
								<div class="form-group">
									<label for="input1" class="form-label">Balance</label>
									<input type="text" class="form-control" id="subt" readonly="">
								</div>
							</div>
							
							<div class="col-md-12 col-xs-12">
								<input type="submit" class="btn btn-default" name="btnsave" value="Save">
							</div>
						</form>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>

<?php
include 'footer.php';
?>
<script>
	$(function() {
		$("#num1, #num2").on("keydown keyup", sum);

		function sum() {
			$("#subt").val(Number($("#num1").val()) - Number($("#num2").val()));
		}
	});
</script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script>
	$(document).ready(function() {
		$('.js-example-basic-single').select2();
	});
</script>

<script src="js/datatables/datatables.min.js"></script>
<script>
	$(document).ready(function() {
		$('#example0').DataTable();
	});
</script>