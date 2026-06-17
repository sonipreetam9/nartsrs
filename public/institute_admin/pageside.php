<style>
	.sidebar-panel li {
		font-weight: bold;
	}
</style>
<div class="sidebar clearfix">
	<ul class="sidebar-panel nav">
		<li><a href="main.php" class="<?php if (basename($_SERVER['PHP_SELF']) == "main.php") echo "active";  ?>"><span class="icon color5"><i class="fa fa-home"></i></span>Home</a></li>
		<li><a href="add_student.php" class="<?php if (basename($_SERVER['PHP_SELF']) == "add_student.php") echo "active";  ?>"><span class="icon color6"><i class="fa fa-user"></i></span>Add Student</a></li>
		<li><a href="all_student.php" class="<?php if (basename($_SERVER['PHP_SELF']) == "all_student.php") echo "active";  ?>"><span class="icon color6"><i class="fa fa-users"></i></span>All Student</a></li>
		<li><a href="all_verified_student.php" class="<?php if (basename($_SERVER['PHP_SELF']) == "all_verified_student.php") echo "active";  ?>"><span class="icon color6"><i class="fa fa-users"></i></span>All Verified Student</a></li>
		<li><a href="change_pass.php" class="<?php if (basename($_SERVER['PHP_SELF']) == "change_pass.php") echo "active";  ?>"><span class="icon color6"><i class="fa fa-users"></i></span>Change Password</a></li>
		<li><a href="logout.php" class="<?php if (basename($_SERVER['PHP_SELF']) == "logout.php") echo "active";  ?>"><span class="icon color6"><i class="fa falist fa-power-off"></i></span> Logout</a></li>
	</ul>
</div>