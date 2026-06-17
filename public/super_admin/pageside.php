<style>

	.sidebar-panel li {

		font-weight: bold;

	}

</style>

<div class="sidebar clearfix">

	<ul class="sidebar-panel nav">

		<li><a href="main.php" class="<?php if (basename($_SERVER['PHP_SELF']) == "main.php") echo "active";  ?>"><span class="icon color5"><i class="fa fa-home"></i></span>Home</a></li>

		<li><a href="all_student.php" class="<?php if (basename($_SERVER['PHP_SELF']) == "all_student.php") echo "active";  ?>"><span class="icon color6"><i class="fa fa-users"></i></span>All Student</a></li>

		<li><a href="all_institute.php" class="<?php if (basename($_SERVER['PHP_SELF']) == "all_institute.php") echo "active";  ?>"><span class="icon color6"><i class="fa fa-building"></i></span>All Institute</a></li>

		<li><a href="student_result.php" class="<?php if (basename($_SERVER['PHP_SELF']) == "student_result.php") echo "active";  ?>"><span class="icon color6"><i class="fa fa-paper-plane"></i></span>Add Student Result</a></li>
		<li><a href="all_results.php" class="<?php if (basename($_SERVER['PHP_SELF']) == "all_results.php") echo "active";  ?>"><span class="icon color6"><i class="fa fa-bars"></i></span>Results</a></li>

		<li><a href="gal_cat.php" class="<?php if (basename($_SERVER['PHP_SELF']) == "gal_cat.php") echo "active";  ?>"><span class="icon color6"><i class="fa fa-bars"></i></span>All Gallery Category</a></li>

		<li><a href="add_gallery.php" class="<?php if (basename($_SERVER['PHP_SELF']) == "add_gallery.php") echo "active";  ?>"><span class="icon color6"><i class="fa fa-image"></i></span>All Gallery Images</a></li>

		<li><a href="student_downloads.php" class="<?php if (basename($_SERVER['PHP_SELF']) == "student_downloads.php") echo "active";  ?>"><span class="icon color6"><i class="fa fa-download"></i></span>Student Downloads</a></li>

		<li><a href="instu_downloads.php" class="<?php if (basename($_SERVER['PHP_SELF']) == "instu_downloads.php") echo "active";  ?>"><span class="icon color6"><i class="fa fa-download"></i></span>Institute Downloads</a></li>

		<li><a href="add_blog.php" class="<?php if (basename($_SERVER['PHP_SELF']) == "add_blog.php") echo "active";  ?>"><span class="icon color6"><i class="fa fa-copy"></i></span>Add Blog</a></li>

		<li><a href="all_blogs.php" class="<?php if (basename($_SERVER['PHP_SELF']) == "all_blogs.php") echo "active";  ?>"><span class="icon color6"><i class="fa fa-copy"></i></span>All Blogs</a></li>
		
		<li><a href="contact_form.php" class="<?php if (basename($_SERVER['PHP_SELF']) == "contact_form.php") echo "active";  ?>"><span class="icon color6"><i class="fa fa-copy"></i></span>All Contact</a></li>

		<li><a href="logout.php" class="<?php if (basename($_SERVER['PHP_SELF']) == "logout.php") echo "active";  ?>"><span class="icon color6"><i class="fa falist fa-power-off"></i></span> Logout</a></li>

	</ul>

</div>