<?php
include 'header.php';
?>
<div class="content">
    <div class="page-header">
        <ol class="breadcrumb">
            <li><a href="index.php">Dashboard</a></li>
            <li class="active">All Gallery Category</li>
        </ol>
    </div>
    <div class="container-padding container-widget">

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-title">
                        Add Gallery Category
                    </div>
                    <div class="panel-body">
                        <?php
                        if (isset($_POST["btnsave"])) {
                            $cat = mysqli_real_escape_string($link, $_REQUEST['cat']);

                            $queryy = "insert into tbl_gal_cat (cat) values('$cat')";
                            //echo $queryy;
                            $result = mysqli_query($link, $queryy);
                            if (mysqli_affected_rows($link)) {
                            ?>
                                <div class="alert alert-success bg-success text-white" role="alert">Added successfully.</div>
                            <?php
                                header('Location: ' . $_SERVER['PHP_SELF']);
                            } else {
                            ?>
                                <div class="alert alert-danger bg-danger text-white mb-0" role="alert">try again.</div>
                        <?php
                            }
                        }
                        ?>
                        
                        <form method="post" enctype="multipart/form-data">
                            <div class="col-md-5 col-xs-12">
                                <div class="form-group">
                                    <label for="input1" class="form-label">Category Name</label>
                                    <input type="text" class="form-control" name="cat" required="">
                                </div>
                            </div>
                            <div class="col-md-2 col-xs-12">
                                <div class="form-group">
                                    <label for="input1" class="form-label">Click to save</label><br>
                                    <input type="submit" class="btn btn-default" name="btnsave" value="Save" style="width: 100%;">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-title">
                        All Payments
                    </div>
                    <div class="panel-body table-responsive">
                        <?php
                        if (isset($_POST["updatess"])) {
                            $bill = $_POST['id'];
                            $cat = mysqli_real_escape_string($link, $_REQUEST['cat']);
                            $result = mysqli_query($link, "update tbl_gal_cat set cat='$cat' where id=$bill ");
                            //echo $queryy;
                            $result = mysqli_query($link, $result);
                            if (mysqli_affected_rows($link)) {
                        ?>
                                <div class="alert alert-success bg-success text-white" role="alert">Updated successfully.</div>
                            <?php
                                header('Location: ' . $_SERVER['PHP_SELF']);
                            } else {
                            ?>
                                <div class="alert alert-danger bg-danger text-white mb-0" role="alert">try again.</div>
                        <?php
                            }
                        }
                        ?>

                        <?php
                        if (isset($_POST["delete"])) {
                            $bill = $_POST['id'];
                            $sql = "DELETE FROM tbl_gal_cat WHERE id=$bill";
                            $result = mysqli_query($link, $sql);
                            if (mysqli_affected_rows($link)) {
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
                                    <th>Gallery Category</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $result = mysqli_query($link, "SELECT * FROM tbl_gal_cat order by id desc");
                                $i = 0;
                                while ($row = mysqli_fetch_array($result)) {
                                    $i++;
                                ?>
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $row['cat']; ?></td>
                                        <th>
                                            <form method="post">
                                                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                                <input type="submit" name="delete" value="Delete" class="btn btn-danger btn-xs">
                                            </form>
                                            <a data-toggle="modal" data-target="#update<?= $row['id']; ?>" class="btn btn-icon btn-xs btn-success mr-1">
												Update
											</a>

											<div class="modal fade modalbox" id="update<?= $row['id']; ?>" tabindex="-1" role="dialog" style="display: none;">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<button type="button" class="close" data-dismiss="modal">&times;</button>
															<h4 class="modal-title">Update Category</h4>
														</div>
														<div class="modal-body">
															<form method="post" enctype="multipart/form-data">
																<input type="hidden" value="<?php echo $row['id']; ?>" name="id">
																<div class="row">
																	<div class="col-md-6 col-xs-12">
																		<div class="form-group">
																			<label for="input1" class="form-label">Name</label>
																			<input type="text" class="form-control" name="cat" value="<?= $row['cat']; ?>">
																		</div>
																	</div>
																	<div class="col-md-12 col-xs-12">
																		<input type="submit" class="btn btn-success" name="updatess" value="Update Details">
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
    </div>
    <?php
    include 'footer.php';
    ?>
    <script src="js/datatables/datatables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example0').DataTable();
        });
    </script>