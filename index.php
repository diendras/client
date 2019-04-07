<?php include 'vendor/autoload.php';


use GuzzleHttp\Client;
use function GuzzleHttp\json_decode;

$client = new Client();

$dt = $client->request('GET', 'http://pkl.notaxcloth.com/dkwebhost/api/mekanik', []);
$result = json_decode($dt->getBody()->getContents(), true);



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


    <!-- Modernizr (browser feature detection library) & Respond.js (Enable responsive CSS code on browsers that don't support it, eg IE8) -->
    <script src="assets/js/vendor/modernizr-2.7.1-respond-1.4.2.min.js"></script>

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
                                <a href="index.php">
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


                                <div class="row pul">
                                    <div class="col-md-12">
                                        <div class="mb-md pull-right">
                                            <a href="tambah.php" class="modal-basic btn btn-success"><i class="fa fa-plus"> Tambah data</i></a>

                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">

                                    <table class="table table-bordered table-striped mb-none dataTable no-footer" id="datatable-editable" role="grid" aria-describedby="datatable-editable_info">
                                        <script type="text/javascript">
                                            $(document).ready(function() {
                                                $('#datatable-editable').DataTable();
                                            });
                                        </script>
                                        <thead class="center">
                                            <tr role="row">
                                                <th class="sorting_asc center" tabindex="0" aria-controls="datatable-editable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column ascending" style="width: 201px;">ID</th>
                                                <th class="sorting center" tabindex="0" aria-controls="datatable-editable" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 249px;">Nama Bengkel</th>
                                                <th class="sorting center" tabindex="0" aria-controls="datatable-editable" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 249px;">Foto</th>
                                                <th class="sorting_disabled center" rowspan="1" colspan="1" aria-label="Actions" style="width: 97px;">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody class="center">
                                            <?php foreach ($result['data'] as $data) {
                                                ?>
                                                <tr>
                                                    <td><?= $data['id_mekanik']; ?></td>
                                                    <td><?= $data['nama_mekanik']; ?></td>
                                                    <td><?= $data['alamat']; ?></td>

                                                    <td>

                                                        <div class="btn-group action-buttons">
                                                            <a href="edit.php?id=<?= $data['id_mekanik']; ?>" data-toggle="modal" title="Edit" class="btn btn-xs btn-warning"><i class="fa fa-edit"></i></a>
                                                            <a href="hapus.php?id=<?= $data['id_mekanik']; ?>" onClick="return confirm('Anda yakin ingin menghapus data ini?')" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php
                                        }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </section>
                    </div>

                </div>





                <!-- end: page -->
            </section>
        </div>


    </section>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>
        !window.jQuery && document.write(decodeURI('%3Cscript src="assets/js/vendor/jquery-1.11.1.min.js"%3E%3C/script%3E'));
    </script>

    <!-- Bootstrap.js, Jquery plugins and Custom JS code -->
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/app.js"></script>

    <!-- Google Maps API + Gmaps Plugin, must be loaded in the page you would like to use maps (Remove 'http:' if you have SSL) -->
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="assets/js/helpers/gmaps.min.js"></script>

    <!-- Load and execute javascript code used only in this page -->
    <script src="assets/js/pages/index.js"></script>
    <script>
        $(function() {
            Index.init();
        });
    </script>
</body>

</html>