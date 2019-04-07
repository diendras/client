<?php include 'vendor/autoload.php'; ?>



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


                                <form action=" prosestambah.php" method="post" name="submit" id="submit" class="form-horizontal form-bordered submit">
                                    <fieldset>
                                        <legend>Masukan Data Dengan Benar </legend>

                                        <div class="form-group control-group">

                                            <label class="col-md-4 control-label" for="form-field-1">ID mekanik</label>
                                            <div class="col-md-8 controls">
                                                <input type="text" id="idmekanik" name="idmekanik" class="form-control" placeholder="idmekanik" maxlength="10">
                                            </div>
                                        </div>
                                        <div class="form-group control-group">
                                            <label class="col-md-4 control-label" for="form-field-1">Nama</label>
                                            <div class="col-md-8 controls">
                                                <input type="text" id="nama" name="nama" class="form-control" placeholder="NAMA" maxlength="10">
                                            </div>
                                        </div>
                                        <div class="form-group control-group">
                                            <label class="col-md-4 control-label" for="form-field-1">alamat</label>
                                            <div class="col-md-8 controls">
                                                <input type="text" id="alamat" name="alamat" class="form-control" placeholder="alamat" maxlength="10">
                                            </div>
                                        </div>
                                        <div class="form-group control-group">
                                            <label class="col-md-4 control-label" for="form-field-1">Telpon</label>
                                            <div class="col-md-8 controls">
                                                <input type="text" id="telp" name="telp" class="form-control" placeholder="telepon" maxlength="10">
                                            </div>
                                        </div> 
                                        <div class="form-group control-group">
                                            <label class="col-md-4 control-label" for="form-field-1">Status</label>
                                            <div class="col-md-8 controls">
                                                <input type="text" id="status" name="status" class="form-control" placeholder="status" maxlength="10">
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


</body>

</html>