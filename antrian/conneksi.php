<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "antrian2";
$conn = mysqli_connect($host,$user,$password,$db);
if(!$conn){
    echo "gk  konek";
}
?>

<!-- dashboard admin -->
<?php
$get1 = mysqli_query($conn,"SELECT * from loketa where mejaa='pengaduan'");
$count1 = mysqli_num_rows($get1);
?>
<?php
$get2 = mysqli_query($conn,"SELECT * from loketb where mejab='perbaikan'");
$count2 = mysqli_num_rows($get2);
?>
<?php
$get3 = mysqli_query($conn,"SELECT * from loketc where mejac='meet'");
$count3 = mysqli_num_rows($get3);
?>
<?php
$get4 = mysqli_query($conn,"SELECT * from loketd where mejad='tamu'");
$count4 = mysqli_num_rows($get4);
?>
<?php
$get5 = mysqli_query($conn,"SELECT * from lokete where mejae='pengambilan'");
$count5 = mysqli_num_rows($get5);
?>