<?php
include 'header.php';

$id = $_GET['id'];
$lnnnk = "SELECT * FROM tbl_instute WHERE id='$id'";
// echo $lnnnk;
$sel = mysqli_query($link, $lnnnk);
$dataq = mysqli_fetch_array($sel);
?>
<style>
    td {
        padding: 10px !important;
    }
    .allimg{
        width: 150px !important;
    }
</style>
<div class="content">
    <div class="page-header">
        <ol class="breadcrumb">
            <li><a href="index.php">Dashboard</a></li>
            <li class="active">Institute detail</li>
        </ol>
    </div>
    <div class="container-padding container-widget">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-title">
                        Institute detail
                    </div>
                    <div class="panel-body table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td colspan="4">
                                        <center>
                                            <h5 style="margin: 0px; font-weight: bold;">
                                                Institute Head Details
                                            </h5>
                                        </center>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <b>Head Full Name</b><br>
                                        <?= $dataq['HeadFullName']; ?>
                                    </td>
                                    <td>
                                        <b>Head Father Name</b><br>
                                        <?= $dataq['HeadFatherName']; ?>
                                    </td>
                                    <td>
                                        <b>Head Mother Name</b><br>
                                        <?= $dataq['HeadMotherName']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <b>Head Phone</b><br>
                                        <?= $dataq['HeadPhone']; ?>
                                    </td>
                                    <td>
                                        <b>Head Email</b><br>
                                        <?= $dataq['HeadEmail']; ?>
                                    </td>
                                    <td>
                                        <b>Password</b><br>
                                        <?= $dataq['Password']; ?>
                                    </td>
                                    <td>
                                        <b>Head Adhaar</b><br>
                                        <?= $dataq['HeadAdhaar']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <b>Head State</b><br>
                                        <?= $dataq['HeadState']; ?>
                                    </td>
                                    <td>
                                        <b>Head City</b><br>
                                        <?= $dataq['HeadCity']; ?>
                                    </td>
                                    <td colspan="2">
                                        <b>Head Village</b><br>
                                        <?= $dataq['HeadVill']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="4">
                                        <b>Head Address</b><br>
                                        <?= $dataq['HeadAddress']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="4">
                                        <center>
                                            <h5 style="margin: 0px; font-weight: bold;">
                                                Center Detail
                                            </h5>
                                        </center>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="1">
                                        <b>Centre Name</b><br>
                                        <?= $dataq['CentreName']; ?>
                                    </td>
                                    <td colspan="3">
                                        <b>Centre Address</b><br>
                                        <?= $dataq['CentreAddress']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <b>Centre Landmark</b><br>
                                        <?= $dataq['CentreLandmark']; ?>
                                    </td>
                                    <td colspan="2">
                                        <b>Centre State</b><br>
                                        <?= $dataq['CentreState']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <b>Centre Landmark</b><br>
                                        <?= $dataq['CentreLandmark']; ?>
                                    </td>
                                    <td colspan="2">
                                        <b>Centre State</b><br>
                                        <?= $dataq['CentreState']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <b>Centre City</b><br>
                                        <?= $dataq['CentreCity']; ?>
                                    </td>
                                    <td>
                                        <b>Centre Email</b><br>
                                        <?= $dataq['CentreEmail']; ?>
                                    </td>
                                    <td>
                                        <b>Centre Phone</b><br>
                                        <?= $dataq['CentrePhone']; ?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
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
                                                Institute Images Details
                                            </h5>
                                        </center>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <b>Centre Head<br></b>
                                        <?php
                                        if($dataq['CentreHeadImage']!=""){
                                        ?>
                                        <img src="<?= $dataq['CentreHeadImage']; ?>">
                                        <?php
                                        }else{
                                        ?>
                                        <img src="0.png" class="allimg">
                                        <?php
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <b>Centre Inside<br></b>
                                        <?php
                                        if($dataq['CentreInside']!=""){
                                        ?>
                                        <img src="<?= $dataq['CentreInside']; ?>">
                                        <?php
                                        }else{
                                        ?>
                                        <img src="0.png" class="allimg">
                                        <?php
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <b>Centre Outside<br></b>
                                        <?php
                                        if($dataq['CentreOutside']!=""){
                                        ?>
                                        <img src="<?= $dataq['CentreOutside']; ?>">
                                        <?php
                                        }else{
                                        ?>
                                        <img src="0.png" class="allimg">
                                        <?php
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <b>Address proof<br></b>
                                        <?php
                                        if($dataq['addressproof']!=""){
                                        ?>
                                        <img src="<?= $dataq['addressproof']; ?>">
                                        <?php
                                        }else{
                                        ?>
                                        <img src="0.png" class="allimg">
                                        <?php
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <b>Signature<br></b>
                                        <?php
                                        if($dataq['Sign']!=""){
                                        ?>
                                        <img src="<?= $dataq['Sign']; ?>">
                                        <?php
                                        }else{
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