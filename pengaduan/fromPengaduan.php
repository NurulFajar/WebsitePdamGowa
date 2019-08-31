<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Pengaduan</title>

    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-dark p-t-100 p-b-50">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="title">Pengaduan</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action = "dbadu.php" enctype = "multipart/from-data">
                        <div class="form-row">
                            <div class="name">No Pelanggan</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="No_pel">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Alamat</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="Alamat" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">No HandPhone</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="No_hp">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Keluhan</div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="keluhan" placeholder=""></textarea>
                                </div>
                            </div>
                        </div>
                   
                </div>
                <div class="card-footer">
                    <button class="btn btn--radius-2 btn--blue-2" type="submit" value = "kirim">Adukan</button>
                    <a href="../index.html"><button class="btn btn--radius-3 btn--blue-1" type="submit">Cancel</button></a>
                </div>
                </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>


    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
<?php
    date_default_timezone_set ('Asia/makassar');
    echo date ('D, d F Y'). " pukul " . date ('H:i')
?>