<?php
include 'header.php';
?>
<style>
	.img_url {
		background: #ddd;
		width: 100px;
		height: 100px;
		margin-bottom: 10px;
		display: block;
	}
</style>
<div class="content">
	<div class="page-header">
		<ol class="breadcrumb">
			<li><a href="index.php">Dashboard</a></li>
			<li class="active">Add Student</li>
		</ol>
	</div>
	<div class="container-padding container-widget">

		<div class="row">
			<div class="col-md-12">
				<?php
				if (isset($_POST["btnsave"])) {

					$app_for_admin_to = mysqli_real_escape_string($link, $_REQUEST['app_for_admin_to']);
					$DepartmentName = mysqli_real_escape_string($link, $_REQUEST['DepartmentName']);
					$TrainingCentre = mysqli_real_escape_string($link, $_REQUEST['TrainingCentre']);
					$TrainingCentreCode = mysqli_real_escape_string($link, $_REQUEST['TrainingCentreCode']);
					$SessionYear = mysqli_real_escape_string($link, $_REQUEST['SessionYear']);
					// $LateralEntry = mysqli_real_escape_string($link, $_REQUEST['LateralEntry']);
					// $LateralIfYes = mysqli_real_escape_string($link, $_REQUEST['LateralIfYes']);
					// $Mode = mysqli_real_escape_string($link, $_REQUEST['Mode']);
					$Name = mysqli_real_escape_string($link, $_REQUEST['Name']);
					$FaHuName = mysqli_real_escape_string($link, $_REQUEST['FaHuName']);
					$MotherName = mysqli_real_escape_string($link, $_REQUEST['MotherName']);
					$DOB = mysqli_real_escape_string($link, $_REQUEST['DOB']);
					$Gender = mysqli_real_escape_string($link, $_REQUEST['Gender']);
					// $Category = mysqli_real_escape_string($link, $_REQUEST['Category']);
					// $MaritalStatus = mysqli_real_escape_string($link, $_REQUEST['MaritalStatus']);
					// $Whether = mysqli_real_escape_string($link, $_REQUEST['Whether']);
					// $Nationality = mysqli_real_escape_string($link, $_REQUEST['Nationality']);
					// $Applicants = mysqli_real_escape_string($link, $_REQUEST['Applicants']);
					// $Unemployed = mysqli_real_escape_string($link, $_REQUEST['Unemployed']);
					// $WorkExperience = mysqli_real_escape_string($link, $_REQUEST['WorkExperience']);
					// $WorkIfYes = mysqli_real_escape_string($link, $_REQUEST['WorkIfYes']);
					$WorkYears = mysqli_real_escape_string($link, $_REQUEST['WorkYears']);
					// $WorkMonths = mysqli_real_escape_string($link, $_REQUEST['WorkMonths']);
					$Address = mysqli_real_escape_string($link, $_REQUEST['Address']);
					$Pin = mysqli_real_escape_string($link, $_REQUEST['Pin']);
					// $Mobile = mysqli_real_escape_string($link, $_REQUEST['Mobile']);
					// $Phone = mysqli_real_escape_string($link, $_REQUEST['Phone']);
					// $Emails = mysqli_real_escape_string($link, $_REQUEST['Emails']);
					$adr_no = mysqli_real_escape_string($link, $_REQUEST['adr_no']);
					$today = date("Y-m-d");


					if (empty($_FILES['ProductPhoto5']['tmp_name']) || !is_uploaded_file($_FILES['ProductPhoto5']['tmp_name'])) {
						$ProductPhoto5 = null;
					} else {
						$filename1pan = $_FILES['ProductPhoto5']['name'];
						$targetfile = "../uploads/";
						$filetmp1 = $_FILES['ProductPhoto5']['tmp_name'];
						$imageFileType1 = pathinfo($filename1pan);
						$ran = rand(999999, 999999999);
						if ($imageFileType1["extension"] != "jpg" && $imageFileType1["extension"] != "png" && $imageFileType1["extension"] != "jpeg" && $imageFileType1["extension"] != "gif" && $imageFileType1["extension"] != "JPG" && $imageFileType1["extension"] != "pdf") {
							?>
							<p class="alert alert-info"> Only jpg,png,jpeg and gif's are allowed(ADDRESS PROOF UPLOAD). </p>
							<?php
						} else {
							@move_uploaded_file($filetmp1, "../uploads/" . $ran . date("Y-m-d") . '.' . $imageFileType1["extension"]);
							$ProductPhoto5 = "../uploads/" . $ran . date("Y-m-d") . '.' . $imageFileType1["extension"];
						}
					}

					$ck = mysqli_query($link, "select * from tbl_student where adr_no='$adr_no' AND SessionYear='$SessionYear' AND verify='1' ");
					if (mysqli_num_rows($ck) > 0) {
						?>
						<div class="alert alert-success alert-dismissable">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							<strong>
								Student Already Registered!
							</strong>
						</div>
						<?php
					} else {

						$queryy = "insert into tbl_student (instu_id,app_for_admin_to,DepartmentName,TrainingCentre,TrainingCentreCode,SessionYear, 
						Name,FaHuName,MotherName,DOB,Gender,WorkYears,adr_no,Address,Pin,PassportSize,jdate) 

						values('$userid','$app_for_admin_to','$DepartmentName','$TrainingCentre','$TrainingCentreCode','$SessionYear', '$Name','$FaHuName','$MotherName','$DOB','$Gender','$WorkYears','$adr_no','$Address','$Pin','$ProductPhoto5', '$today')";

						$result = mysqli_query($link, $queryy);
						$last_id = mysqli_insert_id($link);

						$erfetetr = strtoupper("$CentreState");
						$SSTAT = substr("$erfetetr", 0, 0);
						$SY = substr("$SessionYear", -2);
						$datey = 2019;
						$datem = date("m");
						$dddcds = $datey . $datem;



						if ($app_for_admin_to == "Department of Computer") {
							$rolldata = 6541000;
							$RollNo = $rolldata + $last_id;
							$deptShort = "DC";
						} else if ($app_for_admin_to == "Department of Paramedical") {
							$rolldata = 7541000;
							$RollNo = $rolldata + $last_id;
							$deptShort = "DP";
						} else if ($app_for_admin_to == "Department of Fire Safety") {
							$rolldata = 8541000;
							$RollNo = $rolldata + $last_id;
							$deptShort = "DFS";
						} else if ($app_for_admin_to == "Department of Vocational Diploma") {
							$rolldata = 9841000;
							$RollNo = $rolldata + $last_id;
							$deptShort = "DVD";
						} else if ($app_for_admin_to == "Department of Hardware and Networking") {
							$rolldata = 5541000;
							$RollNo = $rolldata + $last_id;
							$deptShort = "DHN";
						} else if ($app_for_admin_to == "Department of Management") {
							$rolldata = 4541000;
							$RollNo = $rolldata + $last_id;
							$deptShort = "DM";
					 	} else if ($app_for_admin_to == "Department of Polytechnic") {
							$rolldata = 3541000;
							$RollNo = $rolldata + $last_id;
							$deptShort = "DP";
						} else {
							$rolldata = 1111000;
							$RollNo = $rolldata + $last_id;
							$deptShort = "GEN";
						}
						$REGISTRATION = "NART/" . $deptShort . $SSTAT . "0" . $SY . "/" . $dddcds . $last_id;
						$queryydd = "update tbl_student set REGISTRATION='$REGISTRATION',RollNo='$RollNo' where id='$last_id'";
						$resultasds = mysqli_query($link, $queryydd);



						if (mysqli_affected_rows($link)) {

							?>
							<div class="alert alert-success bg-success text-white" role="alert">Student Registered successfully.
							</div>
							<h3>REGISTRATION No: <?= $REGISTRATION; ?></h3>
							<h3>DOB: <?= $DOB; ?></h3>
							<?php

						} else {
							?>
							<div class="alert alert-danger bg-danger text-white mb-0" role="alert">Not successfully try submitting
								again.</div>
							<?php
						}
					}
				}
				?>

				<form method="post" enctype="multipart/form-data">
					<div class="panel panel-default">
						<div class="panel-title">
							Course/Programme Details:
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-lg-9">
									<div class="form-group mb-30">
										<label for="">Select Application for Admission:</label>
										<select class="form-control" name="app_for_admin_to" required="">
											<option value="">Select</option>
											<?php
											$category = mysqli_query($link, "select * from tbl_course where status='0'");
											while ($cat = mysqli_fetch_array($category)) {
												?>
												<option value="<?= $cat['course_name']; ?>"><?= $cat['course_name']; ?>
												</option>
												<?php
											}
											?>
										</select>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="form-group mb-30">
										<label for="">Course Name:</label>
										<input class="form-control" type="text" name="DepartmentName">
									</div>
								</div>
								<div class="col-lg-4">
									<div class="form-group mb-30">
										<label for="">Training Centre:</label>
										<input class="form-control" type="text" name="TrainingCentre" readonly=""
											value="<?= $name; ?>">
									</div>
								</div>
								<div class="col-lg-2">
									<div class="form-group mb-30">
										<label for="">Training Centre Code:</label>
										<input class="form-control" type="text" name="TrainingCentreCode" readonly=""
											value="<?= $data['RefrenceNo']; ?>">
									</div>
								</div>
								<div class="col-lg-2">
									<div class="form-group mb-30">
										<label for="">Session/Year:</label>
										<input class="form-control" type="text" name="SessionYear"
											placeholder="Ex: 2018-2020" required="">
									</div>
								</div>

							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-title">
							Candidate Personal Details:
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-lg-3">
									<div class="form-group mb-30">
										<label for="">Name(Mr./Ms.):</label>
										<input class="form-control" type="text" name="Name" required="">
									</div>
								</div>
								<div class="col-lg-3">
									<div class="form-group mb-30">
										<label for="">Father/Husband Name:</label>
										<input type="text" class="form-control" name="FaHuName" required="">
									</div>
								</div>
								<div class="col-lg-3">
									<div class="form-group mb-30">
										<label for="">Mother Name:</label>
										<input type="text" class="form-control" name="MotherName" required="">
									</div>
								</div>
								<div class="col-lg-3">
									<div class="form-group mb-30">
										<label for="">Date of Birth:</label>
										<input type="text" class="form-control" name="DOB" required=""
											placeholder="Ex: 10-02-2021">
									</div>
								</div>
								<div class="col-lg-3">
									<div class="form-group mb-30">
										<label for="">Gender:</label>
										<select class="form-control" name="Gender" required="">
											<option value="">Select</option>
											<option value="Male">Male</option>
											<option value="Female">Female</option>
										</select>
									</div>
								</div>
								<div class="col-lg-3">
									<div class="form-group mb-30">
										<label for="">Adhaar Number:</label>
										<input type="text" class="form-control" name="adr_no" required="" maxlength="12"
											minlength="12">
									</div>
								</div>
								<div class="col-lg-3">
									<div class="form-group mb-30">
										<label for="">Course Duration:</label>
										<select name="WorkYears" class="form-control" id="" required>
											<option value="">Select</option>
											<!--<option value="1 Month">1 Month</option>-->
											<!--<option value="2 Month">3 Month</option>-->
											<option value="3 Month">6 Month</option>
											<option value="1 Year">1 Year</option>
											<option value="2 Year">2 Year</option>
											<option value="3 Year">3 Year</option>
										</select>
									</div>
								</div>

							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-title">
							Contact Details:
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-lg-10">
									<div class="form-group mb-30">
										<label for="">Address:</label>
										<input class="form-control" type="tel" name="Address" required="">
									</div>
								</div>
								<div class="col-lg-2">
									<div class="form-group mb-30">
										<label for="">Pin:</label>
										<input type="tel" class="form-control" name="Pin" required="">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-title">
							Educational Qualification Details:
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-lg-10">
									<label>Passport Size Photo</label>
									<div class="form-group mb-30">
										<input type="file" class="form-control" name="ProductPhoto5" required=""
											id="img_file5" onChange="img_pathUrl5(this);">
									</div>
								</div>
								<div class="col-lg-2">
									<img src="" class="img_url" id="img_url5">
								</div>
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-body">
							<input type="submit" class="btn btn-default btn-block" name="btnsave"
								value="Submit Student">
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>

	<!-- End Panel -->
