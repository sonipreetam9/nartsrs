<?php
include 'header.php';
$addon_pass = "123@#*.";
?>
<style>
    .img_url {
        background: #ddd;
        width: 100px;
        height: 100px;
        margin-bottom: 10px;
        display: block;
    }
</style>
<div class="content">
    <div class="page-header">
        <ol class="breadcrumb">
            <li><a href="index.php">Dashboard</a></li>
            <li class="active">Change Password</li>
        </ol>
    </div>
    <div class="container-padding container-widget">

        <div class="row">
            <div class="col-md-12">
                <?php
                if (isset($_POST["btnsave"])) {
                    $Password = mysqli_real_escape_string($link, $_REQUEST['pass']);
                    $confirm_pass = mysqli_real_escape_string($link, $_REQUEST['confirm_pass']);
                    $added_pass = $addon_pass . $Password;
                    $enrypt = base64_encode(base64_encode($added_pass));
                    $dec = base64_decode(base64_decode($enrypt));
                    $wwwala = substr("$dec", 7);

                    $result = mysqli_query($link, "update tbl_instute set Password='$enrypt' where id=$userid ");

                    if ($result) {

                        ?>
                        <div class="alert alert-success bg-success text-white" role="alert">Password Changed successfully.</div>
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
                            Change Password
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group mb-30">
                                        <label for="">New Password</label>
                                        <input class="form-control" type="password" name="pass" minlength="8" placeholder="********" id="Password">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-30">
                                        <label for="">Confirm New Password</label>
                                        <input class="form-control" type="password" name="confirm_pass" minlength="8" placeholder="********" id="ConfirmPassword">
                                    </div>
                                </div>
                                <br>
                                <div style="margin-top: 7px; text-align: center; font-weight: bold;" id="CheckPasswordMatch"></div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <input type="submit" class="btn btn-default btn-block" name="btnsave" value="Change Password">
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<?php
include 'footer.php';
?>
<script>
$(document).ready(function () {
   $("#ConfirmPassword").on('keyup', function(){
    var password = $("#Password").val();
    var confirmPassword = $("#ConfirmPassword").val();
    if (password != confirmPassword)
        $("#CheckPasswordMatch").html("Password does not match !").css("color","red");
    else
        $("#CheckPasswordMatch").html("Password match !").css("color","green");
   });
});
</script>