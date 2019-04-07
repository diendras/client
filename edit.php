<?php include 'vendor/autoload.php';

use GuzzleHttp\Client;
use function GuzzleHttp\json_decode;

$id = $_GET['id'];
$client = new Client();

$dt = $client->request('GET', 'http://pkl.notaxcloth.com/dkwebhost/api/mekanik', [
    'query' => ['id' => $id]
]);
$result = json_decode($dt->getBody()->getContents(), true);
foreach ($result['data'] as $data) {

    $id_m = $data['id_mekanik'];
    $nama = $data['nama_mekanik'];
    $alamat = $data['alamat'];
};

?>


<!doctype html>
<html class="fixed">

<head>

    <!-- Basic -->
    <meta charset="UTF-8">

    <title>Dashboard | Diendra Themes | Diendra-Admin</title>
    <meta name="keywords" content="HTML5 Admin Template" />
    <meta name="description" content="Diendra Admin - Responsive HTML5 Template">
    <meta name="author" content="Diendra.net">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- Web Fonts  -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="assets/css/dataTables.bootstrap.min.css">
    <!-- Vendor CSS -->
    <link rel="stylesheet" href=" assets/vendor/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href=" assets/vendor/font-awesome/css/font-awesome.css" />
    <link rel="stylesheet" href=" assets/vendor/magnific-popup/magnific-popup.css" />
    <link rel="stylesheet" href=" assets/vendor/bootstrap-datepicker/css/datepicker3.css" />


    <!-- Specific Page Vendor CSS -->
    <link rel="stylesheet" href=" assets/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css" />
    <link rel="stylesheet" href=" assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css" />
    <link rel="stylesheet" href=" assets/vendor/morris/morris.css" />

    <!--tambahan-->
    <link rel="stylesheet" href=" assets/vendor/pnotify/pnotify.custom.css" />
    <link rel="stylesheet" href=" assets/select2/select2.css" />
    <link rel="stylesheet" href=" assets/datatabel/assets/css/datatables.css" />
    <link rel="stylesheet" href=" assets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.css" />

    <link rel="stylesheet" href=" assets/css/dataTables.bootstrap.min.css" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href=" assets/stylesheets/theme.css" />

    <!-- Skin CSS -->
    <link rel="stylesheet" href=" assets/stylesheets/skins/default.css" />

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href=" assets/stylesheets/theme-custom.css">

    <!-- Head Libs -->
    <script src=" assets/vendor/modernizr/modernizr.js"></script>

    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }

        tr,
        th {
            text-align: center;
        }
    </style>
</head>

