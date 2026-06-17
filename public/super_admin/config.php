<?php
// $link = mysqli_connect("localhost","puallres_nart","a1t7vxklzu2v", "puallres_nart"); 
$link = mysqli_connect("localhost","root","", "nartsrs"); 
mysqli_set_charset($link,'utf8');
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>