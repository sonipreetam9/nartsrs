<?php
include 'header.php';
$today = date("Y-m-d");
$student_id = isset($_GET["stuid"]) ? $_GET["stuid"] : '';
?>
<style>
    .my_ttable {
        box-shadow: 0 0 13px 0 rgb(0 0 0 / 10%);
        -webkit-box-shadow: 0 0 13px 0 rgb(0 0 0 / 10%);
    }

    .my_ttable td {
        padding: 5px 20px !important;
        text-align: left;
        font-size: 12px;
        font-weight: 900;
    }
</style>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />">
<div class="content">
    <div class="page-header">
        <ol class="breadcrumb">
            <li><a href="index.php">Dashboard</a></li>
            <li class="active">Add Results</li>
        </ol>
    </div>
    <div class="container-padding container-widget">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-title">
                        Add Results
                    </div>
                    <div class="panel-body">
                        <?php
                        if (isset($_POST["btnsave"])) {
                            $student_id = mysqli_real_escape_string($link, $_REQUEST['student_id']);
                            $remark = mysqli_real_escape_string($link, $_REQUEST['remark']);
                            $total_marks = mysqli_real_escape_string($link, $_REQUEST['total_marks']);
                            $get_marks = mysqli_real_escape_string($link, $_REQUEST['get_marks']);
                            $result_year = mysqli_real_escape_string($link, $_REQUEST['result_year']);

                            $queryy = "insert into tbl_result (student_id,total_marks,get_marks,result_year,remark,rdate) values('$student_id','$total_marks','$get_marks','$result_year','$remark','$today')";
                            //echo $queryy;
                            $result = mysqli_query($link, $queryy);
                            $last_id = mysqli_insert_id($link);

                            $count = count($_POST['subject']);
                            for ($i = 0; $i < $count; $i++) {
                                $queryss = "INSERT INTO `tbl_result_sub_marks` (`result_id`,`stu_id`,`subject`,`obt_mark`,`practi_mark`,`max_mark`,`exam_date`) 
                                VALUES('$last_id','$student_id','{$_POST['subject'][$i]}','{$_POST['obt_mark'][$i]}','{$_POST['practi_mark'][$i]}','{$_POST['max_mark'][$i]}','{$_POST['exam_date'][$i]}')";
                                $resultt = mysqli_query($link, $queryss);
                            }
                            if (mysqli_affected_rows($link)) {
                                ?>
                                <div class="alert alert-success bg-success text-white" role="alert">Result Added successfully.
                                </div>
                                <?php
                            } else {
                                ?>
                                <div class="alert alert-danger bg-danger text-white mb-0" role="alert">Not successfully try
                                    submitting again.</div>
                                <?php
                            }
                        }
                        ?>
                        <form method="post" enctype="multipart/form-data">

                            <div class="col-md-8 col-xs-12">
                                <div class="form-group">
                                    <label for="input1" class="form-label">Select Student</label>
                            
                                    <select class="form-control js-example-basic-single" name="student_id" required=""
                                        onchange="getprodu(this.value);">
                                        <option value="">Select Student</option>
                            
                                        <?php
                                        $category = mysqli_query($link, "
                                            SELECT a.*, a.id as sid, b.*,
                                                (SELECT COUNT(*) FROM tbl_result r WHERE r.student_id = a.id) AS admit_count,
                                                (SELECT COUNT(*) FROM tbl_result r WHERE r.student_id = a.id 
                                                    AND r.result_year IN ('1 Month','3 Month','6 Month')) AS month_done
                                            FROM tbl_student AS a
                                            JOIN tbl_instute AS b ON a.instu_id = b.id
                                            WHERE a.Verify = '1'
                                            HAVING 
                                                (month_done = 0 AND admit_count < a.WorkYears)
                                        ");
                            
                                        while ($cat = mysqli_fetch_array($category)) {
                                            $sdob = date('d-M-Y', strtotime($cat['DOB']));
                                        ?>
                                            <option value="<?= $cat['sid']; ?>" <?= ($student_id == $cat['sid']) ? 'selected' : ''; ?>>
                                                <?= $cat['Name'] . " - DOB: " . $sdob; ?>
                                                (<?= "Centre: " . $cat['CentreName']; ?>)
                                            </option>
                                        <?php } ?>
                                    </select>
                            
                                    <script>
                                        function getprodu(stuid) {
                                            stuid = parseInt(stuid);
                                            if (stuid) {
                                                window.location.href = 'student_result.php?stuid=' + stuid;
                                            }
                                        }
                                    </script>
                            
                                </div>
                            </div>
                            
                            
                            <div class="col-md-4 col-xs-12">
                                <div class="form-group">
                                    <label for="input1" class="form-label">Select Duration</label>
                            
                                    <select class="form-control js-example-basic-single" name="result_year" required="">
                                        <option value="">Select Duration</option>
                            
                                        <?php
                                        if (!empty($student_id)) {
                            
                                            $stuData = mysqli_query($link, "
                                                SELECT WorkYears,
                                                (SELECT COUNT(*) FROM tbl_result r WHERE r.student_id = s.id) AS admit_count,
                                                (SELECT COUNT(*) FROM tbl_result r WHERE r.student_id = s.id 
                                                    AND r.result_year IN ('1 Month','3 Month','6 Month')) AS month_done
                                                FROM tbl_student s
                                                WHERE s.id='$student_id'
                                            ");
                            
                                            if ($stu = mysqli_fetch_assoc($stuData)) {
                            
                                                $completed = (int)$stu['admit_count'];
                                                $years = (int)$stu['WorkYears'];
                            
                                                if ($stu['month_done'] == 0 && $completed == 0) {
                                                    echo "<option value='1 Month'>1 Month</option>";
                                                    echo "<option value='3 Month'>3 Month</option>";
                                                    echo "<option value='6 Month'>6 Month</option>";
                                                }
                            
                                                for ($i = 1; $i <= $years; $i++) {
                            
                                                    if ($i <= $completed) continue;
                            
                                                    if ($i == 1) $year = "1st Year";
                                                    elseif ($i == 2) $year = "2nd Year";
                                                    elseif ($i == 3) $year = "3rd Year";
                                                    else $year = $i . "th Year";
                            
                                                    echo "<option value='{$year}'>{$year}</option>";
                                                }
                            
                                            }
                                        }
                                        ?>
                            
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-12 col-xs-12">

                                <?php

                                $selstu = mysqli_query($link, "SELECT * FROM tbl_student WHERE id='$student_id'");

                                $s_data = mysqli_fetch_array($selstu);

                                if ($student_id != "") {

                                    ?>

                                    <h5 class="text-center" style="margin-top: 0; margin-bottom: 10px; font-weight: bold;">
                                        Student Details
                                    </h5>

                                    <div class="row">

                                        <div class="col-md-12">

                                            <table class="table display table-bordered my_ttable">

                                                <tr>

                                                    <td>REGISTRATION No.</td>

                                                    <td><?= $s_data['REGISTRATION']; ?></td>

                                                </tr>

                                                <tr>

                                                    <td>Join Date</td>

                                                    <td><?= $s_data['jdate']; ?></td>

                                                </tr>

                                                <tr>

                                                    <td>Name</td>

                                                    <td><?= $s_data['Name']; ?></td>

                                                </tr>

                                                <tr>

                                                    <td>FA/HU Name</td>

                                                    <td><?= $s_data['FaHuName']; ?></td>

                                                </tr>

                                                <tr>

                                                    <td>DOB</td>

                                                    <td><?= $s_data['DOB']; ?></td>

                                                </tr>
                                                <tr>
                                                    <td>Department</td>
                                                    <td><?= $s_data['app_for_admin_to']; ?></td>
                                                </tr>
                                            </table>
                                        </div>

                                        <!-- <div class="col-md-2">

                                            <img src="<?= $s_data['PassportSize']; ?>" width="100%">

                                        </div> -->

                                    </div>
                                    <?php
                                } else {
                                    echo "Please Select Students";
                                }
                                ?>
                            </div>

                            <div>
                                <table class="table table-striped" id="tbl_posts">
                                    <thead>
                                        <tr class="center-row-th">
                                            <th>Enter Course</th>
                                            <th>Obtain Mark</th>

                                            <th>Practical Mark</th>
                                            <th>Max Mark</th>
                                            <th>Exam Date</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody id="tbl_posts_body">
                                        <tr id="rec-1" class="row-td">
                                            <!-- <td>
                                                <select name="subject[]" class="form-control sort-form" required="">
                                                    <option value="">Select Subject</option>
                                                    <?php
                                                    $category = mysqli_query($link, "select * from tbl_subject");
                                                    while ($cat = mysqli_fetch_array($category)) {
                                                        ?>
                                                        <option value="<?= $cat['sub_name']; ?>"><?= $cat['sub_name']; ?></option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                            </td> -->
                                            <td>
                                                <input class="form-control sort-form" placeholder="Course" type="text"
                                                    name="subject[]">
                                            </td>
                                            <td>
                                                <input class="form-control sort-form" placeholder="obt_mark"
                                                    type="number" name="obt_mark[]" maxlength="3">
                                            </td>
                                            <td>
                                                <input class="form-control sort-form" placeholder="practical_mark"
                                                    type="number" name="practi_mark[]" maxlength="3"
                                                    value="00">
                                            </td>
                                            <td>
                                                <input class="form-control sort-form" placeholder="max_mark"
                                                    type="number" name="max_mark[]" maxlength="3"
                                                    value="100">
                                            </td>
                                            <td>
                                                <input class="form-control sort-form" placeholder="Exam Date"
                                                    type="date" name="exam_date[]" data-date=""
                                                    data-date-format="DD MM YYYY">
                                            </td>
                                            <td>
                                                <a class="btn btn-danger btn-xs delete-record btn-radius" data-id="0">
                                                    X
                                                </a>
                                            </td>
                                        </tr>
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
                                            <input type="tel" class="form-control" name="total_marks" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xs-12">
                                        <div class="form-group">
                                            <label for="input1" class="form-label">Obtain Marks</label>
                                            <input type="tel" class="form-control" name="get_marks" required="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-xs-12">
                                <div class="form-group">
                                    <label for="input1" class="form-label">Remarks</label>
                                    <textarea class="form-control" name="remark" rows="5"></textarea>
                                </div>
                            </div>
                            <input type="submit" class="btn btn-default btn-block" name="btnsave" value="Submit Result">
                        </form>
                    </div>
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
                        <option value="<?= $cat['sub_name']; ?>"><?= $cat['sub_name']; ?></option>
                    <?php
                    }
                    ?>
                </select>
            </td> -->
            <td>
                <input class="form-control sort-form" placeholder="Enter Subject" type="text" name="subject[]">
            </td>
            <td>
                <input class="form-control sort-form" placeholder="obt_mark" type="number" name="obt_mark[]"
                    maxlength="3">
            </td>
            <td>
                <input class="form-control sort-form" placeholder="practical_mark" type="number" name="practi_mark[]"
                    maxlength="3" value="00">
            </td>
            <td>
                <input class="form-control sort-form" placeholder="max_mark" type="number" name="max_mark[]"
                    maxlength="3" value="100">
            </td>
            <td>
                <input class="form-control sort-form" placeholder="Exam Date" type="date" name="exam_date[]" required=""
                    data-date="" data-date-format="DD MM YYYY">
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

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

<script>
    $(document).ready(function () {

        $('.js-example-basic-single').select2();

    });
</script>



<script src="js/datatables/datatables.min.js"></script>

<script>
    $(document).ready(function () {

        $('#example0').DataTable();

    });
</script>