</div>
</div>

<?php
include 'footer.php';
?>

<script>
	jQuery(document).delegate('a.add-record', 'click', function (e) {
		e.preventDefault();

		var content = jQuery('#sample_table tr'),
			size = jQuery('#tbl_posts >tbody >tr').length + 1,
			element = null,
			element = content.clone();
		element.attr('id', 'rec-' + size);

		element.find('.delete-record').attr('data-id', size);
		element.appendTo('#tbl_posts_body');
		element.find('.sn').html(size);
		multInputs();
	});

	jQuery(document).delegate('a.delete-record', 'click', function (e) {
		e.preventDefault();
		var didConfirm = 1;
		if (1 == true) {
			var id = jQuery(this).attr('data-id');
			var targetDiv = jQuery(this).attr('targetDiv');
			jQuery('#rec-' + id).remove();

			//regnerate index number on table
			$('#tbl_posts_body tr').each(function (index) {
				//alert(index);

				$(this).find('span.sn').html(index + 1);
			});
			multInputs();
			return true;
		} else {
			return false;
		}
	});
</script>

<script>
	function img_pathUrl(input) {
		$('#img_url')[0].src = (window.URL ? URL : webkitURL).createObjectURL(input.files[0]);
	}

	function img_pathUrl2(input) {
		$('#img_url2')[0].src = (window.URL ? URL : webkitURL).createObjectURL(input.files[0]);
	}

	function img_pathUrl3(input) {
		$('#img_url3')[0].src = (window.URL ? URL : webkitURL).createObjectURL(input.files[0]);
	}

	function img_pathUrl4(input) {
		$('#img_url4')[0].src = (window.URL ? URL : webkitURL).createObjectURL(input.files[0]);
	}

	function img_pathUrl5(input) {
		$('#img_url5')[0].src = (window.URL ? URL : webkitURL).createObjectURL(input.files[0]);
	}

	function img_pathUrl6(input) {
		$('#img_url6')[0].src = (window.URL ? URL : webkitURL).createObjectURL(input.files[0]);
	}
</script>