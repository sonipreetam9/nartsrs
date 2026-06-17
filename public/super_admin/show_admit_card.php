<?php
@ob_start();
@session_start();
include 'config.php';
$id = $_GET['id'];
$sel = mysqli_query($link, "SELECT * FROM tbl_result WHERE id='$id'");
$dataq = mysqli_fetch_array($sel);

$ssttuu_id = $dataq['student_id'];
$stusel = mysqli_query($link, "SELECT * FROM tbl_student WHERE id='$ssttuu_id'");
$row = mysqli_fetch_array($stusel);
$row['REGISTRATION'] . "<br>";
$row['Name'] . "<br>";
$row['FaHuName'] . "<br>";
$row['FaHuName'] . "<br>";
$row['DOB'] . "<br>";
$row['Category'];

?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
<style>
    body {
        margin: 0px !important;
    }

    .allimg {
        width: 150px !important;
    }

    #printableArea {
        width: 735px !important;
        height: 460px !important;
        background-image: url("admit-card.jpg");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        padding: 15px;
    }

    .mytable td {
        padding: 1px 18px 0.5px 9px !important;
        font-size: 11px;
        font-family: 'Poppins', sans-serif;
    }

    @media print {
        #printableArea {
            width: 775px !important;
            height: 500px !important;
            margin: 7mm;
        }
    }

    .sign_div {
        position: relative;
    }

    .stamp {
        position: absolute;
        bottom: 30px;
        right: 60px;
        width: 110px;
        z-index: 999;
    }

    .foto_style {
        border-radius: 5px;
        border: 3px solid #2957a4;
        margin-right: 36px;
        margin-left: 35px;
        margin-bottom: 180px;
    }
</style>

<table class="mytable" id="printableArea">
    <tbody>
        <tr>
            <td colspan="5" style="height: 90px;">

            </td>
        </tr>
        <tr>

            <td style="width: 120px;">

                <b style="margin-left: 35px;">Roll No.</b>
                <b><?= $row['RollNo']; ?></b><br>

                <?php
                if ($row['PassportSize'] != "") {
                    ?>
                    <img src="<?= $row['PassportSize']; ?>" width="80px" class="foto_style">
                    <?php
                } else {
                    ?>
                    <img src="https://hios.in/assets/img/foot_logo.png" width="70px">
                    <?php
                }
                ?>
            </td>

            <td colspan="2">
                <table class="text-center" style="margin-left: 120px; margin-top: -10px;">
                    <tr>
                        <td>
                            <b style="font-size: 12px;">Admit Card: </b>
                        </td>

                        <td>
                            
                            <?= $dataq['result_year']; ?>
                        </td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td>
                            <b>Name: </b>
                        </td>
                        <td>
                            <?= strtoupper($row['Name']); ?>
                        </td>
                        <td style="margin-left: 10px;">
                            <b>Father's Name: </b>
                        </td>
                        <td>
                            <?= strtoupper($row['FaHuName']); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <b>Mother's Name: </b>
                        </td>
                        <td>
                            <?= strtoupper($row['MotherName']); ?>
                        </td>
                        <td>
                            <b>Reg. No.: </b>
                        </td>
                        <td>
                            <?= strtoupper($row['REGISTRATION']); ?>
                        </td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td>
                            <b>Centre Name: </b>
                        </td>
                        <td>
                            NATIONAL ACADEMY OF RESEARCH AND TRAINING
                        </td>
                    </tr>

                </table>
                <table style="width:100%;">
                    <tr>
                        <td><b>SUBJECT</b></td>
                        <td><b>EXAM DATE</b></td>
                    </tr>
                    <?php
                    $result_all_marks = mysqli_query($link, "SELECT * FROM tbl_result_sub_marks WHERE result_id='$id' AND stu_id='$ssttuu_id'");
                    while ($rowww = mysqli_fetch_array($result_all_marks)) {
                        ?>
                        <tr>
                            <td><?= $rowww['subject']; ?></td>
                            <td>
                                <?php
                                $orgDate = $rowww['exam_date'];
                                $newDate = date("d/m/Y", strtotime($orgDate));
                                echo $newDate;
                                ?>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </table>

                <table>
            </td>
            <td colspan="2">

            </td>
        </tr>
        <td colspan="2">

        </td>
        </tr>
        <td colspan="2">

        </td>
        </tr>
        <td colspan="2">

        </td>
        </tr>
        </tr>
        <td colspan="2">

        </td>
        </tr>
        </tr>
        <td colspan="2">

        </td>
        </tr>
        </tr>
        <td colspan="2">

        </td>
        </tr>
        </tr>
        <td colspan="2">

        </td>
        </tr>
    </tbody>
</table>



<?php

include 'footer.php';

?>
<script>
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>