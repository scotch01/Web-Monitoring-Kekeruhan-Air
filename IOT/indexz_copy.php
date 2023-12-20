<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Monitoring Kekeruhan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/styles.css">

    <style>
        /* Tambahan CSS untuk Hero Section */
        
    </style>

    <script type="text/javascript" src="jquery/jquery.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            setInterval(function () {
                $('#nilai').load('nilaiair.php');
                $('#status').load('statusair.php');
            }, 1000);
        });
    </script>
</head>
<body>

    <!-- Hero Section with Background Image -->
    <div class="hero-section text-center">
        <div class="container">
            <h1 class="display-4">Sistem Monitoring Kekeruhan Air Kolam Ikan</h1>
            <p class="lead">Gunakan Turbidity Sensor untuk Mengukur dan Memantau Kualitas Air Kolam Ikan.</p>
        </div>
    </div>

    <!-- Header -->
    <!-- <header>Sistem Monitoring Kekeruhan Air Kolam Ikan Menggunakan Turbidity Sensorx</header> -->

    <!-- Cards Section -->
    <div class="container text-center">
        <div class="row align-items-start">
            <div class="col">
                <div class="card">
                    <div class="card-header" style="background-color: green; color: white">
                        <h3>Nilai Keruh Air</h3>
                    </div>
                    <div class="card-body" id="nilai">
                        <h1 class="card-title">NETRAL</h1>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header" style="background-color: blue; color: white">
                        <h3>Status Air</h3>
                    </div>
                    <div class="card-body" id="status">
                        <h1 class="card-title">NETRAL</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
