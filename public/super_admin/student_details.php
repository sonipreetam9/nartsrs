<?php

include 'header.php';


$id = $_GET['id'];

$lnnnk = "SELECT * FROM tbl_student WHERE id='$id'";

// echo $lnnnk;

$sel = mysqli_query($link, $lnnnk);

$dataq = mysqli_fetch_array($sel);

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

                                        <?= $dataq['REGISTRATION']; ?>

                                    </td>

                                    <td>

                                        <b>Join Date</b><br>

                                        <?= $dataq['jdate']; ?>

                                    </td>

                                    <td>

                                        <b>Verify</b><br>

                                        <?php

                                        if ($dataq['Verify'] == "0") {

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

                                                Institute Details

                                                <?php

                                                $instuid = $dataq['instu_id'];

                                                $intrt = "SELECT * FROM tbl_instute WHERE id='$instuid'";

                                                $selinsu = mysqli_query($link, $intrt);

                                                $instu = mysqli_fetch_array($selinsu);

                                                ?>

                                            </h5>

                                        </center>

                                    </td>

                                </tr>

                                <tr>

                                    <td>

                                        <b>Centre Name</b><br>

                                        <?= $instu['CentreName']; ?>

                                    </td>

                                    <td>

                                        <b>Centre Address</b><br>

                                        <?= $instu['CentreAddress']; ?>

                                    </td>

                                    <td>

                                        <b>Centre State, City</b><br>

                                        <?= $instu['CentreState'] . "," . $instu['CentreCity']; ?>

                                    </td>

                                    <td>

                                        <b>Centre Phone</b><br>

                                        <?= $instu['CentrePhone']; ?>

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

                                        <?= $dataq['app_for_admin_to']; ?>

                                    </td>

                                    <td colspan="1">

                                        <b>Course Duration</b><br>

                                        <?= $dataq['WorkYears']; ?>

                                    </td>

                                </tr>

                                <tr>

                                    <td>

                                        <b>Course Name</b><br>

                                        <?= $dataq['DepartmentName']; ?>

                                    </td>

                                    <td>

                                        <b>Training Centre</b><br>

                                        <?= $dataq['CourseCode']; ?>

                                    </td>

                                    <td>

                                        <b>Training Centre Code</b><br>

                                        <?= $dataq['TrainingCentreCode']; ?>

                                    </td>

                                    <td>

                                        <b>Session Year</b><br>

                                        <?= $dataq['SessionYear']; ?>

                                    </td>

                                </tr>

                                <!-- <tr>

                                    <td>

                                        <b>Lateral Entry</b><br>

                                        <?= $dataq['LateralEntry']; ?>

                                    </td>

                                    <td colspan="2">

                                        <b>Lateral If Yes</b><br>

                                        <?= $dataq['CourseCode']; ?>

                                    </td>

                                    <td>

                                        <b>Mode</b><br>

                                        <?= $dataq['Mode']; ?>

                                    </td>

                                </tr> -->

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

                                        <?= $dataq['Name']; ?>

                                    </td>

                                    <td colspan="1">

                                        <b>Father/Husband Name</b><br>

                                        <?= $dataq['FaHuName']; ?>

                                    </td>

                                    <td colspan="1">

                                        <b>Mother Name</b><br>

                                        <?= $dataq['MotherName']; ?>

                                    </td>

                                </tr>

                                <tr>

                                    <td>

                                        <b>Date of Birth</b><br>

                                        <?= $dataq['DOB']; ?>

                                    </td>

                                    <td>

                                        <b>Gender</b><br>

                                        <?= $dataq['Gender']; ?>

                                    </td>

                                    <!-- <td>

                                        <b>Category</b><br>

                                        <?= $dataq['Category']; ?>

                                    </td>

                                    <td>

                                        <b>Marital Status</b><br>

                                        <?= $dataq['MaritalStatus']; ?>

                                    </td> -->

                                </tr>

                                <!-- <tr>

                                    <td>

                                        <b>Whether</b><br>

                                        <?= $dataq['Whether']; ?>

                                    </td>

                                    <td>

                                        <b>Nationality</b><br>

                                        <?= $dataq['Nationality']; ?>

                                    </td>

                                    <td>

                                        <b>Applicants</b><br>

                                        <?= $dataq['Applicants']; ?>

                                    </td>

                                    <td>

                                        <b>Unemployed</b><br>

                                        <?= $dataq['Unemployed']; ?>

                                    </td>

                                </tr> -->

                                <!-- <tr>

                                    <td>

                                        <b>Work Experience</b><br>

                                        <?= $dataq['WorkExperience']; ?>

                                    </td>

                                    <td>

                                        <b>If Yes, Details</b><br>

                                        <?= $dataq['WorkIfYes']; ?>

                                    </td>

                                    <td>

                                        <b>Work Years</b><br>

                                        <?= $dataq['WorkYears']; ?>

                                    </td>

                                    <td>

                                        <b>Work Months</b><br>

                                        <?= $dataq['WorkMonths']; ?>

                                    </td>

                                </tr> -->

                                <tr>

                                    <td colspan="4">

                                        <center>

                                            <h5 style="margin: 0px; font-weight: bold;">

                                                Contact Details

                                            </h5>

                                        </center>

                                    </td>

                                </tr>

                                <tr>

                                    <td colspan="4">

                                        <b>Address</b><br>

                                        <?= $dataq['Address']; ?>

                                    </td>

                                </tr>

                                <!-- <tr>

                                    <td>

                                        <b>Pin</b><br>

                                        <?= $dataq['Pin']; ?>

                                    </td>

                                    <td>

                                        <b>Mobile</b><br>

                                        <?= $dataq['Mobile']; ?>

                                    </td>

                                    <td>

                                        <b>Phone</b><br>

                                        <?= $dataq['Phone']; ?>

                                    </td>

                                    <td>

                                        <b>Emails</b><br>

                                        <?= $dataq['Emails']; ?>

                                    </td>

                                </tr> -->

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>



            <!-- <div class="col-md-12">

                <div class="panel panel-default">

                    <div class="panel-title">

                        Educational Qualification

                    </div>

                    <div class="panel-body table-responsive">

                        <table class="table">

                            <tbody>

                                <tr>

                                    <td colspan="7">

                                        <center>

                                            <h5 style="margin: 0px; font-weight: bold;">

                                                Educational Qualification Details

                                            </h5>

                                        </center>

                                    </td>

                                </tr>

                                <tr>

                                    <td>

                                        <b>Examination <br>Passsed<br></b>

                                    </td>

                                    <td>

                                        <b>Board or<br>University<br></b>

                                    </td>

                                    <td>

                                        <b>Year of<br>Passing<br></b>

                                    </td>

                                    <td>

                                        <b>Reg. No<br>Roll No.<br></b>

                                    </td>

                                    <td>

                                        <b>Marks<br>Obtained<br></b>

                                    </td>

                                    <td>

                                        <b>% of<br>Marks<br></b>

                                    </td>

                                    <td>

                                        <b>Class<br>Division<br></b>

                                    </td>

                                </tr>

                                <?php

                                $result = mysqli_query($link, "select * from tbl_edudetail where stu_id='$id' ");

                                if (mysqli_num_rows($result) > 0) {

                                    while ($row = mysqli_fetch_array($result)) {

                                ?>

                                        <tr>

                                            <td><?php echo $row['ExamPass']; ?></td>

                                            <td><?php echo $row['BoarUni']; ?></td>

                                            <td><?php echo $row['YearPass']; ?></td>

                                            <td><?php echo $row['RegRoll']; ?></td>

                                            <td><?php echo $row['MarkObt']; ?></td>

                                            <td><?php echo $row['Marks']; ?></td>

                                            <td><?php echo $row['ClassDiv']; ?></td>

                                        </tr>

                                <?php

                                    }

                                } else {

                                }

                                ?>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div> -->





            <div class="col-md-12">

                <div class="panel panel-default">

                    <div class="panel-title">

                        Photos

                    </div>

                    <div class="panel-body table-responsive">

                        <table class="table">

                            <tbody>

                                <tr>

                                    <td colspan="7">

                                        <center>

                                            <h5 style="margin: 0px; font-weight: bold;">

                                                Educational Qualification Details

                                            </h5>

                                        </center>

                                    </td>

                                </tr>

                                <tr>

                                    <!-- <td>

                                        <b>Adhaar Card<br></b>

                                        <?php

                                        if ($dataq['AdhaarCard'] != "") {

                                        ?>

                                            <img src="<?= $dataq['AdhaarCard']; ?>" class="allimg">

                                        <?php

                                        } else {

                                        ?>

                                            <img src="0.png" class="allimg">

                                        <?php

                                        }

                                        ?>

                                    </td> -->

                                    <!-- <td>

                                        <b>Thenth DMC<br></b>

                                        <?php

                                        if ($dataq['ThenthDMC'] != "") {

                                        ?>

                                            <img src="<?= $dataq['ThenthDMC']; ?>" class="allimg">

                                        <?php

                                        } else {

                                        ?>

                                            <img src="0.png" class="allimg">

                                        <?php

                                        }

                                        ?>

                                    </td> -->

                                    <!-- <td>

                                        <b>Birth Proof<br></b>

                                        <?php

                                        if ($dataq['BirthProof'] != "") {

                                        ?>

                                            <img src="<?= $dataq['BirthProof']; ?>" class="allimg">

                                        <?php

                                        } else {

                                        ?>

                                            <img src="0.png" class="allimg">

                                        <?php

                                        }

                                        ?>

                                    </td> -->

                                    <!-- <td>

                                        <b>Signature<br></b>

                                        <?php

                                        if ($dataq['Signature'] != "") {

                                        ?>

                                            <img src="<?= $dataq['Signature']; ?>" class="allimg">

                                        <?php

                                        } else {

                                        ?>

                                            <img src="0.png" class="allimg">

                                        <?php

                                        }

                                        ?>

                                    </td> -->

                                    <td>

                                        <b>Passport Size<br></b>

                                        <?php

                                        if ($dataq['PassportSize'] != "") {

                                        ?>

                                            <img src="<?= $dataq['PassportSize']; ?>" class="allimg">

                                        <?php

                                        } else {

                                        ?>

                                            <img src="0.png" class="allimg">

                                        <?php

                                        }

                                        ?>

                                    </td>

                                </tr>

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