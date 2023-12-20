<?php

$koneksi = mysqli_connect("localhost", "root", "", "iot");
$sql = mysqli_query($koneksi, "SELECT * FROM tb_sensor");
$data = mysqli_fetch_array($sql);
$nilaisensor = $data['sensor'];

    if($nilaisensor > 50)
        $stats = "Bersih";
    elseif($nilaisensor > 30)
        $stats = "Keruh";
    else
        $stats = "Kotor";
?>

<h3><?php echo $stats;?></h3>