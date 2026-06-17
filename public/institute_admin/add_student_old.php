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
					$LateralEntry = mysqli_real_escape_string($link, $_REQUEST['LateralEntry']);
					$LateralIfYes = mysqli_real_escape_string($link, $_REQUEST['LateralIfYes']);
					$Mode = mysqli_real_escape_string($link, $_REQUEST['Mode']);
					$Name = mysqli_real_escape_string($link, $_REQUEST['Name']);
					$FaHuName = mysqli_real_escape_string($link, $_REQUEST['FaHuName']);
					$MotherName = mysqli_real_escape_string($link, $_REQUEST['MotherName']);
					$DOB = mysqli_real_escape_string($link, $_REQUEST['DOB']);
					$Gender = mysqli_real_escape_string($link, $_REQUEST['Gender']);
					$Category = mysqli_real_escape_string($link, $_REQUEST['Category']);
					$MaritalStatus = mysqli_real_escape_string($link, $_REQUEST['MaritalStatus']);
					$Whether = mysqli_real_escape_string($link, $_REQUEST['Whether']);
					$Nationality = mysqli_real_escape_string($link, $_REQUEST['Nationality']);
					$Applicants = mysqli_real_escape_string($link, $_REQUEST['Applicants']);
					$Unemployed = mysqli_real_escape_string($link, $_REQUEST['Unemployed']);
					$WorkExperience = mysqli_real_escape_string($link, $_REQUEST['WorkExperience']);
					$WorkIfYes = mysqli_real_escape_string($link, $_REQUEST['WorkIfYes']);
					$WorkYears = mysqli_real_escape_string($link, $_REQUEST['WorkYears']);
					$WorkMonths = mysqli_real_escape_string($link, $_REQUEST['WorkMonths']);
					$Address = mysqli_real_escape_string($link, $_REQUEST['Address']);
					$Pin = mysqli_real_escape_string($link, $_REQUEST['Pin']);
					$Mobile = mysqli_real_escape_string($link, $_REQUEST['Mobile']);
					$Phone = mysqli_real_escape_string($link, $_REQUEST['Phone']);
					$Emails = mysqli_real_escape_string($link, $_REQUEST['Emails']);
					$adr_no = mysqli_real_escape_string($link, $_REQUEST['adr_no']);
					$today = date("Y-m-d");

					if (empty($_FILES['ProductPhoto1']['tmp_name']) || !is_uploaded_file($_FILES['ProductPhoto1']['tmp_name'])) {
						$ProductPhoto1 = null;
					} else {
						$filename1 = $_FILES['ProductPhoto1']['name'];
						$targetfile = "../uploads/";
						$filetmp1 = $_FILES['ProductPhoto1']['tmp_name'];
						$imageFileType1 = pathinfo($filename1);
						$ran = rand(999999, 999999999);
						if ($imageFileType1["extension"] != "jpg" && $imageFileType1["extension"] != "png" && $imageFileType1["extension"] != "jpeg" && $imageFileType1["extension"] != "gif" && $imageFileType1["extension"] != "JPG" && $imageFileType1["extension"] != "pdf") {
				?>
							<p class="alert alert-info"> Only jpg,png,jpeg and gif's are allowed(FORM UPLOAD). </p>
						<?php
						} else {
							@move_uploaded_file($filetmp1, "../uploads/" . $ran . date("Y-m-d") . '.' . $imageFileType1["extension"]);
							$ProductPhoto1 = "../uploads/" . $ran . date("Y-m-d") . '.' . $imageFileType1["extension"];
						}
					}


					if (empty($_FILES['ProductPhoto2']['tmp_name']) || !is_uploaded_file($_FILES['ProductPhoto2']['tmp_name'])) {
						$ProductPhoto2 = null;
					} else {
						$filename1 = $_FILES['ProductPhoto2']['name'];
						$targetfile = "../uploads/";
						$filetmp1 = $_FILES['ProductPhoto2']['tmp_name'];
						$imageFileType1 = pathinfo($filename1);
						$ran = rand(999999, 999999999);
						if ($imageFileType1["extension"] != "jpg" && $imageFileType1["extension"] != "png" && $imageFileType1["extension"] != "jpeg" && $imageFileType1["extension"] != "gif" && $imageFileType1["extension"] != "JPG" && $imageFileType1["extension"] != "pdf") {
						?>
							<p class="alert alert-info"> Only jpg,png,jpeg and gif's are allowed(FORM UPLOAD). </p>
						<?php
						} else {
							@move_uploaded_file($filetmp1, "../uploads/" . $ran . date("Y-m-d") . '.' . $imageFileType1["extension"]);
							$ProductPhoto2 = "../uploads/" . $ran . date("Y-m-d") . '.' . $imageFileType1["extension"];
						}
					}


					if (empty($_FILES['ProductPhoto3']['tmp_name']) || !is_uploaded_file($_FILES['ProductPhoto3']['tmp_name'])) {
						$ProductPhoto3 = null;
					} else {
						$filename1 = $_FILES['ProductPhoto3']['name'];
						$targetfile = "../uploads/";
						$filetmp1 = $_FILES['ProductPhoto3']['tmp_name'];
						$imageFileType1 = pathinfo($filename1);
						$ran = rand(999999, 999999999);
						if ($imageFileType1["extension"] != "jpg" && $imageFileType1["extension"] != "png" && $imageFileType1["extension"] != "jpeg" && $imageFileType1["extension"] != "gif" && $imageFileType1["extension"] != "JPG" && $imageFileType1["extension"] != "pdf") {
						?>
							<p class="alert alert-info"> Only jpg,png,jpeg and gif's are allowed(FORM UPLOAD). </p>
						<?php
						} else {
							@move_uploaded_file($filetmp1, "../uploads/" . $ran . date("Y-m-d") . '.' . $imageFileType1["extension"]);
							$ProductPhoto3 = "../uploads/" . $ran . date("Y-m-d") . '.' . $imageFileType1["extension"];
						}
					}


					if (empty($_FILES['ProductPhoto4']['tmp_name']) || !is_uploaded_file($_FILES['ProductPhoto4']['tmp_name'])) {
						$ProductPhoto4 = null;
					} else {
						$filename1adr = $_FILES['ProductPhoto4']['name'];
						$targetfile = "../uploads/";
						$filetmp1 = $_FILES['ProductPhoto4']['tmp_name'];
						$imageFileType1 = pathinfo($filename1adr);
						$ran = rand(999999, 999999999);
						if ($imageFileType1["extension"] != "jpg" && $imageFileType1["extension"] != "png" && $imageFileType1["extension"] != "jpeg" && $imageFileType1["extension"] != "gif" && $imageFileType1["extension"] != "JPG" && $imageFileType1["extension"] != "pdf") {
						?>
							<p class="alert alert-info"> Only jpg,png,jpeg and gif's are allowed(ID PROOF UPLOAD). </p>
						<?php
						} else {
							@move_uploaded_file($filetmp1, "../uploads/" . $ran . date("Y-m-d") . '.' . $imageFileType1["extension"]);
							$ProductPhoto4 = "../uploads/" . $ran . date("Y-m-d") . '.' . $imageFileType1["extension"];
						}
					}


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

					
					if (empty($_FILES['ProductPhoto6']['tmp_name']) || !is_uploaded_file($_FILES['ProductPhoto6']['tmp_name'])) {
						$ProductPhoto6 = null;
					} else {
						$filename1pan = $_FILES['ProductPhoto6']['name'];
						$targetfile = "../uploads/";
						$filetmp1 = $_FILES['ProductPhoto6']['tmp_name'];
						$imageFileType1 = pathinfo($filename1pan);
						$ran = rand(999999, 999999999);
						if ($imageFileType1["extension"] != "jpg" && $imageFileType1["extension"] != "png" && $imageFileType1["extension"] != "jpeg" && $imageFileType1["extension"] != "gif" && $imageFileType1["extension"] != "JPG" && $imageFileType1["extension"] != "pdf") {
						?>
							<p class="alert alert-info"> Only jpg,png,jpeg and gif's are allowed(ADDRESS PROOF UPLOAD). </p>
						<?php
						} else {
							@move_uploaded_file($filetmp1, "../uploads/" . $ran . date("Y-m-d") . '.' . $imageFileType1["extension"]);
							$ProductPhoto6 = "../uploads/" . $ran . date("Y-m-d") . '.' . $imageFileType1["extension"];
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
						Name,FaHuName,MotherName,DOB,Gender,Category,adr_no,MaritalStatus,Nationality,Address,Pin,Mobile,Phone,Emails,AdhaarCard,ThenthDMC,BirthProof,Signature,PassportSize,AdhaarCard_back,jdate) 
                    
						values('$userid','$app_for_admin_to','$DepartmentName','$TrainingCentre','$TrainingCentreCode','$SessionYear', '$Name','$FaHuName','$MotherName','$DOB','$Gender','$Category','$adr_no','$MaritalStatus','$Nationality',
						'$Address','$Pin','$Mobile','$Phone','$Emails', '$ProductPhoto1', '$ProductPhoto2', '$ProductPhoto3', '$ProductPhoto4', '$ProductPhoto5', '$ProductPhoto6','$today')";

						$result = mysqli_query($link, $queryy);
						$last_id = mysqli_insert_id($link);

						$count = count($_POST['ExamPass']);
						for ($i = 0; $i < $count; $i++) {
							$queryss = "INSERT INTO `tbl_edudetail` (`instu_id`,`stu_id`,`ExamPass`,`BoarUni`,`YearPass`,`RegRoll`,`MarkObt`,`Marks`,`ClassDiv`) 
						VALUES('$userid','$last_id','{$_POST['ExamPass'][$i]}','{$_POST['BoarUni'][$i]}','{$_POST['YearPass'][$i]}','{$_POST['RegRoll'][$i]}','{$_POST['MarkObt'][$i]}','{$_POST['Marks'][$i]}','{$_POST['ClassDiv'][$i]}')";
							$resultt = mysqli_query($link, $queryss);
						}

						$erfetetr = strtoupper("$CentreState");
						$SSTAT = substr("$erfetetr", 0, 0);
						$SY = substr("$SessionYear", -2);
						$datey = date("Y");
						$datem = date("m");
						$dddcds = $datey . $datem;
						$REGISTRATION = "HIOS/S" . $SSTAT . "0" . $SY . "/" . $dddcds . $last_id;


						if($app_for_admin_to=="Secondary"){
							$rolldata = 6541000;
							$RollNo= $rolldata + $last_id;
						}else if($app_for_admin_to=="Senior Secondary"){
							$rolldata = 9871000;
							$RollNo= $rolldata + $last_id;
						}else{
							$rolldata = 1111000;
							$RollNo= $rolldata + $last_id;
						}

						$queryydd = "update tbl_student set REGISTRATION='$REGISTRATION',RollNo='$RollNo' where id='$last_id'";
						$resultasds = mysqli_query($link, $queryydd);



						if (mysqli_affected_rows($link)) {

						?>
							<div class="alert alert-success bg-success text-white" role="alert">Student Registered successfully.</div>
							<h3>REGISTRATION No: <?= $REGISTRATION; ?></h3>
							<h3>DOB: <?= $DOB; ?></h3>
						<?php

						} else {
						?>
							<div class="alert alert-danger bg-danger text-white mb-0" role="alert">Not successfully try submitting again.</div>
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
												<option value="<?= $cat['course_name']; ?>"><?= $cat['course_name']; ?></option>
											<?php
											}
											?>
										</select>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="form-group mb-30">
										<label for="">Department Name:</label>
										<input class="form-control" type="text" name="DepartmentName">
									</div>
								</div>
								<div class="col-lg-4">
									<div class="form-group mb-30">
										<label for="">Training Centre:</label>
										<input class="form-control" type="text" name="TrainingCentre" readonly="" value="<?= $name; ?>">
									</div>
								</div>
								<div class="col-lg-2">
									<div class="form-group mb-30">
										<label for="">Training Centre Code:</label>
										<input class="form-control" type="text" name="TrainingCentreCode" readonly="" value="<?= $data['RefrenceNo']; ?>">
									</div>
								</div>
								<div class="col-lg-2">
									<div class="form-group mb-30">
										<label for="">Session/Year:</label>
										<input class="form-control" type="number" name="SessionYear" placeholder="Ex: 2018" maxlength="4" minlength="4" required="">
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
										<input type="text" class="form-control" name="DOB" required="" placeholder="Ex: 10-02-2021">
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
										<input type="text" class="form-control" name="adr_no" required="" maxlength="12" minlength="12">
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
								<div class="col-lg-12">
									<table class="table table-striped" id="tbl_posts">
										<thead>
											<tr class="center-row-th">
												<th>Examination<br>Passsed</th>
												<th>Board or<br>University</th>
												<th>Year of <br>Passing</th>
												<th>Reg. No<br>Roll No.</th>
												<th>Marks<br>Obtained</th>
												<th>% of<br>Marks</th>
												<th>Class<br>Division</th>
											</tr>
										</thead>
										<tbody id="tbl_posts_body">
											<tr id="rec-1" class="row-td">
												<td>
													<input class="form-control sort-form" type="text" name="ExamPass[]" required="">
												</td>
												<td>
													<input class="form-control sort-form" type="text" name="BoarUni[]" required="">
												</td>
												<td>
													<input class="form-control sort-form" type="text" name="YearPass[]" required="">
												</td>
												<td>
													<input class="form-control sort-form" type="text" name="RegRoll[]" required="">
												</td>
												<td>
													<input class="form-control sort-form" type="text" name="MarkObt[]" required="">
												</td>
												<td>
													<input class="form-control sort-form" type="text" name="Marks[]" required="">
												</td>
												<td>
													<input class="form-control sort-form" type="text" name="ClassDiv[]" required="">
												</td>
												<td>
													<a class="btn btn-danger btn-xs delete-record btn-radius" data-id="0">
														X
													</a>
												</td>
											</tr>
										</tbody>
									</table>
									<a class="btn btn-success btn-md add-record" data-added="0">
										Add Row
									</a>
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
									<label>Adhaar Card Front Image</label>
									<div class="form-group mb-30">
										<input type="file" class="form-control" name="ProductPhoto1" required="" id="img_file" onChange="img_pathUrl(this);">
									</div>
								</div>
								<div class="col-lg-2">
									<img src="" class="img_url" id="img_url">
								</div>
								<div class="col-lg-10">
									<label>Adhaar Card Back Image</label>
									<div class="form-group mb-30">
										<input type="file" class="form-control" name="ProductPhoto6" required="" id="img_file6" onChange="img_pathUrl6(this);">
									</div>
								</div>
								<div class="col-lg-2">
									<img src="" class="img_url" id="img_url6">
								</div>
								<div class="col-lg-10">
									<label>Last Qualification Marksheet Image</label>
									<div class="form-group mb-30">
										<input type="file" class="form-control" name="ProductPhoto2" required="" id="img_file2" onChange="img_pathUrl2(this);">
									</div>
								</div>
								<div class="col-lg-2">
									<img src="" class="img_url" id="img_url2">
								</div>
								<div class="col-lg-10">
									<label>Signature Image</label>
									<div class="form-group mb-30">
										<input type="file" class="form-control" name="ProductPhoto4" required="" id="img_file4" onChange="img_pathUrl4(this);">
									</div>
								</div>
								<div class="col-lg-2">
									<img src="" class="img_url" id="img_url4">
								</div>
								<div class="col-lg-10">
									<label>Passport Size Photo</label>
									<div class="form-group mb-30">
										<input type="file" class="form-control" name="ProductPhoto5" required="" id="img_file5" onChange="img_pathUrl5(this);">
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
							<input type="submit" class="btn btn-default btn-block" name="btnsave" value="Submit Student">
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>

	<!-- End Panel -->
</div>
</div>


<div style="display:none;">
	<table id="sample_table">
		<tr class="row-td">
			<td>
				<input class="form-control sort-form" type="text" name="ExamPass[]">
			</td>
			<td>
				<input class="form-control sort-form" type="text" name="BoarUni[]">
			</td>
			<td>
				<input class="form-control sort-form" type="text" name="YearPass[]">
			</td>
			<td>
				<input class="form-control sort-form" type="text" name="RegRoll[]">
			</td>
			<td>
				<input class="form-control sort-form" type="text" name="MarkObt[]">
			</td>
			<td>
				<input class="form-control sort-form" type="text" name="Marks[]">
			</td>
			<td>
				<input class="form-control sort-form" type="text" name="ClassDiv[]">
			</td>
			<td>
				<a class="btn btn-danger btn-radius btn-xs delete-record" data-id="0">
					x
				</a>
			</td>
		</tr>
	</table>
</div>
<?php
include 'footer.php';
?>

<script>
	jQuery(document).delegate('a.add-record', 'click', function(e) {
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

	jQuery(document).delegate('a.delete-record', 'click', function(e) {
		e.preventDefault();
		var didConfirm = 1;
		if (1 == true) {
			var id = jQuery(this).attr('data-id');
			var targetDiv = jQuery(this).attr('targetDiv');
			jQuery('#rec-' + id).remove();

			//regnerate index number on table
			$('#tbl_posts_body tr').each(function(index) {
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