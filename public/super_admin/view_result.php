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

                                        <b>Course Duration</b><br>

                                        <?= $stures['WorkYears']; ?>

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

                                    <!-- <td>

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

                <div class="panel panel-default">

                    <div class="panel-title">

                        Student Result

                    </div>

                    <div class="panel-body table-responsive">

                        <table class="table">

                            <tbody>

                                <tr>
                                    <th>SUBJECT</th>
                                    <th>MIN MARK</th>
                                    <th>OBTAIN MARK</th>
                                    <th>MAX MARK</th>
                                    <th>PRACTICAL MARK</th>

                                </tr>
                                <?php
                                $instuts = mysqli_query($link, "select * from tbl_result_sub_marks where result_id='$id' and stu_id='$stu_id'");
                                while ($ins = mysqli_fetch_array($instuts)) {
                                ?>
                                    <tr>
                                        <td><?= $ins['subject']; ?></td>
                                        <td><?= $ins['min_mark']; ?></td>
                                        <td><?= $ins['obt_mark']; ?></td>
                                        <td><?= $ins['max_mark']; ?></td>
                                        <td><?= $ins['practi_mark']; ?></td>
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

    <?php

    include 'footer.php';

    ?>

    <script src="js/datatables/datatables.min.js"></script>

    <script>
        $(document).ready(function() {

            $('#example0').DataTable();

        });
    </script>