<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard - website HOtel Kencana</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url() . 'assets/css/bootstrap.min.css' ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url() . 'assets/datatable/datatables.css' ?>">
    <script type="text/javascript" src="<?= base_url() . 'assets/js/jquery.min.js' ?>"></script>
    <script type="text/javascript" src="<?= base_url() . 'assets/js/bootstrap.min.js' ?>"></script>
    <script type="text/javascript" src="<?= base_url() . 'assets/datatable/jquery.dataTables.js' ?>"></script>
    <script type="text/javascript" src="<?= base_url() . 'assets/datatable/datatables.js' ?>"></script>
</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="abs-example-navbar-colapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url() . 'admin'; ?>">HOTEL KENCANA</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="<?php echo base_url() . 'admin'; ?>"><span class=" 
    glyphicon glyphicon-home"></span> Dashboard <span class="sr-only">(current)</ span></a></li>
                    <li><a href="<?php echo base_url() . 'admin/kamar'; ?>"><span class="
    glyphicon glyphicon-folder-open"></span> Data Kamar</a></li>
                    <li><a href="<?php echo base_url() . 'admin/customer'; ?>"><span class="
    glyphicon glyphicon-user"></span> Data Customer</a></li>
                    <li><a href="<?php echo base_url() . 'admin/pemesanan'; ?>"><span class=" 
    glyphicon glyphicon-sort"></span> Pemesanan Kamar</a></li>
                    <li><a href="<?php echo base_url() . 'admin/laporan'; ?>"><span class="glyphicon 
    glyphicon-list-alt"></span> Laporan</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?php echo base_url() . 'admin/logout'; ?>"><span class="glyphicon 
    glyphicon-log-out"></span> Logout</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo "Halo, <b>" . $this->session->userdata('nama'); ?></b> <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="<?php echo base_url() . 'admin/ganti_password' ?>"><i class="
        glyphicon glyphicon-lock"></i> Ganti Password</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div><!--/.navbar-collapse -->
        </div><!--/.container-fluid -->
    </nav>
    <div class="container">