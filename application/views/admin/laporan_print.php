<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style type="text/css">
        .table-data {
            width: 100%;
            border-collapse: collapse;
        }

        .table-data tr th,
        .table-data tr td {
            border: 1px solid black;
            font-size: 10pt;
        }
    </style>
    <h3>Laporan Pemesanan Hotel Kencana</h3>
    <table>
        <tr>
            <td>Dari tgl</td>
            <td>:</td>
            <td><?php echo date('d/m/Y', strtotime($_GET['dari'])); ?></td>
        </tr>
        <tr>
            <td>Sampai tgl</td>
            <td>:</td>
            <td><?php echo date('d/m/Y', strtotime($_GET['sampai'])); ?></td>
        </tr>
    </table>
    <br />

    <table class="table-data">
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Customer</th>
                <th>Kamar</th>
                <th>Tanggal Checkin</th>
                <th>Tanggal Checkout</th>
                <th>Harga Perhari</th>
                <th>Hari</th>
                <th>Total Harga</th>
                <th>Pembayaran</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($laporan as $l) {
            ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo date('d/m/Y', strtotime($l->pemesanan_tgl)); ?></td>
                    <td><?php echo $l->customer_nama ?></td>
                    <td><?php echo $l->kamar_tipe ?></td>
                    <td><?php echo date('d/m/Y', strtotime($l->pemesanan_checkin)); ?></td>
                    <td><?php echo date('d/m/Y', strtotime($l->pemesanan_checkout)); ?></td>
                    <td><?php echo "Rp. " . number_format($l->pemesanan_harga) . " ,-"; ?></td>
                    <td><?php echo $l->hari . " Hari" ?></td>
                    <td><?php echo "Rp. " . number_format($l->pemesanan_totalharga) . " ,-"; ?></td>
                    <td><?php echo "Rp. " . number_format($l->pembayaran) . " ,-"; ?></td>
                    <td>
                        <?php
                        if ($l->pemesanan_status == "1") {
                            echo "selesai";
                        } else {
                            echo "-";
                        } ?>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <script type="text/javascript">
        window.print();
    </script>
</body>

</html>