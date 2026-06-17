<?php
include 'header.php';

$id = $_GET['id'];
$lnnnk = "SELECT * FROM tbl_news WHERE id='$id'";
//echo $lnnnk;
$sel = mysqli_query($link, $lnnnk);
$dataq = mysqli_fetch_array($sel);
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
							$newdate = date("d-M-Y");
							$title = mysqli_real_escape_string($link, $_REQUEST['title']);

							$Packageinclution = $_POST['Packageinclution'];
							$enncc = base64_encode($Packageinclution);

							$dddd_file = mysqli_real_escape_string($link, $_POST['old_file']);
							if (empty($_FILES['file']['tmp_name']) || !is_uploaded_file($_FILES['file']['tmp_name'])) {
								$filepath2 = $dddd_file;
							} else {
								$filename1 = $_FILES['file']['name'];
								$targetfile = "../uploads/news/";
								$filetmp1 = $_FILES['file']['tmp_name'];
								$imageFileType1 = pathinfo($filename1);

								$ran = rand(999, 99999999);
								if ($imageFileType1["extension"] != "jpg" && $imageFileType1["extension"] != "png" && $imageFileType1["extension"] != "jpeg" && $imageFileType1["extension"] != "gif" && $imageFileType1["extension"] != "JPG") {
						?>
									<p class="alert alert-success"> Only jpg,png,jpeg and gif's are allowed. </p>
								<?php
								} else {
									@move_uploaded_file($filetmp1, "../uploads/news/" . $ran . date("Y-m-d") . '.' . $imageFileType1["extension"]);
									$filepath2 = "../uploads/news/" . $ran . date("Y-m-d") . '.' . $imageFileType1["extension"];
								}
							}

							$queryy = "update tbl_news set title='$title',data='$enncc',file='$filepath2' where id='$id'";
							//echo $queryy;
							$result = mysqli_query($link, $queryy);
							if ($result) {

								?>
								<div class="alert alert-success bg-success text-white" role="alert">Blog updated successfully.</div>
							<?php

							} else {
							?>
								<div class="alert alert-danger bg-danger text-white mb-0" role="alert">Not successfully try submitting again.</div>
						<?php
							}
						}
						?>

						<form method="post" enctype="multipart/form-data">
							<div class="col-md-6 col-xs-12">
								<div class="form-group">
									<label for="input1" class="form-label">Name</label>
									<input type="text" class="form-control" name="title" value="<?= $dataq['title'] ?>">
								</div>
							</div>
							<div class="col-md-3 col-xs-12">
								<div class="form-group">
									<label for="input1" class="form-label">File</label>
									<input type="file" class="form-control" name="file">
									<input type="hidden" name="old_file" value="<?= $dataq['file']; ?>" />
								</div>
							</div>
							<div class="col-md-12 col-xs-12">
								<div class="form-group">
									<label for="input1" class="form-label">News Data</label>
									<textarea class="summernote" name="Packageinclution"><?= base64_decode($dataq['data']); ?></textarea>
								</div>
							</div>
							<div class="col-md-12 col-xs-12">
								<input type="submit" class="btn btn-default" name="btnsave" value="Update">
							</div>
						</form>
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
	