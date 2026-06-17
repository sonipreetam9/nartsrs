<?php

include 'header.php';



$id = $_GET['id'];

$lnnnk = "SELECT * FROM tbl_result WHERE id='$id'";

// echo $lnnnk;

$sel = mysqli_query($link, $lnnnk);

$dataq = mysqli_fetch_array($sel);

$stu_id = $dataq['student_id'];

$selwww = mysqli_query($link, "SELECT * FROM tbl_student WHERE id='$stu_id'");
$stures = mysqli_fetch_array($selwww);

?>

<style>
    td {

        padding: 10px !important;

    }

    .allimg {

        width: 150px !important;

    }
</style>

<div class="content">

    <div class="page-header">

        <ol class="breadcrumb">

            <li><a href="index.php">Dashboard</a></li>

            <li class="active">Student detail</li>

        </ol>

    </div>

    <div class="container-padding container-widget">

        <div class="row">

            <div class="col-md-12">

                <div class="panel panel-default">

                    <div class="panel-title">

                        Student detail

                    </div>

                    <div class="panel-body table-responsive">

                        <table class="table">

                            <tbody>

                                <tr>

                                    <td colspan="2">

                                        <b>REGISTRATION</b><br>

                                        <?= $stures['REGISTRATION']; ?>

                                    </td>

                                    <td>

                                        <b>Join Date</b><br>

                                        <?= $stures['jdate']; ?>

                                    </td>

                                    <td>

                                        <b>Verify</b><br>

                                        <?php

                                        if ($stures['Verify'] == "0") {

                                            ?>

                                            Pending

                                            <?php

                                        } else {

                                            ?>

                                            Verified

                                            <?php

                                        }

                                        ?>

                                    </td>

                                </tr>

                                <tr>

                                    <td colspan="4">

                                        <center>

                                            <h5 style="margin: 0px; font-weight: bold;">

                                                Student Details

                                            </h5>

                                        </center>

                                    </td>

                                </tr>

                                <tr>

                                    <td colspan="3">

                                        <b>Application For Admission To</b><br>

                                        <?= $stures['app_for_admin_to']; ?>

                                    </td>

                                    <td colspan="1">

                                        <b>Course Code</b><br>

                                        <?= $stures['CourseCode']; ?>

                                    </td>

                                </tr>

                                <tr>

                                    <td>

                                        <b>Department Name</b><br>

                                        <?= $stures['DepartmentName']; ?>

                                    </td>

                                    <td>

                                        <b>Training Centre</b><br>

                                        <?= $stures['CourseCode']; ?>

                                    </td>

                                    <td>

                                        <b>Training Centre Code</b><br>

                                        <?= $stures['TrainingCentreCode']; ?>

                                    </td>

                                    <td>

                                        <b>Session Year</b><br>

                                        <?= $stures['SessionYear']; ?>

                                    </td>

                                </tr>

                                <tr>

                                    <td colspan="4">

                                        <center>

                                            <h5 style="margin: 0px; font-weight: bold;">

                                                Candidate Personal Details

                                            </h5>

                                        </center>

                                    </td>

                                </tr>

                                <tr>

                                    <td colspan="2">

                                        <b>Name(Mr./Ms.)</b><br>

                                        <?= $stures['Name']; ?>

                                    </td>

                                    <td colspan="1">

                                        <b>Father/Husband Name</b><br>

                                        <?= $stures['FaHuName']; ?>

                                    </td>

                                    <td colspan="1">

                                        <b>Mother Name</b><br>

                                        <?= $stures['MotherName']; ?>

                                    </td>

                                </tr>

                                <tr>

                                    <td>

                                        <b>Date of Birth</b><br>

                                        <?= $stures['DOB']; ?>

                                    </td>

                                    <td>

                                        <b>Gender</b><br>

                                        <?= $stures['Gender']; ?>

                                    </td>
                                    <!-- 
                                    <td>

                                        <b>Category</b><br>

                                        <?= $stures['Category']; ?>

                                    </td>

                                    <td>

                                        <b>Marital Status</b><br>

                                        <?= $stures['MaritalStatus']; ?>

                                    </td> -->

                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>
            <div class="col-md-12">
                <?php
                if (isset($_POST["btnsave"])) {
                    $remark = mysqli_real_escape_string($link, $_REQUEST['remark']);
                    $total_marks = mysqli_real_escape_string($link, $_REQUEST['total_marks']);
                    $get_marks = mysqli_real_escape_string($link, $_REQUEST['get_marks']);
                    $result = mysqli_query($link, "update tbl_result set total_marks='$total_marks',get_marks='$get_marks',remark='$remark' where id='$id' ");
                    $count = count($_POST['subject']);
                    for ($i = 0; $i < $count; $i++) {
                        $ck = mysqli_query($link, "select * from tbl_result_sub_marks where result_id='$id' and id='{$_POST['sruid'][$i]}'");
                        if (mysqli_num_rows($ck) > 0) {
                            $upddtata = "update tbl_result_sub_marks set subject='{$_POST['subject'][$i]}', obt_mark='{$_POST['obt_mark'][$i]}', practi_mark='{$_POST['practi_mark'][$i]}', max_mark='{$_POST['max_mark'][$i]}', exam_date='{$_POST['exam_date'][$i]}' where id='{$_POST['tiid'][$i]}' ";
                            //echo $upddtata;
                            $result_result = mysqli_query($link, $upddtata);
                            if ($result_result) {
                                ?>
                                <div class="alert alert-success bg-success text-white" role="alert">Updated successfully.</div>
                                <?php
                            } else {
                                ?>
                                <div class="alert alert-danger bg-danger text-white mb-0" role="alert">Error</div>
                                <?php
                            }
                        } else {
                            $queryss = "INSERT INTO `tbl_result_sub_marks` (`result_id`,`stu_id`,`subject`,`obt_mark`,`practi_mark`,`max_mark`,`exam_date`) 
                                VALUES('$id','$stu_id','{$_POST['subject'][$i]}','{$_POST['obt_mark'][$i]}','{$_POST['practi_mark'][$i]}','{$_POST['max_mark'][$i]}','{$_POST['exam_date'][$i]}')";
                            //echo $queryss;
                            $resultt = mysqli_query($link, $queryss);
                            if (mysqli_affected_rows($link)) {
                                ?>
                                <div class="alert alert-success bg-success text-white" role="alert">Subject Added successfully.</div>
                                <?php
                            } else {
                                ?>
                                <div class="alert alert-danger bg-danger text-white mb-0" role="alert">Error</div>
                                <?php
                            }
                        }
                    }
                }
                ?>
            </div>
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-title">
                        Update Result
                    </div>
                    <div class="panel-body table-responsive">
                        <form method="POST">
                            <div>
                                <table class="table table-striped" id="tbl_posts">
                                    <thead>
                                        <tr class="center-row-th">
                                            <th>Enter Course</th>
                                            <th>Obtain Mark</th>
                                            <th>Practical Mark</th>
                                            <th>Max Mark</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody id="tbl_posts_body">
                                        <?php
                                        $instuts = mysqli_query($link, "select * from tbl_result_sub_marks where result_id='$id' and stu_id='$stu_id'");
                                        $i = 0;
                                        while ($ins = mysqli_fetch_array($instuts)) {
                                            $i++;
                                            ?>
                                            <tr id="rec-<?= $i; ?>" class="row-td">
                                                <!-- <td>
                                                    <input type="hidden" value="<?= $ins['id']; ?>" name="tiid[]">
                                                    <select name="subject[]" class="form-control sort-form" required="">
                                                        <option value="">Select Subject</option>
                                                        <?php
                                                        $category = mysqli_query($link, "select * from tbl_subject");
                                                        while ($cat = mysqli_fetch_array($category)) {
                                                            ?>
                                                            <option value="<?= $cat['sub_name']; ?>" <?php if ($ins['subject'] == $cat['sub_name'])
                                                                  echo "selected"; ?>><?= $cat['sub_name']; ?></option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </td> -->
                                                <td>
                                                    <input type="hidden" value="<?= $ins['id']; ?>" name="tiid[]">
                                                    <input type="text" class="form-control sort-form" placeholder="Course"
                                                        name="subject[]" value="<?= $ins['subject']; ?>">
                                                </td>

                                                <td>
                                                    <input type="hidden" name="sruid[]" value="<?= $ins['id']; ?>">
                                                    <input class="form-control sort-form" placeholder="obt_mark"
                                                        type="number" name="obt_mark[]" maxlength="3"
                                                        value="<?= $ins['obt_mark']; ?>">
                                                </td>
                                                <td>
                                                    <input class="form-control sort-form" placeholder="practical_mark"
                                                        type="number" name="practi_mark[]" maxlength="3"
                                                        value="<?= $ins['practi_mark']; ?>">
                                                </td>
                                                <td>
                                                    <input class="form-control sort-form" placeholder="max_mark"
                                                        type="number" name="max_mark[]" maxlength="3"
                                                        value="<?= $ins['max_mark']; ?>">
                                                </td>
                                                <td>
                                                    <input class="form-control sort-form" placeholder="Exam Date"
                                                        type="date" name="exam_date[]" value="<?= $ins['exam_date']; ?>"
                                                        data-date="" data-date-format="DD MM YYYY">
                                                </td>
                                                <td>
                                                    <a class="btn btn-danger btn-xs delete-record btn-radius" data-id="0">
                                                        X
                                                    </a>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                                <a class="btn btn-success btn-xs add-record btn-block" data-added="0"
                                    style="margin-top: 20px;">
                                    Add Subject
                                </a>
                            </div>
                            <br>
                            <div class="col-md-12 col-xs-12">
                                <div class="row">
                                    <div class="col-md-6 col-xs-12">
                                        <div class="form-group">
                                            <label for="input1" class="form-label">Total Marks</label>
                                            <input type="tel" class="form-control" name="total_marks" required=""
                                                value="<?= $dataq['total_marks']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xs-12">
                                        <div class="form-group">
                                            <label for="input1" class="form-label">Obtain Marks</label>
                                            <input type="tel" class="form-control" name="get_marks" required=""
                                                value="<?= $dataq['get_marks']; ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-xs-12">
                                <div class="form-group">
                                    <label for="input1" class="form-label">Remarks</label>
                                    <textarea class="form-control" name="remark"
                                        rows="5"><?= $dataq['remark']; ?></textarea>
                                </div>
                            </div>
                            <input type="submit" class="btn btn-default btn-block" name="btnsave" value="Update Result">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="display:none;">
        <table id="sample_table">
            <tr class="row-td">
                <!-- <td>
                    <select name="subject[]" class="form-control sort-form" required="">
                        <option value="">Select Subject</option>
                        <?php
                        $category = mysqli_query($link, "select * from tbl_subject");
                        while ($cat = mysqli_fetch_array($category)) {
                            ?>
                            <option value="<?= $cat['sub_name']; ?>" <?php if ($ins['subject'] == $cat['sub_name'])
                                  echo "selected"; ?>><?= $cat['sub_name']; ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </td> -->
                <td>
                    <input type="hidden" name="tiid[]" value="">
                    <input type="text" class="form-control sort-form" placeholder="Course" name="subject[]" value=""
                        required>
                </td>
                <td>
                    <input class="form-control sort-form" placeholder="obt_mark" type="number" name="obt_mark[]"
                        maxlength="3">
                </td>
                <td>
                    <input class="form-control sort-form" placeholder="practical_mark" type="number"
                        name="practi_mark[]" maxlength="3">
                </td>
                <td>
                    <input class="form-control sort-form" placeholder="max_mark" type="number" name="max_mark[]"
                        maxlength="3">
                </td>
                <td>
                    <input class="form-control sort-form" placeholder="Exam Date" type="date" name="exam_date[]"
                        required="" data-date="" data-date-format="DD MM YYYY">
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
        $(function () {

            $("#num1, #num2").on("keydown keyup", sum);



            function sum() {

                $("#subt").val(Number($("#num1").val()) - Number($("#num2").val()));

            }

        });
    </script>