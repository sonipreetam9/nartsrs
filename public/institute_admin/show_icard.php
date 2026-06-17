<?php
@ob_start();
@session_start();
include 'config.php';
$id = $_GET['id'];
$lnnnk = "SELECT * FROM tbl_student WHERE id='$id'";
$sel = mysqli_query($link, $lnnnk);
$dataq = mysqli_fetch_array($sel);
?>

<style>
    body{
        margin: 0px !important;
    }
    .allimg {
        width: 150px !important;
    }

    #printableArea {
        width: 615px !important;
        height: 463px !important;
        background-image: url("nart-icard.jpg");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        padding: 20px;
        margin: 20px;
    }

    .mytable td {
        padding: 2px 3px !important;
        font-size: 12px;
        padding: 16px;
    }

    @media print {
        #printableArea {
            width: 640px !important;
            height: 463 !important;
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
        margin-left: 60px;
    }
</style>

<table class="mytable" id="printableArea">
    <tbody>
        <!-- <tr>
            <td colspan="3" style="height: 120px;">

            </td>
        </tr> -->
        <tr>
            <td>
                <?php
                if ($dataq['PassportSize'] != "") {
                ?>
                    <img src="<?= $dataq['PassportSize']; ?>" width="85px" class="foto_style">
                <?php
                } else {
                ?>
                    <img src="https://hios.in/assets/img/foot_logo.png" width="80px">
                <?php
                }
                ?>
                 <table style="margin-bottom: 35px;">
                    <tr>
                        <td>
                            <b>Serial No.: </b>123<?= $dataq['id']; ?>
                        </td>
                        <td style="float: right;">
                            <b>Session: </b> <?= $dataq['SessionYear']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <b>Name: </b>
                        </td>
                        <td>
                            <?= $dataq['Name']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <b>F/Name: </b>
                        </td>
                        <td>
                            <?= $dataq['FaHuName']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <b>M/Name: </b>
                        </td>
                        <td>
                            <?= $dataq['MotherName']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <b>DOB: </b><?= $dataq['DOB']; ?>
                        </td>
                        <td>
                            <b>Gender: </b> <?= $dataq['Gender']; ?>
                        </td>
                    </tr>
                    <!-- <tr>
                        <td>
                            <b>Class: </b>
                        </td>
                        <td>
                            <?= $dataq['app_for_admin_to']; ?>
                        </td>
                    </tr> -->
                    <tr>
                        <td>
                            <b>Roll No.: </b>
                        </td>
                        <td>
                            <?= $dataq['RollNo']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <b>Reg. No.: </b>
                        </td>
                        <td>
                            <?= $dataq['REGISTRATION']; ?>
                        </td>
                    </tr>
                </table>
            </td>
            <!-- <td colspan="2">
               
            </td> -->
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