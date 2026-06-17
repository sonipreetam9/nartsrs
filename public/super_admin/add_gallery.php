<?php
include 'header.php';
?>
<div class="content">
    <div class="page-header">
        <ol class="breadcrumb">
            <li><a href="index.php">Dashboard</a></li>
            <li class="active">All Gallery Images</li>
        </ol>
    </div>
    <div class="container-padding container-widget">

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-title">
                        Add Gallery Images
                    </div>
                    <div class="panel-body">
                        <?php
                        if (isset($_POST["btnsave"])) {
                            $cat = mysqli_real_escape_string($link, $_REQUEST['cat']);
                            $title = mysqli_real_escape_string($link, $_REQUEST['title']);

                            if (empty($_FILES['file']['tmp_name']) || !is_uploaded_file($_FILES['file']['tmp_name'])) {
                                $filepath2 = null;
                            } else {
                                $filename1 = $_FILES['file']['name'];
                                $targetfile = "../uploads/gallery/";
                                $filetmp1 = $_FILES['file']['tmp_name'];
                                $imageFileType1 = pathinfo($filename1);


                                $ran = rand(999, 999999);
                                if ($imageFileType1["extension"] != "jpg" && $imageFileType1["extension"] != "png" && $imageFileType1["extension"] != "jpeg" && $imageFileType1["extension"] != "gif" && $imageFileType1["extension"] != "JPG") {
                        ?>
                                    <p class="label label-success"> Only jpg,png,jpeg and gif's are allowed. </p>
                                <?php
                                } else {
                                    @move_uploaded_file($filetmp1, "../uploads/gallery/" . $ran . date("Y-m-d") . '.' . $imageFileType1["extension"]);
                                    $filepath2 = "../uploads/gallery/" . $ran . date("Y-m-d") . '.' . $imageFileType1["extension"];
                                }
                            }

                            $queryy = "insert into tbl_gallery (cat,title,file) values('$cat','$title','$filepath2')";
                            //echo $queryy;
                            $result = mysqli_query($link, $queryy);
                            if (mysqli_affected_rows($link)) {

                                ?>
                                <div class="alert alert-success bg-success text-white" role="alert">Gallery Added successfully.</div>
                            <?php

                            } else {
                            ?>
                                <div class="alert alert-danger bg-danger text-white mb-0" role="alert">Not successfully try submitting again.</div>
                        <?php
                            }
                        }
                        ?>
                        <form method="post" enctype="multipart/form-data">
                            <div class="col-md-3 col-xs-12">
                                <div class="form-group">
                                    <label for="input1" class="form-label">Select Gallery Category</label>
                                    <select class="form-control" name="cat" required>
                                        <option value="">Select Gallery Category</option>
                                        <?php
                                        $category = mysqli_query($link, "select * from tbl_gal_cat");
                                        while ($cat = mysqli_fetch_array($category)) {
                                        ?>
                                            <option value="<?= $cat['id']; ?>"><?= $cat['cat']; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-12">
                                <div class="form-group">
                                    <label for="input1" class="form-label">Image</label>
                                    <input type="file" class="form-control" name="file" required="">
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <div class="form-group">
                                    <label for="input1" class="form-label">Title</label>
                                    <input type="text" class="form-control" name="title">
                                </div>
                            </div>
                            <div class="col-md-12 col-xs-12">
                                <input type="submit" class="btn btn-default" name="btnsave" value="Save">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-title">
                        All Gallery Images
                    </div>
                    <?php
                    if (isset($_POST["delete"])) {
                        $bill = $_POST['id'];
                        $sql = "DELETE FROM tbl_gallery WHERE id=$bill";
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
                    <div class="panel-body table-responsive">
                        <table id="example0" class="table display">
                            <thead>
                                <tr>
                                    <th>Sr.</th>
                                    <th>Category</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $result = mysqli_query($link, "select * from tbl_gallery order by id desc");
                                $i = 0;
                                while ($row = mysqli_fetch_array($result)) {
                                    $i++;
                                ?>
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td>
                                            <?php
                                            $jg = $row['cat'];
                                            $sel = mysqli_query($link, "SELECT * FROM tbl_gal_cat WHERE id='$jg'");
                                            $categggory = mysqli_fetch_array($sel);
                                            echo $categggory['cat'];
                                            ?>
                                        </td>
                                        <td>
                                            <img src="<?php echo $row['file']; ?>" width="30px" height="30px">
                                        </td>
                                        <td>
                                            <?= $row['title']; ?>
                                        </td>
                                        <td>
                                            <form method="post">
                                                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                                <input type="submit" name="delete" value="Delete" class="btn btn-danger btn-xs">
                                            </form>
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