<?php

$koneksi = mysqli_connect("localhost", "root", "", "iot");
$sql = mysqli_query($koneksi, "SELECT * FROM tb_sensor");
$nilai = $_GET['sensor'];

mysqli_query($koneksi, "UPDATE tb_sensor SET sensor = '$nilai'");

?>