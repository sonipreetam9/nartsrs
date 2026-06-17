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
                <?php
                if (isset($_POST["btnsave"])) {

                    $app_for_admin_to = mysqli_real_escape_string($link, $_REQUEST['app_for_admin_to']);
                    $DepartmentName = mysqli_real_escape_string($link, $_REQUEST['DepartmentName']);
                    $TrainingCentre = mysqli_real_escape_string($link, $_REQUEST['TrainingCentre']);
                    $TrainingCentreCode = mysqli_real_escape_string($link, $_REQUEST['TrainingCentreCode']);
                    $SessionYear = mysqli_real_escape_string($link, $_REQUEST['SessionYear']);
                    $Name = mysqli_real_escape_string($link, $_REQUEST['Name']);
                    $FaHuName = mysqli_real_escape_string($link, $_REQUEST['FaHuName']);
                    $MotherName = mysqli_real_escape_string($link, $_REQUEST['MotherName']);
                    $DOB = mysqli_real_escape_string($link, $_REQUEST['DOB']);
                    $Gender = mysqli_real_escape_string($link, $_REQUEST['Gender']);
                    $WorkYears = mysqli_real_escape_string($link, $_REQUEST['WorkYears']);
                    // $Category = mysqli_real_escape_string($link, $_REQUEST['Category']);
                    // $MaritalStatus = mysqli_real_escape_string($link, $_REQUEST['MaritalStatus']);
                    // $Nationality = mysqli_real_escape_string($link, $_REQUEST['Nationality']);
                    $Address = mysqli_real_escape_string($link, $_REQUEST['Address']);
                    $Pin = mysqli_real_escape_string($link, $_REQUEST['Pin']);
                    // $Mobile = mysqli_real_escape_string($link, $_REQUEST['Mobile']);
                    // $Phone = mysqli_real_escape_string($link, $_REQUEST['Phone']);
                    // $Emails = mysqli_real_escape_string($link, $_REQUEST['Emails']);
                    $adr_no = mysqli_real_escape_string($link, $_REQUEST['adr_no']);

                    $result = mysqli_query($link, "update tbl_student set app_for_admin_to='$app_for_admin_to',DepartmentName='$DepartmentName',TrainingCentre='$TrainingCentre',
                    TrainingCentreCode='$TrainingCentreCode',SessionYear='$SessionYear',Name='$Name',FaHuName='$FaHuName',MotherName='$MotherName',DOB='$DOB',Gender='$Gender',WorkYears='$WorkYears',
                    Address='$Address',Pin='$Pin',adr_no='$adr_no' where id='$id' ");

                    if ($result) {
                ?>
                        <div class="alert alert-success bg-success text-white" role="alert">Student Updated successfully.</div>
                    <?php
                    } else {
                    ?>
                        <div class="alert alert-danger bg-danger text-white mb-0" role="alert">Not successfully try submitting again.</div>
                <?php
                    }
                }
                ?>

                <form method="post" enctype="multipart/form-data">
                    <div class="panel panel-default">
                        <div class="panel-title">
                            Course/Programme Details:
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group mb-30">
                                        <label for="">Select Application for Admission:</label>
                                        <select class="form-control" name="app_for_admin_to">
                                            <option value="">Select</option>
                                            <?php
                                            $category = mysqli_query($link, "select * from tbl_course where status='0'");
                                            while ($cat = mysqli_fetch_array($category)) {
                                            ?>
                                                <option value="<?= $cat['course_name']; ?>" <?php if ($cat['course_name'] == $dataq['app_for_admin_to']) echo "selected"   ?>><?= $cat['course_name']; ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-30">
                                        <label for="">Department Name:</label>
                                        <input class="form-control" type="text" name="DepartmentName" value="<?= $dataq['DepartmentName']; ?>">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-30">
                                        <label for="">Training Centre:</label>
                                        <input class="form-control" type="text" name="TrainingCentre" value="<?= $dataq['TrainingCentre']; ?>">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group mb-30">
                                        <label for="">Training Centre Code:</label>
                                        <input class="form-control" type="text" name="TrainingCentreCode" value="<?= $dataq['TrainingCentreCode']; ?>">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group mb-30">
                                        <label for="">Session/Year:</label>
                                        <input class="form-control" type="text" name="SessionYear" placeholder="Ex: 2018-2020" maxlength="9" minlength="9" value="<?= $dataq['SessionYear']; ?>">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-title">
                            Candidate Personal Details:
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="form-group mb-30">
                                        <label for="">Name(Mr./Ms.):</label>
                                        <input class="form-control" type="text" name="Name" value="<?= $dataq['Name']; ?>">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group mb-30">
                                        <label for="">Father/Husband Name:</label>
                                        <input type="text" class="form-control" name="FaHuName" value="<?= $dataq['FaHuName']; ?>">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group mb-30">
                                        <label for="">Mother Name:</label>
                                        <input type="text" class="form-control" name="MotherName" value="<?= $dataq['MotherName']; ?>">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group mb-30">
                                        <label for="">Date of Birth:</label>
                                        <input type="text" class="form-control" name="DOB" value="<?= $dataq['DOB']; ?>" placeholder="Ex: 10-02-2021">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group mb-30">
                                        <label for="">Gender:</label>
                                        <select class="form-control" name="Gender">
                                            <option value="">Select</option>
                                            <option value="Male" <?php if ($dataq['Gender'] == "Male") echo "selected"   ?>  >Male</option>
                                            <option value="Female" <?php if ($dataq['Gender'] == "Female") echo "selected"   ?>   >Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group mb-30">
										<label for="">Course Duration:</label>
										<select name="WorkYears" class="form-control" id="" required>
											<option value="1 Year" <?php if ($dataq['WorkYears'] == "1 Year") echo "selected"   ?>>1 Year</option>
											<option value="2 Year" <?php if ($dataq['WorkYears'] == "2 Year") echo "selected"   ?>>2 Year</option>
										</select>
									</div>
                                </div>
                                <!-- <div class="col-lg-3">
                                    <div class="form-group mb-30">
                                        <label for="">Category:</label>
                                        <select class="form-control" name="Category">
                                            <option value="">Select</option>
                                            <option value="SC" <?php if ($dataq['Category'] == "SC") echo "selected"   ?>   >SC</option>
                                            <option value="ST" <?php if ($dataq['Category'] == "ST") echo "selected"   ?>   >ST</option>
                                            <option value="OBC" <?php if ($dataq['Category'] == "OBC") echo "selected"   ?>   >OBC</option>
                                            <option value="GENERAL" <?php if ($dataq['Category'] == "GENERAL") echo "selected"   ?>   >GENERAL</option>
                                        </select>
                                    </div>
                                </div> -->
                                <div class="col-lg-3">
                                    <div class="form-group mb-30">
                                        <label for="">Aadhaar Number:</label>
                                        <input type="text" class="form-control" name="adr_no" maxlength="12" minlength="12" value="<?= $dataq['adr_no']; ?>">
                                    </div>
                                </div>
                                <!-- <div class="col-lg-3">
                                    <div class="form-group mb-30">
                                        <label for="">Marital Status:</label>
                                        <select class="form-control" name="MaritalStatus">
                                            <option value="">Select</option>
                                            <option value="Married" <?php if ($dataq['MaritalStatus'] == "Married") echo "selected"   ?>   >Married</option>
                                            <option value="Unmarried" <?php if ($dataq['MaritalStatus'] == "Unmarried") echo "selected"   ?>   >Unmarried</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="form-group mb-30">
                                        <label for="">Nationality:</label>
                                        <select class="form-control" name="Nationality">
                                            <option value="">Select</option>
                                            <option value="Indian" <?php if ($dataq['Nationality'] == "Indian") echo "selected"   ?>   >Indian</option>
                                            <option value="Non-Indian" <?php if ($dataq['Nationality'] == "Non-Indian") echo "selected"   ?>   >Non-Indian</option>
                                        </select>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-title">
                            Contact Details:
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group mb-30">
                                        <label for="">Address:</label>
                                        <input class="form-control" type="tel" name="Address" value="<?= $dataq['Address']; ?>">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group mb-30">
                                        <label for="">Pin:</label>
                                        <input type="tel" class="form-control" name="Pin" value="<?= $dataq['Pin']; ?>">
                                    </div>
                                </div>
                                <!-- <div class="col-lg-4">
                                    <div class="form-group mb-30">
                                        <label for="">Mobile:</label>
                                        <input type="tel" class="form-control" name="Mobile" value="<?= $dataq['Mobile']; ?>">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group mb-30">
                                        <label for="">Phone No.:</label>
                                        <input type="tel" class="form-control" name="Phone" value="<?= $dataq['Phone']; ?>">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group mb-30">
                                        <label for="">E-mails:</label>
                                        <input type="email" class="form-control" name="Emails" value="<?= $dataq['Emails']; ?>">
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <input type="submit" class="btn btn-default btn-block" name="btnsave" value="Update">
                        </div>
                    </div>

                </form>
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