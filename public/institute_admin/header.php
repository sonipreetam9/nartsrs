<?php
@ob_start();
@session_start();
include 'config.php';

if (!isset($_SESSION["superidinst"])) {
  header("location:index.php");
  exit;
} else {
  $userid = $_SESSION["superidinst"];
  $fatch = mysqli_query($link, "select * from tbl_instute where id='$userid'");
  $data = mysqli_fetch_array($fatch);
  $name = $data['CentreName'];
  $CentreState=$data['CentreState'];
}
?>
<!DOCTYPE html>
<html lang="hi">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <title>NART Institute Admin</title>

  <!-- ========== Css Files ========== -->
  <link href="css/root.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>
    .card-counter {
      box-shadow: 2px 2px 10px #DADADA;
      margin: 5px;
      padding: 20px 10px;
      background-color: #fff;
      height: 100px;
      border-radius: 5px;
      transition: .3s linear all;
      margin-bottom: 30px;
    }

    .card-counter:hover {
      box-shadow: 4px 4px 20px #DADADA;
      transition: .3s linear all;
    }

    .card-counter.primary {
      background-color: #007bff;
      color: #FFF;
    }

    .card-counter.danger {
      background-color: #ef5350;
      color: #FFF;
    }

    .card-counter.success {
      background-color: #66bb6a;
      color: #FFF;
    }

    .card-counter.info {
      background-color: #26c6da;
      color: #FFF;
    }

    .card-counter i {
      font-size: 5em;
      opacity: 0.2;
    }

    .card-counter .count-numbers {
      position: absolute;
      right: 35px;
      top: 20px;
      font-size: 32px;
      display: block;
    }

    .card-counter .count-name {
      position: absolute;
      right: 35px;
      top: 65px;
      font-style: italic;
      text-transform: capitalize;
      opacity: 0.5;
      display: block;
      font-size: 18px;
    }

    .package_image {
      width: 50px;
      height: 50px;
      margin-right: 10px;

    }

    .doc_pre_img {
      width: 150px;
      height: 150px;
      border: 1px solid #ccc;
    }

    @media screen and (max-width: 600px) {
      .content {
        padding-left: 0px;
        padding-right: 0px;
      }

      .content .row {
        margin: 0px;
      }

      .content .row .col-md-12 {
        padding-left: 0px;
        padding-right: 0px;
      }

      .page-header {
        display: none;
      }

    }
  </style>


</head>

<body>
  <!-- <div class="loading"><img src="img/loading.gif" alt="loading-img"></div> -->
  <?php
  include 'header_top.php';
  ?>
  <?php
  include 'pageside.php';
  ?>