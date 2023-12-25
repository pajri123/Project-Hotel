<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN HOTEL</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/bootstrap.css' ?>">
    <script type="text/javascript" src="<?php echo base_url() . 'assets/js/jquery.js' ?>"> </script>
    <script type="text/javascript" src="<?php echo base_url() . 'assets/js/bootstrap.js' ?>"> </script>

    <style>
        .center {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
    </style>
</head>

<body>
    <div class="center">
        <div class=" text-center">
            <center>
                <h2>WEBSITE HOTEL KENCANA</h2>
                <h3>LOGIN</h3>
            </center>

            <?php
            if (isset($_GET['pesan'])) {
                if ($_GET['pesan'] == "gagal") {
                    echo "<div class='alert alert-danger'>Login Gagal! Username dan Password salah.</div>";
                } else if ($_GET['pesan'] == "logout") {
                    echo "<div class='alert alert-danger'>Anda Telah Logout.</div>";
                } else if ($_GET['pesan'] == "belomlogin") {
                    echo "<div class='alert alert-success'>Silahkan Login dulu.</div>";
                }
            }
            ?>
            <br />
            <div class="panel panel-default">
                <div class="panel-body">
                    <br />
                    <form method="post" action="<?php echo base_url() . 'welcome/login' ?>">
                        <div class="form-group">
                            <input type="text" name="username" placeholder="username" class="form-control">
                            <?php echo form_error('username'); ?>
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="password" name="password" placeholder="password" class="form-control">
                            <?php echo form_error('password'); ?>
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="submit" value="login" class="btn btn-primary">
                        </div>
                    </form>
                    <br />
                    <br />
                </div>
                <br />
            </div>
        </div>
    </div>
</body>

</html>