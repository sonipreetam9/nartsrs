<?php
include 'header.php';
$today = date("Y-m-d");
//echo $today;


$students = mysqli_query($link, "select count(*) as ttl_stu from tbl_student");
$all_stu = mysqli_fetch_array($students);

$tostudents = mysqli_query($link, "select count(*) as today_stu from tbl_student WHERE DATE(`addon`) = CURDATE()");
$to_stu = mysqli_fetch_array($tostudents);

$institute = mysqli_query($link, "select count(*) as ttl_istu from tbl_instute");
$all_istu = mysqli_fetch_array($institute);


$tinstu = mysqli_query($link, "select count(*) as today_istu from tbl_instute WHERE DATE(`addon`) = CURDATE()");
$to_dayistu = mysqli_fetch_array($tinstu);





// $dist = mysqli_query($link, "SELECT count(*) as ttl_s, (SELECT IFNULL(SUM(payment),0)Total FROM tbl_record WHERE pid=c.id)-(SELECT IFNULL(SUM(rec),0)Paid FROM tbl_payment WHERE pt_id=c.id) FROM tbl_patient c");
// $dis = mysqli_fetch_array($dist);

// $fbo=mysqli_query($link,"SELECT count(*) as ttl_tdreco from tbl_next WHERE status='0' and next_date >= DATE(NOW()) ORDER BY next_date ASC");
// $fbo_d=mysqli_fetch_array($fbo);

?>
<div class="content">
	<div class="page-header">
		<ol class="breadcrumb">
			<li><a href="index.php">Dashboard</a></li>
			<li class="active">Main</li>
		</ol>
	</div>
	<div class="container-widget">
		<div class="row">
			<div class="col-md-3">
				<div class="card-counter primary">
					<i class="fa fa-user"></i>
					<span class="count-numbers">
						<?= $all_stu['ttl_stu']; ?>
					</span>
					<span class="count-name">Total Students</span>
				</div>
			</div>

			<div class="col-md-3">
				<div class="card-counter danger">
					<i class="fa fa-user"></i>
					<span class="count-numbers">
						<?= $to_stu['today_stu'];
						?>
					</span>
					<span class="count-name">Today Students</span>
				</div>
			</div>

			<div class="col-md-3">
				<div class="card-counter info">
					<i class="fa fa-building"></i>
					<span class="count-numbers">
						<?= $all_istu['ttl_istu'];
						?>
					</span>
					<span class="count-name">Total Institutes </span>
				</div>
			</div>

			<div class="col-md-3">
				<div class="card-counter success">
					<i class="fa fa-user"></i>
					<span class="count-numbers">
						<?= $to_dayistu['today_istu'];
						?>
					</span>
					<span class="count-name">Today Institutes</span>
				</div>
			</div>
		</div>
	</div>


	<div class="container-padding container-widget">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-title">
						New 10 Students
					</div>
					<div class="panel-body table-responsive">
						<table id="" class="table display">
							<thead>
								<tr>
									<th>Name</th>
									<!-- <th>Mobile</th> -->
									<th>Institute</th>
									<th>Date</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$result = mysqli_query($link, "SELECT * FROM tbl_student ORDER BY id desc");
								// $result = mysqli_query($link, "SELECT * from tbl_next WHERE status='0' and next_date >= DATE(NOW()) ORDER BY next_date ASC ");
								//$result = mysqli_query($link, "SELECT * FROM tbl_next WHERE next_date > DATE(NOW()) ORDER BY next_date ASC");
								while ($row = mysqli_fetch_array($result)) {
								?>
									<tr>
										<td>
											<?php
											echo $row['Name'];
											?>
										</td>
										<!-- <td>
											<?php
											echo $row['Mobile'];
											?>
										</td> -->
										<td>
											<?php
											$ccat_id = $row['instu_id'];
											$auth = "select * from tbl_instute WHERE id='$ccat_id'";
											$au = mysqli_query($link, $auth);
											$o = mysqli_fetch_array($au);
											echo $o['CentreName'];
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

			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-title">
						New 10 Institute
					</div>
					<div class="panel-body table-responsive">
						<table id="" class="table display">
							<thead>
								<tr>
									<th>Name</th>
									<th>Address</th>
									<th>State</th>
									<th>Date</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$resultss = mysqli_query($link, "SELECT * FROM tbl_instute ORDER BY id desc");
								while ($rowss = mysqli_fetch_array($resultss)) {
								?>
									<tr>
										<td>
											<?php
											echo $rowss['CentreName'];
											?>
										</td>
										<td>
											<?php
											echo $rowss['CentreAddress'];
											?>
										</td>
										<td>
											<?php
											echo $rowss['CentreState'];
											?>
										</td>
										<td>
											<?php
											$orgDate = $rowss['addon'];
											$newDate = date("d-M-Y", strtotime($orgDate));
											echo $newDate;
											?>
										</td>

										<td>
											<a href="institute_details.php?id=<?= $rowss['id']; ?>" class="btn btn-icon btn-xs btn-success mr-1">
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


		</div>
	</div>
</div>
<?php
include 'footer.php';
?>