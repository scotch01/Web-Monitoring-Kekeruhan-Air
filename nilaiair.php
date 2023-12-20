<?php

$koneksi = mysqli_connect("localhost", "root", "", "iot");
$sql = mysqli_query($koneksi, "SELECT * FROM tb_sensor");
$data = mysqli_fetch_array($sql);
$nilaisensor = $data['sensor'];

?>

<h3><?php echo $nilaisensor;?></h3>