<body>

    <section class="body">

        <!-- start: header -->
        <header class="header">
            <div class="logo-container">
                <a href="#" class="logo">
                    <img src="assets/images/logo.png" height="35" alt="Diendra Admin" />
                </a>
                <div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
                    <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                </div>
            </div>

            <!-- start: search & user box -->
            <div class="header-right">




                <span class="separator"></span>

                <div id="userbox" class="userbox">

                    <figure class="profile-picture">
                        <img src="assets/images/2.jpg" alt="Joseph Doe" class="img-circle" data-lock-picture="assets/images/!logged-user.jpg" />
                    </figure>
                    <div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@Diendra.com">
                        <span class="name">Diendra</span>
                        <span class="role">administrator</span>
                    </div>




                </div>
            </div>
            <!-- end: search & user box -->
        </header>
        <!-- end: header -->

        <div class="inner-wrapper">
            <!-- start: sidebar -->
            <aside id="sidebar-left" class="sidebar-left">

                <div class="sidebar-header">
                    <div class="sidebar-title">
                        Navigation
                    </div>
                    <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
                        <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                    </div>
                </div>

                <div class="nano">
                    <div class="nano-content">
                        <nav id="menu" class="nav-main" role="navigation">
                            <ul class="nav nav-main">
                                <li class="nav-active">
                                    <a href="index.php">
                                        <i class="fa fa-home" aria-hidden="true"></i>
                                        <span>Dashboard</span>
                                    </a>
                                </li>

                            </ul>
                        </nav>



                    </div>

            </aside>
            <!-- end: sidebar -->

            <section role="main" class="content-body">
                <header class="page-header">
                    <h2>Dashboard</h2>

                    <div class="right-wrapper pull-right">
                        <ol class="breadcrumbs">
                            <li>
                                <a href="index.html">
                                    <i class="fa fa-home"></i>
                                </a>
                            </li>
                            <li><span>Dashboard</span></li>
                        </ol>

                        <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
                    </div>
                </header>
                <script type="text/javascript" src="assets/js/jquery.js' ?>"></script>
                <script type="text/javascript" src="assets/js/bootstrap.js' ?>"></script>
                <script type="text/javascript" src="assets/js/jquery.dataTables.js' ?>"></script>

                <div class="row">
                    <div class="col-md-12">
                        <section class="panel">
                            <header class="panel-heading">


                                <h2 class="panel-title">Tampilan Data</h2>
                            </header>

                            <div class="panel-body">



                                <form action="prosesedit.php" method="post" name="submit" id="submit" class="form-horizontal form-bordered submit">
                                    <fieldset>
                                        <legend>Masukan Data Dengan Benar </legend>

                                        <div class="form-group control-group">

                                            <label class="col-md-4 control-label" for="form-field-1">ID</label>
                                            <div class="col-md-8 controls">
                                                <input type="text" id="idmekanik" name="idmekanik" value="<?= $id_m; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group control-group">
                                            <label class="col-md-4 control-label" for="form-field-1">Nama</label>
                                            <div class="col-md-8 controls">
                                                <input type="text" id="nama" name="nama" value="<?= $nama; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group control-group">
                                            <label class="col-md-4 control-label" for="form-field-1">Nomor</label>
                                            <div class="col-md-8 controls">
                                                <input type="text" id="alamat" name="alamat" value="<?= $alamat; ?>"></td>
                                            </div>
                                        </div>
                                        <legend>Pastikan lagi Data yang di tambahkan sudah Benar </legend>

                                        <div class="form-group form-actions">
                                            <div class="col-xs-12 text-right">

                                                <button type="submit" id="submit" name="submit" class="btn btn-sm btn-primary"> Simpan</button>
                                                <a href="index.php"> <button mahasiswa" type="button" onClick="return confirm('Anda yakin ingin membatalkan perubahan data?')" data-toggle="tooltip" class="btn btn-sm btn-default">Close</button>
                                                </a>

                                            </div>
                                        </div>


                                    </fieldset>
                                </form>

                            </div>

                        </section>
                    </div>

                </div>




                <!-- end: page -->
            </section>
        </div>


    </section>

    <script type="text/javascript" src="assets/js/vendor/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="assets/js/dataTables.bootstrap.min.js"></script>
    <!-- Vendor -->
    <script src="assets/vendor/jquery/jquery.js"></script>
    <script src="assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.js"></script>
    <script src="assets/vendor/nanoscroller/nanoscroller.js"></script>
    <script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script src="assets/vendor/magnific-popup/magnific-popup.js"></script>
    <script src="assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>

    <!-- Specific Page Vendor -->
    <script src="assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
    <script src="assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js"></script>
    <script src="assets/vendor/jquery-appear/jquery.appear.js"></script>
    <script src="assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
    <script src="assets/vendor/jquery-easypiechart/jquery.easypiechart.js"></script>
    <script src="assets/vendor/flot/jquery.flot.js"></script>
    <script src="assets/vendor/flot-tooltip/jquery.flot.tooltip.js"></script>
    <script src="assets/vendor/flot/jquery.flot.pie.js"></script>
    <script src="assets/vendor/flot/jquery.flot.categories.js"></script>
    <script src="assets/vendor/flot/jquery.flot.resize.js"></script>
    <script src="assets/vendor/jquery-sparkline/jquery.sparkline.js"></script>
    <script src="assets/vendor/raphael/raphael.js"></script>
    <script src="assets/vendor/morris/morris.js"></script>
    <script src="assets/vendor/gauge/gauge.js"></script>
    <script src="assets/vendor/snap-svg/snap.svg.js"></script>
    <script src="assets/vendor/liquid-meter/liquid.meter.js"></script>
    <script src="assets/vendor/jqvmap/jquery.vmap.js"></script>
    <script src="assets/vendor/jqvmap/data/jquery.vmap.sampledata.js"></script>
    <script src="assets/vendor/jqvmap/maps/jquery.vmap.world.js"></script>
    <script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.africa.js"></script>
    <script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.asia.js"></script>
    <script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.australia.js"></script>
    <script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.europe.js"></script>
    <script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js"></script>
    <script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="assets/javascripts/theme.js"></script>

    <!-- Theme Custom -->
    <script src="assets/javascripts/theme.custom.js"></script>

    <!-- Theme Initialization Files -->
    <script src="assets/javascripts/theme.init.js"></script>


    <!-- Examples -->
    <script src="assets/javascripts/dashboard/examples.dashboard.js"></script>
</body>

</html>