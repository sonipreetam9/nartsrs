<?php
include 'header.php';
?>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.css" rel="stylesheet">
<style>
	.note-editor.note-frame.panel.panel-default {
		padding: 0px;
	}
</style>
<div class="content">
	<div class="page-header">
		<ol class="breadcrumb">
			<li><a href="index.php">Dashboard</a></li>
			<li class="active">Add News</li>
		</ol>
	</div>
	<div class="container-padding container-widget">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-title">
						Add News
					</div>
					<div class="panel-body">
						<?php
						if (isset($_POST["btnsave"])) {
							$title = mysqli_real_escape_string($link, $_REQUEST['title']);

							$Packageinclution = $_POST['Packageinclution'];
							$enncc = base64_encode($Packageinclution);

							if (empty($_FILES['PackagePhoto1']['tmp_name']) || !is_uploaded_file($_FILES['PackagePhoto1']['tmp_name'])) {
								$PackagePhoto1 = null;
							} else {
								$filename1 = $_FILES['PackagePhoto1']['name'];
								$targetfile = "../uploads/news/";
								$filetmp1 = $_FILES['PackagePhoto1']['tmp_name'];
								$imageFileType1 = pathinfo($filename1);

								$ran = rand(999999, 999999999);
								if ($imageFileType1["extension"] != "jpg" && $imageFileType1["extension"] != "png" && $imageFileType1["extension"] != "jpeg" && $imageFileType1["extension"] != "gif" && $imageFileType1["extension"] != "JPG" && $imageFileType1["extension"] != "pdf") {
								?>
									<p class="alert alert-info"> Only jpg,png,jpeg and gif's are allowed(FORM UPLOAD). </p>
								<?php
								} else {
									@move_uploaded_file($filetmp1, "../uploads/news/" . $ran . date("Y-m-d") . '.webp');
									$PackagePhoto1 = "../uploads/news/" . $ran . date("Y-m-d") . '.webp';
								}
							}


							$queryy = "insert into tbl_news (title,file,data) values('$title','$PackagePhoto1','$enncc')";
							//echo $queryy;
							$result = mysqli_query($link, $queryy);
							if (mysqli_affected_rows($link)) {

								?>
								<div class="alert alert-success bg-success text-white" role="alert">News Added successfully.</div>
							<?php

							} else {
							?>
								<div class="alert alert-danger bg-danger text-white mb-0" role="alert">Not successfully try submitting again.</div>
						<?php
							}
						}
						?>
						<form method="post" enctype="multipart/form-data">
							<div class="col-md-8 col-xs-12">
								<div class="form-group">
									<label for="input1" class="form-label">Title</label>
									<input type="text" class="form-control" name="title" required="">
								</div>
							</div>
							<div class="col-md-4 col-xs-12">
								<div class="form-group">
									<label for="input1" class="form-label">Image</label>
									<input type="file" class="form-control" name="PackagePhoto1" required="">
								</div>
							</div>
							<div class="col-md-12 col-xs-12">
								<div class="form-group">
									<label for="input1" class="form-label">News Data</label>
									<textarea class="summernote" name="Packageinclution"></textarea>
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
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.js"></script>


<script>
	$(document).ready(function() {

		$('.summernote').summernote({
			popover: {
				image: [
					['image', ['resizeFull', 'resizeHalf', 'resizeQuarter', 'resizeNone']],
					['float', ['floatLeft', 'floatRight', 'floatNone']],
					['remove', ['removeMedia']]
				],
				link: [
					['link', ['linkDialogShow', 'unlink']]
				],
				table: [
					['add', ['addRowDown', 'addRowUp', 'addColLeft', 'addColRight']],
					['delete', ['deleteRow', 'deleteCol', 'deleteTable']],
				],
				air: [
					['color', ['color']],
					['font', ['bold', 'underline', 'clear']],
					['para', ['ul', 'paragraph']],
					['table', ['table']],
					['insert', ['link', 'picture']]
				]
			}
		});
	});
</script>
